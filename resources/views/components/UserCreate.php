<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class UserCreate extends Component
{
    public $name;

    public $email;

    public function createUser()
    {
        $validatedData = $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
        ]);

        // Create the user
        User::create($validatedData);

        // Optionally, close the modal after creation
        $this->dispatch('modal-close', 'user-create-modal');
    }

    public function render()
    {
        return view('livewire.user-create');
    }
}
