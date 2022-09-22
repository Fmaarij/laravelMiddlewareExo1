<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ArticleController extends Controller {

    public function __construct() {
        $this->middleware( 'auth' );
    }

    public function index() {

        // if(!Gate::allows('access-accueil')){
        //     abort('403');
        // }
        return view( 'articles' );
    }
}
