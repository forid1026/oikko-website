<?php

namespace App\Livewire\Pages;

use App\Models\Project;
use Illuminate\Support\Str;
use Livewire\Component;

class Projects extends Component
{
    public function render()
    {
        $projects = Project::where('status', 'Active')->get();
        return view('livewire.pages.projects',[
            'projects' => $projects
        ]);
    }
}
