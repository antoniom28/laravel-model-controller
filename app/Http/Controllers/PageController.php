<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class PageController extends Controller
{
    public function index(){
        $lista_movie = Movie::all();
        return view('home' , ['lista' => $lista_movie]);
    }
}
