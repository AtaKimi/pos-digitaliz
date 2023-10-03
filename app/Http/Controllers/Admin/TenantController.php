<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tenant;
use Illuminate\Http\Request;

class TenantController extends Controller
{
    public function index () {
        $tenants = Tenant::all();
        return view('admin.tenant-management', compact('tenants'));
    }

    public function show () {
        return view('admin.tenant-detail');
    }
}
