@extends('layout')

@section('title', 'Tattoos - Tattoo Cultr')

@section('header')
    <link href="{{  asset('assets/css/dropzone.min.css') }}" rel="stylesheet">
    <link href="{{  asset('assets/plugins/slick/slick.css') }}" rel="stylesheet">
    <link href="{{  asset('assets/plugins/slick/slick-theme.css') }}" rel="stylesheet">

    <style>
        /* hides controls for dropzone.js */
        .single-dropzone .dz-image-preview, .single-dropzone .dz-file-preview {
            display: none;
        }

        .slick-prev:before, .slick-next:before{
            color:rgba(22,22,22,.6);
        }

        #upload-cover-btn{
            position: absolute;
            right: 10px;
            bottom: 10px;
            z-index: 999;

        }

        #map {
            height: 320px;
        }
        .controls {
            margin-top: 10px;
            border: 1px solid transparent;
            border-radius: 2px 0 0 2px;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            height: 42px;
            outline: none;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        }

        #pac-input {
            background-color: #fff;
            font-size: 15px;
            font-weight: 300;
            padding: 20px 10px;
            text-overflow: ellipsis;
            width:99%;
            margin-left: .5%;
        }

        #pac-input:focus {
            border-color: #4d90fe;
            width: 100%;
            overflow: visible;
            position: relative;
        }


        #type-selector {
            color: #fff;
            background-color: #4d90fe;
            padding: 5px 11px 0px 11px;
        }

        #type-selector label {
            font-size: 13px;
            font-weight: 300;
        }

        #artist-bio{
            width: 100%;
            min-height: 80px;
            color: #000;
            box-shadow: 0px 0px 2px rgba(111,111,111,.2);
            padding: 4px;
        }

        .top-shift{
            position: relative;
            top: -38px;
        }
    </style>
@endsection

@section('content')

    <div class="container-fluid main" id="page-top">
        <div class="row">
            <div class="no-cover">
            </div>
        </div>
    </div>

    <section>
        <div class="container">
            @if(Auth::check())
                <div class="row">
                    <div class="col-sm-3" style="height: 30px;">
                        <h4 class="section-head text-center">{!! $artist->firstname !!} <span class="text-danger">{!! $artist->lastname !!}</span></h4>
                    </div>
                </div>
            @else
                <h2 class="section-head text-center">{!! $artist->firstname !!} <span class="text-danger">{!! $artist->lastname !!}</span></h2>
            @endif
            <div class="section-content">
                <div class="row">
                    <div class="col-sm-3 text-center">
                        <img id="member-avatar" src="{!! $artist->user->avatar !!}" class="img-responsive" alt="{!! $artist->user->name !!}"><br>

                        @if($isArtistProfile)
                            <a href="#" class="btn btn-default btn-sm" id="upload-profile-btn">Change Profile</a>
                            <form action="{!! url('profile/changeImg') !!}" method="post" id="profilePicForm" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="file" name="avatar" id="avatar-btn" style="display: none;">
                            </form>
                        @endif
                    </div>
                    <div class="col-sm-6">
                        @if($isArtistProfile)
                            <div style="color:rgba(22,22,22,.3)" class="top-shift">
                                CLICK TO EDIT
                            </div>
                            <div  contenteditable="true" class="member-bio top-shift" id="member-bio">
                                {!! $artist->bio or "" !!}
                            </div>
                            <br>
                            <button id="save-bio-btn" class="btn btn-default btn-sm">Save</button>
                        @else
                            <div>
                                {!! $artist->bio !!}
                            </div>
                        @endif
                    </div>
                    <div class="col-sm-3 text-center">
                        @if($artist->latitude && $artist->longitude)
                            <div id="member-map"></div><br>
                            <a href="https://www.google.co.in/maps/place/@<?= $artist->latitude ?>,{!! $artist->longitude !!},18z" target="_blank" class="btn btn-default btn-sm">GET DIRECTIONS</a>
                        @else

                            <div class="search-box">
                                <input id="pac-input" class="controls" type="text" placeholder="Add your Location">
                            </div>
                            <div id="type-selector" class="controls" style="display: none">
                                <input type="radio" name="type" id="changetype-all" checked="checked">
                                <label for="changetype-all">All</label>
                            </div>
                            <div id="member-map"></div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="section-content secton-hr">
                <div class="row text-center">
                    @if(Auth::check() && !$isMemberProfile)
                        @if(!$isFollowing)
                            <a href="{!! url('follow/'. $member->user->id) !!}" class="btn btn-custom btn-default" id="follow-btn"> Follow </a>
                        @else
                            <a href="{!! url('unfollow/'. $member->user->id) !!}" class="btn btn-custom btn-default" id="follow-btn">Unfollow</a>
                        @endif
                    @endif
                    <button class="btn btn-custom btn-default"> Following </button>
                    @if(Auth::check())
                        <button class="btn btn-custom btn-default" id="upload-tattoo-btn"> Upload Tattoo </button>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <section class="artists">
        <div class="container">
            <br>
            <h2 class="section-head text-center">Tattoos by <span class="text-danger">{!! $member->firstname !!}</span></h2>

            <div class="section-content text-center">
                <div class="row">
                    @foreach($member->tattoos as $tattoo)
                        <div class="col-xs-6 col-sm-4 col-md-3">
                            <a href="{!! asset('uploads/images/original/' . $tattoo->url) !!}" data-lightbox="tattoos-me" data-title="{!! $tattoo->title !!}" class="thumbnail">
                                <img src="{!! asset('uploads/images/thumbnail/' . $tattoo->url) !!}" alt="{!! $tattoo->title !!}">
                            </a>
                        </div>
                    @endforeach
                    @if(!$member->tattoos->count())
                        <h3 class="text-left"> No Tattoo !!</h3>
                    @endif
                </div>
                <div class="row">
                <button class="btn btn-default btn-lg">VIEW MORE</button>
                </div>

            </div>
            <br><br><br><br>
        </div>
    </section>


    <div id="upload-tattoo-form" style="display: none">
        <form method="post" action="{!! url('tattoo/upload') !!}" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="id" value="{{ $member->id }}">
            <input type="hidden" name="type" value="member">

            <div class="omb_login">
                <h3 class="omb_authTitle">Upload Tattoo</h3>

                <div class="row omb_row-sm-offset-3">
                    <div class="col-xs-12 col-sm-6">
                            <div class="input-group">
                                <span class="input-group-addon"></span>
                                <input type="file" class="form-control" name="tattoo" placeholder="Select Tattoo">
                            </div>
                            <span class="help-block"></span>
                            <div class="input-group">
                                <span class="input-group-addon"></span>
                                <input type="text" class="form-control" name="title" placeholder="Title">
                            </div>
                            <span class="help-block"></span>
                            <div class="input-group">
                                <span class="input-group-addon"></span>
                                <textarea class="form-control" name="description" placeholder="Description"></textarea>
                            </div>
                            <span class="help-block"></span>

                            <button class="btn btn-lg btn-primary btn-block" type="submit">Upload</button>
                        <br><br><br>
                    </div>
                </div>

            </div>
        </form>
    </div>


