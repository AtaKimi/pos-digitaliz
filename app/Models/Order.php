<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'tenant_id',
        'desk_id',
        'total',
        'status',
        'is_paid',
    ];

    public function desk()
    {
        return $this->belongsTo(Desk::class);
    }
    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }
    public function orderDetail()
    {
        return $this->hasMany(OrderDetail::class);
    }

    public function getPrice() {
        foreach ($this->orderDetail as $order_detail) {
            $this->total = $this->total + $order_detail->price;
        }
        $this->save();
  }
}
