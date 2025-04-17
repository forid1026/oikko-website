<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class About extends Component
{
    public $currentPage = 'about';

    public function setPage($page)
    {
        $this->currentPage = $page;
    }

    public function render()
    {
        return view('livewire.pages.about');
    }
}
