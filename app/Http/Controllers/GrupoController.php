<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Grupo;

class GrupoController extends Controller
{
    public function index(){

        $show = Grupo::all();

        return view('grupos.show', ['grupos' => $show]);
    }

    public function store(Request $request){

        $grupo = new Grupo;

        $grupo->codGrupo = $request->codGrupo;
        $grupo->nomeGrupo = $request->nomeGrupo;
        $grupo->descGrupo = $request->descGrupo;
        $grupo->comissaoGrupo = $request->comissaoGrupo;
        $grupo->descMaxGrupo = $request->descMaxGrupo;
        $grupo->active = "1";
        $grupo->userCad = "Marlon";


        $grupo->save();

        return redirect('/grupos')->with('msg', 'Grupo criado com sucesso!');
    }

    public function showEdit($id){

        $grupo = Grupo::findOrFail($id);

        return view('grupos.showEdit', ['grupo' => $grupo]);
    }
}
