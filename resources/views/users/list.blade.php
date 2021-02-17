@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach($users as $row)
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">{{ $row->name }}</h5>
                        <p class="card-text"><i class="las la-map-marker-alt"></i>&nbsp;{{ $row->address->country }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
