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

    <section class="tattoos">
        <div class="container secton-hr">
            <button class="pull-right btn btn-lg btn-primary"> Add Tattoo <i class="fa fa-plus-circle"></i> </button>
            <br><br>
            <h2 class="section-head text-center">Your <span class="text-danger">Tattoos</span></h2>

            <div class="section-content text-center">
                <div class="row">
                    @foreach($user->tattoos as $tattoo)
                        <div class="col-xs-6 col-sm-4 col-md-3">
                            <a href="#" class="thumbnail">
                                <img src="{!! asset('uploads/images/thumbnail/' . $tattoo->url) !!}" alt="{!! $tattoo->title !!}">
                            </a>
                            <div class="by">
                                Artist : <a href="#">Artist Name</a>
                            </div>
                        </div>
                    @endforeach
                    @if(!$user->tattoos()->count())
                        <h3 class="text-left"> You haven't uploaded any tattoo yet!!</h3>
                    @endif
                </div>
                {{--<div class="row">--}}
                {{--<button class="btn btn-default btn-lg">VIEW MORE</button>--}}
                {{--</div>--}}

                <br><br><br>
            </div>

        </div>

    </section>

    <br><br><br><br>

@endsection

@section('footer')
@endsection