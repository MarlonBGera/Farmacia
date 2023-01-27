<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Localizacao;

class LocalizacaoController extends Controller
{
    public function index() {

        $show = Localizacao::all();

        return view('localizacoes.show', ['localizacoes' => $show]);
    }

    public function store(Request $request){

        $localizacao = new Localizacao;

        $localizacao->nomeLocalizacao = ucwords($request->localizacao);
        $localizacao->descLocalizacao = $request->descricao;
        $localizacao->active = "1";
        $localizacao->userCad = "Marlon";

        $localizacao->save();

        return redirect('/localizacoes')->with('msg', 'Localização criada com sucesso!');
    }
}
