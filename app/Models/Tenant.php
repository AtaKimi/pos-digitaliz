<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'name',
        'address',
        'description',
        'is_tax',
        'is_active',
        'user_id',
    ];

    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    public function product()
    {
        return $this->hasMany(Product::class);
    }
    public function waiter()
    {
        return $this->hasMany(Waiter::class);
    }
    public function desk()
    {
        return $this->hasMany(Desk::class);
    }
    public function order()
    {
        return $this->hasMany(Order::class);
    }
    public function service()
    {
        return $this->hasMany(Service::class);
    }
    public function tax()
    {
        return $this->hasMany(Tax::class);
    }
    public function cart()
    {
        return $this->hasMany(Cart::class);
    }
    public function tenant_service_payment()
    {
        return $this->hasMany(TenantServicePayment::class);
    }
}