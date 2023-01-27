<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Fabricante;

class FabricanteController extends Controller
{
    public function index() {

        $show = Fabricante::all();

        return view('fabricantes.show', ['fabricantes' => $show]);
    }

    public function store(Request $request){

        $fabricante = new Fabricante;

        $fabricante->nomeFab = $request->nomeFab;
        $fabricante->active = "1";
        $fabricante->userCad = "Marlon";

        $fabricante->save();

        return redirect('/fabricantes')->with('msg', 'Fabricante criado com sucesso!');
    }
}
