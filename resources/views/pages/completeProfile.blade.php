@extends('layout')

@section('title', 'Profile - TattooCultr')

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
            <h2 class="section-head text-center">Welcome, <span class="text-danger">{!! $user->name !!}</span></h2>
            <p class="section-head text-center">Get Started as..</p>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-push-3 col-sm-6 col-md-push-4 col-md-4 text-center">
                    <div class="row">
                        <div class="col-xs-6">
                            <a href="{!! url('complete-profile-artist') !!}">
                                <img  height="50" src="{!! asset('assets/images/select-artist.svg') !!}" alt="">
                            </a>
                        </div>
                        <div class="col-xs-6">
                            <a href="{!! url('complete-profile-member') !!}">
                                <img  height="50" src="{!! asset('assets/images/select-member.svg') !!}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
@endsection

@section('footer')
@endsection