@extends('layout')

@section('title', 'Tattoos - Tattoo Cultr')

@section('header')
@endsection

@section('content')

    <div class="container-fluid main" id="page-top">
        <div class="row">
            <div class="cover-title">
                <h2>
                    <img class="avatar img-circle" src="{!! $user->avatar !!}" alt="{!! $user->name !!}">
                    {!! $user->name !!}
                </h2>
                <div class="cover-actions">
                    <div class="row text-center">
                        <a href="{!! url('profile/tattoos') !!}" class="btn btn-success btn-lg">Tattoos <i class="fa fa-flash"></i></a>
                        <a href="{!! url('profile/studios') !!}" class="btn btn-warning btn-lg">Studios <i class="fa fa-cubes"></i></a>
                        <a href="{!! url('profile/followers') !!}" class="btn btn-primary btn-lg">Followers <i class="fa fa-group"></i></a>
                        <a href="{!! url('profile/following') !!}" class="btn btn-info btn-lg">Following <i class="fa fa-group"></i></a>
                        <a href="{!! url('profile/edit') !!}" class="btn btn-default btn-lg">Edit Profile <i class="fa fa-gear"></i></a>
                    </div>
                </div>
            </div>

            <div class="cover">
                <img src="{!! $artist->cover !!}" alt="Home">
            </div>
        </div>
    </div>

    <section>
        <div class="container">
            <div class="section-content text-center">
                <div class="row">
                    <h2 class="section-head text-center">You're <span class="text-danger">Following</span></h2>

                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <a href="#">
                                <img src="{!! asset('assets/images/artist2.jpg') !!}" alt="...">
                            </a>
                            <div class="caption">
                                <p class="text-warning">Andie Rogers, <span class="text-light-black"> Canada </span></p>
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
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <a href="#">
                                <img src="{!! asset('assets/images/artist2.jpg') !!}" alt="...">
                            </a>
                            <div class="caption">
                                <p class="text-warning">Andie Rogers, <span class="text-light-black"> Canada </span></p>
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
                            </div>
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

    <br><br><br><br><br><br>
@endsection

@section('footer')
@endsection