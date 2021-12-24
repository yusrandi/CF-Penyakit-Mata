<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    //
    public function index()
    {
        return view('laporan',[
            'laporans' => Laporan::latest()->get()
        ]);
    }

    public function result($message)
    {
        return $message;
    }
}
