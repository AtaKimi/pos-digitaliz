<?php

namespace App\Http\Controllers\Costumer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return view('customer.customer-landing');
    }

    public function menu()
    {
        return view('customer.menu');
    }

    public function menuList()
    {
        return view('customer.menu');
    }
}
