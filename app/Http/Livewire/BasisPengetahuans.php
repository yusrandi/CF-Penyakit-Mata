<?php

namespace App\Http\Livewire;

use App\Models\BasisPengetahuan;
use App\Models\Cf;
use App\Models\Gejala;
use App\Models\Penyakit;
use Livewire\Component;

class BasisPengetahuans extends Component
{
    public $itemId, $penyakit_id, $gejala_id, $cf, $mb, $md;
    protected $rules = [
        // 'image' => 'required|image|max:1024',
        'penyakit_id' => 'required',
        'gejala_id' => 'required',
        'mb' => 'required',
        'md' => 'required',
        
    ];
    protected $messages = [
        'penyakit_id.required' => 'di isi bre.',
        'gejala_id.required' => 'di isi bre.',
        'cf_id.required' => 'di isi bre.',
        
    ];
    protected $listeners =[
        'isSuccess',
        'isError',
        'delete'
    ];

    public function mount()
    {
        
    }

    public function selectedItem($item, $action)
    {
        $this->itemId = $item;
        $action == 'delete' ? $this->triggerConfirm() : $this->filledData();   
    }
    public function save()
    {
        $data = $this->validate();
        $data['cf'] = $this->mb-$this->md;
        $save = $this->itemId ? BasisPengetahuan::find($this->itemId)->update($data) : BasisPengetahuan::create($data); 
        $save ? $this->isSuccess("Berhasil bre") : $this->isError("Terjadi Kesalahan bre");

        $this->cleanVars();
    }
    public function delete()
    {
        $delete = BasisPengetahuan::destroy($this->itemId);
        $delete ? $this->isSuccess("Berhasil Mengahapus data") : $this->isError("Terjai kesalahan, Gagal Mengahapus data");

        $this->cleanVars();

    }
    public function filledData()
    {
            $data = BasisPengetahuan::find($this->itemId);
            $this->penyakit_id = $data->penyakit_id;
            $this->gejala_id = $data->gejala_id;
            $this->mb = $data->mb;
            $this->md = $data->md;
    }
    public function render()
    {
        return view('livewire.basis-pengetahuans',[
            'basispengetahuans' => BasisPengetahuan::with(['penyakit','gejala'])->get(),
            'penyakits' => Penyakit::all(),
            'gejalas' => Gejala::all(),
            'cfs' => Cf::all(),
        ]);
    }

    public function cleanVars()
    {
        $this->itemId = null;
        $this->penyakit_id = null;
        $this->gejala_id = null;
        $this->cf_id = null;
    }
    public function triggerConfirm()
    {
        $this->confirm('Yakin mo dihapus ?', [
            'toast' => false,
            'position' => 'center',
            'showConfirmButton' => true,
            'showCancelButton' =>  true, 
            'onConfirmed' => 'delete',
            'onCancelled' => 'cancelled'
        ]);
    }
    public function isSuccess($msg)
    {
        $this->alert('success', 'Success', [
            'position' =>  'top-end', 
            'timer' =>  3000,  
            'toast' =>  true, 
            'text' =>  $msg,
      ]);
    }
    public function isError($msg)
    {
        $this->alert('error', 'Error', [
            'position' =>  'top-end', 
            'timer' =>  3000,  
            'toast' =>  true, 
            'text' =>  $msg, 
      ]);
    }
}
