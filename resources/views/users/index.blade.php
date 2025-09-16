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

        <table class="table table-bordered responsive-table centered highlight">
            <tr>
                <th class="center-align">No</th>
                <th class="center-align">Name</th>
                <th class="center-align">Email</th>
                <th class="center-align">Action</th>
            </tr>
            @if(count($users) > 0)
            @foreach ($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <form class="my-2" action="{{ route('users.destroy',$user->id) }}" method="POST">
                            <a class="btn waves-effect waves-light" href="{{ route('users.show',$user->id) }}">Show</a>
                            <a class="btn waves-effect waves-light green" href="{{ route('users.edit',$user->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn waves-effect waves-light red">Delete</button>
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
