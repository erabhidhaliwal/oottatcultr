@extends('layout')

@section('title', 'Profile - TattooCultr')

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
            <h2><span class="text-danger">{!! $user->name !!}</span></h2>
            <hr>
            <div class="row">
                <!-- left column -->
                <div class="col-md-3">
                    <div class="text-center">
                        <img src="{!! $user->avatar or '//placehold.it/100' !!}" class="avatar img-circle" alt="avatar">
                        <h6>Upload profile photo</h6>
                        <input type="file" class="form-control">
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

                    <form class="form-horizontal" role="form" method="post">
                        {!! csrf_field() !!}

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Name:</label>
                            <div class="col-lg-8">
                                <input class="form-control" type="text" name="name" value="{!! $user->name !!}" readonly>
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
                                <input type="button" class="btn btn-primary" value="Save Changes">
                                <span></span>
                                {{--<input type="reset" class="btn btn-default" value="Cancel">--}}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <hr>
    </section>
    <br><br><br><br>
@endsection

@section('footer')
@endsection