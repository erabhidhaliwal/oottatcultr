@extends('layout')

@section('title', 'Tattoos - Tattoo Cultr')

@section('header')
@endsection

@section('content')
    <div class="wrapper">

        <header class="header">
            <div class="row">
                <div class="col-md-4">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle menu-button" data-toggle="collapse" data-target="#myNavbar">
                            <span class="glyphicon glyphicon-align-justify"></span>
                        </button>
                        <a class="navbar-brand logo" href="{!! url('/') !!}"><img src="{!! asset('assets/images/logo.png') !!}" alt=""></a>
                    </div>
                </div>
                <div class="col-md-8">
                    <nav class="collapse navbar-collapse" id="myNavbar" role="navigation">
                        <ul class="nav navbar-nav navbar-right menu">
                            <li><a href="{!! url('artists') !!}" class="page-scroll active">ARTISTS</a></li>
                            <li><a href="{!! url('studios') !!}" class="page-scroll">STUDIOS</a></li>
                            <li><a href="{!! url('tattoo-cultr') !!}" class="page-scroll">TATTOO CULTR</a></li>
                            <li><a href="{!! url('care') !!}" class="page-scroll">CARE</a></li>
                            <li><a href="{!! url('user/login') !!}" class="page-scroll">LOGIN</a></li>
                            <li><a href="{!! url('user/register') !!}" class="page-scroll">REGISTER</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <div class="container-fluid main" id="page-top">
            <div class="row">
                <div class="col-md-12 backg2">
                    <h3>Login</h3>
                </div>
            </div>
        </div>

        <form method="POST" action="{{URL::to('auth/changepassword')}}"
              accept-charset="UTF-8">
            <!-- CSRF Token -->
            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
            <!-- ./ csrf token -->
            <fieldset>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input class="form-control"
                           placeholder="Password"
                           type="password" name="password" id="password">
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Confirm Password</label> <input
                            class="form-control"
                            placeholder="Confirm Password"
                            type="password" name="password_confirmation"
                            id="password_confirmation">
                </div>
                @if ($errors->has()) @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div>
                @endforeach @endif
                <div class="form-actions form-group">
                    <button type="submit" class="btn btn-primary">{{{
				trans('site/user.submit') }}}</button>
                </div>
            </fieldset>
        </form>


        <br><br><br><br><br><br>

        <footer>
            <div class="container text-center">
                <div class="footer-links">
                    <ul class="list-inline">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Terms of use</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>

                <div class="social-links">
                    <h3 class="text-warning">JOIN US ON</h3>
                    <button type="button" class="btn btn-default btn-circle"><i class="fa fa-facebook"></i>
                    </button>
                    <button type="button" class="btn btn-default btn-circle"><i class="fa fa-twitter"></i>
                    </button>
                    <button type="button" class="btn btn-default btn-circle"><i class="fa fa-linkedin"></i>
                    </button>
                    <button type="button" class="btn btn-default btn-circle"><i class="fa fa-envelope-o"></i>
                    </button>
                </div>
                <hr>
                <p class="copyright">&copy; 2014–2015 Tattoo Cultr. All rights reserved.</p>
            </div>
        </footer>


    </div>
@endsection

@section('footer')
@endsection