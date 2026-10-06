<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class UserCreate extends Component
{
    public $name;

    public $email;

    public function createUser(): void
    {
        $validatedData = $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
        ]);

        User::create($validatedData);

        $this->dispatch('close-modal', id: 'create-user-modal');
        $this->dispatch('resetTable');
        $this->reset();
    }

    public function render(): View
    {
        return view('livewire.user-create');
    }
}
