<?php

namespace App\traits;

trait HasFilter {
    public function scopeFilterByName($query, array $params)
    {
        if (@$params['search']) {
            $query->where('name', 'like', "%{$params['search']}%");
        }
    }

    public function scopeFilterById($query, array $params)
    {
        if (@$params['search']) {
            $query->where('id', 'like', "%{$params['search']}%");
        }
    }
}

