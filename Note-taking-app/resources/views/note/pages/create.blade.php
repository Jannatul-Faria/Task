@extends('note.layout.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 m-auto">
                <form method="POST" action="{{ route('note.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="title" name="title" class="form-control" id="title" aria-describedby="title">

                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">Content</label>
                        <input type="content" name="content" class="form-control" id="content">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
