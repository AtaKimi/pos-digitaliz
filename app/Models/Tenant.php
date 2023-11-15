<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Tenant extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia, SoftDeletes;
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
    public function cart()
    {
        return $this->hasMany(Cart::class);
    }
    public function tenant_service_payment()
    {
        return $this->hasMany(TenantServicePayment::class);
    }

    public function taxes(): MorphMany
    {
        return $this->morphMany(Tax::class, 'taxable');
    }
    public function service(): MorphOne
    {
        return $this->MorphOne(service::class, 'serviceable');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
