<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GaleriaFoto extends Model
{
    use HasFactory;

    public function galeria(){
        return $this->belongsTo(Galeria::class);
    }
}
