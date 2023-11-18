<?php

namespace App\Models;

use App\traits\HasFilter;
use App\Models\OrderDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory, SoftDeletes, HasFilter;

    protected $fillable =
    [
        'desk_id',
        'status',
        'is_paid',
        'code',
    ];

    public function desk()
    {
        return $this->belongsTo(Desk::class);
    }

    public function orderDetail()
    {
        return $this->hasMany(OrderDetail::class);
    }

    public function tax(): MorphOne
    {
        return $this->morphOne(Tax::class, 'taxable');
    }

    public function service() {
        return $this->morphOne(Service::class, 'serviceable');
    }

    public function tenant() {
        return $this->belongsTo(Tenant::class);
    }

    public function getPrice()
    {
        $this->sub_total = 0;
        foreach ($this->orderDetail as $order_detail) {
            $this->sub_total = $this->sub_total + $order_detail->price;
        }

        if (($this->tax != null)) {
            $this->tax_total = $this->sub_total * $this->tax->percentage / 100;
        }
        $this->service_total = $this->service->price;
        $this->total = $this->sub_total + $this->service_total + $this->tax_total;
        $this->save();
    }
}
