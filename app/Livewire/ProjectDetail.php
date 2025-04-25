<?php

namespace App\Livewire;

use App\Models\Project;
use Livewire\Component;

class ProjectDetail extends Component
{
    public $project, $slug, $recentProjects;
    public function mount($slug)
    {
        $this->slug = $slug;
        $this->project = Project::where('slug', $slug)->first();
        $this->recentProjects = Project::where('slug', '!=', $slug)
        ->latest()
        ->take(5)
        ->get();
    }
    public function render()
    {
        return view('livewire.project-detail', [
            'project' => $this->project
        ]);
    }
}
