@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <form action="{{ route('categories.store') }}" method="POST">
                @csrf
                <input type="hidden" name="cpt_id" value="{{ $cpt->id }}">
                <div class="form-group">
                    <label for="txt-name">Name</label>
                    <input type="text" class="form-control @error('name.en') is-invalid @enderror" id="txt-name" name="name[en]" value="{{ old('title.en') }}">
                </div>
                <div class="form-group">
                    <label for="txt-desc">Description</label>
                    <textarea class="form-control" id="txt-description" name="description[en]"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>
@endsection
