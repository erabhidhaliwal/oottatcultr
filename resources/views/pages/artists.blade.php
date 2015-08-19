@extends('layout')

@section('title', 'Tattoos - Tattoo Cultr')

@section('header')
@endsection

@section('content')

    <div class="container-fluid main" id="page-top">
        <div class="row">
            <div class="no-cover">
            </div>
        </div>
    </div>

    {{--<div class="container-fluid main" id="page-top">--}}
        {{--<div class="row">--}}
            {{--<div class="cover-title">--}}
                {{--<h2>Find Your Tattoo Artist</h2>--}}
            {{--</div>--}}
            {{--<div class="cover">--}}
                {{--<img src="assets/images/bg4.jpg" alt="Home">--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    <section>
        <div class="container">
            <div class="row text-center">
                <h2>Find your artist</h2>
                <p>TattooCultr ensures all artists listed are genuine.  No Scratchers...!</p>
                <p>Every Tattoo artist is unique, find one that suits your style</p>
            </div>

        </div>
    </section>

    <section class="form-section">
        <div class="container">
            <div class="row">
                <div class="col-md-push-4 col-md-4">
                    <form method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div id="custom-search-input">
                            <div class="input-group col-md-12">
                                <input type="text" class="form-control input-lg" placeholder="enter keyword e.g. star, fish, etc." />
                                <span class="input-group-btn">
                                    <button class="btn btn-info btn-lg" type="submit">
                                        <i class="glyphicon glyphicon-search"></i>
                                    </button>
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section id="artist-of-the-month">
        <div class="container">
            <div class="row">
                <br>
                <div class="col-sm-4 col-sm-push-4">
                    <a href="#">
                        <div class="thumbnail">
                            <img src="{!! asset('assets/images/artist22.png') !!}" alt="...">
                            <div class="caption text-center">
                                <h3>Artist of the month <span class="text-primary">(July)</span></h3>
                                <p class="text-warning">Manjeet Singh</p>
                                <p><strong>Manjeet Tattoos</strong> </p>
                                <p>New Delhi, India</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <br/><br/>

            <div class="section-content secton-hr text-center">
                <div class="row">
                    <h2 class="section-head text-center">Browse <span class="text-danger">Artists</span></h2>

                    <div class="col-sm-6 col-md-3">
                        <a href="#">
                            <div class="thumbnail">
                                <img src="{!! asset('assets/images/artist9.jpg') !!}" alt="...">
                                <div class="caption">
                                    <p class="text-warning">Andie Rogers</p>
                                    <p>Canada</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <a href="#">
                            <div class="thumbnail">
                                <img src="{!! asset('assets/images/artist2.jpg') !!}" alt="...">
                                <div class="caption">
                                    <p class="text-warning">Andie Rogers</p>
                                    <p>Canada</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <a href="#">
                            <div class="thumbnail">
                                <img src="{!! asset('assets/images/artist3.jpg') !!}" alt="...">
                                <div class="caption">
                                    <p class="text-warning">Andie Rogers</p>
                                    <p>Canada</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <a href="#">
                            <div class="thumbnail">
                                <img src="{!! asset('assets/images/artist4.jpg') !!}" alt="...">
                                <div class="caption">
                                    <p class="text-warning">Andie Rogers</p>
                                    <p>Canada</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <a href="#">
                            <div class="thumbnail">
                                <img src="{!! asset('assets/images/artist5.jpg') !!}" alt="...">
                                <div class="caption">
                                    <p class="text-warning">Andie Rogers</p>
                                    <p>Canada</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <a href="#">
                            <div class="thumbnail">
                                <img src="{!! asset('assets/images/artist6.jpg') !!}" alt="...">
                                <div class="caption">
                                    <p class="text-warning">Andie Rogers</p>
                                    <p>Canada</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <a href="#">
                            <div class="thumbnail">
                                <img src="{!! asset('assets/images/artist7.jpg') !!}" alt="...">
                                <div class="caption">
                                    <p class="text-warning">Andie Rogers</p>
                                    <p>Canada</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <a href="#">
                            <div class="thumbnail">
                                <img src="{!! asset('assets/images/artist8.jpg') !!}" alt="...">
                                <div class="caption">
                                    <p class="text-warning">Andie Rogers</p>
                                    <p>Canada</p>
                                </div>
                            </div>
                        </a>
                    </div>
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
@endsection