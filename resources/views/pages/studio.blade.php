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
                <h2>{!! $studio->name !!}</h2>
            </div>
            <div class="cover">
                <img src="{!! $studio->cover !!}" alt="Home">
            </div>
        </div>
    </div>

    <section>
        <div class="container">
            <div class="section-content  text-center">
                <div class="row">
                    <div class="col-sm-3 text-center">
                        <img id="artist-avatar" src="{!! $studio->user->avatar !!}" class="img-responsive" alt="{!! $studio->name !!}"><br>

                        {{--@if($isArtistProfile)--}}
                            {{--<a href="#" class="btn btn-default btn-sm" id="upload-profile-btn">Change Profile</a>--}}
                            {{--<form action="{!! url('profile/changeImg') !!}" method="post" id="profilePicForm" enctype="multipart/form-data">--}}
                                {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
                                {{--<input type="file" name="avatar" id="avatar-btn" style="display: none;">--}}
                            {{--</form>--}}
                        {{--@endif--}}
                    </div>

                    <div class="col-md-6">
                        <p class="studio-bio">
                            {!! $studio->bio !!}
                        </p>
                    </div>

                    <div class="col-md-3">
                        <h2 class="section-head text-center">Studio <span class="text-danger">Artists</span><hr></h2>
                        @if(!$studio->artists->count())
                            <h3 class="text-left"> No Artist in this Studio !!</h3>
                        @endif
                        <div  style="max-height: 300px; overflow: scroll">
                        @foreach($studio->artists as $artist)
                            @for($i=0; $i<10; $i++)
                                <div class="col-sm-12">
                                    <a href="{!! url('artist/' . $artist->id) !!}">
                                        <div class="thumbnail">
                                            @if (filter_var($artist->user->avatar, FILTER_VALIDATE_URL) === FALSE)
                                                <img src="{!! url('uploads/images/thumbnail/' . $artist->user->avatar) !!}" alt="{!! $artist->user->firstname !!}">
                                            @else
                                                <img src="{!! $artist->user->avatar !!}" alt="{!! $artist->user->firstname !!}">
                                            @endif
                                            <div class="caption">
                                                <p class="text-warning">{!! $artist->user->firstname !!} {!! $artist->user->lastname !!}</p>
                                                <p>{!! $artist->user->city !!}</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endfor
                        @endforeach
                        </div>
                    </div>
                </div>
                {{--<div class="row">--}}
                {{--<button class="btn btn-default btn-lg">VIEW MORE</button>--}}
                {{--</div>--}}

                <br><br><br>
            </div>

        </div>
    </section>

    <section class="artists">
        <div class="container">
            <br>
            <h2 class="section-head text-center">Tattoos by <span class="text-danger">{!! $studio->name !!}</span></h2>

            <div class="section-content text-center">
                <div class="row">
                    @foreach($tattoos as $tattoo)
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
                {{--<div class="row">--}}
                {{--<button class="btn btn-default btn-lg">VIEW MORE</button>--}}
                {{--</div>--}}

            </div>
        </div>
    </section>

@endsection

@section('footer')

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCQrhuvnlZDIxxcKJI6sMS79qpE7Ff_yAA"></script>
    <script>
        var latlng = new google.maps.LatLng({!! $studio->latitude !!}, {!! $studio->longitude !!});
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
                title: '{!! $studio->name !!}',
            });

            marker.setMap(map);
        }

        google.maps.event.addDomListener(window, "load", initialize);

    </script>
@endsection