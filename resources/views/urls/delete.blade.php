@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Delete URL</div>

                    <div class="card-body">
                        Do you really want to delete this URL?<br><br>

                        {{ bs()->openForm('delete', url()->route('urls.destroy', compact('id'))) }}
                            <div class="col-md">{{  bs()->formGroup()->control(bs()->submit('Delete', 'danger')) }}</div>
                        {{ bs()->closeForm() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
