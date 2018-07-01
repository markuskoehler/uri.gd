@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Donation Successful') }}</div>

                    <div class="card-body">
                        {{ __('Thank you very much for your donation!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection