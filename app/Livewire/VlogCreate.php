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
    public $is_published = true;

    protected $rules = [
        'image' => 'required|image|max:2048',
        'date' => 'required|date',
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'is_published' => 'nullable|boolean',
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

        // Ensure vlogs directory exists
        $vlogsDir = storage_path('app/public/vlogs');
        if (!is_dir($vlogsDir)) {
            @mkdir($vlogsDir, 0775, true);
        }

        // Store image in storage/app/public/vlogs
        $path = $this->image->store('vlogs', 'public');

        // Save record in database
        VlogMasters::create([
            'image' => $path,
            'date' => $this->date,
            'title' => $this->title,
            'description' => $this->description,
            'is_published' => (bool)$this->is_published,
        ]);

        // Close modal
        $this->dispatch('close-modal', id: 'create-vlog-modal');

        // Refresh table (if using Livewire table)
        $this->dispatch('resetTable');

        // Reset form fields
        $this->reset(['image', 'date', 'title', 'description']);
        $this->is_published = true;
    }


    public function render(): View
    {
        return view('livewire.vlog-create');
    }
}
