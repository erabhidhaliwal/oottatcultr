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
                    @foreach($tattoos as $tattoo)
                        <div class="col-xs-6 col-sm-4 col-md-3">
                            <a href="{!! asset('uploads/images/original/' . $tattoo->url) !!}" data-lightbox="tattoos-me" data-title="{!! $tattoo->title !!}" class="thumbnail">
                                <img src="{!! asset('uploads/images/thumbnail/' . $tattoo->url) !!}" alt="{!! $tattoo->title !!}">
                            </a>
                        </div>
                    @endforeach
                    @if(!$tattoos->count())
                        <h3 class="text-left"> No Tattoo !!</h3>
                    @endif
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