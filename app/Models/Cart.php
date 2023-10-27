<?php

namespace App\Models;

use App\Models\Desk;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cart extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'product_id',
        'desk_id',
        'quantity',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function desk()
    {
        return $this->belongsTo(Desk::class);
    }

    public function total() {
        $total = $this->product->price * $this->quantity;
        return $total;
    }
}
