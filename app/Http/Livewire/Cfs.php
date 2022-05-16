<?php

namespace App\Http\Livewire;

use App\Models\Cf;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;


class Cfs extends Component
{
    use LivewireAlert;

    public $itemId, $nama, $nilai;
    protected $rules = [
        // 'image' => 'required|image|max:1024',
        'nama' => 'required',
        'nilai' => 'required',
        
    ];
    protected $messages = [
        'nama.required' => 'di isi bre.',
        'nilai.required' => 'di isi bre.',
        
    ];
    protected $listeners =[
        'isSuccess',
        'isError',
        'delete'
    ];

    public function selectedItem($item, $action)
    {
        $this->itemId = $item;
        $action == 'delete' ? $this->triggerConfirm() : $this->filledData();   
    }
    public function save()
    {
        $data = $this->validate();
        $save = $this->itemId == null ? Cf::create($data) : Cf::find($this->itemId)->update($data);
        $save ? $this->isSuccess("Berhasil bre") : $this->isError("Terjadi Kesalahan bre");

        $this->cleanVars();
    }
    public function delete()
    {
        $delete = Cf::destroy($this->itemId);
        $delete ? $this->isSuccess("Berhasil Mengahapus data") : $this->isError("Terjai kesalahan, Gagal Mengahapus data");

        $this->cleanVars();

    }
    public function filledData()
    {
            $data = Cf::find($this->itemId);
            $this->nama = $data->nama;
            $this->nilai = $data->nilai;
    }
    public function render()
    {
        return view('livewire.cfs',[
            'cfs' => Cf::all()
        ]);
    }
    public function cleanVars()
    {
        $this->nama = null;
        $this->nilai = null;
        $this->itemId = null;
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
