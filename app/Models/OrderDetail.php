<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrderDetail extends Model
{
    use HasFactory;
    
    protected $fillable = 
    [
        'order_id',
        'product_id',
        'modelable_id',
        'modelable_type',
        'price',
        'quantity',
    ];

    protected static function booted(): void
    {
        static::created(function (OrderDetail $order_detail) {
            $order_detail->getPrice();
        });
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function getPrice() {
        $this->price = $this->product->price * $this->quantity;
        $this->save();
  }
}
