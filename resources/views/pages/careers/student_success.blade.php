@extends('layouts.home')

@section('content')
    <div id="app">

        @include('layouts.menu')

        <div class="px-3 py-3 pt-md-5 pb-md-4 text-center"
             style="height: 50vh; background: linear-gradient(to right, rgba(236, 47, 75, 0.5), rgba(0, 159, 255, 0.5)), url({{ secure_asset('images/caps.jfif') }}) no-repeat center center;background-size: cover">
            <h1 class="h1 mx-auto text-white font-weight-bold" style="width: 40%;margin-top: 7%;">Success Stories from Our Students</h1>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    @forelse($stories as $story)
                        <div class="card mt-3 mb-3">
                            <div class="card-header">
                                {{$story->user->name}}
                            </div>
                            <div class="card-body">
                                {{$story->message}}
                            </div>
                            <div class="card-footer">
                                Work at <strong>{{$story->work_at}}</strong>
                            </div>
                        </div>
                    @empty
                        <p>No data found!</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
    <script src="{{ secure_asset('js/app.js') }}" defer></script>
@endsection



