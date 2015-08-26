@extends('layout')

@section('title', 'Tattoos - Tattoo Cultr')

@section('header')
    <style>

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
            width: 60%;
            margin-left: 18%;

        }

        #pac-input:focus {
            border-color: #4d90fe;
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

    </style>

@endsection

@section('content')

    <div class="container-fluid main" id="page-top">
        <div class="row">
            <div class="cover-title">
                <h2>The Best Tatt Shops in Town</h2>
            </div>
            <div class="cover">
                <img src="{!! asset('assets/images/bg5.jpg') !!}" alt="Studios">
            </div>
        </div>
    </div>

    <section id="search-results">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="container">
            <h2 class="section-head text-center"> <span class="text-danger">Tattoo Studios</span></h2>
            <p class="section-head text-center">find tattoo studios near you</p>
            <div class="search-box">
                <input id="pac-input" class="controls" type="text" placeholder="Enter a location">
            </div>

            <div id="type-selector" class="controls" style="display: none">
                <input type="radio" name="type" id="changetype-all" checked="checked">
                <label for="changetype-all">All</label>
            </div>
            <div id="map"></div>

    </section>

    <section class="artists">
        <div class="container">
            <br><br>
            <div class="section-content secton-hr text-center">
                <div class="row" id="search-results-data">
                    @foreach($studios as $studio)
                        <div class="col-sm-6 col-md-4">
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
                    @endforeach

                    @if(!$studios->count())
                        <h3 class="text-left"> No Studio Found !!</h3>
                    @endif
                </div>
                {{--<div class="row">--}}
                    {{--<button class="btn btn-default btn-lg">VIEW MORE</button>--}}
                {{--</div>--}}

                <br><br><br>
            </div>

        </div>
    </section>


@endsection

@section('footer')
       <script>
           var token = $('input[name="_token"]').val();

           function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 28.5504053, lng: 77.2220366},
                zoom: 13
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


                var address = '';
                if (place.address_components) {
                    address = [
                        (place.address_components[0] && place.address_components[0].short_name || ''),
                        (place.address_components[1] && place.address_components[1].short_name || ''),
                        (place.address_components[2] && place.address_components[2].short_name || '')
                    ].join(' ');
                }

                infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);

                $.ajax({
                    url: "{!! url('studios') !!}", // Url to which the request is send
                    type: "POST",             // Type of request to be send, called as method
                    data: {
                            _token: token,
                             lat : place.geometry.location.G,
                            long: place.geometry.location.K

                    },
                    success: function(data)   // A function to be called if request succeeds
                    {
                        console.log( data);
                        $i = 0;
                        $("#search-results-data").html('');
                        $.each(data, function(index, obj) {
                            var res =   '<div class="col-sm-6 col-md-4">' +
                                        '<img class="img-cover" src="/uploads/images/thumbnail/' + obj.cover + '" alt=" ">' +
                                        '<div class="caption">' +
                                        '<p class="text-warning">' + obj.name + '</p>' +
                                        '<p>' + obj.city  +',' + obj.country + '</p>' +
                                        '</div>' +
                                        '<div>' +
                                        '<a href="/studio/' + obj.id  + '" class="btn btn-primary">MORE INFO</a>' +
                                        '<button class="btn btn-warning"><strong>' + obj.artists.length +'</strong> Artists</button>' +
                                        '</div>' +
                                        '</div>';

                            $(res).appendTo("#search-results-data");
                            createMarker(obj.latitude, obj.longitude, obj.title);
                            $i++;
                        });
                        if($i == 0){
                            var res =  '<h3 class="text-left">No Studio Found!!</h3>' ;

                            $(res).appendTo("#search-results-data");
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


            function createMarker(lat, long, title) {

                var myLatLng = {lat: parseFloat(lat), lng: parseFloat(long)};

                console.log(myLatLng);
                var marker = new google.maps.Marker({
                    map: map,
                    position: myLatLng,
                    title: title
                });

                google.maps.event.addListener(marker, 'click', function() {
                    infowindow.setContent(title);
                    infowindow.open(map, this);
                });
            }
        }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCQrhuvnlZDIxxcKJI6sMS79qpE7Ff_yAA&libraries=places&callback=initMap" async defer></script>

@endsection