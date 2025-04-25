<?php

namespace App\Livewire\Pages;

use App\Models\Slider;
use App\Models\About;
use App\Models\Project;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $sliders = Slider::where('status', 'active')->get();
        $about = About::first();
        $projects = Project::where('status', 'Active')->get();
        return view(
            'livewire.pages.home',
            [
                'sliders' => $sliders,
                'about' => $about,
                'projects' => $projects
            ]
        );
    }
}
