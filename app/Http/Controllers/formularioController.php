<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formularioController extends Controller
{
    public function showform(){

   return view('formulario');

    }

    public function enviar(){

        return view('todobien');
     
         }

}
