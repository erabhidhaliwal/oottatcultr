@extends('layout')

@section('title', $user->name . ' - Tattoo Cultr')

@section('header')
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
            <div class="row text-center">
                <img class="avatar img-circle" src="{!! $user->avatar !!}" alt="{!! $user->name !!}">
                <h2>{!! $user->name !!}</h2>
            </div>

            <div class="row text-center member-actions">
                <a href="{!! url('profile/tattoos') !!}" class="btn btn-success btn-lg">Tattoos <i class="fa fa-flash"></i></a>
                <a href="{!! url('profile/following') !!}" class="btn btn-info btn-lg">Following <i class="fa fa-group"></i></a>
                <a href="{!! url('profile/edit') !!}" class="btn btn-default btn-lg">Edit Profile <i class="fa fa-gear"></i></a>
            </div>

        </div>
    </section>

    <section>
        <div class="container secton-hr">
            <br/><br/>
            <h2 class="section-head text-center">Your <span class="text-danger">Tattoos</span> </h2>

            <div class="section-content text-center">
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

    <br><br><br><br>

@endsection

@section('footer')
@endsection