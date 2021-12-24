<?php

namespace App\Http\Livewire;

use App\Models\BasisPengetahuan;
use App\Models\Cf;
use App\Models\Gejala;
use App\Models\Laporan;
use App\Models\Penyakit;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Facades\Log;
class Diagnosas extends Component
{
    
    public $gejala = [];

    protected $rules = [
        
    ];
    protected $messages = [
        
    ];

    public function render()
    {
        return view('livewire.diagnosas',[
            'gejalas' => Gejala::all(),
            'cfs' => Cf::all(),
        ]);
    }

    public function save()
    {
        $validateData = [];
        $gejalas = Gejala::all();
        foreach ($gejalas as $key => $value) {
            $validateData = array_merge($validateData,[
                'gejala.'.$value->id => 'required'
            ]);
        }
        $data = $this->validate($validateData);
        
        // dd($data['gejala']);

        $basis = BasisPengetahuan::with('gejala')->orderBy('penyakit_id', 'ASC')->get();
        $penyakits = Penyakit::all();

        // dd(count($basis));

        $varabels = [];
        $allResult = [];

        foreach ($penyakits as $keyP => $valueP) {
            array_push($varabels, $valueP->nama);

            $cfOld = 0;
            $resultCF = 0;
            $total = 0;

            foreach ($basis as $key => $valueB) {
                if($valueP->id == $valueB->penyakit_id){
                    // array_push($varabels, $valueB->gejala->id.' CF = '.$valueB->cf);

                    foreach ($data['gejala'] as $key => $valueD) {
                        
                        $value = explode(',',$valueD);
                        if ($value[0] == $valueB->gejala->id) {
                            $cfCombine = $valueB->cf * $value[1];
                            $cfGabungan = $cfOld + $cfCombine * (1-$cfOld);

                            array_push($varabels, $valueB->gejala->id.' CF = '.$valueB->cf.', data ID '.$value[0].' CF User '.$value[1].' CF Combine = '.$cfCombine.' CF Old = '.$cfOld.' CF Baru '.$cfCombine.' ,CF Gabungan = '.$cfGabungan);
                            $cfOld = $cfGabungan;
                            $resultCF = $cfGabungan;

                        }
                    }
                }



            }

            $allResult[$keyP] = $resultCF;

        }

        $terbesar = 0;
        $dataResult = [];
        $penyakit_id = 0;

        foreach ($penyakits as $key => $value) {
            // echo('Penyakit  = '.$value->nama.', CF '.$allResult[$key].'</br>');
            if ($allResult[$key] > $terbesar) {
                $terbesar = $allResult[$key];
                $penyakit_id = $value->id;
                $dataResult = [
                    'cf' => $terbesar,
                    'nama' => $value->nama,
                    'info' => $value->info
                ];

            }
            
        }

        $data = [
            'user_id' => Auth::user()->id,
            'penyakit_id' => $penyakit_id,
            'cf' => number_format($dataResult['cf'],3),
        ];

        Laporan::create($data);
        
        return view('result',[
            'gejalas' => Gejala::all(),
            'cfs' => Cf::all(),
            'penyakits' => Penyakit::all(),
            'allResult' => $allResult,
            'dataResult' => $dataResult
        ]);
        // dd($data);




    }
}
