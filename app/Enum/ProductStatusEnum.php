<?php

namespace App\Enums;

enum ProductStatusEnum:string {
    case in_stock = 'in stock';
    case disabled = 'disabled';
    case sold_out = 'sold out';
}

