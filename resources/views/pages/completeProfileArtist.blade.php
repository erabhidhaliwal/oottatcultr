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

                <form class="form-horizontal" role="form" method="post">
                <!-- left column -->
                <div class="col-md-3">
                    <div class="text-center">
                        <img src="{!! $user->avatar or '//placehold.it/100' !!}" class="avatar img-circle" alt="avatar">
                        <h6>Upload profile photo</h6>
                        <input type="file" name="avatar" class="form-control">
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
                            <label class="col-lg-3 control-label">Tattooing since:</label>
                            <div class="col-lg-8">
                                <select id="experience" name="experience" class="form-control">
                                    <?php echo $year = date('Y'); ?>
                                    @for($i = $year; $i>1989; $i--)

                                            <option value="{!! $i !!}" >  {!! $i !!}  </option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Studio:</label>
                            <div class="col-lg-8">
                                <ul class="nav nav-tabs nav-justified">
                                    <li class="active"><a href="#select-existing-tab" data-toggle="tab">Select Existing Studio</a></li>
                                    <li><a href="#create-new-tab" data-toggle="tab">Create New Studio</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="select-existing-tab">
                                        <br>
                                        <select id="studios" name="studio" class="form-control">
                                            <option value="0">Select Studio</option>
                                            <option value="1">Studio 1</option>
                                            <option value="2">Studio 2</option>
                                            <option value="3">Studio 3</option>
                                            <option value="4">Studio 4</option>
                                            <option value="5">Studio 5</option>
                                        </select>
                                        <br>
                                    </div>

                                    <div class="tab-pane" id="create-new-tab">
                                        <br>
                                        <div class="form-group">
                                            <label class="control-label sr-only">Studio Name:</label>
                                            <div class="col-lg-12">
                                                <input class="form-control" type="text" name="studioName" value="{!! old('studioName') !!}" placeholder="Studio name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label sr-only">Studio City:</label>
                                            <div class="col-lg-12">
                                                <input class="form-control" type="text" name="studioCity" value="{!! old('studioCity') !!}" placeholder="Studio City">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label sr-only">Studio Country:</label>
                                            <div class="col-lg-12">
                                                <input class="form-control" type="text" name="studioCountry" value="{!! old('studioCountry') !!}" placeholder="Studio Country">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label sr-only">Latitude:</label>
                                            <div class="col-lg-12">
                                                <input class="form-control" type="text" name="studioLat" value="{!! old('studioLat') !!}" placeholder="Latitude">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label sr-only">Longitude:</label>
                                            <div class="col-lg-12">
                                                <input class="form-control" type="text" name="studioLong" value="{!! old('studioLong') !!}" placeholder="Logitude">
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                </div>
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
                    </form>
                </div>

            </div>
        </div>
        <hr>
    </section>
@endsection

@section('footer')
@endsection