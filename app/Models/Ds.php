<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ds extends Model
{
    use HasFactory;

    protected $table = 'ds';

    protected $fillable = ['hash','qrcode','skd_id'];

    public function skd(){
        return $this->belongsTo(Skd::class,'skd_id');
    }
}
