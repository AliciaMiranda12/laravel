<?php

namespace App\Http\Controllers; //controllers é o nome da região, pasta pai

use Illuminate\Http\Request;

class Principal extends Controller
{
    function principal(){
        return view('pagina-principal');
    }
     function sobre(){
        return view('sobre');
    }
    function desenvolvimentoSistemas(){
        return view('desenvolvimento-sistemas');
    }
    function administracao(){
        return view('administracao');
    }
    function contato(){
        return view('contato');
    }
     function meioAmbiente(){
        return view('meio-ambiente');
    }
    
}



