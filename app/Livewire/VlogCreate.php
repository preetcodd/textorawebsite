<?php

namespace App\Livewire;

use App\Models\Vlog;
use App\Models\VlogMasters;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithFileUploads;

class VlogCreate extends Component
{
    use WithFileUploads;

    public $image;
    public $date;
    public $title;
    public $description;

    protected $rules = [
        'image' => 'required|image|max:2048',
        'date' => 'required|date',
        'title' => 'required|string|max:255',
        'description' => 'required|string',
    ];

    public function createVlog(): void
    {
        // Validate form inputs
        $this->validate([
            'image' => 'required|image|max:2048',
            'date' => 'required|date',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        // Store image in storage/app/public/vlogs
        $path = $this->image->store('vlogs', 'public');

        // Save record in database
        VlogMasters::create([
            'image' => $path,
            'date' => $this->date,
            'title' => $this->title,
            'description' => $this->description,
            'is_published' => false,
        ]);

        // Close modal
        $this->dispatch('close-modal', id: 'create-vlog-modal');

        // Refresh table (if using Livewire table)
        $this->dispatch('resetTable');

        // Reset form fields
        $this->reset(['image', 'date', 'title', 'description']);
    }


    public function render(): View
    {
        return view('livewire.vlog-create');
    }
}
