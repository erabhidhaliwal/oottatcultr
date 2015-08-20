@extends('layout')

@section('title', 'Tattoos - Tattoo Cultr')

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
        <div class="form">
            <ul class="tab-group">
                <li class="tab"><a href="#signup">Sign Up</a></li>
                <li class="tab active"><a href="#login">Log In</a></li>
            </ul>

            <div class="tab-content">
                <div id="login">
                    <h1>Welcome Back!</h1>

                    <form action="{!! url('user/login') !!}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="field-wrap">
                            <label>
                                Email Address<span class="req">*</span>
                            </label>
                            <input type="email" name="email" required autocomplete="off"/>
                        </div>

                        <div class="field-wrap">
                            <label>
                                Password<span class="req">*</span>
                            </label>
                            <input type="password" name="password" required autocomplete="off"/>
                        </div>

                        <p class="forgot"><a href="#">Forgot Password?</a></p>

                        <button class="button button-block"/>Log In</button>

                    </form>

                </div>

                <div id="signup">
                    <h1>Sign Up for Free</h1>

                    <form action="{!! url('user/register') !!}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="field-wrap">
                            <label>
                                Name<span class="req">*</span>
                            </label>
                            <input type="text" name="name"  value="{{ old('name') }}" required autocomplete="off"/>
                        </div>

                        <div class="field-wrap">
                            <label>
                                Email Address<span class="req">*</span>
                            </label>
                            <input type="email" name="email" value="{{ old('email') }}" required autocomplete="off"/>
                        </div>

                        <div class="field-wrap">
                            <label>
                                Password<span class="req">*</span>
                            </label>
                            <input type="password" name="password" required autocomplete="off"/>
                        </div>

                        <div class="field-wrap">
                            <label>
                                Confirm Password<span class="req">*</span>
                            </label>
                            <input type="password" name="password_confirmation" required autocomplete="off"/>
                        </div>

                        <button type="submit" class="button button-block"/>Get Started</button>

                    </form>

                </div>

            </div><!-- tab-content -->

        </div> <!-- /form -->
    </section>

@endsection

@section('footer')
@endsection