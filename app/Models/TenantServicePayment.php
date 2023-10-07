<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TenantServicePayment extends Model
{
    use HasFactory, SoftDeletes;
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
