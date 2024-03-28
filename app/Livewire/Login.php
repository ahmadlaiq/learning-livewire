<?php

namespace App\Livewire;

use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Component;

#[Layout('layouts.guest')]

class Login extends Component
{

    #[Rule('required', 'email', 'unique:users,email')]
    public string $email = '';

    #[Rule('required', 'min:6')]
    public string $password = '';

    public function login()
    {
        $this->validate();

        if (auth()->attempt(['email' => $this->email, 'password' => $this->password])) {
            return redirect()->route('home');
        }

        throw ValidationException::withMessages([
            'email' => 'Email or password is incorrect.',
        ]);
    }

    public function render()
    {
        return view('livewire.login');
    }
}
