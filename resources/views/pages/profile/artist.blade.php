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
            <div class="section-content text-center">
                <div class="row">
                    <h2 class="section-head text-center">Pending <span class="text-danger">Follower's</span> Requests</h2>

                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <a href="#">
                                <img src="{!! asset('assets/images/artist2.jpg') !!}" alt="...">
                            </a>
                            <div class="caption">
                                <p class="text-warning">Andie Rogers, <span class="text-light-black"> Canada </span></p>
                            </div>
                            <div class="follow-actions">
                                <button class="btn btn-xs btn-success approve-follow" data-id="">Allow</button>
                                <button class="btn btn-xs btn-danger reject-follow" data-id="">Reject</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <a href="#">
                                <img src="{!! asset('assets/images/artist3.jpg') !!}" alt="...">
                            </a>
                            <div class="caption">
                                <p class="text-warning">Andie Rogers, <span class="text-light-black"> Canada </span></p>
                            </div>
                            <div class="follow-actions">
                                <button class="btn btn-xs btn-success approve-follow" data-id="">Allow</button>
                                <button class="btn btn-xs btn-danger reject-follow" data-id="">Reject</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <a href="#">
                                <img src="{!! asset('assets/images/artist4.jpg') !!}" alt="...">
                            </a>
                            <div class="caption">
                                <p class="text-warning">Andie Rogers, <span class="text-light-black"> Canada </span></p>
                            </div>
                            <div class="follow-actions">
                                <button class="btn btn-xs btn-success approve-follow" data-id="">Allow</button>
                                <button class="btn btn-xs btn-danger reject-follow" data-id="">Reject</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <a href="#">
                                <img src="{!! asset('assets/images/artist5.jpg') !!}" alt="...">
                            </a>
                            <div class="caption">
                                <p class="text-warning">Andie Rogers, <span class="text-light-black"> Canada </span></p>
                            </div>
                            <div class="follow-actions">
                                <button class="btn btn-xs btn-success approve-follow" data-id="">Allow</button>
                                <button class="btn btn-xs btn-danger reject-follow" data-id="">Reject</button>
                            </div>
                        </div>
                    </div>

                </div>
                {{--<div class="row">--}}
                {{--<button class="btn btn-default btn-lg">VIEW MORE</button>--}}
                {{--</div>--}}

            </div>

        </div>
    </section>

    <section>
        <div class="container">
            <div class="section-content secton-hr text-center">
                <div class="row">
                    <h2 class="section-head text-center">Pending <span class="text-danger">Studio's</span> Approvals</h2>

                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <a href="#">
                                <img src="{!! asset('assets/images/artist2.jpg') !!}" alt="...">
                            </a>
                            <div class="caption">
                                <p class="text-warning">Andie Rogers, <span class="text-light-black"> Canada </span></p>
                                <p class="">Studio : <a href="#">Studio Name</a></p>
                            </div>
                            <div class="follow-actions">
                                <button class="btn btn-xs btn-success approve-follow" data-id="">Allow</button>
                                <button class="btn btn-xs btn-danger reject-follow" data-id="">Reject</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <a href="#">
                                <img src="{!! asset('assets/images/artist3.jpg') !!}" alt="...">
                            </a>
                            <div class="caption">
                                <p class="text-warning">Andie Rogers, <span class="text-light-black"> Canada </span></p>
                                <p class="">Studio : <a href="#">Studio Name</a></p>
                            </div>
                            <div class="follow-actions">
                                <button class="btn btn-xs btn-success approve-follow" data-id="">Allow</button>
                                <button class="btn btn-xs btn-danger reject-follow" data-id="">Reject</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <a href="#">
                                <img src="{!! asset('assets/images/artist4.jpg') !!}" alt="...">
                            </a>
                            <div class="caption">
                                <p class="text-warning">Andie Rogers, <span class="text-light-black"> Canada </span></p>
                                <p class="">Studio : <a href="#">Studio Name</a></p>
                            </div>
                            <div class="follow-actions">
                                <button class="btn btn-xs btn-success approve-follow" data-id="">Allow</button>
                                <button class="btn btn-xs btn-danger reject-follow" data-id="">Reject</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <a href="#">
                                <img src="{!! asset('assets/images/artist5.jpg') !!}" alt="...">
                            </a>
                            <div class="caption">
                                <p class="text-warning">Andie Rogers, <span class="text-light-black"> Canada </span></p>
                                <p class="">Studio : <a href="#">Studio Name</a></p>
                            </div>
                            <div class="follow-actions">
                                <button class="btn btn-xs btn-success approve-follow" data-id="">Allow</button>
                                <button class="btn btn-xs btn-danger reject-follow" data-id="">Reject</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <a href="#">
                                <img src="{!! asset('assets/images/artist4.jpg') !!}" alt="...">
                            </a>
                            <div class="caption">
                                <p class="text-warning">Andie Rogers, <span class="text-light-black"> Canada </span></p>
                                <p class="">Studio : <a href="#">Studio Name</a></p>
                            </div>
                            <div class="follow-actions">
                                <button class="btn btn-xs btn-success approve-follow" data-id="">Allow</button>
                                <button class="btn btn-xs btn-danger reject-follow" data-id="">Reject</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <a href="#">
                                <img src="{!! asset('assets/images/artist5.jpg') !!}" alt="...">
                            </a>
                            <div class="caption">
                                <p class="text-warning">Andie Rogers, <span class="text-light-black"> Canada </span></p>
                                <p class="">Studio : <a href="#">Studio Name</a></p>
                            </div>
                            <div class="follow-actions">
                                <button class="btn btn-xs btn-success approve-follow" data-id="">Allow</button>
                                <button class="btn btn-xs btn-danger reject-follow" data-id="">Reject</button>
                            </div>
                        </div>
                    </div>

                </div>
                {{--<div class="row">--}}
                {{--<button class="btn btn-default btn-lg">VIEW MORE</button>--}}
                {{--</div>--}}

            </div>

        </div>
    </section>

    <section>
        <div class="container">
            <h2 class="section-head text-center">Pending <span class="text-danger">Tattoo's</span> Approvals</h2>

            <div class="section-content text-center">
                <div class="row">
                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <a href="{!! asset('assets/images/tattoo2.jpeg') !!}" data-lightbox="image-1" data-title="My caption" class="thumbnail">
                            <img src="{!! asset('assets/images/tattoo2.jpeg') !!}" alt="...">
                        </a>
                        <div class="image-actions">
                            <div class="by">
                                By : <a href="#">Mrigendra Singh</a>
                            </div>
                            <button class="btn btn-xs btn-success approve-tattoo" data-id="">Approve</button>
                            <button class="btn btn-xs btn-danger reject-tattoo" data-id="">Delete</button>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <a href="{!! asset('assets/images/tattoo1.jpg') !!}" data-lightbox="image-1" data-title="My caption" class="thumbnail">
                            <img src="{!! asset('assets/images/tattoo1.jpg') !!}" alt="...">
                        </a>
                        <div class="image-actions">
                            <div class="by">
                                By : <a href="#">Mrigendra Singh</a>
                            </div>
                            <button class="btn btn-xs btn-success approve-tattoo" data-id="">Approve</button>
                            <button class="btn btn-xs btn-danger reject-tattoo" data-id="">Delete</button>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <a href="{!! asset('assets/images/tattoo5.jpg') !!}" data-lightbox="image-1" data-title="My caption" class="thumbnail">
                            <img src="{!! asset('assets/images/tattoo5.jpg') !!}" alt="...">
                        </a>
                        <div class="image-actions">
                            <div class="by">
                                By : <a href="#">Mrigendra Singh</a>
                            </div>
                            <button class="btn btn-xs btn-success approve-tattoo" data-id="">Approve</button>
                            <button class="btn btn-xs btn-danger reject-tattoo" data-id="">Delete</button>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <a href="{!! asset('assets/images/tattoo112.jpg') !!}" data-lightbox="image-1" data-title="My caption" class="thumbnail">
                            <img src="{!! asset('assets/images/tattoo112.jpg') !!}" alt="...">
                        </a>
                        <div class="image-actions">
                            <div class="by">
                                By : <a href="#">Mrigendra Singh</a>
                            </div>
                            <button class="btn btn-xs btn-success approve-tattoo" data-id="">Approve</button>
                            <button class="btn btn-xs btn-danger reject-tattoo" data-id="">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br><br><br><br><br>
@endsection

@section('footer')
@endsection