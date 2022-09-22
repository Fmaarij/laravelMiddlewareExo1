<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ArticleController extends Controller {

    // exercice part 1
    // public function __construct() {
    //     $this->middleware( 'auth' );
    // }
    // fin de exercice part 1

    public function index() {

        // if ( !Gate::allows( 'access-accueil' ) ) {
        //     abort( '403' );
        // }
        return view( 'articles' );
    }
}
