@extends('layouts.home')

@push('css')
    <style>
        td {
            vertical-align: middle;
        }
    </style>
@endpush

@section('content')
    <div id="app">

        @include('layouts.menu')

        <div class="px-3 py-3 pt-md-5 pb-md-4 text-center"
             style="height: 30vh; background: linear-gradient(0deg, rgba(52, 144, 220, 0.3), rgba(52, 144, 220, 0.3)), url({{ asset('images/awards.jfif') }}) no-repeat center center;background-size: cover">
            <h1 class="h1 mx-auto text-white font-weight-bold" style="width: 40%">AWARD NOTICES</h1>
            <p class="lead mb-5 text-white">Match your goals to our programs, explore your options, and map out your
                                            path to
                                            success.</p>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="mt-4 mb-3 font-weight-bold">AWARD NOTICES</h4>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th width="5%">#</th>
                            <th width="auto">Project Description</th>
                            <th width="25%">Date Posted</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $i=1; @endphp
                        @foreach($awards as $award)
                            <tr>
                                <td>{{ $i }}</td>
                                <td><a href="" class="btn-link font-weight-700">{{ $award->name }}</a></td>
                                <td>{{ $award->created_at->toDateString() . ' - ' .$award->created_at->diffForHumans() }}</td>
                            </tr>
                            @php $i++; @endphp
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}" defer></script>
@endsection



