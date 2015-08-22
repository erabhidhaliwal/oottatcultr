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
            <button class="pull-right btn btn-lg btn-primary"> Add Tattoo <i class="fa fa-plus-circle"></i> </button>
            <br><br>
            <h2 class="section-head text-center">Your <span class="text-danger">Tattoos</span></h2>

            <div class="section-content secton-hr text-center">
                <div class="row">
                    @foreach($artist->tattoos->where('user_id', $user->id) as $tattoo)
                        <div class="col-xs-6 col-sm-4 col-md-3">
                            <a href="#" class="thumbnail">
                                <img src="{!! asset('uploads/images/thumbnail/' . $tattoo->url) !!}" alt="{!! $tattoo->title !!}">
                            </a>
                        </div>
                    @endforeach
                    @if(!$artist->tattoos->where('user_id', $user->id)->count())
                        <h3 class="text-left"> You haven't uploaded any tattoo yet!!</h3>
                    @endif
                </div>
                {{--<div class="row">--}}
                {{--<button class="btn btn-default btn-lg">VIEW MORE</button>--}}
                {{--</div>--}}

                <br><br><br>
            </div>

        </div>
        <div class="container">

            <h2 class="section-head text-center">User's <span class="text-danger">Tattoos</span></h2>

            <div class="section-content text-center">
                <div class="row">
                    @foreach($artist->tattoos->where('user_id','<>', $user->id) as $tattoo)
                        <div class="col-xs-6 col-sm-4 col-md-3">
                            <a href="#" class="thumbnail">
                                <img src="{!! asset('uploads/images/thumbnail/' . $tattoo->url) !!}" alt="{!! $tattoo->title !!}">
                            </a>
                        </div>
                    @endforeach

                    @if(!$artist->tattoos->where('user_id','<>', $user->id)->count())
                        <h3 class="text-left">No Tatto by user!!</h3>
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
@endsection