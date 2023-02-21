<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;

    protected $table = "enderecos";

    public function cliente(){
        return $this->belongsTo(Cliente::class, 'id', 'endereco_id');
    }
    public function fornecedor(){
        return $this->belongsTo(Fornecedor::class, 'id', 'endereco_id');
    }
    public function funcionario(){
        return $this->belongsTo(Funcionario::class, 'id', 'endereco_id');
    }
}
