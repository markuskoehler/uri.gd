@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create URL') }}</div>

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        {{ bs()->openForm('post', url()->route('urls.store')) }}
                            @include('form_contents')
                            <div class="col-md">{{  bs()->formGroup()->control(bs()->submit(__('Create'), 'primary')) }}</div>
                        {{ bs()->closeForm() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
