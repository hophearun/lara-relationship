@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach($posts as $row)
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">{{ $row->title }}</h5>
                        <p class="card-text">{{ $row->description }}</p>
                        <p class="card-text"><small class="text-muted">By {{ $row->user->name }}</small></p>
                        <h6 class="card-subtitle mb-2 text-muted">Comments({{ $row->comments->count() }})</h6>
                        <ul class="list-group list-group-flush">
                            @foreach($row->comments as $comment)
                                <li class="list-group-item">{{ $comment->description }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
