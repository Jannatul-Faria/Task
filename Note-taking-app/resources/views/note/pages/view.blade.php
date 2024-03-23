@extends('note.layout.app')
@section('content')
    <div class="table-responsive">
        <div class="text-end">
            <a href="{{ route('note.index') }}"><button type="button" class="btn btn-sm btn-outline-secondary p-2"><i
                        class="bi bi-plus"></i>Back</button></a>
            <a href="{{ route('note.create') }}"><button type="button" class="btn btn-sm btn-outline-secondary p-2"><i
                        class="bi bi-plus"></i>Add</button></a>

        </div>


        <div class="col-md-10">
            <h1>{{ $note->title }}</h1>
            <p>{{ $note->content }}</p>

        </div>


    </div>
@endsection
