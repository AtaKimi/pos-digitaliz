<?php

namespace App\Models;

use App\traits\HasFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Desk extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, HasFilter, InteractsWithMedia;
    protected $fillable = 
    [
        'tenant_id',
        'name',
        'qrcode',
    ];

    public function tenant() {
        return $this->belongsTo(Tenant::class);
    }
    public function order()
    {
        return $this->hasMany(Order::class);
    }
}
