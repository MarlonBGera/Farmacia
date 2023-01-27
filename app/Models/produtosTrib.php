<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produtosTrib extends Model
{
    use HasFactory;

    protected $fillable = [
        'cfopProd',
        'tribProd',
        'csosnProd',
        'ctecfProd',
        'ncmProd',
        'cestProd'
    ];

    public function tributacao(){
        return $this->hasOne(produtosTrib::class, 'produto');
    }
}
