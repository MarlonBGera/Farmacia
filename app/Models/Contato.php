<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    use HasFactory;

    protected $table = 'contatos';

    public function cliente(){
        return $this->belongsTo(Cliente::class, 'id', 'contato_id');
    }
    public function fornecedor(){
        return $this->belongsTo(Fornecedor::class, 'id', 'contato_id');
    }
    public function funcionario(){
        return $this->belongsTo(Funcionario::class, 'id', 'contato_id');
    }
}
