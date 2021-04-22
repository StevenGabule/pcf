@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-header bg-transparent border-bottom-0  pt-4">
                        <span class="h2">{{ $announcement->name }}</span>
                        <span class="d-block text-muted">{{ $announcement->created_at->diffForHumans() }}</span>
                    </div>
                    <div class="card-body">
                        {!! $announcement->description !!}
                    </div>
                </div>

                @forelse($announcement->comments as $comment)
                    <div class="card border-0 mt-2 shadow-sm">
                        <div class="card-body">
                            <div class="card-text">{{ $comment->user->name }} said: <br>{{ $comment->message }}</div>
                            <div class="text-muted">{{ $comment->created_at->diffForHumans() }}</div>

                        </div>
                    </div>
                @empty
                    <div class="card border-0 mt-2 shadow-sm">
                        <div class="card-body">
                            <div class="text-muted">No Comment available</div>
                        </div>
                    </div>
                @endforelse


                <div class="card border-0 mt-5">
                    <form action="{{ route('student.announcement.comment', ['announcement_id' => $announcement->id]) }}"
                          method="post">
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
@endsection
