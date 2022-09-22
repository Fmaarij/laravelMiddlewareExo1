<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class AccueilController extends Controller
{
    // public function __construct(){
    //     $this->middleware('auth')->except('index');
    // }
    // $this->middleware('auth')->except(['create','store']);


    public function index(){

        return view('accueil');
    }
}
