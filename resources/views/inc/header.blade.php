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
                        <li><a href="{!! url('artists') !!}">ARTISTS</a></li>
                        <li><a href="{!! url('tattoos') !!}">TATTOOS</a></li>
                        <li><a href="{!! url('studios') !!}">STUDIOS</a></li>
                        <li><a href="{!! url('tattoo-cultr') !!}">TATTOO CULTR</a></li>
                        <li><a href="{!! url('care') !!}">CARE</a></li>
                        @if (Auth::check())
                            <li><a href="{!! url('profile') !!}">PROFILE</a></li>
                            <li><a href="{!! url('logout') !!}">LOGOUT</a></li>
                        @else
                            <li><a href="{!! url('user/login') !!}" class="login-btn">LOGIN</a></li>
                            <li><a href="{!! url('user/register') !!}" class="register-btn">REGISTER</a></li>
                        @endif
                    </ul>
                </nav>
            </div>
        </div>
    </header>