@endsection

@section('footer')
    <script>
        if($(window).width() > 480) {
            $("#artist-map").height($("#artist-avatar").height());
        }
        $(window).resize(function(){
            if($(window).width() > 480) {
                $("#artist-map").height($("#artist-avatar").height());
            }
        });
    </script>

    //click image slider
    <script src="{{  asset('assets/plugins/slick/slick.min.js') }}"></script>
    <script>
        $(function() {
            $('.slider').slick({
                dots: false,
                infinite: false,
                speed: 300,
                arrows: true,
                slidesToShow: 5,
                slidesToScroll: 5,
                responsive: [
                    {
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 4,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3
                        }
                    },
                    {
                        breakpoint: 640,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 420,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });

        });
    </script>


    <script src="{{  asset('assets/js/dropzone.min.js') }}"></script>
    <script src="//cdn.ckeditor.com/4.5.3/standard/ckeditor.js"></script>

    <script>
        var token = "{{ Session::getToken() }}";


        $('#upload-profile-btn').bind('click', function(event) {
            $("#avatar-btn").trigger( "click" );
        });

        $("#avatar-btn").change(function (){
            console.log('file selected!!');
            $("#profilePicForm").submit();
        });
        $("#profilePicForm").on('submit',(function(e) {
            e.preventDefault();
            $.ajax({
                url: "{!! url('profile/changeImg') !!}", // Url to which the request is send
                type: "POST",             // Type of request to be send, called as method
                data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
                contentType: false,       // The content type used when sending data to the server.
                cache: false,             // To unable request pages to be cached
                processData:false,        // To send DOMDocument or non processed data file it is set to false
                success: function(data)   // A function to be called if request succeeds
                {
                    //$("#artist-avatar").attr("src", data);
                    location.reload();
                }
            });
        }));

        $('#upload-cover-btn').bind('click', function(event) {
            $("#cover-btn").trigger( "click" );
        });

        $("#cover-btn").change(function (){
            console.log('file selected!!');
            $("#coverPicForm").submit();
        });
        $("#coverPicForm").on('submit',(function(e) {
            e.preventDefault();
            $.ajax({
                url: "{!! url('artist/update/cover') !!}", // Url to which the request is send
                type: "POST",             // Type of request to be send, called as method
                data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
                contentType: false,       // The content type used when sending data to the server.
                cache: false,             // To unable request pages to be cached
                processData:false,        // To send DOMDocument or non processed data file it is set to false
                success: function(data)   // A function to be called if request succeeds
                {
                    //$("#artist-avatar").attr("src", data);
                    location.reload();
                }
            });
        }));

        $('#save-bio-btn').bind('click', function(event) {

            var bio = $("#artist-bio").html();
            //console.log(bio);
            $.ajax({
                url: "{!! url('artist/update/bio') !!}", // Url to which the request is send
                type: "POST",             // Type of request to be send, called as method
                data: {
                    _token: token,
                    bio:bio

                },
                success: function(data)   // A function to be called if request succeeds
                {
                    if(data.success){
                        alert("Successfully Updated");
                    }
                    else if(!data.success){
                        alert("Error!!");
                    }
                }
            });
        });

        $('#upload-tattoo-btn').bind('click', function(event) {
            event.preventDefault();
            $('#modal-content').html($("#upload-tattoo-form").html());
            $(".modal").show();
        });

        @if($isMemberProfile)
            CKEDITOR.inline( 'member-bio' );
        @endif

    </script>


@endsection