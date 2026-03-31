<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardControl extends Controller
{
    public function admin(){
        return view("admin.dashboard");
    }
    public function user(){
        return view("admin.users");
    }
    public function product(){
        return view('admin.products');
    }
    public function order(){
        return view('admin.orders');
    }
}

