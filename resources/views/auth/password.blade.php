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

        <form class="form-horizontal" role="form" method="POST" action="{{ URL::to('/password/email') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">
                <label class="col-md-4 control-label">E-Mail Address</label>

                <div class="col-md-6">
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Send Password Reset Link
                    </button>
                </div>
            </div>
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