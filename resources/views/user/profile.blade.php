@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You currently have {{ $count }} URLs saved.
                            @if($count)
                            <a class="btn btn-info" href="{{ url()->route('urls.index') }}">View them</a>
                            @endif
                            <br><br>
                        <a class="btn btn-primary" href="{{ url()->route('urls.create') }}">Create new</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
