@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @forelse($announcements as $announcement)
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-header bg-transparent border-bottom-0">
                            <span style="font-size: 18px">{{ $announcement->name }}</span> {!! (int)$announcement->status === 1 ? '<span class="badge badge-danger">Important</span>' : '<span class="badge badge-info">Less Important</span>' !!}
                            <span class="float-right text-muted small">{{ $announcement->created_at->diffForHumans() }}</span>
                        </div>
                        <div class="card-body pt-0">
                            <p class="card-text mt-0 pt-0 text-muted">{{ \Illuminate\Support\Str::limit($announcement->description, 320, '...') }}</p>
                            <a href="{{ route('student.portal.get_announcement', ['id' => $announcement->id]) }}" class="btn btn-primary btn-sm">Learn more</a>
                        </div>
                    </div>
                @empty
                    <div class="card">
                        <p class="card-text">No Announcement Today</p>
                    </div>
                @endforelse
                {{$announcements->links()}}
            </div>
        </div>
    </div>
@endsection
