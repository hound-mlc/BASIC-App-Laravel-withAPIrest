<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorMain extends Controller
{
    public function home()
    {
        return view('welcome');
    }
    
    public function add()
    {
        return view('add');
    }

    public function libros(){
        return view('libros');
    }
}
