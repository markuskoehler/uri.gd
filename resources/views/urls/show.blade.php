@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Show URL') }}</div>

                    <div class="card-body">
                        <h2>{{ $url->title }}</h2>
                        <p>
                            <strong>{{ __('Description') }}:</strong> {{ $url->description }}<br>
                            <strong>{{ __('Link') }}:</strong> <a href="{{ $url->link }}">{{ $url->link }}</a><br>
                            <strong>{{ __('Slug') }}:</strong> {{ $url->slug }}<br>
                            <strong>{{ __('Short URL') }}:</strong> <a href="{{ LaravelLocalization::getNonLocalizedURL(url()->route('redirector', ['slug' => $url->slug])) }}">{{ LaravelLocalization::getNonLocalizedURL(url()->route('redirector', ['slug' => $url->slug])) }}</a>
                        </p>
                        <a class="btn btn-secondary" href="#" onclick="window.history.go(-1); return false;">{{ __('Back') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
