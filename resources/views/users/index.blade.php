@extends('users.layout')


@section('content')
    <div class=" mt-5">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Users</h2>
                </div>
                <div class="pull-right">
                    <a class="btn waves-effect waves-light btn-success" href="{{ route('users.create') }}"> Create New User</a>
                </div>
            </div>
        </div>

        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th width="280px">Action</th>
            </tr>
            @if(count($users) > 0)
            @foreach ($users as $user)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                            <a class="btn waves-effect waves-light btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
                            <a class="btn waves-effect waves-light btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn waves-effect waves-light btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            @else
                <tr>
                    <td>List Is Empty</td>
                </tr>
            @endif
        </table>
    </div>



@endsection
