@extends('users.layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit {{ $user->name }} User</h2>
            </div>
            <div class="pull-right">
                <a class="btn waves-effect waves-light btn-primary" href="{{ route('users.index') }}"> Back</a>
            </div>
        </div>
    </div>


    <form action="{{ route('users.update',$user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="input-field col s4">
                <input id="last_name" type="text" value="{{ $user->name }}" name="name" class="validate">
                <label for="last_name">Name</label>
            </div>
            <div class="input-field col s4">
                <input id="last_name" type="email" value="{{ $user->email }}" name="email" class="validate">
                <label for="last_name">Email</label>
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
