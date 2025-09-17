<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;

class UserShow extends Component
{
    public $user;

    public function mount(User $user)
    {
        $this->user = $user;
    }

    public function render()
    {
        return view('livewire.users.user-show')
            ->layout('livewire.layout');
    }
}
