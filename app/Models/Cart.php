<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'product_id',
        'desk_id',
        'quantity',
    ];

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }
    public function desk()
    {
        return $this->belongsTo(Desk::class);
    }
    // public function product()
    // {
    //     return $this->
    // }
}
