<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('site.home');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request){
        /* Fazendo autenticação dos itens enviados 
         * pelo formulário na tela de login.
         */
        $request->validate([
            'login' => 'required',
            'password' => 'required',
        ]);

        /* Fazendo autenticação entre os dados enviados
         * e o banco de dados para fazer o login, caso
         * não seja parecido, será redirecionado para a 
         * tela de login com o error que irá aparecer na view.
         */
        if(Auth::attempt(['name' => $request->login, 'password' => $request->password])){
            return redirect()->route('painel')->with('Success', 'Você está logado!');
        }
        return back()
                ->with('Error', 'Os dados que você informou não estão em nosso banco de dados!')
                ->withInput($request->only('login'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        /* Redirecionando o usuario para a tela de painel
         * administrativo e fazendo uma autenticação para
         * saber se ele está logado, caso não esteja será
         * enviado uma mensagem e redirecionado a tela de login.
         */
        if(Auth::check()){
            return view('site.painel.index');
        }
        return back()
            ->with('Error', 'Você precisa fazer login antes de acessar o painel administrativo!');
        
    }
}
