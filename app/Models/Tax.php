<?php

namespace App\Models;

use App\Models\Order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tax extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable =
    [
        'tenant_id',
        'percentage',
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
