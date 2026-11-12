<?php

namespace App\Livewire;

use App\Models\PortfolioMaster;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithFileUploads;

class PortfolioCreate extends Component
{
    use WithFileUploads;

    public $client_name;
    public $client_logo;
    public $badge;
    public $category = 'web';
    public $title;
    public $description;
    public $impact_highlight;
    public $impact_desc;
    public $tech_stack;
    public $project_url;
    public $sort_order = 0;
    public $is_published = true;

    protected $rules = [
        'client_name' => 'required|string|max:255',
        'client_logo' => 'nullable|image|max:4096',
        'badge' => 'required|string|max:255',
        'category' => 'required|string|max:255',
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'impact_highlight' => 'required|string|max:255',
        'impact_desc' => 'required|string|max:255',
        'tech_stack' => 'required|string|max:255',
        'project_url' => 'nullable|string|max:500',
        'sort_order' => 'nullable|integer',
    ];

    public function createPortfolio(): void
    {
        $this->validate();

        $logoPath = null;
        if ($this->client_logo) {
            $logoPath = $this->client_logo->store('portfolios', 'public');
        }

        PortfolioMaster::create([
            'client_name' => $this->client_name,
            'client_logo' => $logoPath,
            'badge' => $this->badge,
            'category' => $this->category,
            'title' => $this->title,
            'description' => $this->description,
            'impact_highlight' => $this->impact_highlight,
            'impact_desc' => $this->impact_desc,
            'tech_stack' => $this->tech_stack,
            'project_url' => $this->project_url,
            'sort_order' => (int) ($this->sort_order ?? 0),
            'is_published' => (bool) $this->is_published,
        ]);

        $this->dispatch('close-modal', id: 'create-portfolio-modal');
        $this->dispatch('resetTable');

        $this->reset([
            'client_name',
            'client_logo',
            'badge',
            'category',
            'title',
            'description',
            'impact_highlight',
            'impact_desc',
            'tech_stack',
            'project_url',
            'sort_order',
            'is_published',
        ]);
        $this->category = 'web';
        $this->is_published = true;
    }

    public function render(): View
    {
        return view('livewire.portfolio-create');
    }
}
