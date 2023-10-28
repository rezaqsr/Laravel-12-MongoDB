@extends('books.layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit {{ $book->name }} Book</h2>
            </div>
            <div class="pull-right">
                <a class="btn waves-effect waves-light btn-primary" href="{{ route('books.index') }}"> Back</a>
            </div>
        </div>
    </div>


    <form action="{{ route('books.update',$book->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="input-field col s4">
                <input id="last_name" type="text" value="{{ $book->name }}" name="name" class="validate">
                <label for="last_name">Last Name</label>
            </div>
            <div class="input-field col s12">
                <textarea name="detail" id="textarea1" class="materialize-textarea">{{ $book->detail }}</textarea>
                <label for="textarea1">Textarea</label>
            </div>

            <div class="col s12">
                <button type="submit" class="btn waves-effect waves-light btn-primary">Submit</button>
            </div>
        </div>

    </form>


@endsection
