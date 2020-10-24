<?php

namespace App\Http\Controllers\adminController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contato;

class HomeController extends Controller
{
    public function home(){
        return view('adminViews.agenda');
    }

}
