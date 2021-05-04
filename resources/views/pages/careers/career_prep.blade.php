@extends('layouts.home')

@section('content')
    <div id="app">

        @include('layouts.menu')

        <div class="px-3 py-3 pt-md-5 pb-md-4 text-center"
             style="height: 85vh; background: linear-gradient(to right, rgba(236, 47, 75, 0.5), rgba(0, 159, 255, 0.5)), url({{ secure_asset('images/career_prep.jfif') }}) no-repeat center center;background-size: cover">

            <h6 class="text-white font-weight-bold small" style="margin-top: 9%;">CAREER SERVICES</h6>

            <h1 class="h1 mx-auto text-white font-weight-bold" style="width: 40%">Go from Job Search to Job Success</h1>
            <p class="lead text-white">The next step in your Career Journey begins here. ACLC COLLEGE  provides access to a wide variety of services and support in order to help you get results.</p>
            <a href="{{ route('homepage') }}" class="btn btn-primary" style="letter-spacing: 2px">CAREER SERVICES</a>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                </div>
            </div>
        </div>
    </div>
    <script src="{{ secure_asset('js/app.js') }}" defer></script>
@endsection



