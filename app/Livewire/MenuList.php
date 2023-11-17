<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use Livewire\Attributes\On;
use Livewire\Attributes\Locked;

class MenuList extends Component
{
    public $categories;
    public $desk;
    public $tenant;

    public function updateCategory(String $params){
        $this->categories = Category::where('tenant_id', $this->tenant->id)
        ->has('products')
        ->with(['products' => function ($query) use ($params) {
            $query->where('products.name', 'like', '%' . $params . '%')
            ->with('media');
        }])
        ->get();
    }

    #[On('search-updated')] 
    public function addText($search){
        $this->updateCategory($search);
    }



    public function render()
    {
        return view('livewire.menu-list');
    }
}
