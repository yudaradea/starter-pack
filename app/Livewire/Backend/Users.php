<?php

namespace App\Livewire\Backend;

use App\Models\User;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class Users extends Component
{
    use WithPagination;

    #[Url(history:true)]
    public $search = "";

    #[Url]
    public $perPage = 10;

    #[Url(history:true)]
    public $shortRole = "";

    public function updatedSearch() {
        $this->resetPage();
    }

    public function render()
    {
        $users = User::Search($this->search)
        ->when($this->shortRole !== '', function($query){
            $query->whereHas("roles", function($q){ $q->where("name", $this->shortRole); });
        })
        ->paginate($this->perPage);

        // $users = User::whereHas("roles", function($q){ $q->where("name", $this->admin); })->paginate(5);

        return view('livewire.backend.users', [
            'users' => $users
        ])->layout('backend.layout.app');
    }
}
