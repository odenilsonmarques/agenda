<?php

namespace App\Http\Controllers\adminController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contato;

class BuscaController extends Controller
{
    // usando o request porque irei trabalhar com dados vindo do formulario
    public function pesquisar(){
        $search = filter_input(INPUT_GET,'search');
        $contatos = Contato::orderBy('nome')->where('nome','like',''.$search.'%')->paginate(10);
       // $contatos = Contato::select()->where('nome','like',''.$search.'%')->paginate(10);
        return view('adminViews.lista',['contatos'=>$contatos]);
    }
}
