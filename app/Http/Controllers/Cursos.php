<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cursos extends Controller
{
    function cursos(){
        return view('pagina-cursos');
    }
}


