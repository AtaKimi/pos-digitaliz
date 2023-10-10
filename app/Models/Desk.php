<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Desk extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = 
    [
        'tenant_id',
        'name',
        'qrcode',
    ];

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }
    public function order()
    {
        return $this->hasMany(Order::class);
    }
}
