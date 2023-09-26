<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'tenant_id',
        'product_id',
        'quantity',
    ];

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }
    // public function product()
    // {
    //     return $this->
    // }
}
