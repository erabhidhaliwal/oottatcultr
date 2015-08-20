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
                        <li><a href="{!! url('tattoos') !!}" class="page-scroll active">TATTOOS</a></li>
                        <li><a href="{!! url('studios') !!}" class="page-scroll">STUDIOS</a></li>
                        <li><a href="{!! url('tattoo-cultr') !!}" class="page-scroll">TATTOO CULTR</a></li>
                        <li><a href="{!! url('care') !!}" class="page-scroll">CARE</a></li>
                        @if (Auth::check())
                            <li><a href="{!! url('profile') !!}" class="page-scroll">PROFILE</a></li>
                            <li><a href="{!! url('user/logout') !!}" class="page-scroll">LOGOUT</a></li>
                        @else
                            <li><a href="#" class="login-btn page-scroll">LOGIN</a></li>
                            <li><a href="#" class="register-btn page-scroll">REGISTER</a></li>
                        @endif
                    </ul>
                </nav>
            </div>
        </div>
    </header>