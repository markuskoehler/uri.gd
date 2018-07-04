@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        {{ __('You currently have :count URLs saved.', ['count' => $count]) }}
                            @if($count)
                            <a class="btn btn-info" href="{{ url()->route('urls.index') }}"><i class="fas fa-eye"></i> {{ __('View them') }}</a>
                            @endif
                            <br><br>
                        <a class="btn btn-primary" href="{{ url()->route('urls.create') }}"><i class="fas fa-plus-circle"></i> {{ __('Create new') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
