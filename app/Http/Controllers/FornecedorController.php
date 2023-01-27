<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Fornecedor;

class FornecedorController extends Controller
{
    public function index() {

        $show = Fornecedor::all();

        return view('fornecedores.show', ['fornecedores' => $show]);
    }

    public function store(Request $request){

        $fornecedor = new Fornecedor;

        $fornecedor->razaoForn = $request->rSocial;
        $fornecedor->nomeFantForn = $request->nFantasia;
        $fornecedor->contactForn = $request->contato;
        $fornecedor->phoneForn = $request->telefone;
        $fornecedor->cepForn = $request->cep;
        $fornecedor->endForn = $request->endereco;
        $fornecedor->compForn = $request->compEnd;
        $fornecedor->numbForn = $request->numeroEnd;
        $fornecedor->bairroForn = $request->bairro;
        $fornecedor->ufForn = $request->estado;
        $fornecedor->cityForn = $request->cidade;
        $fornecedor->emailForn = $request->email;
        $fornecedor->cnpjForn = $request->cnpj;
        $fornecedor->ieForn = $request->iEstadual;
        $fornecedor->imForn = $request->iMunicipal;
        $fornecedor->block = "1";
        $fornecedor->active = "1";
        $fornecedor->userCad = "Marlon";

        $fornecedor->save();

        return redirect('/fornecedores')->with('msg', 'Fornecedor criado com sucesso!');
    }
}
