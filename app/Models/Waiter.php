<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Waiter extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable =
    [
        'user_id',
        'tenant_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function tenant()
    {
        return $this->hasOne(Tenant::class);
    }
}
