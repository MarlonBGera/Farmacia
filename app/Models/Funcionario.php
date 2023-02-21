<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;

    protected $table = 'funcionarios';

    public function endereco(){
        return $this->hasOne(Endereco::class, 'id', 'endereco_id');
    }
    public function contato(){
        return $this->hasOne(Contato::class, 'id', 'contato_id');
    }
}
