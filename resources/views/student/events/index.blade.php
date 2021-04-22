@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @forelse($events as $event)
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-header bg-transparent border-bottom-0">
                            <span style="font-size: 18px">{{ $event->name }}</span>
                            <span class="float-right text-muted small">{{ $event->created_at->diffForHumans() }}</span>
                        </div>
                        <div class="card-body pt-0">
                            <p class="card-text text-muted mb-0">Date Happen: {{ date('m/d/Y', strtotime($event->date_start)) }}</p>
                            <p class="card-text text-muted mb-0">Location: {{ $event->location }}</p>
                            <p class="card-text mt-0 pt-0 text-dark">{{ \Illuminate\Support\Str::limit($event->description, 320, '...') }}</p>
                            <a href="{{ route('student.event.get_activities', ['id' => $event->id]) }}" class="btn btn-primary btn-sm">Learn more</a>
                        </div>
                    </div>
                @empty
                    <div class="card">
                        <p class="card-text">No Announcement Today</p>
                    </div>
                @endforelse
                {{$events->links()}}
            </div>
        </div>
    </div>
@endsection
