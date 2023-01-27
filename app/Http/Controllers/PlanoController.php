<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Plano;

class PlanoController extends Controller
{
    public function index(){

        $show = Plano::all();

        return view('planos.show', ['planos' => $show]);
    }

    public function store(Request $request){

        $plano = new Plano;

        $plano->descPlano = mb_strtoupper($request->descPlano);
        $plano->tipoPlano = $request->tipoPlano;
        $plano->active = "1";
        $plano->userCad = "Marlon";

        $plano->save();

        return redirect('/planos')->with('msg', 'Plano de contas criado com sucesso!');
    }
}
