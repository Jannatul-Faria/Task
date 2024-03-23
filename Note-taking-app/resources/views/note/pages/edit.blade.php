@extends('note.layout.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="text-end">

                <a href="{{ route('note.index') }}"><button type="button" class="btn btn-sm btn-outline-secondary p-2"><i
                            class="bi bi-plus"></i>Back</button></a>

            </div>

            <div class="col-md-8 m-auto">
                <form method="POST" action="{{ route('note.update', $note->id) }}">
                    @csrf
                    @method('PATCH')
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="title" name="title" class="form-control" id="title" aria-describedby="title"
                            value="{{ $note->title }}">

                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">Content</label>
                        <input type="content" name="content" class="form-control" id="content"
                            value="{{ $note->content }}">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
