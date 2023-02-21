<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $table = 'produtos';

    public function grupo(){
        return $this->belongsTo(Grupo::class, 'id', 'grupo_id');
    }
    public function localizacao(){
        return $this->belongsTo(Localizacao::class, 'id', 'localizacao_id');
    }
}
