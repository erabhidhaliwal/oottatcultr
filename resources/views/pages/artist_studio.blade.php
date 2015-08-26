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
    </style>
@endsection

@section('content')

    <div class="container-fluid main" id="page-top">
        <div class="row">
            <div class="cover-title">
            </div>
            <div class="cover">
                <img src="{!! $artist->cover !!}" alt="Home">
            </div>
        </div>
    </div>
    <section>
        <div class="container">
            <h2 class="section-head text-center">{!! $artist->user->firstname !!} <span class="text-danger">{!! $artist->user->lastname !!}</span></h2>
            <div class="section-content">
                <div class="row">
                    <div class="col-sm-3 text-center">
                        <img id="artist-avatar" src="{!! $artist->user->avatar !!}" class="img-responsive" alt="{!! $artist->user->name !!}"><br>

                        @if($isArtistProfile)
                            <a href="#" class="btn btn-default btn-sm" id="upload-profile-btn">Change Profile</a>
                            <form action="{!! url('profile/changeImg') !!}" method="post" id="profilePicForm" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="file" name="avatar" id="avatar-btn" style="display: none;">
                            </form>
                        @endif
                    </div>
                    <div class="col-sm-6">
                        <p class="artist-bio">{!! $artist->bio !!}</p>
                    </div>
                    <div class="col-sm-3 text-center">
                        <div id="artist-map"></div><br>
                        <a href="https://www.google.co.in/maps/place/Funky+Monkey+Tattoo/@28.47897,77.080774,17z" target="_blank" class="btn btn-default btn-sm">GET DIRECTIONS</a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="section-content secton-hr">
                <div class="row text-center">
                    @if(Auth::check() && !$isArtistProfile)
                        @if(!$isFollowing)
                            <a href="{!! url('follow/'. $artist->id) !!}" class="btn btn-custom btn-default" id="follow-btn"> Follow </a>
                        @else
                            <a href="{!! url('unfollow/'. $artist->id) !!}" class="btn btn-custom btn-danger" id="follow-btn">Unfollow</a>
                        @endif
                    @endif
                    <a href="{!! url('artist/'. $artist->id . '/studio' ) !!}" class="btn btn-custom btn-default"> Studios </a>
                    <button class="btn btn-custom btn-default"> Followers </button>
                    <button class="btn btn-custom btn-default"> Following </button>
                    @if(!$isArtistProfile)
                        <button class="btn btn-custom btn-warning" id="book-appointment-btn"> Book an Appoinment </button>
                    @endif
                    @if(Auth::check())
                        <button class="btn btn-custom btn-primary" id="upload-tattoo-btn"> Upload Tattoo </button>
                    @endif
                </div>
            </div>
        </div>
    </section>

    @if($isArtistProfile)
        <section>
            <div class="container">
                <div class="section-content secton-hr text-center">
                    <div class="row">
                        <h2 class="section-head text-center">Pending <span class="text-danger">Studio's</span> Approvals</h2>

                        <div class="slider">
                            <div class="col-sm-6 col-md-3">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="{!! asset('assets/images/artist2.jpg') !!}" alt="...">
                                    </a>
                                    <div class="caption">
                                        <p class="text-warning">Andie Rogers, <span class="text-light-black"> Canada </span></p>
                                        <p class="">Studio : <a href="#">Studio Name</a></p>
                                    </div>
                                    <div class="follow-actions">
                                        <button class="btn btn-xs btn-success approve-follow" data-id="">Allow</button>
                                        <button class="btn btn-xs btn-danger reject-follow" data-id="">Reject</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="{!! asset('assets/images/artist3.jpg') !!}" alt="...">
                                    </a>
                                    <div class="caption">
                                        <p class="text-warning">Andie Rogers, <span class="text-light-black"> Canada </span></p>
                                        <p class="">Studio : <a href="#">Studio Name</a></p>
                                    </div>
                                    <div class="follow-actions">
                                        <button class="btn btn-xs btn-success approve-follow" data-id="">Allow</button>
                                        <button class="btn btn-xs btn-danger reject-follow" data-id="">Reject</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="{!! asset('assets/images/artist4.jpg') !!}" alt="...">
                                    </a>
                                    <div class="caption">
                                        <p class="text-warning">Andie Rogers, <span class="text-light-black"> Canada </span></p>
                                        <p class="">Studio : <a href="#">Studio Name</a></p>
                                    </div>
                                    <div class="follow-actions">
                                        <button class="btn btn-xs btn-success approve-follow" data-id="">Allow</button>
                                        <button class="btn btn-xs btn-danger reject-follow" data-id="">Reject</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="{!! asset('assets/images/artist5.jpg') !!}" alt="...">
                                    </a>
                                    <div class="caption">
                                        <p class="text-warning">Andie Rogers, <span class="text-light-black"> Canada </span></p>
                                        <p class="">Studio : <a href="#">Studio Name</a></p>
                                    </div>
                                    <div class="follow-actions">
                                        <button class="btn btn-xs btn-success approve-follow" data-id="">Allow</button>
                                        <button class="btn btn-xs btn-danger reject-follow" data-id="">Reject</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="{!! asset('assets/images/artist4.jpg') !!}" alt="...">
                                    </a>
                                    <div class="caption">
                                        <p class="text-warning">Andie Rogers, <span class="text-light-black"> Canada </span></p>
                                        <p class="">Studio : <a href="#">Studio Name</a></p>
                                    </div>
                                    <div class="follow-actions">
                                        <button class="btn btn-xs btn-success approve-follow" data-id="">Allow</button>
                                        <button class="btn btn-xs btn-danger reject-follow" data-id="">Reject</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="{!! asset('assets/images/artist5.jpg') !!}" alt="...">
                                    </a>
                                    <div class="caption">
                                        <p class="text-warning">Andie Rogers, <span class="text-light-black"> Canada </span></p>
                                        <p class="">Studio : <a href="#">Studio Name</a></p>
                                    </div>
                                    <div class="follow-actions">
                                        <button class="btn btn-xs btn-success approve-follow" data-id="">Allow</button>
                                        <button class="btn btn-xs btn-danger reject-follow" data-id="">Reject</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--<div class="row">--}}
                    {{--<button class="btn btn-default btn-lg">VIEW MORE</button>--}}
                    {{--</div>--}}

                </div>

            </div>
        </section>
        <section>
            <div class="container">
                <h2 class="section-head text-center">Pending <span class="text-danger">Tattoo's</span> Approvals</h2>
                <div class="section-content text-center">
                    <div class="row">
                        <div class="slider">
                            @foreach($artist->tattoos()->where('approved', 0)->get() as $tattoo)
                            <div class="col-xs-6 col-sm-4 col-md-3">
                                <a href="{!! url('uploads/images/original/'. $tattoo->url) !!}" data-lightbox="image-1" data-title="{!! $tattoo->title !!}" class="thumbnail">
                                    <img src="{!! url('uploads/images/thumbnail/'. $tattoo->url) !!}" alt="{!! $tattoo->title !!}">
                                </a>
                                <div class="image-actions">
                                    <div class="by">
                                        By : <a href="#">Mrigendra Singh</a>
                                    </div>
                                    <a href="{!! url('tattoo/approve/' . $tattoo->id) !!}" class="btn btn-xs btn-success approve-tattoo" data-id="{!! $tattoo->id !!}">Approve</a>
                                    <a href="{!! url('tattoo/reject/' . $tattoo->id) !!}" class="btn btn-xs btn-danger reject-tattoo" data-id="{!! $tattoo->id !!}">Delete</a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @if(!$artist->tattoos->where('approved', 0)->count())
                            <h3 class="text-left"> No Pending Tattoo !!</h3>
                        @endif
                    </div>
                </div>
            </div>
        </section>
    @endif

    <section class="artists">
        <div class="container">
            <br>
            <h2 class="section-head text-center"><span class="text-danger">{!! $artist->user->firstname !!}'s</span> Studio</h2>

            <div class="section-content text-center">
                <div class="row">
                    <?php $i=false; ?>
                    @foreach($artist->studios as $studio)
                        @if($studio->pivot->approved)
                            <div class="col-sm-6 col-md-4">
                                <div>
                                    <img class="img-cover" src="{!! url('uploads/images/thumbnail/'. $studio->cover) !!}" alt="{!! $studio->name !!}">
                                    <div class="caption">
                                        <p class="text-warning">{!! $studio->name !!}</p>
                                        <p>{!! $studio->address !!}, {!! $studio->city !!}, {!! $studio->country !!}</p>
                                    </div>
                                    <div>
                                        <a href="{!! url('studio/' . $studio->id) !!}" class="btn btn-primary">MORE INFO</a>
                                        <button class="btn btn-warning"><strong>{!! $studio->artists()->count() !!}</strong> Artists</button>
                                    </div>
                                </div>
                            </div>
                            <?php $i=true; ?>
                        @endif
                    @endforeach

                    @if(!$i)
                        <h3 class="text-left"> No Studio Found !!</h3>
                    @endif
                </div>
                {{--<div class="row">--}}
                {{--<button class="btn btn-default btn-lg">VIEW MORE</button>--}}
                {{--</div>--}}

            </div>
            <br><br><br><br>
        </div>
    </section>


    <div id="upload-tattoo-form" style="display: none">
        <form method="post" action="{!! url('tattoo/upload') !!}" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="artist" value="{{ $artist->id }}">

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

    <div id="book-appointment-form" style="display: none">
        <form method="post" action="{!! url('tattoo/upload') !!}" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="artist" value="{{ $artist->id }}">

            <div class="omb_login">
                <h2 class="omb_authTitle">BOOK AN APPOINTMENT</h2>

                <div class="row omb_row-sm-offset-3">
                    <div class="col-xs-12 col-sm-6">
                        <div class="input-group">
                            <span class="input-group-addon"></span>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="full name" required>
                        </div>
                        <span class="help-block"></span>

                        <div class="input-group">
                            <span class="input-group-addon"></span>
                            <input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="email" required>
                        </div>
                        <span class="help-block"></span>

                        <div class="input-group">
                            <span class="input-group-addon"></span>
                            <input type="text" class="form-control" name="mobile" value="{{ old('mobile') }}" placeholder="mobile" required>
                        </div>
                        <span class="help-block"></span>

                        <div class="input-group">
                            <span class="input-group-addon"></span>
                            <input type="date" class="form-control" name="date" value="{{ old('date') }}" placeholder="date" required>
                        </div>
                        <span class="help-block"></span>

                        <div class="input-group">
                            <span class="input-group-addon"></span>
                            <textarea class="form-control" name="query" placeholder="any query?"></textarea>
                        </div>
                        <span class="help-block"></span>

                        <button class="btn btn-lg btn-primary btn-block" type="submit">BOOK</button>
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

        $('#upload-tattoo-btn').bind('click', function(event) {
            event.preventDefault();
            $('#modal-content').html($("#upload-tattoo-form").html());
            $(".modal").show();
        });
        $('#book-appointment-btn').bind('click', function(event) {
            event.preventDefault();
            $('#modal-content').html($("#book-appointment-form").html());
            $(".modal").show();
        });


        //dropzone upload
        var baseUrl = "{{ url('/') }}";
        Dropzone.autoDiscover = false;
        var myDropzone = new Dropzone("#upload-tattoo-btsn", {
            url: baseUrl + "tattoo/upload",
            params: {
                _token: token,
                artist:{{ $artist->id }}
            },
            init: function() {
                this.on("addedfile", function(file) {
                    // console.log('addedfile...');
                });
                this.on("thumbnail", function(file, dataUrl) {
                    // console.log('thumbnail...');
                    //$('.dz-image-preview').hide();
                    //$('.dz-file-preview').hide();
                });
                this.on("success", function(file, res) {
                    //console.log('upload success...');
                    //$('<input type="hidden" name="menus[]" value="' + res.path + '" />').appendTo('#menu-imgs');
                });
            }
        });

    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCQrhuvnlZDIxxcKJI6sMS79qpE7Ff_yAA"></script>
    <script>
        var latlng = new google.maps.LatLng({!! $artist->latitude !!}, {!! $artist->longitude !!});
        function initialize() {
            var myOptions = {
                zoom: 18,
                center: latlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                disableDefaultUI: true
            };
            var map = new google.maps.Map(document.getElementById("artist-map"), myOptions);
            var marker = new google.maps.Marker({
                position:latlng,
                title: '{!! $artist->user->firstname !!}',
            });

            marker.setMap(map);
        }

        google.maps.event.addDomListener(window, "load", initialize);

    </script>
@endsection