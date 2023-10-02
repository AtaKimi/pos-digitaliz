<?php

namespace App\Models;

use App\Models\Order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'tenant_id',
        'price',
    ];

    public function order(): MorphOne
    {
        return $this->morphOne(Order::class, 'modelable');
    }

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }
}