<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $dates = ["tgllahir"];
    protected $table = "pasien";

    protected $fillable = ['nik','nama','pekerjaan','alamat','no_hp','tmptlahir','tgllahir'];
    public function skd(){
        return $this->hasMany(skd::class, 'skd_id');
    }
}
