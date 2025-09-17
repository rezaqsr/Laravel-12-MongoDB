<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Livewire\Users\UsersIndex;
use App\Livewire\Users\UserCreate;
use App\Livewire\Users\UserEdit;
use App\Livewire\Users\UserShow;

Route::get('/', function () {

    return redirect()->route('users.index');
});


Route::get('/users', UsersIndex::class)->name('users.index');
Route::get('/users/create', UserCreate::class)->name('users.create');
Route::get('/users/{user}/edit', UserEdit::class)->name('users.edit');
Route::get('/users/{user}', UserShow::class)->name('users.show');
