@extends('layout')

@section('title', 'Tattoos - Tattoo Cultr')

@section('header')
@endsection

@section('content')

<div class="wrapper">

    <header class="header">
            <div class="row">
                <div class="col-md-4">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle menu-button" data-toggle="collapse" data-target="#myNavbar">
                            <span class="glyphicon glyphicon-align-justify"></span>
                        </button>
                        <a class="navbar-brand logo" href="{!! url('/') !!}"><img src="{!! asset('assets/images/logo.png') !!}" alt=""></a>
                    </div>
                </div>
                <div class="col-md-8">
                    <nav class="collapse navbar-collapse" id="myNavbar" role="navigation">
                        <ul class="nav navbar-nav navbar-right menu">
                            <li><a href="{!! url('artists') !!}" class="page-scroll active">ARTISTS</a></li>
                            <li><a href="{!! url('studios') !!}" class="page-scroll">STUDIOS</a></li>
                            <li><a href="{!! url('tattoo-cultr') !!}" class="page-scroll">TATTOO CULTR</a></li>
                            <li><a href="{!! url('care') !!}" class="page-scroll">CARE</a></li>
                            <li><a href="{!! url('user/login') !!}" class="page-scroll">LOGIN</a></li>
                            <li><a href="{!! url('user/register') !!}" class="page-scroll">REGISTER</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
    </header>

    <div class="container-fluid main" id="page-top">
        <div class="row">
            <div class="col-md-12 backg">
                <h3>Explore Our Culture</h3>
            </div>
        </div>
    </div>

    <section>
        <div class="container">
            <h2 class="section-head text-center">Artist of the <span class="text-danger">month</span></h2>
            <div class="section-content secton-hr">
                <div class="media">
                    <div class="media-left">
                        <a href="#">
                            <img class="media-object" src="{!! asset('assets/images/artist1.jpg') !!}" alt="...">
                        </a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Funky Monkey</h4>
                        <p>Hi, I am Raju Pandeya from Funky Monkey Tattoos and I am the artist of the month !</p>
                        <p>I started tattoo 15 years back when i joined Funky Monkey Tattoos in New Delhi, India
                            in 2002. We are one of the first tattoo studios in India.</p>
                        <p>Tattoo is not a work for me, it is my life !
                            to see my work please see my profile...</p>

                        <button class="btn btn-default">View Profile</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <br/><br/>
            <h2 class="section-head text-center">Featured <span class="text-danger">Artists</span></h2>
            <p class="section-head text-center">Meet our featured artists,
                they are the top notch artists in the industry today, connect with them on their profile.</p>

            <div class="section-content secton-hr text-center">
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <img src="{!! asset('assets/images/artist9.jpg') !!}" alt="...">
                            <div class="caption">
                                <p class="text-warning">Andie Rogers</p>
                                <p>Rogers Tattooz </p>
                                <p>Canada</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <img src="{!! asset('assets/images/artist2.jpg') !!}" alt="...">
                            <div class="caption">
                                <p class="text-warning">Andie Rogers</p>
                                <p>Rogers Tattooz </p>
                                <p>Canada</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <img src="{!! asset('assets/images/artist3.jpg') !!}" alt="...">
                            <div class="caption">
                                <p class="text-warning">Andie Rogers</p>
                                <p>Rogers Tattooz </p>
                                <p>Canada</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <img src="{!! asset('assets/images/artist4.jpg') !!}" alt="...">
                            <div class="caption">
                                <p class="text-warning">Andie Rogers</p>
                                <p>Rogers Tattooz </p>
                                <p>Canada</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <img src="{!! asset('assets/images/artist5.jpg') !!}" alt="...">
                            <div class="caption">
                                <p class="text-warning">Andie Rogers</p>
                                <p>Rogers Tattooz </p>
                                <p>Canada</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <img src="{!! asset('assets/images/artist6.jpg') !!}" alt="...">
                            <div class="caption">
                                <p class="text-warning">Andie Rogers</p>
                                <p>Rogers Tattooz </p>
                                <p>Canada</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <img src="{!! asset('assets/images/artist7.jpg') !!}" alt="...">
                            <div class="caption">
                                <p class="text-warning">Andie Rogers</p>
                                <p>Rogers Tattooz </p>
                                <p>Canada</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <img src="{!! asset('assets/images/artist8.jpg') !!}" alt="...">
                            <div class="caption">
                                <p class="text-warning">Andie Rogers</p>
                                <p>Rogers Tattooz </p>
                                <p>Canada</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <button class="btn btn-default btn-lg">VIEW MORE</button>
                </div>
            </div>

        </div>
    </section>

    <section>
        <div class="container popular">
            <br/><br/>
            <h2 class="section-head text-center">Popular <span class="text-danger">Tattoos</span></h2>

            <div class="section-content secton-hr text-center">
                <div class="row">
                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <a href="#" class="thumbnail">
                            <img src="{!! asset('assets/images/tattoo2.jpeg') !!}" alt="...">
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <a href="#" class="thumbnail">
                            <img src="{!! asset('assets/images/tattoo1.jpg') !!}" alt="...">
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <a href="#" class="thumbnail">
                            <img src="{!! asset('assets/images/tattoo3.jpg') !!}" alt="...">
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <a href="#" class="thumbnail">
                            <img src="{!! asset('assets/images/tattoo4.jpg') !!}" alt="...">
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <a href="#" class="thumbnail">
                            <img src="{!! asset('assets/images/tattoo5.jpg') !!}" alt="...">
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <a href="#" class="thumbnail">
                            <img src="{!! asset('assets/images/tattoo6.jpg') !!}" alt="...">
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <a href="#" class="thumbnail">
                            <img src="{!! asset('assets/images/tattoo7.png') !!}" alt="...">
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <a href="#" class="thumbnail">
                            <img src="{!! asset('assets/images/tattoo8.jpg') !!}" alt="...">
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <a href="#" class="thumbnail">
                            <img src="{!! asset('assets/images/tattoo9.jpg') !!}" alt="...">
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <a href="#" class="thumbnail">
                            <img src="{!! asset('assets/images/tattoo10.jpg') !!}" alt="...">
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <a href="#" class="thumbnail">
                            <img src="{!! asset('assets/images/tattoo11.jpg') !!}" alt="...">
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <a href="#" class="thumbnail">
                            <img src="{!! asset('assets/images/tattoo112.jpg') !!}" alt="...">
                        </a>
                    </div>
                </div>
                <div class="row">
                    <button class="btn btn-default btn-lg">VIEW MORE</button>
                </div>
            </div>

        </div>
    </section>


    <footer>
        <div class="container text-center">
            <div class="footer-links">
                <ul class="list-inline">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Terms of use</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>

            <div class="social-links">
                <h3 class="text-warning">JOIN US ON</h3>
                <button type="button" class="btn btn-default btn-circle"><i class="fa fa-facebook"></i>
                </button>
                <button type="button" class="btn btn-default btn-circle"><i class="fa fa-twitter"></i>
                </button>
                <button type="button" class="btn btn-default btn-circle"><i class="fa fa-linkedin"></i>
                </button>
                <button type="button" class="btn btn-default btn-circle"><i class="fa fa-envelope-o"></i>
                </button>
            </div>
            <hr>
            <p class="copyright">&copy; 2014–2015 Tattoo Cultr. All rights reserved.</p>
        </div>
    </footer>


</div>
@endsection

@section('footer')
@endsection