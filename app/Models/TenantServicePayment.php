<?php

namespace App\Models;

use App\traits\HasFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class TenantServicePayment extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, InteractsWithMedia, HasFilter;
    protected $fillable =
    [
        'tenant_id',
        'user_id',
        'transfer_at',
        'total',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }
}
