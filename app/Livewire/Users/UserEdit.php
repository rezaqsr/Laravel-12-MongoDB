<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class UserEdit extends Component
{
    public $user;
    public $name;
    public $email;
    public $password;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'nullable|string|min:8',
    ];

    public function mount(User $user)
    {
        $this->user = $user;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->rules['email'] = "required|email|unique:users,email,{$user->id}";
    }

    public function update()
    {
        $this->validate();

        $this->user->update([
            'name' => $this->name,
            'email' => $this->email,
        ]);

        if ($this->password) {
            $this->user->update(['password' => Hash::make($this->password)]);
        }

        session()->flash('success', 'User updated successfully.');
        return $this->redirect('/users', navigate: true);
    }

    public function render()
    {
        return view('livewire.users.user-edit')
            ->layout('livewire.layout');
    }
}
