<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tax extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'tenant_id',
        'percentage',
    ];

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }
}
