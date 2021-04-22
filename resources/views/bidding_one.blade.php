@extends('layouts.home')

@section('content')
    <div id="app">

        @include('layouts.menu')

        <div class="px-3 py-3 pt-md-5 pb-md-4 text-center"
             style="height: 30vh; background: linear-gradient(0deg, rgba(52, 144, 220, 0.3), rgba(52, 144, 220, 0.3)), url({{ secure_asset('images/bidding.jfif') }}) no-repeat center center;background-size: cover">
            <h1 class="h1 mx-auto text-white font-weight-bold" style="width: 40%">Category Archives: Bidding</h1>
            <p class="lead mb-5 text-white">Read our latest and awesome projects ahead.</p>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card border-0 shadow-sm mt-3">
                        <div class="card-header bg-transparent border-bottom-0">
                            <div style="font-size: 20px;text-transform: uppercase">{{ $bidding_one->name }}</div>
                            <div class="text-muted">Date Process: {{ date('m/d/Y', strtotime($bidding_one->date_process)) }}</div>
                        </div>
                        <div class="card-body pt-0">
                            <p class="card-text mt-0 pt-0">{{ $bidding_one->description }}</p>
                        </div>
                    </div>

                    <div class="card border-0 mt-3">
                        <form action="" method="post">
                            @csrf
                            <div class="form-group">
                            <textarea name="message" class="form-control" rows="3"
                                      placeholder="Leave a message"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="submit" class="btn btn-info">Post</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}" defer></script>
@endsection



