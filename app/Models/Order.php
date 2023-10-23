<?php

namespace App\Models;

use App\traits\HasFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory, SoftDeletes, HasFilter;
    protected $fillable =
    [
        // 'tenant_id',
        'desk_id',
        'total',
        'status',
        'is_paid',
    ];

    public function desk()
    {
        return $this->belongsTo(Desk::class);
    }

    

    public function orderDetail()
    {
        return $this->hasMany(OrderDetail::class);
    }

    public function getTax()
    {
        if ($this->desk->tenant->is_tax) {
            return $this->desk->tenant->taxes()->first();
        } else {
            return null;
        }
    }

    public function getService(){
        return $this->desk->tenant->services()->first();
    }

    public function getPrice()
    {
        //get the total price of every order detail
        foreach ($this->orderDetail as $order_detail) {
            $this->total = $this->total + $order_detail->price;
        }
        //get the price of the tax of the detail
        if(($this->getTax() !== null)){
            $tax = $this->getTax()->percentage;
            $this->total = $this->total * $tax + $this->total;
        }

        $this->total = $this->total + $this->getService()->price;

        $this->save();
    }
}
