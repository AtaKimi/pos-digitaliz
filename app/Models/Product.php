<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'name',
        'price',
        'description',
        'status',
        'category_id',
        'tenant_id',
    ];

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }
    public function orderDetail()
    {
        return $this->hasMany(OrderDetail::class);
    }
    public function cart()
    {
        return $this->hasMany(Cart::class);
    }
}
