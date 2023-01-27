<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Caixa;

class CaixaController extends Controller
{
    public function index(){

        $show = Caixa::all();

        return view('caixas.show', ['caixas' => $show]);
    }

    public function store(Request $request){

        $caixa = new Caixa;

        $caixa->descCaixa = $request->descCaixa;
        $caixa->infoCaixa = $request->infoCaixa;
        $caixa->active = "1";
        $caixa->userCad = "Marlon";

        $caixa->save();

        return redirect('/caixas')->with('msg', 'Caixa criada com sucesso!');
    }
}
