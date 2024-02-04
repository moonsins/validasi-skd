<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skd extends Model
{
    use HasFactory;

    protected $dates = ['tgl_in','tgl_out'];

    protected $table = 'skd';

    protected $fillable = ['no_surat','nama_dokter','diagnnosa','tgl_in','tgl_out','pasien_id'];

    public function pasien(){
        return $this->belongsTo(Pasien::class,'pasien_id');
    }

    public function ds(){
        return $this->hasOne(Ds::class);
    }
}
