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

    <section class="artists">
        <div class="container">
            <button class="pull-right btn btn-lg btn-primary"> Add Studio <i class="fa fa-plus-circle"></i> </button>
            <br><br>
            <h2 class="section-head text-center">Your <span class="text-danger">Studios</span></h2>

            <div class="section-content secton-hr text-center">
                <div class="row">
                    @foreach($artist->studios as $studio)
                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                                <img src="{!! $studio->cover or asset('assets/images/studio1.png') !!}" alt="...">
                                <div class="caption">
                                    <p class="text-warning">{!! $studio->name !!}</p>
                                    <p>{!! $studio->address or '' !!} {!! $studio->city or '' !!} {!! $studio->country or '' !!}</p>
                                </div>
                                <div>
                                    <button class="btn btn-primary">MORE INFO</button>
                                    <button class="btn btn-warning"><strong>{!! $studio->artists()->count() !!}</strong> Artists</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
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