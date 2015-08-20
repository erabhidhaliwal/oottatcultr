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

        <form class="form-horizontal" role="form" method="POST" action="{{ URL::to('/password/email') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">
                <label class="col-md-4 control-label">E-Mail Address</label>

                <div class="col-md-6">
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Send Password Reset Link
                    </button>
                </div>
            </div>
        </form>

        <br><br><br><br><br><br>


@endsection

@section('footer')
@endsection