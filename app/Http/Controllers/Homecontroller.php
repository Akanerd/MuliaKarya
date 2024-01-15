<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function customerdashboard()
    {
        return view('Frontend.ecommerce.index');
    }

    public function admindashboard()
    {
        return view('Backend.admin.index');
    }
}
