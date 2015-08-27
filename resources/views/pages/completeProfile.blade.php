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
                        <h2 class="text-center">Welcome, <span class="text-danger">{!! $user->name !!}</span></h2>
                        <br>
                        <h4 class="text-center">Complete your profile as:</h4>
                    </div>
                    <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
                        <div class="btn-group" role="group">
                            <button type="button" id="stars" class="btn btn-warning btn-custom" href="#tab1" data-toggle="tab">
                                TATTOO LOVER
                            </button>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="button" id="favorites" class="btn btn-default btn-custom" href="#tab2" data-toggle="tab">
                                ARTIST
                            </button>
                        </div>
                    </div>

                    <div class="well">
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="tab1">
                                <form method="post">
                                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                                    <input type="hidden" name="type" value="member" />

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="firstname">First Name</label>
                                                <input type="text" value="{!! old('firstname') !!}" name="firstname" id="firstname" class="form-control" placeholder="First Name" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="lastname">Last Name</label>
                                                <input type="text" value="{!! old('lastname') !!}" name="lastname" id="lastname" class="form-control" placeholder="Last Name" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" value="{!! $user->email !!}" name="email" id="email" class="form-control" placeholder="Email" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label for="contact">Contact</label>
                                                <input type="text" value="{!! old('contact') !!}" name="contact" id="contact" class="form-control" placeholder="Contact No." required>
                                            </div>

                                            <div class="clearfix">
                                                <button class="btn btn-warning btn-custom pull-right" type="submit">Continue</button>
                                            </div>
                                            <br>
                                        </div>
                                        <div class="col-sm-6 text-center">
                                            <br>
                                            <img src="{!! $user->avatar or '//placehold.it/100' !!}" class="avatar img-circle" alt="avatar">
                                        </div>

                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade in" id="tab2">
                                <form method="post">
                                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                                    <input type="hidden" name="type" value="artist" />

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="firstname1">First Name</label>
                                                <input type="text" value="{!! old('firstname') !!}" name="firstname" id="firstname1" class="form-control" placeholder="First Name" required>

                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="lastname1">Last Name</label>
                                                <input type="text" value="{!! old('lastname') !!}" name="lastname" id="lastname1" class="form-control" placeholder="Last Name" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="email1">Email</label>
                                                <input type="email" value="{!! $user->email !!}" name="email" id="email1" class="form-control" placeholder="Email" readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="contact1">Contact</label>
                                                <input type="numberr" value="{!! old('contact') !!}" name="contact" id="contact1" class="form-control" placeholder="Contact No." required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="contact1">Tattooing since</label>
                                                <select id="experience" name="experience" class="form-control">
                                                    <?php echo $year = date('Y'); ?>
                                                    @for($i = $year; $i>1989; $i--)

                                                        <option value="{!! $i !!}" >  {!! $i !!}  </option>
                                                    @endfor
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="contact1">Bio</label>
                                                <textarea class="form-control" name="bio" rows="3">{!! old('bio') !!}</textarea>
                                            </div>
                                        </div>

                                        <div class="clearfix">
                                            <button class="btn btn-warning btn-custom pull-right" type="submit">Continue</button>
                                        </div>
                                        <br>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <br>
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