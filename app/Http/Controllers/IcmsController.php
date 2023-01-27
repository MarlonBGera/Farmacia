<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Icms;
use App\Models\Plano;

class IcmsController extends Controller
{
    public function index(){

        $show = Icms::all();
        $plano = Plano::all();

        return view('icms.show', [ 'icms' => $show,
                                   'planos' => $plano
                                ]);
    }

    public function store(Request $request){

        $icms = new Icms;

        $icms->cfopICMS = $request->cfop;
        $icms->nameICMS = $request->descCfop;
        $icms->financeiroICMS = $request->finanCfop;
        $icms->estoqueICMS = $request->estoqueCfop;
        $icms->codPlano = $request->planoContas;
        $icms->baseICMS = $request->baseCfop;
        $icms->stICMS = $request->stCfop;
        $icms->ipiICMS = $request->ipiCfop;
        $icms->refICMS = $request->refCfop;
        $icms->finalICMS = $request->finalidadeCfop;
        $icms->obsICMS = $request->obsCfop;
        $icms->leiICMS = $request->leiIcms;
        $icms->permICMS = $request->permcfop;
        $icms->comissaoICMS = $request->comisCfop;
        $icms->active = "1";
        $icms->userCad = "Marlon";


        $icms->save();

        return redirect('/icms')->with('msg', 'Grupo criado com sucesso!');
    }
}
