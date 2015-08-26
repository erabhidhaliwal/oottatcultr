@extends('layout')

@section('title', 'Tattoos - Tattoo Cultr')

@section('header')
    <style>

        .bigicon {
            font-size: 35px;
        }
    </style>
@endsection

@section('content')

    <div class="container-fluid main" id="page-top">
        <div class="row">
            <div class="no-cover">
            </div>
            <br><br>
            <div class="container">
                <h2 class="text-center">Contact us</h2>
                <hr>
            </div>
        </div>
    </div>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-push-3">
                    <div class=" well-sm">
                        <form class="omb_loginForm" action="" autocomplete="off" method="POST">
                            <div class="input-group">
                                <span class="input-group-addon"></span>
                                <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                            </div>
                            <span class="help-block"></span>

                            <div class="input-group">
                                <span class="input-group-addon"></span>
                                <input type="text" class="form-control" name="email" placeholder="Email Address" required>
                            </div>
                            <span class="help-block"></span>

                            <div class="input-group">
                                <span class="input-group-addon"></span>
                                <input  type="text" class="form-control" name="contact" placeholder="Contact No." required>
                            </div>
                            <span class="help-block"></span>

                            <div class="input-group">
                                <span class="input-group-addon"></span>
                                <textarea class="form-control" name="query" rows="5" placeholder="Your Query"></textarea>
                            </div>
                            <span class="help-block"></span>

                            <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <br><br><br><br><br>
    </section>


@endsection

@section('footer')
@endsection