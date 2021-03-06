<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarrinhoProduto extends Model
{
    use HasFactory;

    public function turma(){
        return $this->belongsTo(Turma::class);
    }
}
