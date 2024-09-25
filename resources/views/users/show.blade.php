@extends('users.layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> {{ $user->name }} User</h2>
            </div>
            <div class="pull-right">
                <a class="btn waves-effect waves-light btn-primary" href="{{ route('users.index') }}"> Back</a>
            </div>
        </div>
    </div>


    <table class="highlight">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
        </tr>
        </thead>

        <tbody>
        <tr>
            <td>    {{ $user->name }}</td>
            <td>    {{ $user->email }}</td>

        </tr>
        </tbody>
    </table>

@endsection
