<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasisPengetahuan extends Model
{
    use HasFactory;
    // protected $table = 'your_table_name';
    protected $guarded = [];

    public function penyakit()  
    {
        return $this->belongsTo(Penyakit::class);
    }
    public function gejala()  
    {
        return $this->belongsTo(Gejala::class);
    }
    
}
