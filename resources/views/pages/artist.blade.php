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
            <div class="cover-title">
            </div>
            <div class="cover">
                <img src="{!! $artist->cover !!}" alt="Cover">
                @if($isArtistProfile)
                    <a href="#" class="btn btn-default btn-sm" id="upload-cover-btn">Change Cover</a>
                    <form action="{!! url('artist/update/cover') !!}" method="post" id="coverPicForm" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="file" name="cover" id="cover-btn" style="display: none;">
                    </form>
                @endif
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
                        @if($isArtistProfile)
                            <div style="color:rgba(22,22,22,.3)" class="top-shift">
                                CLICK TO EDIT
                            </div>
                            <div  contenteditable="true" class="artist-bio top-shift" id="artist-bio">
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
                            <div id="artist-map"></div><br>
                            <a href="https://www.google.co.in/maps/place/@<?= $artist->latitude ?>,{!! $artist->longitude !!},18z" target="_blank" class="btn btn-default btn-sm">GET DIRECTIONS</a>
                        @else

                            <div class="search-box">
                                <input id="pac-input" class="controls" type="text" placeholder="Add your Location">
                            </div>
                            <div id="type-selector" class="controls" style="display: none">
                                <input type="radio" name="type" id="changetype-all" checked="checked">
                                <label for="changetype-all">All</label>
                            </div>
                            <div id="artist-map"></div>
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
                    @if(Auth::check() && !$isArtistProfile)
                        @if(!$isFollowing)
                            <a href="{!! url('follow/'. $artist->user->id) !!}" class="btn btn-custom btn-default" id="follow-btn"> Follow </a>
                        @else
                            <a href="{!! url('unfollow/'. $artist->user->id) !!}" class="btn btn-custom btn-default" id="follow-btn">Unfollow</a>
                        @endif
                    @endif
                    <a href="{!! url('artist/'. $artist->id . '/studio' ) !!}" class="btn btn-custom btn-default"> Studios </a>
                    <button class="btn btn-custom btn-default"> Followers </button>
                    <button class="btn btn-custom btn-default"> Following </button>
                    @if(!$isArtistProfile)
                        <button class="btn btn-custom btn-default" id="book-appointment-btn"> Book an Appoinment </button>
                    @endif
                    @if(Auth::check())
                        <button class="btn btn-custom btn-default" id="upload-tattoo-btn"> Upload Tattoo </button>
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
            <h2 class="section-head text-center">Tattoos by <span class="text-danger">{!! $artist->firstname !!}</span></h2>

            <div class="section-content text-center">
                <div class="row">
                    @foreach($artist->tattoos()->where('approved', 1)->get() as $tattoo)
                        <div class="col-xs-6 col-sm-4 col-md-3">
                            <a href="{!! asset('uploads/images/original/' . $tattoo->url) !!}" data-lightbox="tattoos-me" data-title="{!! $tattoo->title !!}" class="thumbnail">
                                <img src="{!! asset('uploads/images/thumbnail/' . $tattoo->url) !!}" alt="{!! $tattoo->title !!}">
                            </a>
                        </div>
                    @endforeach
                    @if(!$artist->tattoos->where('approved', 1)->count())
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
            <input type="hidden" name="id" value="{{ $artist->id }}">
            <input type="hidden" name="type" value="artist">

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
        $('#book-appointment-btn').bind('click', function(event) {
            event.preventDefault();
            $('#modal-content').html($("#book-appointment-form").html());
            $(".modal").show();
        });

        @if($isArtistProfile)
            CKEDITOR.inline( 'artist-bio' );
        @endif

    </script>

    @if($artist->latitude && $artist->longitude)
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
                    title: '{!! $artist->firstname !!}',
                });

                marker.setMap(map);
            }
            google.maps.event.addDomListener(window, "load", initialize);
        </script>
    @else
        <script>
            function initMap() {
                var map = new google.maps.Map(document.getElementById('artist-map'), {
                    center: {lat: 28.5504053, lng: 77.2220366},
                    zoom: 13,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    disableDefaultUI: true
                });
                var input = /** @type {!HTMLInputElement} */(
                        document.getElementById('pac-input'));

                var types = document.getElementById('type-selector');
                map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
                map.controls[google.maps.ControlPosition.TOP_LEFT].push(types);

                var autocomplete = new google.maps.places.Autocomplete(input);
                autocomplete.bindTo('bounds', map);

                var infowindow = new google.maps.InfoWindow();
                var marker = new google.maps.Marker({
                    map: map,
                    anchorPoint: new google.maps.Point(0, -29)
                });

                autocomplete.addListener('place_changed', function() {
                    infowindow.close();
                    marker.setVisible(false);
                    var place = autocomplete.getPlace();
                    if (!place.geometry) {
                        window.alert("Autocomplete's returned place contains no geometry");
                        return;
                    }

                    // If the place has a geometry, then present it on a map.
                    if (place.geometry.viewport) {
                        map.fitBounds(place.geometry.viewport);
                    } else {
                        map.setCenter(place.geometry.location);
                        map.setZoom(17);  // Why 17? Because it looks good.
                    }
                    marker.setIcon(/** @type {google.maps.Icon} */({
                        url: place.icon,
                        size: new google.maps.Size(71, 71),
                        origin: new google.maps.Point(0, 0),
                        anchor: new google.maps.Point(17, 34),
                        scaledSize: new google.maps.Size(35, 35)
                    }));
                    marker.setPosition(place.geometry.location);
                    marker.setVisible(true);

                    var address = '';
                    if (place.address_components) {
                        address = [
                            (place.address_components[0] && place.address_components[0].short_name || ''),
                            (place.address_components[1] && place.address_components[1].short_name || ''),
                            (place.address_components[2] && place.address_components[2].short_name || '')
                        ].join(' ');
                    }

                    infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);
                    infowindow.open(map, marker);

                    $.ajax({
                        url: "{!! url('artist/update/location') !!}", // Url to which the request is send
                        type: "POST",             // Type of request to be send, called as method
                        data: {
                            _token: token,
                            lat : place.geometry.location.G,
                            long: place.geometry.location.K

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

                // Sets a listener on a radio button to change the filter type on Places
                // Autocomplete.
                function setupClickListener(id, types) {
                    var radioButton = document.getElementById(id);
                    radioButton.addEventListener('click', function() {
                        autocomplete.setTypes(types);
                    });
                }

                setupClickListener('changetype-all', []);

            }
        </script>

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCQrhuvnlZDIxxcKJI6sMS79qpE7Ff_yAA&libraries=places&callback=initMap" async defer></script>
    @endif
@endsection