<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TenantServicePayment extends Model
{
    use HasFactory;
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