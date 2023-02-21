<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;

    protected $table = 'grupos';

    public function produtos(){
        return $this->hasMany(Produto::class, 'id', 'grupo_id');
    }
}
