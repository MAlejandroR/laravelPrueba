<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Aplicacion extends Controller
{
    //
    public function index(){
        $n = rand(1,200);

        return view("principal.aplicacion",["numero"=> $n]);
    }
    public function about(){

        return view("principal.about");
    }
    public function administracion(){


        return view("principal.administracion");
    }
    public function contacta(){


        return view("principal.contacta");
    }
    public function noticias(){

        return view("principal.noticias");
    }
}
