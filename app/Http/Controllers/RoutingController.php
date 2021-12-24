<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoutingController extends Controller
{
    //
    public function index()
    {
        return view('home');
    }
    public function root($first)
    {
        if ($first != 'assets')
            return view($first);
        return view('home');
    }
}
