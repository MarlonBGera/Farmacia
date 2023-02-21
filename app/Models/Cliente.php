<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = "clientes";

    protected $fillable = ['nome','razaoSocial','cadastro','registro','im','sexo', 'contato_id', 'endereco_id'];

    public function endereco(){
        return $this->hasOne(Endereco::class, 'id', 'endereco_id');
    }
    public function contato(){
        return $this->hasOne(Contato::class, 'id', 'contato_id');
    }
}
