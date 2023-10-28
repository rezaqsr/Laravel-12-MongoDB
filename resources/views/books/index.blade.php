@extends('books.layout')


@section('content')
    <div class=" mt-5">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Books</h2>
                </div>
                <div class="pull-right">
                    <a class="btn waves-effect waves-light btn-success" href="{{ route('books.create') }}"> Create New Book</a>
                </div>
            </div>
        </div>

        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Details</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($books as $book)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $book->name }}</td>
                    <td>{{ Illuminate\Support\Str::limit($book->detail, 20) }}</td>
                    <td>
                        <form action="{{ route('books.destroy',$book->id) }}" method="POST">
                            <a class="btn waves-effect waves-light btn-info" href="{{ route('books.show',$book->id) }}">Show</a>
                            <a class="btn waves-effect waves-light btn-primary" href="{{ route('books.edit',$book->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn waves-effect waves-light btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>



@endsection
