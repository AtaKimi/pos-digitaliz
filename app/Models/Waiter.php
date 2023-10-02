<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Waiter extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'user_id',
        'tenant_id',
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }
    public function tenant()
    {
        return $this->hasOne(Tenant::class);
    }
}