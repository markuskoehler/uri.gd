@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edit URL') }}</div>

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

                        {{ bs()->openForm('put', url()->route('urls.update', ['id' => $url->uuid_text]), ['model' => $url]) }}
                        @include('form_contents')
                        <div class="col-md">{{  bs()->submit(__('Update'), 'primary') }} {{ bs()->a(url()->route('urls.delete', ['id' => $url->uuid_text]), __('Delete'))->asButton('danger') }}</div>
                        {{ bs()->closeForm() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
