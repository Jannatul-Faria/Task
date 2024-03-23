@extends('note.layout.app')
@section('content')
    <div class="table-responsive">
        <div class="text-end">

            <a href="{{ route('note.index') }}"><button type="button" class="btn btn-sm btn-outline-secondary p-2"><i
                        class="bi bi-plus"></i>Back</button></a>
            <a href="{{ route('note.create') }}"><button type="button" class="btn btn-sm btn-outline-secondary p-2"><i
                        class="bi bi-plus"></i>Add</button></a>
        </div>

        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No:</th>
                    <th scope="col">Title</th>
                    <th scope="col">Content</th>
                    <th scope="col">Created</th>
                    <th scope="col">Updated</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($notes as $note)
                    <tr>
                        <td>{{ $note->id }}</td>
                        <td>{{ $note->title }}</td>
                        <td>{!! Str::limit($note->content, 20, '...') !!}</td>
                        <td>{{ $note->created_at->format('d-M-Y') }}</td>
                        <td>{{ $note->updated_at }}</td>
                        <td>
                            <a href="{{ route('note.show', $note->id) }}"
                                class="btn btn-sm btn-outline-secondary p-2">view</a>
                            <a href="{{ route('note.edit', $note->id) }}"
                                class="btn btn-sm btn-outline-secondary p-2 m-2">Edit</a>
                            <form action="{{ route('note.destroy', $note->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-secondary p-2">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>
@endsection
