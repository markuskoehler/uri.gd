@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">URLs</div>

                    <div class="card-body">
                        <table class="table table-striped table-bordered table-responsive">
                            <thead>
                            <tr>
                                <td>Slug</td>
                                <td>Title</td>
                                <td>Description</td>
                                <td>Actions</td>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($urls as $key => $value)
                                <tr>
                                    <td>{{ $value->slug }}</td>
                                    <td><a href="{{ $value->link }}" target="_blank">{{ $value->title }}</a></td>
                                    <td>{{ $value->description }}</td>

                                    <!-- we will also add show, edit, and delete buttons -->
                                    <td>

                                        <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                                        <!-- we will add this later since its a little more complicated than the other two buttons -->

                                        <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                                        <a class="btn btn-small btn-success" href="{{ url()->route('urls.show', ['id' => $value->uuid_text]) }}">Show</a>

                                        <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                                        <a class="btn btn-small btn-info" href="{{ url()->route('urls.edit', ['id' => $value->uuid_text]) }}">Edit</a>

                                        <a class="btn btn-small btn-danger" href="{{ url()->route('urls.delete', ['id' => $value->uuid_text]) }}">Delete</a>

                                    </td>
                                </tr>
                            @empty
                                <tr><td colspan="4" class="text-center">No results found</td></tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
