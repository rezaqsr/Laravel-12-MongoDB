<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UsersIndex extends Component
{
    use WithPagination;

    public function delete($userId)
    {
        $user = User::find($userId);
        if ($user){
            $user->delete();
        }
    }


    public function render()
    {
        $users = User::paginate(20);
        return view('livewire.users.users-index', compact('users'))
            ->layout('livewire.layout');
    }


}
