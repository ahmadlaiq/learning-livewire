<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    Use WithPagination;
    public function render()
    {
        return view('livewire.users.index',
            [
                'users' => User::query()->latest()->paginate(10)
            ]
        );
    }
}
