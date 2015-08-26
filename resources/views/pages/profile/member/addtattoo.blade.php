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
                <br>
                <h2 class="text-center text-danger">Add Tattoo</h2>
                <br>
                <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
                    <!-- left column -->
                    <div class="col-md-3">
                        <div class="text-center">
                            <img src="//placehold.it/100" class="avatar" alt="avatar">
                            <h6>Upload Tattoo</h6>
                            <input type="file" name="avatar" class="form-control">
                        </div>
                        <br>
                    </div>

                    <!-- edit form column -->
                    <div class="col-md-9 personal-info">
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger alert-dismissable">
                                <a class="panel-close close" data-dismiss="alert">×</a>
                                {!! $error !!}
                            </div>
                        @endforeach

                        {!! csrf_field() !!}

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Title:</label>
                            <div class="col-lg-8">
                                <input class="form-control" type="text" name="title" value="{!! old('title') !!}" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Description:</label>
                            <div class="col-lg-8">
                                <input class="form-control" type="text" name="desc" value="{!! old('desc') !!}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Artist:</label>
                            <div class="col-lg-8">
                                <select id="artist" name="artist" class="form-control">
                                    <option value="0">Select Artist</option>
                                    @foreach($artists as $art)
                                        <option value="{!! $art->id !!}">{!! $art->user->name !!}</option>
                                    @endforeach
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