@extends('books.layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> {{ $book->name }} Book</h2>
            </div>
            <div class="pull-right">
                <a class="btn waves-effect waves-light btn-primary" href="{{ route('books.index') }}"> Back</a>
            </div>
        </div>
    </div>


    <table class="highlight">
        <thead>
        <tr>
            <th>Name</th>
            <th>Details</th>
        </tr>
        </thead>

        <tbody>
        <tr>
            <td>          {{ $book->name }}</td>
            <td>    {{ $book->detail }}</td>

        </tr>
        </tbody>
    </table>

@endsection
