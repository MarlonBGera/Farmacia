<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\FormaPagamento;

class FormaPagamentoController extends Controller
{
    public function index(){

        $show = FormaPagamento::all();

        return view('formpags.show', ['formpags' => $show]);
    }

    public function store(Request $request){

        $formPag = new FormaPagamento;

        $formPag->descForm = $request->descForm;
        $formPag->tPag = $request->tipoPagamento;
        $formPag->aReceberForm = $request->recPag;
        $formPag->active = "1";
        $formPag->userCad = "Marlon";

        $formPag->save();

        return redirect('/formpags')->with('msg', 'Forma de pagamento criado com sucesso!');
    }
}
