@extends('layout')

@section('title', 'Tattoos - Tattoo Cultr')

@section('header')
@endsection

@section('content')

    <div class="container-fluid main" id="page-top">
        <div class="row">
            <div class="cover-title">
                <h2>
                    <img class="avatar img-circle" src="{!! $user->avatar !!}" alt="{!! $user->name !!}">
                    {!! $user->name !!}
                </h2>
                <div class="cover-actions">
                    <div class="row text-center">
                        <a href="{!! url('profile/tattoos') !!}" class="btn btn-success btn-lg">Tattoos <i class="fa fa-flash"></i></a>
                        <a href="{!! url('profile/studios') !!}" class="btn btn-warning btn-lg">Studios <i class="fa fa-cubes"></i></a>
                        <a href="{!! url('profile/followers') !!}" class="btn btn-primary btn-lg">Followers <i class="fa fa-group"></i></a>
                        <a href="{!! url('profile/following') !!}" class="btn btn-info btn-lg">Following <i class="fa fa-group"></i></a>
                        <a href="{!! url('profile/edit') !!}" class="btn btn-default btn-lg">Edit Profile <i class="fa fa-gear"></i></a>
                    </div>
                </div>
            </div>

            <div class="cover">
                <img src="{!! $artist->cover !!}" alt="Home">
            </div>
        </div>
    </div>

    <section>
        <div class="container">
            <div class="row">

                <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
                    <!-- left column -->
                    <div class="col-md-3">
                        <div class="text-center">
                            <img src="{!! $user->avatar or '//placehold.it/100' !!}" class="avatar" alt="avatar">
                            <h6>Change profile</h6>
                            <input type="file" name="avatar" class="form-control">
                        </div>
                        <br>
                        <div class="text-center">
                            <img src="{!! $artist->cover or '//placehold.it/100' !!}" class="avatar" alt="cover">
                            <h6>Change Cover</h6>
                            <input type="file" name="cover" class="form-control">
                        </div>
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
                            <label class="col-lg-3 control-label">Bio</label>
                            <div class="col-lg-8">
                                <textarea class="form-control" rows="4"></textarea>
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
        <hr>
    </section>

    <br><br><br><br><br><br>
@endsection

@section('footer')
@endsection