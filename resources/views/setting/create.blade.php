@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <form action="{{ route('settings.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="facebook">Facebook Url</label>
                    <input type="text" class="form-control @error('social_network.facebook') is-invalid @enderror" id="facebook" name="social_network[facebook]" value="{{ old('social_network.facebook') ?? config('settings.social_network.facebook') ?? '' }}">
                </div>
                <div class="form-group">
                    <label for="youtube">Youtube Url</label>
                    <input type="text" class="form-control @error('social_network.youtube') is-invalid @enderror" id="youtube" name="social_network[youtube]" value="{{ old('social_network.youtube') ?? config('settings.social_network.youtube') ?? '' }}">
                </div>
                <div class="form-group">
                    <label for="site_title">Site Title</label>
                    <input type="text" class="form-control @error('site_title') is-invalid @enderror" id="site_title" name="site_title" value="{{ old('site_title') ?? config('settings.site_title') ?? '' }}">
                </div>
                <div class="form-group">
                    <label for="site_url">Site Url</label>
                    <input type="text" class="form-control @error('site_url') is-invalid @enderror" id="site_url" name="site_url" value="{{ old('site_url') ?? config('settings.site_url') ?? '' }}">
                </div>
                
                <div class="form-group">
                    <label for="perpage">Perpage</label>
                    <input type="number" class="form-control @error('perpage') is-invalid @enderror" id="perpage" name="perpage" value="{{ old('perpage') ?? config('settings.perpage') ?? '' }}">
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>
@endsection
