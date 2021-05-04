@extends('layouts.home')

@section('content')
    <div id="app">

        @include('layouts.menu')

        <div class="px-3 py-3 pt-md-5 pb-md-4 text-center"
             style="height: 50vh; background: linear-gradient(to right, rgba(236, 47, 75, 0.5), rgba(0, 159, 255, 0.5)), url({{ secure_asset('images/school-requirement.jpg') }}) no-repeat center center;background-size: cover">
            <h1 class="h1 mx-auto text-white font-weight-bold" style="width: 40%;margin-top: 7%;">School Requirements</h1>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="font-weight-700 h3 my-3"></h3>
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header bg-transparent" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link font-weight-bold btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        FRESHMEN (NEW ENROLLEES)
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    <ul>
                                        <li>Original Form 138 / SF9-SHS (Learner's Progress Report Card)</li>
                                        <li>Original Form 137 / SF10-SHS (Learner's Permanent Academic Record)</li>
                                        <li>PSA Issued Birth Certificate</li>
                                        <li>Two 2"x2" colored photographs</li>
                                        <li>Certificate of Good Moral Character</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header bg-transparent" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block font-weight-bold text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        TRANSFEREES
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    <ul>
                                        <li>Certificate of Transfer (Honorable Dismissal)</li>
                                        <li>Official Transcript of Records</li>
                                        <li>Two 2"x2" colored photographs</li>
                                        <li>Course Credit Application Form</li>
                                        <li>Certificate of Good Moral Character</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ secure_asset('js/app.js') }}" defer></script>
@endsection



