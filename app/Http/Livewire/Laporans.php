<?php

namespace App\Http\Livewire;

use App\Models\Laporan;
use Livewire\Component;

class Laporans extends Component
{
    public function render()
    {
        return view('livewire.laporans',[
            'laporans' => Laporan::latest()->get()
        ]);
    }
}
