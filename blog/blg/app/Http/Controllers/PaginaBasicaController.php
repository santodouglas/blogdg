<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaBasicaController extends Controller
{
    public function sobre()
    {
        $email="dg@blog.com";
        $telefone="(38) 99999999";
        return view('sobre')->with('email',$email)->with('telefone',$telefone);
    }
    public function contato()
    {
        //$email="dg@blog.com";
        return view('contato');
    }
}
