<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageOneController extends Controller
{
    public function view1()
    {
        $email="dg@blog.com";
        $telefone="(38) 99999999";
        return view('view1')->with('email',$email)->with('telefone',$telefone);
    }
    public function view2()
    {
        $email="dg@blog.com";
        $telefone="(38) 99999999";
        return view('view1')->with('email',$email)->with('telefone',$telefone);
    }
    public function view3()
    {
        $email="dg@blog.com";
        $telefone="(38) 99999999";
        return view('view1')->with('email',$email)->with('telefone',$telefone);
    }
}
