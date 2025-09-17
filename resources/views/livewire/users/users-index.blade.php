<div class="mt-5">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Users</h2>
            </div>
            <div class="pull-right">
                <a class="btn waves-effect waves-light btn-success" wire:navigate href="{{ route('users.create') }}"> Create New User</a>
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
        @if($users->count() > 0)
            @foreach ($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a class="btn waves-effect waves-light"  wire:navigate href="{{ route('users.show', $user->id) }}">Show</a>
                        <a class="btn waves-effect waves-light green"  wire:navigate href="{{ route('users.edit', $user->id) }}">Edit</a>
                        <button wire:click="delete('{{ $user->id }}')" class="btn waves-effect waves-light red" onclick="return confirm('Are you sure?')">Delete</button>
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="4">List Is Empty</td>
            </tr>
        @endif
    </table>

    {{ $users->links() }} <!-- If using pagination -->
</div>
