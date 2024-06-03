<?php

namespace App\Livewire\Backend;

use App\Models\User;
use Livewire\Component;

class Users extends Component
{
    public function render()
    {
        $users = User::paginate(10);
        return view('livewire.backend.users', [
            'users' => $users
        ])->layout('backend.layout.app');
    }
}
