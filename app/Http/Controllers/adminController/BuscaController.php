<?php

namespace App\Http\Controllers\adminController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contato;

class BuscaController extends Controller
{
    public function pesquisar(){
        $search = filter_input(INPUT_GET,'search');
        $listar = Contato::select()->where('nome','like',''.$search.'%')->get();
        return view('adminViews.lista',['listar'=>$listar]);
    }
}
