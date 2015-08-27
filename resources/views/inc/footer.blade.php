<footer>
    <div class="container text-center">
        <div class="footer-links">
            <ul class="list-inline">
                <li><a href="{!! url('/') !!}">Home</a></li>
                <li><a href="{!! url('about') !!}">About us</a></li>
                <li><a href="{!! url('/') !!}">Blog</a></li>
                <li><a href="{!! url('terms') !!}">Terms of use</a></li>
                <li><a href="{!! url('privacy') !!}">Privacy</a></li>
                <li><a href="{!! url('contact') !!}">Contact</a></li>
            </ul>
        </div>

        <div class="social-links">
            <h3 class="text-warning">JOIN US ON</h3>
            <button type="button" class="btn btn-default btn-circle"><i class="fa fa-facebook"></i>
            </button>
            <button type="button" class="btn btn-default btn-circle"><i class="fa fa-twitter"></i>
            </button>
            <button type="button" class="btn btn-default btn-circle"><i class="fa fa-pinterest"></i>
            </button>
            <button type="button" class="btn btn-default btn-circle"><i class="fa fa-envelope-o"></i>
            </button>
        </div>
        <hr>
        <p class="copyright">&copy; 2014–2015 Tattoo Cultr. All rights reserved.</p>
    </div>
</footer>


<section class="modal">
    <div class="content">
        <button class="close-modal btn btn-circle btn-warning"><i class="fa fa-close"></i></button>

        <div id="modal-content">

        </div>

    </div>
</section>

</div> {{--Close Wrapper--}}


