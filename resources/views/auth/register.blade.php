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
        <div class="container">
            <div class="row form" >
                <div class="col-lg-8 col-sm-8 col-sm-push-2" style="background-color: rgba(22,22,22,.02); border-radius: 5px">
                    <div class="card hovercard">
                        <h3>Sign up</h3>
                    </div>
                    <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
                        <div class="btn-group" role="group">
                            <button type="button" id="stars" class="btn btn-warning btn-custom" href="#tab1" data-toggle="tab">
                                MEMBER
                            </button>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="button" id="favorites" class="btn btn-default btn-custom" href="#tab2" data-toggle="tab">
                                ARTIST
                            </button>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="button" id="following" class="btn btn-default btn-custom" href="#tab3" data-toggle="tab">
                                STUDIO
                            </button>
                        </div>
                    </div>

                    <div class="well">
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="tab1">
                                <form action="{!! url('user/register') !!}" method="post">
                                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                                    <input type="hidden" name="type" value="member" />

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="firstname" class="sr-only">First Name</label>
                                                <input type="text" value="{!! old('firstname') !!}" name="firstname" id="firstname" class="form-control" placeholder="First Name" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="lastname" class="sr-only">Last Name</label>
                                                <input type="text" value="{!! old('lastname') !!}" name="lastname" id="lastname" class="form-control" placeholder="Last Name" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="email" class="sr-only">Email</label>
                                                <input type="email" value="{!! old('email') !!}" name="email" id="email" class="form-control" placeholder="Email" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="contact" class="sr-only">Contact</label>
                                                <input type="number" value="{!! old('contact') !!}" name="contact" id="contact" class="form-control" placeholder="Contact No." required>
                                            </div>
                                            <div class="form-group">
                                                <label for="password" class="sr-only">Password</label>
                                                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="password_confirmation" class="sr-only">Confirm Password</label>
                                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirm Password" required>
                                            </div>
                                            <div class="col-xs-12">
                                                By signing up, I agree to <a href="{!! url('terms') !!}">Terms</a> and
                                                <a href="{!! url('privacy') !!}">Privacy Policy</a>.
                                            </div>

                                            <div class="clearfix">
                                                <button class="btn btn-warning btn-custom pull-right" type="submit">Sign Up</button>
                                            </div>
                                            <br>
                                        </div>
                                        <div class="col-sm-6 text-center">
                                            <h3>OR</h3>
                                            <br>

                                            <a href="{!! url('user/login/facebook') !!}" class="btn btn-primary">Sign up with Facebook</a>
                                        </div>

                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade in" id="tab2">
                                <form action="{!! url('user/register') !!}" method="post">
                                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                                    <input type="hidden" name="type" value="artist" />

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="firstname1" class="sr-only">First Name</label>
                                                <input type="text" value="{!! old('firstname') !!}" name="firstname" id="firstname1" class="form-control" placeholder="First Name" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="lastname1" class="sr-only">Last Name</label>
                                                <input type="text" value="{!! old('lastname') !!}" name="lastname" id="lastname1" class="form-control" placeholder="Last Name" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="email1" class="sr-only">Email</label>
                                                <input type="email" value="{!! old('email') !!}" name="email" id="email1" class="form-control" placeholder="Email" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="contact1" class="sr-only">Contact</label>
                                                <input type="numberr" value="{!! old('contact') !!}" name="contact" id="contact1" class="form-control" placeholder="Contact No." required>
                                            </div>
                                            <div class="form-group">
                                                <label for="password1" class="sr-only">Password</label>
                                                <input type="password" name="password" id="password1" class="form-control" placeholder="Password" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="password_confirmation1" class="sr-only">Confirm Password</label>
                                                <input type="password" name="password_confirmation" id="password_confirmation1" class="form-control" placeholder="Confirm Password" required>
                                            </div>
                                            <div class="col-xs-12">
                                                By signing up, I agree to <a href="{!! url('terms') !!}">Terms</a> and
                                                <a href="{!! url('privacy') !!}">Privacy Policy</a>.
                                            </div>

                                            <div class="clearfix">
                                                <button class="btn btn-warning btn-custom pull-right" type="submit">Sign Up</button>
                                            </div>
                                            <br>
                                        </div>
                                        <div class="col-sm-6 text-center">
                                            <h3>OR</h3>
                                            <br>

                                            <a href="{!! url('user/login/facebook') !!}" class="btn btn-primary">Sign up with Facebook</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade in" id="tab3">
                                <form action="{!! url('user/register') !!}" method="post">
                                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                                    <input type="hidden" name="type" value="studio" />

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="name" class="sr-only">Studio Name</label>
                                                <input type="text" value="{!! old('name') !!}" name="name" id="name" class="form-control" placeholder="Studio Name" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="title" class="sr-only">tuio Title</label>
                                                <input type="text" value="{!! old('title') !!}" name="title" id="title" class="form-control" placeholder="Stuio Title" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="email2" class="sr-only">Email</label>
                                                <input type="email" value="{!! old('email') !!}" name="email" id="email2" class="form-control" placeholder="Email" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="contact2" class="sr-only">Contact</label>
                                                <input type="number" value="{!! old('contact') !!}" name="contact" id="contact2" class="form-control" placeholder="Contact No." required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="password2" class="sr-only">Password</label>
                                                <input type="password" name="password" id="password2" class="form-control" placeholder="Password" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="password_confirmation2" class="sr-only">Confirm Password</label>
                                                <input type="password" name="password_confirmation" id="password_confirmation2" class="form-control" placeholder="Password" required>
                                            </div>
                                        </div>

                                        <div class="col-xs-12">
                                            By signing up, I agree to <a href="{!! url('terms') !!}">Terms</a> and
                                            <a href="{!! url('privacy') !!}">Privacy Policy</a>.
                                        </div>
                                        <br>

                                        <div class="clearfix">
                                            <button class="btn btn-warning btn-custom pull-right" type="submit">Sign Up</button>
                                        </div>
                                        <br>
                                    </div>

                                </form>
                            </div>

                            <div class="col-md-12 text-center">
                                <br><br>
                                Already a member? <a href="{!! url('user/login') !!}">Login here</a>
                                <br><br><br>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>

        <br><br><br><br><br>
    </section>


@endsection

@section('footer')
    <script>
        $(document).ready(function() {
            $(".btn-pref .btn").click(function () {
                $(".btn-pref .btn").removeClass("btn-warning").addClass("btn-default");
                // $(".tab").addClass("active"); // instead of this do the below
                $(this).removeClass("btn-default").addClass("btn-warning");
            });
        });
    </script>
@endsection