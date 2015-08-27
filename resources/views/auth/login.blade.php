@extends('layout')

@section('title', 'Tattoos - Tattoo Cultr')

@section('header')
    <style>

    </style>
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
                        <h3>Login <hr></h3>
                    </div>

                    <div class="well">
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="tab1">
                                <form action="{!! url('user/login') !!}" method="post">
                                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="email" class="sr-only">Email</label>
                                                <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                                            </div>
                                            <div class="form-group">
                                                <label for="password" class="sr-only">Password</label>
                                                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                                            </div>

                                            <div>
                                                <a href="javascript:;" class="forget" data-toggle="modal" data-target=".forget-modal">Forgot your password?</a>
                                                <button class="btn btn-warning btn-custom pull-right" type="submit">Login</button>
                                            </div>

                                        </div>
                                        <div class="col-sm-6 text-center">
                                            <p>OR</p>
                                            <br>

                                            <a href="{!! url('user/login/facebook') !!}" class="btn btn-primary">Login with Facebook</a>
                                        </div>

                                        <div class="col-md-12 text-center">
                                            <br><br>
                                            Don't have an account yet? <a href="{!! url('user/register') !!}">Sign up</a>
                                            <br>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <br><br><br><br><br>
    </section>

    <div class="modal fade forget-modal" tabindex="-1" role="dialog" aria-labelledby="myForgetModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">×</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <h4>Recover your Password</h4>

                </div>
                <form action="{!! url('password/email') !!}" method="post">
                    <div class="modal-body">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="youe email address">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-custom btn-default" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-custom btn-default">Send Password</button>
                    </div>
                </form>
            </div> <!-- /.modal-content -->
        </div> <!-- /.modal-dialog -->
    </div> <!-- /.modal -->
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