<?php

namespace App\Models;

use App\Models\Order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tax extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable =
    [
        'tenant_id',
        'percentage',
    ];

    public function order(): MorphTo
    {
        return $this->morphTo(Order::class, 'taxable');
    }

    public function tenant(): MorphTo
    {
        return $this->morphTo(Order::class, 'taxable');
    }
}
