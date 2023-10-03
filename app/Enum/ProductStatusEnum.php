<?php

namespace App\Enums;

enum ProductStatusEnum:string {
    case in_stock = 'in_stock';
    case disabled = 'disabled';
    case sold_out = 'sold_out';
}

