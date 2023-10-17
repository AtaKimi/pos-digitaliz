<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable =
    [
        'tenant_id',
        'name',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
    public function tenant()
    {
        return $this->hasMany(Tenant::class);
    }

}
