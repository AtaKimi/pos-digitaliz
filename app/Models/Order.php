<?php

namespace App\Models;

use App\traits\HasFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use  App\Observers\OrderObserver;
use Illuminate\Database\Eloquent\Relations\MorphOne;

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
        'code',
    ];

    protected $observers = [
        Order::class => [OrderObserver::class],
    ];

    public function desk()
    {
        return $this->belongsTo(Desk::class);
    }


    public function orderDetail()
    {
        return $this->hasMany(OrderDetail::class);
    }

    public function tax(): MorphOne {
        return $this->morphOne(Tax::class, 'taxable');
    }

    public function getSubTotal(){
        $subtotal = 0;
        foreach ($this->orderDetail as $order_detail) {
            $subtotal = $subtotal + $order_detail->price;
        }
        return $subtotal;
    }

    public function getService(){
        return $this->desk->tenant->services()->first();
    }

    public function getPrice()
    {
        //get the total price of every order detail
        $this->total = $this->getSubTotal();
        //get the price of the tax of the detail
        if(($this->tax != null)){
            $this->tax->update(['tax_total' => ($this->total * $this->tax->percentage/100)]);
            $this->total = $this->tax->tax_total + $this->total;
        }

        $this->total = $this->total + $this->getService()->price;

        $this->save();
    }
}
