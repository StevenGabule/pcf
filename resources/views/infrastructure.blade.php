@extends('layouts.home')

@section('content')
    <div id="app">

        @include('layouts.menu')

        <div class="px-3 py-3 pt-md-5 pb-md-4 text-center"
             style="height: 80vh; background: linear-gradient(0deg, rgba(52, 144, 220, 0.3), rgba(52, 144, 220, 0.3)), url({{ secure_asset('images/bidding.jfif') }}) no-repeat center center;background-size: cover">
            <h1 class="h1 mx-auto text-white font-weight-bold" style="width: 40%">Explore our schools to find your perfect
                                                                                  program</h1>
            <p class="lead mb-5 text-white">Match your goals to our programs, explore your options, and map out your path to
                                            success.</p>

        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    @foreach($courses as $course)
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="card border-0 shadow-sm mt-3">
                                    <div class="card-header bg-transparent border-bottom-0">
                                        <div>SCHOOL OF</div>
                                        <div style="font-size: 24px;text-transform: uppercase">{{ $course->title }}</div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <p class="card-text mt-0 pt-0">{{ $course->short_description }}</p>
                                        <a href="{{ route('home.program', ['slug' => $course->slug]) }}" class="btn btn-outline-primary font-weight-700" style="letter-spacing: 1px">Learn more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mt-3">
                                <div class="card border-0 shadow-sm">
                                    <div class="card-body">
                                        <div class="card-title">For more information about the</div>
                                        <p class="card-text">{{ $course->title }}</p>
                                        <form class="form-inline">
                                            <div class="form-group mb-2 mr-sm-3">
                                                <input type="text" class="form-control" id="inputPassword2" placeholder="Enter email">
                                            </div>
                                            <button type="submit" class="btn btn-primary mb-2">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <script src="{{ secure_asset('js/app.js') }}" defer></script>
@endsection



