<?php

namespace App\Livewire;

use App\Models\ClientMaster;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class ClientCreate extends Component
{
    public $name;
    public $email;
    public $business_email;
    public $contact;
    public $business_contact;
    public $company;
    public $address;
    public $password;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255|unique:client_masters,email',
        'business_email' => 'required|email|max:255|unique:client_masters,business_email',
        'contact' => 'required|string|max:255',
        'business_contact' => 'required|string|max:255',
        'company' => 'required|string|max:255',
        'address' => 'required|string',
        'password' => 'required|string|min:8',
    ];

    public function createClient(): void
    {
        $this->validate();

        $client = ClientMaster::create([
            'name' => $this->name,
            'email' => $this->email,
            'business_email' => $this->business_email,
            'contact' => $this->contact,
            'business_contact' => $this->business_contact,
            'company' => $this->company,
            'address' => $this->address,
            'password' => $this->password,
            'is_active' => true,
        ]);

        \App\Models\User::create([
            'name' => $this->name,
            'email' => $this->email,
            'client_master_id' => $client->id,
            'password' => bcrypt($this->password),
            'role' => 'Customer', // Added role field
        ]);

        $this->dispatch('close-modal', id: 'create-client-modal');
        $this->dispatch('resetTable');
        $this->reset();
    }

    public function render(): View
    {
        return view('livewire.client-create');
    }
}
