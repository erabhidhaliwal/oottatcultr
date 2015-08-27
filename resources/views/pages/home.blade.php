@extends('layout')

@section('title', 'Tattoos - Tattoo Cultr')

@section('header')
@endsection

@section('content')

    <div class="container-fluid main" id="page-top">
        <div class="row">
            <div class="cover-title">
                <h2>Explore Our Culture</h2>
            </div>
            <div class="cover">
                <img src="assets/images/bg2.jpg" alt="Home">
            </div>
        </div>
    </div>

    <section>
        <div class="container">
            <div class="section-content secton-hr">
                <div class="row">
                    <div class="col-sm-4">
                        <a href="#">
                            <img class="img-responsive" src="{!! asset('assets/images/artist1.jpg') !!}" alt="...">
                        </a>
                    </div>
                    <div class="col-sm-8">
                        <h3>Funky Monkey</h3>
                        <p>Hi, I am Raju Pandeya from Funky Monkey Tattoos and I am the artist of the month !</p>
                        <p>I started tattoo 15 years back when i joined Funky Monkey Tattoos in New Delhi, India
                            in 2002. We are one of the first tattoo studios in India.</p>
                        <p>Tattoo is not a work for me, it is my life !
                            to see my work please see my profile...</p>

                        <button class="btn btn-default">View Profile</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <br/><br/>
            <h2 class="section-head text-center">Featured <span class="text-danger">Artists</span></h2>
            <p class="section-head text-center">Meet our featured artists,
                they are the top notch artists in the industry today, connect with them on their profile.</p>

            <div class="section-content secton-hr text-center">
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <img src="{!! asset('assets/images/artist9.jpg') !!}" alt="...">
                            <div class="caption">
                                <p class="text-warning">Andie Rogers</p>
                                <p>Rogers Tattooz </p>
                                <p>Canada</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <img src="{!! asset('assets/images/artist2.jpg') !!}" alt="...">
                            <div class="caption">
                                <p class="text-warning">Andie Rogers</p>
                                <p>Rogers Tattooz </p>
                                <p>Canada</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <img src="{!! asset('assets/images/artist3.jpg') !!}" alt="...">
                            <div class="caption">
                                <p class="text-warning">Andie Rogers</p>
                                <p>Rogers Tattooz </p>
                                <p>Canada</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <img src="{!! asset('assets/images/artist4.jpg') !!}" alt="...">
                            <div class="caption">
                                <p class="text-warning">Andie Rogers</p>
                                <p>Rogers Tattooz </p>
                                <p>Canada</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <img src="{!! asset('assets/images/artist5.jpg') !!}" alt="...">
                            <div class="caption">
                                <p class="text-warning">Andie Rogers</p>
                                <p>Rogers Tattooz </p>
                                <p>Canada</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <img src="{!! asset('assets/images/artist6.jpg') !!}" alt="...">
                            <div class="caption">
                                <p class="text-warning">Andie Rogers</p>
                                <p>Rogers Tattooz </p>
                                <p>Canada</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <img src="{!! asset('assets/images/artist7.jpg') !!}" alt="...">
                            <div class="caption">
                                <p class="text-warning">Andie Rogers</p>
                                <p>Rogers Tattooz </p>
                                <p>Canada</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <img src="{!! asset('assets/images/artist8.jpg') !!}" alt="...">
                            <div class="caption">
                                <p class="text-warning">Andie Rogers</p>
                                <p>Rogers Tattooz </p>
                                <p>Canada</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <button class="btn btn-default btn-lg">VIEW MORE</button>
                </div>
            </div>

        </div>
    </section>

    <section>
        <div class="container popular">
            <br/><br/>
            <h2 class="section-head text-center">Popular <span class="text-danger">Tattoos</span></h2>

            <div class="section-content secton-hr text-center">
                <div class="row">
                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <a href="{!! asset('assets/images/tattoo2.jpeg') !!}" data-lightbox="image-1" data-title="My caption" class="thumbnail">
                            <img src="{!! asset('assets/images/tattoo2.jpeg') !!}" alt="...">
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <a href="{!! asset('assets/images/tattoo1.jpg') !!}" data-lightbox="image-1" data-title="My caption" class="thumbnail">
                            <img src="{!! asset('assets/images/tattoo1.jpg') !!}" alt="...">
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <a href="{!! asset('assets/images/tattoo3.jpg') !!}" data-lightbox="image-1" data-title="My caption" class="thumbnail">
                            <img src="{!! asset('assets/images/tattoo3.jpg') !!}" alt="...">
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <a href="{!! asset('assets/images/tattoo4.jpg') !!}" data-lightbox="image-1" data-title="My caption" class="thumbnail">
                            <img src="{!! asset('assets/images/tattoo4.jpg') !!}" alt="...">
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <a href="{!! asset('assets/images/tattoo5.jpg') !!}" data-lightbox="image-1" data-title="My caption" class="thumbnail">
                            <img src="{!! asset('assets/images/tattoo5.jpg') !!}" alt="...">
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <a href="{!! asset('assets/images/tattoo6.jpg') !!}" data-lightbox="image-1" data-title="My caption" class="thumbnail">
                            <img src="{!! asset('assets/images/tattoo6.jpg') !!}" alt="...">
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <a href="{!! asset('assets/images/tattoo7.png') !!}" data-lightbox="image-1" data-title="My caption" class="thumbnail">
                            <img src="{!! asset('assets/images/tattoo7.png') !!}" alt="...">
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <a href="{!! asset('assets/images/tattoo8.jpg') !!}" data-lightbox="image-1" data-title="My caption" class="thumbnail">
                            <img src="{!! asset('assets/images/tattoo8.jpg') !!}" alt="...">
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <a href="{!! asset('assets/images/tattoo9.jpg') !!}" data-lightbox="image-1" data-title="My caption" class="thumbnail">
                            <img src="{!! asset('assets/images/tattoo9.jpg') !!}" alt="...">
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <a href="{!! asset('assets/images/tattoo10.jpg') !!}" data-lightbox="image-1" data-title="My caption" class="thumbnail">
                            <img src="{!! asset('assets/images/tattoo10.jpg') !!}" alt="...">
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <a href="{!! asset('assets/images/tattoo11.jpg') !!}" data-lightbox="image-1" data-title="My caption" class="thumbnail">
                            <img src="{!! asset('assets/images/tattoo11.jpg') !!}" alt="...">
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <a href="{!! asset('assets/images/tattoo112.jpg') !!}" data-lightbox="image-1" data-title="My caption" class="thumbnail">
                            <img src="{!! asset('assets/images/tattoo112.jpg') !!}" alt="...">
                        </a>
                    </div>
                </div>
                <div class="row">
                    <button class="btn btn-default btn-lg">VIEW MORE</button>
                </div>
            </div>

        </div>
    </section>
@endsection

@section('footer')
@endsection