<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;

use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index() {

        $show = Cliente::all();

        return view('clientes.show', ['clientes' => $show]);
    }

    public function store(Request $request){

        $cliente = new Cliente;

        $cliente->nameClient = $request->nome;
        $cliente->cpfClient = $request->cpf;
        $cliente->rgClient = $request->rg;
        $cliente->sexClient = $request->sexo;
        $cliente->nascClient = $request->nascCliente;
        $cliente->cepClient = $request->cep;
        $cliente->endressClient = $request->endereco;
        $cliente->compClient = $request->compEnd;
        $cliente->numberClient = $request->numeroEnd;
        $cliente->bairroClient = $request->bairro;
        $cliente->ufClient = $request->estado;
        $cliente->cityClient = $request->cidade;
        $cliente->contactClient = $request->contato;
        $cliente->emailClient = $request->email;
        $cliente->phoneClient = $request->phone;
        $cliente->cnpjClient = $request->cnpj;
        $cliente->ieClient = $request->iEstadual;
        $cliente->imClient = $request->iMunicipal;
        $cliente->nameFantasiaClient = $request->nomeFantasia;
        $cliente->typeClient = $request->pessoa;
        $cliente->block = "1";
        $cliente->active = "1";
        $cliente->userCad = "Marlon";

        $cliente->save();

        return redirect('/clientes')->with('msg', 'Cliente criado com sucesso!');

    }
}
