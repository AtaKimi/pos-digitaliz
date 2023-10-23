<?php

namespace App\Models;

use App\traits\HasFilter;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model implements HasMedia
{
<<<<<<< HEAD
    use HasFactory, InteractsWithMedia, SoftDeletes, HasFilter;
    protected $fillable = 
=======
    use HasFactory, InteractsWithMedia, SoftDeletes;
    protected $fillable =
>>>>>>> 2ab510146be36642935f25fc8cb963326d53e31f
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
