@extends('layout')

@section('title', $user->name . ' - Tattoo Cultr')

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
            <div class="row text-center">
                <img class="avatar img-circle" src="{!! $user->avatar !!}" alt="{!! $user->name !!}">
                <h2>{!! $user->name !!}</h2>
            </div>

            <div class="row text-center member-actions">
                <a href="{!! url('profile/tattoos') !!}" class="btn btn-success btn-lg">Tattoos <i class="fa fa-flash"></i></a>
                <a href="{!! url('profile/following') !!}" class="btn btn-info btn-lg">Following <i class="fa fa-group"></i></a>
                <a href="{!! url('profile/edit') !!}" class="btn btn-default btn-lg">Edit Profile <i class="fa fa-gear"></i></a>
            </div>

        </div>
    </section>

    <section>
        <div class="container secton-hr">
            <div class="row">
                <br><br>
                <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
                    <!-- left column -->
                    <div class="col-md-3">
                        <div class="text-center">
                            <img src="{!! $user->avatar or '//placehold.it/100' !!}" class="avatar" alt="avatar">
                            <h6>Change profile</h6>
                            <input type="file" name="avatar" class="form-control">
                        </div>
                        <br>
                    </div>

                    <!-- edit form column -->
                    <div class="col-md-9 personal-info">
                        @foreach($errors->all() as $error)
                            <div class="alert alert-error alert-dismissable">
                                <a class="panel-close close" data-dismiss="alert">×</a>
                                {!! $error !!}
                            </div>
                        @endforeach

                        {!! csrf_field() !!}

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Name:</label>
                            <div class="col-lg-8">
                                <input class="form-control" type="text" name="name" value="{!! $user->name !!}" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Contact No:</label>
                            <div class="col-lg-8">
                                <input class="form-control" type="text" name="contact" value="{!! $user->contact or '' !!}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">City:</label>
                            <div class="col-lg-8">
                                <input class="form-control" type="text" name="city" value="{!! $user->city or '' !!}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Country:</label>
                            <div class="col-lg-8">
                                <select id="country" name="country" class="form-control">
                                    <option value="India">India</option>
                                    <option value="USA">USA</option>
                                    <option value="Canada">Canada</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="China">China</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-3 control-label"></label>
                            <div class="col-md-8">
                                <input type="submit" class="btn btn-primary" value="Save Changes">
                                <span></span>
                                {{--<input type="reset" class="btn btn-default" value="Cancel">--}}
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <br><br><br><br><br><br>
@endsection

@section('footer')
@endsection