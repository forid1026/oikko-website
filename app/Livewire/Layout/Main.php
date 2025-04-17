<?php

namespace App\Livewire\Layout;

use Livewire\Component;

class Main extends Component
{

    public $currentPage = 'home';

    public function setPage($page)
    {
        $this->currentPage = $page;
    }

    public function render()
    {
        return view('livewire.layout.main');
    }
}
