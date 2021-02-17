@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach($addresses as $row)
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title"><i class="las la-map-marker-alt"></i>&nbsp;{{ $row->country }}</h5>
                        <p class="card-text">{{ $row->user->name }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
