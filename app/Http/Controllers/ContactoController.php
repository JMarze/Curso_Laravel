<?php

namespace Blog\Http\Controllers;

use Illuminate\Http\Request;

use Blog\Http\Requests;

class ContactoController extends Controller
{
    public function contacto(){
        //return "Hola desde ContactoController";
        return view('contacto');
    }

    public function privado(){
        return view('privado.privado');
    }
}
