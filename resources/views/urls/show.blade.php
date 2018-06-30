@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Show URL</div>

                    <div class="card-body">
                        <h2>{{ $url->title }}</h2>
                        <p>
                            <strong>Description:</strong> {{ $url->description }}<br>
                            <strong>Link:</strong> {{ $url->link }}<br>
                            <strong>Slug:</strong> {{ $url->slug }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
