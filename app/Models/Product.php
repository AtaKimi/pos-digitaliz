<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Product extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia, SoftDeletes;
    protected $fillable = 
    [
        'name',
        'price',
        'description',
        'status',
        'category_id',
        'tenant_id',
    ];

    public function modelable(): MorphTo
    {
        return $this->morphTo();
    }

    public function category()  {
        return $this->belongsTo(Category::class);
    }
    public function orderDetail()
    {
        return $this->hasMany(OrderDetail::class);
    }
    public function cart()
    {
        return $this->hasMany(Cart::class);
    }
}
