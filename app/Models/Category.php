<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'tenant_id',
        'name',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function tenant()
    {
        return $this->hasMany(Tenant::class);
    }

}
