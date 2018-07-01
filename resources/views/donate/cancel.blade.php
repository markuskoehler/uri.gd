@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Donation Cancelled') }}</div>

                    <div class="card-body">
                        {!! __("Sorry to see that you cancelled your donation. I would appreciate to <a href='mailto:office@koehler.pro'>hear from you</a> what I could do better in the future. Thanks in advance!") !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection