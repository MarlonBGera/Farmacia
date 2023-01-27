<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Produtos;
use App\Models\Localizacao;
use App\Models\Grupo;
use App\Models\Fabricante;
use App\Models\produtosTrib;

class ProdutoController extends Controller
{
    public function index (){

        $show = Produtos::all();
        $local = Localizacao::all();
        $grupo = Grupo::all();
        $fabrica = Fabricante::all();

        return view('produtos.show', [  'produtos' => $show, 
                                        'localizacoes' => $local, 
                                        'grupos' => $grupo, 
                                        'fabricantes' => $fabrica
                                    ]);
    }

    public function store(Request $request){

        $produto = new Produto;
        $trib = new produtosTrib;

        $produto->eanProd = $request->ean;

    }
}
