<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use Livewire\Attributes\Locked;

class MenuSearch extends Component
{
    public $search;

    public function render()
    {
        if($this->search != null){
            $this->dispatch('search-updated', $this->search);
        } else {
            $this->dispatch('search-updated', '');
        }
        return view('livewire.menu-search');
    }
}
