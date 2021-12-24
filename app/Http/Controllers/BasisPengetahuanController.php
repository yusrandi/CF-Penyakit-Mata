<?php

namespace App\Http\Controllers;

use App\Models\BasisPengetahuan;
use Illuminate\Http\Request;

class BasisPengetahuanController extends Controller
{
    
    public function index()
    {
        //
        return view('basispengetahuan');
    }

    
}
