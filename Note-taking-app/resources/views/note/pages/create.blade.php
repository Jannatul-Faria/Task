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

                        <textarea name="content" class="form-control" id="summernote" placeholder="Enter description"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $('#summernote').summernote({
            placeholder: 'Hello Bootstrap 5',
            tabsize: 2,
            height: 100
        });
    </script>
@endpush
