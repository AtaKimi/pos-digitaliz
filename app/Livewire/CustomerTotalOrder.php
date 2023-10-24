<?php

namespace App\Livewire;

use Livewire\Component;

class CustomerTotalOrder extends Component
{
    public $categories;
    public $items_total = 0;
    public $total_payment = 0;

    public $items = [
        1 => [
            "quantity" => 1,
            "desk_id" => 1,
        ],
    ];

    // public function addOrder($product_price, $product_id, $desk_id)
    public function addOrder($product_price)

    {
        $this->items_total++;

        // $this->items[] = [
        //     'quantity' => $product_id,
        //     'desk_id' => $desk_id,
        // ];

        $this->total_payment = $this->total_payment + $product_price;

        // print_r($this->items);
    }

    public function deleteOrder($product_price)
    {
        $this->items_total = $this->items_total + 1;
        $this->total_payment = $this->total_payment + $product_price;
    }


    public function render()
    {
        return view('livewire.customer-total-order');
    }
}