{{--<div id="login-form" style="display: none">--}}
    {{--<form method="post" action="{!! url('user/login') !!}">--}}
        {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}

        {{--<div class="omb_login">--}}
            {{--<h3 class="omb_authTitle">Tattoo Cultr Login</h3>--}}
            {{--<div class="row omb_socialButtons">--}}
                {{--<div class="col-sm-push-3 col-sm-6 col-xs-push-1 col-xs-10">--}}
                    {{--<a href="{!! url('user/login/facebook') !!}" class="btn btn-lg btn-block omb_btn-facebook">--}}
                        {{--Login with <span>facebook</span>--}}
                    {{--</a>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="row omb_row-sm-offset-3 omb_loginOr">--}}
                {{--<div class="col-xs-12 col-sm-6">--}}
                    {{--<hr class="omb_hrOr">--}}
                    {{--<span class="omb_spanOr">or</span>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="row omb_row-sm-offset-3">--}}
                {{--<div class="col-xs-12 col-sm-6">--}}
                    {{--<form class="omb_loginForm" action="" autocomplete="off" method="POST">--}}
                        {{--<div class="input-group">--}}
                            {{--<span class="input-group-addon"><i class="fa fa-user"></i></span>--}}
                            {{--<input type="text" class="form-control" name="email" placeholder="email address" required>--}}
                        {{--</div>--}}
                        {{--<span class="help-block"></span>--}}

                        {{--<div class="input-group">--}}
                            {{--<span class="input-group-addon"><i class="fa fa-lock"></i></span>--}}
                            {{--<input  type="password" class="form-control" name="password" placeholder="Password" required>--}}
                        {{--</div>--}}
                        {{--<span class="help-block"></span>--}}

                        {{--<button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row omb_row-sm-offset-3">--}}
                {{--<div class="col-xs-12 col-sm-3">--}}
                    {{--<p class="omb_forgotPwd ">--}}
                        {{--<a href="{!! url('password/email') !!}"  class="forget-pass-btn">Forgot password?</a>--}}
                    {{--</p>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</form>--}}
{{--</div>--}}

{{--<div id="register-form" style="display: none">--}}
    {{--<form method="post" action="{!! url('user/register') !!}">--}}
        {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}

        {{--<div class="omb_login">--}}
            {{--<h3 class="omb_authTitle">Sign up - Tattoo Lover, Artist or Studio Owner</h3>--}}
            {{--<div class="row omb_socialButtons">--}}
                {{--<div class="col-sm-push-3 col-sm-6 col-xs-push-1 col-xs-10">--}}
                    {{--<a href="{!! url('user/login/facebook') !!}" class="btn btn-lg btn-block omb_btn-facebook">--}}
                        {{--Register with <span>facebook</span>--}}
                    {{--</a>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="row omb_row-sm-offset-3 omb_loginOr">--}}
                {{--<div class="col-xs-12 col-sm-6">--}}
                    {{--<hr class="omb_hrOr">--}}
                    {{--<span class="omb_spanOr">or</span>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="row omb_row-sm-offset-3">--}}
                {{--<div class="col-xs-12 col-sm-6">--}}
                    {{--<form class="omb_loginForm" action="" autocomplete="off" method="POST">--}}
                        {{--<div class="input-group">--}}
                            {{--<span class="input-group-addon"><i class="fa fa-user"></i></span>--}}
                            {{--<input type="text" class="form-control" name="firstname" value="{{ old('name') }}" placeholder="first name" required>--}}
                        {{--</div>--}}
                        {{--<span class="help-block"></span>--}}

                        {{--<div class="input-group">--}}
                            {{--<span class="input-group-addon"><i class="fa fa-user"></i></span>--}}
                            {{--<input type="text" class="form-control" name="lastname" value="{{ old('name') }}" placeholder="last name" required>--}}
                        {{--</div>--}}
                        {{--<span class="help-block"></span>--}}

                        {{--<div class="input-group">--}}
                            {{--<span class="input-group-addon"><i class="fa fa-user"></i></span>--}}
                            {{--<input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="email address" required>--}}
                        {{--</div>--}}
                        {{--<span class="help-block"></span>--}}

                        {{--<div class="input-group">--}}
                            {{--<span class="input-group-addon"><i class="fa fa-tablet"></i></span>--}}
                            {{--<input type="number" class="form-control" name="contact" value="{{ old('contact') }}" placeholder="contact number" required>--}}
                        {{--</div>--}}
                        {{--<span class="help-block"></span>--}}

                        {{--<div class="input-group">--}}
                            {{--<span class="input-group-addon"><i class="fa fa-lock"></i></span>--}}
                            {{--<input  type="password" class="form-control" name="password" placeholder="password" required>--}}
                        {{--</div>--}}
                        {{--<span class="help-block"></span>--}}

                        {{--<div class="input-group">--}}
                            {{--<span class="input-group-addon"><i class="fa fa-lock"></i></span>--}}
                            {{--<input  type="password" class="form-control" name="password_confirmation" placeholder="confirm Password" required>--}}
                        {{--</div>--}}
                        {{--<span class="help-block"></span>--}}

                        {{--<button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<br><br>--}}
        {{--</div>--}}
    {{--</form>--}}
{{--</div>--}}

{{--<div id="forget-pass-form" style="display: none">--}}
    {{--<form method="post" action="{!! url('password/email') !!}">--}}
        {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}

        {{--<div class="omb_login">--}}
            {{--<h3 class="omb_authTitle">Recover your password..</h3>--}}

            {{--<div class="row omb_row-sm-offset-3">--}}
                {{--<div class="col-xs-12 col-sm-6">--}}
                    {{--<form class="omb_loginForm" action="" autocomplete="off" method="POST">--}}
                        {{--<div class="input-group">--}}
                            {{--<span class="input-group-addon"><i class="fa fa-user"></i></span>--}}
                            {{--<input type="text" class="form-control" name="email" placeholder="email address">--}}
                        {{--</div>--}}
                        {{--<span class="help-block"></span>--}}

                        {{--<button class="btn btn-lg btn-primary btn-block" type="submit">Recover Password</button>--}}
                    {{--</form>--}}
                    {{--<br><br><br>--}}
                {{--</div>--}}
            {{--</div>--}}

        {{--</div>--}}
    {{--</form>--}}
{{--</div>--}}