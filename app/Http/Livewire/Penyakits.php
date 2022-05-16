<?php

namespace App\Http\Livewire;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\Penyakit;
use Livewire\Component;
use Livewire\WithPagination;

class Penyakits extends Component
{
    use LivewireAlert;
    public $itemId, $kode, $nama, $info;
    protected $rules = [
        // 'image' => 'required|image|max:1024',
        'kode' => 'required',
        'nama' => 'required',
        'info' => 'required',
    ];
    protected $messages = [
        'nama.required' => 'di isi bre.',
        'kode.required' => 'di isi bre.',
        'info.required' => 'di isi bre.',
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
        $save = $this->itemId == null ? Penyakit::create($data) : Penyakit::find($this->itemId)->update($data);
        $save ? $this->isSuccess("Berhasil bre") : $this->isError("Terjadi Kesalahan bre");

        $this->cleanVars();
    }
    public function delete()
    {
        $delete = Penyakit::destroy($this->itemId);
        $delete ? $this->isSuccess("Berhasil Mengahapus data") : $this->isError("Terjai kesalahan, Gagal Mengahapus data");
    }
    public function filledData()
    {
            $data = Penyakit::find($this->itemId);
            $this->nama = $data->nama;
            $this->kode = $data->kode;
            $this->info = $data->info;
    }
    public function render()
    {
        
        return view('livewire.penyakits',[
            'penyakits' => Penyakit::all()
        ]);
    }

    public function cleanVars()
    {
        $this->nama = null;
        $this->kode = null;
        $this->itemId = null;
        $this->info = null;
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
