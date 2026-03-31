<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Aluno extends Controller
{
    function show(){
        $alunos = [
           (Object) ['nome'=> 'Diogo', 'telefone'=> '1234','email'=>'diogo@gmail.com'],
           (Object)['nome'=> 'Alex', 'telefone'=> '5678','email'=>'alex@gmail.com'],
           (Object)['nome'=> 'Maria', 'telefone'=> '9101','email'=>'maria@gmail.com'],
           (Object)['nome'=> 'João', 'telefone'=> '5689','email'=>'joao@gmail.com']
        ];
        return view('aluno',compact('alunos'));
    }
}
