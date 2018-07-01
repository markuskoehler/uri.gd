@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">URLs</div>

                    <div class="card-body">
                        <p class="pull-right"><a class="btn btn-primary" href="{{ url()->route('urls.create') }}">{{ __('Create new') }}</a></p>
                        <table class="table table-striped table-bordered table-responsive">
                            <thead>
                            <tr>
                                <td>{{ __('Slug') }}</td>
                                <td>{{ __('Title') }}</td>
                                <td>{{ __('Description') }}</td>
                                <td>{{ __('Actions') }}</td>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($urls as $key => $value)
                                <tr>
                                    <td><a href="{{ LaravelLocalization::getNonLocalizedURL(url()->route('redirector', ['slug' => $value->slug])) }}" target="_blank">{{ $value->slug }}</a></td>
                                    <td><a href="{{ $value->link }}" target="_blank">{{ $value->title }}</a></td>
                                    <td>{{ $value->description }}</td>

                                    <td>
                                        <a class="btn btn-small btn-success" href="{{ url()->route('urls.show', ['id' => $value->uuid_text]) }}">{{ __('Show') }}</a>

                                        <a class="btn btn-small btn-info" href="{{ url()->route('urls.edit', ['id' => $value->uuid_text]) }}">{{ __('Edit') }}</a>

                                        <a class="btn btn-small btn-danger" href="{{ url()->route('urls.delete', ['id' => $value->uuid_text]) }}">{{ __('Delete') }}</a>
                                    </td>
                                </tr>
                            @empty
                                <tr><td colspan="4" class="text-center">{{ __('No results found') }}</td></tr>
                            @endforelse
                            </tbody>
                            </table>
                        <p class="pull-right"><a class="btn btn-primary" href="{{ url()->route('urls.create') }}">{{ __('Create new') }}</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
