@extends('layouts.home')

@push('css')
    <style>
        #outer {
            text-align: center;
            position: relative;
            overflow: hidden;
            min-height: 85vh
        }
        #home-top-video:before {
            content:"";
            position: absolute;
            top:0;
            right:0;
            left:0;
            bottom:0;
            z-index:1;
            background:linear-gradient(to right,rgba(65, 0, 255, 0.4),rgba(255, 0, 232, 0.3));
        }

        #home-top-video {
            left: 0;
            top: 0;
            height: 100vh;
            width: 100%;
            overflow: hidden;
            position: absolute;
            z-index: -1;
        }

        #home-text {
            position: absolute;
            left: 50%;
            top: 40%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            color: #fff;
            z-index:1;
        }
        body {
            margin-bottom: 10%;
        }
    </style>
@endpush

@section('content')
    <div id="app">

        @include('layouts.menu')

        <div class="container">
        <div class="px-3 py-3 pt-md-5 pb-md-4 text-center" id="outer">
            <div id="home-top-video">
                <video autoplay loop muted width="100%">
                    <source src="{{ secure_asset('videos/programming.mp4') }}" type="video/mp4" /> Your browser does not support the video tag. We suggest you upgrade your browser.
                </video>
                <div id="home-text" class="text-center">
                    <div class="mb-3">EXECUTIVE PROGRAM</div>
                    <h2 style="font-size: 36px">{{ $program->title }}</h2>
                    <p class="lead">{{ $program->short_description }}</p>
                    <div class="d-flex justify-content-center">
                        <a href="" class="btn btn-light text-primary font-weight-700 mr-5 text-uppercase w-75 py-3" style="font-size: 16px">Download Syllabus</a>
                        <a href="" class="btn btn-primary font-weight-700 text-uppercase w-75 py-3" style="font-size: 16px">Enroll Now</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mt-4">
                    <div class="d-flex justify-content-between align-content-center mb-4">
                        <h3 class="align-items-center">What You Will Learn</h3>
                        <a href="" class="btn btn-secondary align-items-center">Download Syllabus</a>
                    </div>

                    <div class="card mb-3">
                        <div class="row no-gutters">
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h2>{{ $program->title }}</h2>
                                    <p style="margin-bottom: 1.25rem;" class="text-muted">Estimated Time: {{ $program->estimated_time }} Hours</p>
                                    <p class="card-text">{{ $program->description }}</p>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <img class="img-fluid" src="{{ $program->photo != null ? secure_asset('admin/uploads/') . $program->photo : secure_asset('images/no-image-found.jpg') }}" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ secure_asset('js/app.js') }}" defer></script>
@endsection

