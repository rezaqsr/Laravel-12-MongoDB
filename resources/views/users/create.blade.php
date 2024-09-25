@extends('users.layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New User</h2>
            </div>
            <div class="pull-right">
                <a class="btn waves-effect waves-light btn-primary" href="{{ route('users.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="input-field col s4">
                <input id="name" type="text" name="name" class="validate">
                <label for="name">Name</label>
            </div>
            <div class="input-field col s4">
                <input id="email" type="email" name="email" class="validate">
                <label for="email">Email</label>
            </div>
            <div class="input-field col s4">
                <input id="password" type="password" name="password" class="validate">
                <label for="password">Password</label>
            </div>

            <div class="col s12">
                <button type="submit" class="btn waves-effect waves-light btn-primary">Submit</button>
            </div>
        </div>


    </form>


@endsection
