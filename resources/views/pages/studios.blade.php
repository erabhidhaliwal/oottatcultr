@extends('layout')

@section('title', 'Tattoos - Tattoo Cultr')

@section('header')
@endsection

@section('content')

    <div class="container-fluid main" id="page-top">
        <div class="row">
            <div class="cover-title">
                <h2>The Best Tatt Shops in Town</h2>
            </div>
            <div class="cover">
                <img src="assets/images/bg5.jpg" alt="Studios">
            </div>
        </div>
    </div>

    <section>
        <div class="container">
            <h2 class="section-head text-center"> <span class="text-danger">Tattoo Studios</span></h2>
            <p class="section-head text-center">find tattoo studios near you</p>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-push-4 col-md-4">
                    <form method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div id="custom-search-input">
                            <div class="input-group col-md-12">
                                <input type="text" class="form-control input-lg" placeholder="Enter your location" />
                                <span class="input-group-btn">
                                    <button class="btn btn-info btn-lg" type="submit">
                                        <i class="glyphicon glyphicon-search"></i>
                                    </button>
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <section class="artists">
        <div class="container">
            <br><br>
            <div class="section-content secton-hr text-center">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="{!! asset('assets/images/studio1.png') !!}" alt="...">
                            <div class="caption">
                                <p class="text-warning">Manjeet Tattoos</p>
                                <p>1st Floor, E-11, Near Tilak Nagar Metro Station, Main Jail Road, Gurunanak Pura, New Delhi, Delhi 110018</p>
                            </div>
                            <div>
                                <button class="btn btn-primary">MORE INFO</button>
                                <button class="btn btn-warning"><strong>4</strong> Artists</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="{!! asset('assets/images/studio2.png') !!}" alt="...">
                            <div class="caption">
                                <p class="text-warning">Andie Rogers</p>
                                <p>Shop No. 1, Perry Cross Road, Off Crafter Road, New Kant Wadi, Bandra West, Mumbai, Maharashtra 400050</p>
                            </div>
                            <div>
                                <button class="btn btn-primary">MORE INFO</button>
                                <button class="btn btn-warning"><strong>4</strong> Artists</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="{!! asset('assets/images/studio6.png') !!}" alt="...">
                            <div class="caption">
                                <p class="text-warning">Andie Rogers</p>
=                                <p>Shop No. M-53, Top Floor, G.K-1, M Block Market, Above W Showroom, New Delhi, Delhi 110048 </p>
                            </div>
                            <div>
                                <button class="btn btn-primary">MORE INFO</button>
                                <button class="btn btn-warning"><strong>4</strong> Artists</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="{!! asset('assets/images/studio5.png') !!}" alt="...">
                            <div class="caption">
                                <p class="text-warning">Funky Tattooz</p>
                                <p>Shop No. 244, 2nd Floor, DLF City Center Mall, MG Road, DLF City Centre Gurgaon, Gurgaon, Haryana 122002</p>
                            </div>
                            <div>
                                <button class="btn btn-primary">MORE INFO</button>
                                <button class="btn btn-warning"><strong>4</strong> Artists</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="{!! asset('assets/images/studio3.png') !!}" alt="...">
                            <div class="caption">
                                <p class="text-warning">Hawk Tattoos</p>
                                <p>Saket District Centre, Pushp Vihar, New Delhi, Delhi 110017</p>
                            </div>
                            <div>
                                <button class="btn btn-primary">MORE INFO</button>
                                <button class="btn btn-warning"><strong>4</strong> Artists</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="{!! asset('assets/images/studio4.png') !!}" alt="...">
                            <div class="caption">
                                <p class="text-warning">Andie Rogers</p>
                                <p>S-5, Second Floor, B-87, Defence Colony, Near South Ex Flyover, New delhi - 110024</p>
                            </div>
                            <div>
                                <button class="btn btn-primary">MORE INFO</button>
                                <button class="btn btn-warning"><strong>4</strong> Artists</button>
                            </div>
                        </div>
                    </div>

                </div>
                {{--<div class="row">--}}
                    {{--<button class="btn btn-default btn-lg">VIEW MORE</button>--}}
                {{--</div>--}}

                <br><br><br>
            </div>

        </div>
    </section>


@endsection

@section('footer')
@endsection