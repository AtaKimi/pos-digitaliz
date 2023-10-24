<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
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
        'is_active',
    ];

    public function scopeFilterByUserName(Builder $query, array $params){
        if (@$params['search']) {
            $query->user->where('name', 'like', "%{$params['search']}%");
        }
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }
}
