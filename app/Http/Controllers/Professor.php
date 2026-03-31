<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Professor extends Controller
{
    function showProfessor(){
        $professores = [
           (Object) ['nome'=> 'Diogo', 'telefone'=> '1231654'],
           (Object)['nome'=> 'felipe', 'telefone'=> '91145401'],
        ];
        return view('professor',compact('professores'));
    }
}
