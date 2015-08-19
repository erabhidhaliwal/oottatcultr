@extends('layout')

@section('title', 'Tattoos - Tattoo Cultr')

@section('header')
@endsection

@section('content')

    {{--<div class="container-fluid main" id="page-top">--}}
        {{--<div class="row">--}}
            {{--<div class="cover-title">--}}
                {{--<h2>Upload. Flaunt. Inspire</h2>--}}
            {{--</div>--}}
            {{--<div class="cover">--}}
                {{--<img src="assets/images/bg3.jpg" alt="Home">--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    <div class="container-fluid main" id="page-top">
        <div class="row">
            <div class="no-cover">
            </div>
        </div>
    </div>

    <section>
        <div class="container">
            <div class="row text-center">
                <h2>Find your Tattoo</h2>
            </div>

        </div>
    </section>

    <section>
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

    <section>
        <div class="container popular">
            <br/><br/>
            <h2 class="section-head text-center">Recent <span class="text-danger">Tattoos</span></h2>

            <div class="section-content secton-hr text-center">
                <div class="row">
                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <a href="#" class="thumbnail">
                            <img src="{!! asset('assets/images/tattoo2.jpeg') !!}" alt="...">
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <a href="#" class="thumbnail">
                            <img src="{!! asset('assets/images/tattoo1.jpg') !!}" alt="...">
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <a href="#" class="thumbnail">
                            <img src="{!! asset('assets/images/tattoo3.jpg') !!}" alt="...">
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <a href="#" class="thumbnail">
                            <img src="{!! asset('assets/images/tattoo4.jpg') !!}" alt="...">
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <a href="#" class="thumbnail">
                            <img src="{!! asset('assets/images/tattoo5.jpg') !!}" alt="...">
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <a href="#" class="thumbnail">
                            <img src="{!! asset('assets/images/tattoo6.jpg') !!}" alt="...">
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <a href="#" class="thumbnail">
                            <img src="{!! asset('assets/images/tattoo7.png') !!}" alt="...">
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <a href="#" class="thumbnail">
                            <img src="{!! asset('assets/images/tattoo8.jpg') !!}" alt="...">
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <a href="#" class="thumbnail">
                            <img src="{!! asset('assets/images/tattoo9.jpg') !!}" alt="...">
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <a href="#" class="thumbnail">
                            <img src="{!! asset('assets/images/tattoo10.jpg') !!}" alt="...">
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <a href="#" class="thumbnail">
                            <img src="{!! asset('assets/images/tattoo11.jpg') !!}" alt="...">
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <a href="#" class="thumbnail">
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