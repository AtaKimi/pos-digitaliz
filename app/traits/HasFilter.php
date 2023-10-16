<?php

namespace App\traits;

trait HasFilter {
    public function scopeFilter($query, array $params)
    {
        if (@$params['search']) {
            $query->where('name', 'like', "%{$params['search']}%");
        }
    }
}

