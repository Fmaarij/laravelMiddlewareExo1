<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class ArticleController extends Controller {

    // exercice part 1
    // public function __construct() {
    //     $this->middleware( 'auth' );
    // }
    // fin de exercice part 1

    //partie 4
    // public function __construct() {
    //     $this->middleware( 'auth' )->except();
    // }

    public function index() {

        // if ( !Gate::allows( 'access-accueil' ) ) {
        //     abort( '403' );
        // }
        $articles = Article::all();
        return view( 'backoffice.articles', compact( 'articles' ) );
    }

    public function create() {
        return view( 'backoffice.create' );

    }

    public function store( Request $request ) {

        $articles = new Article;
        $articles->titre = $request->titre;
        $articles->text = $request->text;
        $articles->user_id = Auth::user()->id;
        $articles->save();

        return redirect()->back();
    }

    public function show( $id ) {
        $articles = Article::find( $id );
        $users = User::find( $id );
        return view( 'backoffice.show', compact( 'articles' ,'users') );
    }

    public function edit( $id ) {
        $articles = Article::find( $id );
        return view( 'backoffice.edit', compact( 'articles' ) );

    }

    public function update( Request $request, $id ) {
        $articles = Article::find( $id );
        $articles->titre = $request->titre;
        $articles->text = $request->text;
        $articles->user_id = Auth::user()->id;
        $articles->save();
        return redirect( 'articles' );

    }




    public function destroy( $id ) {
        $articles = Article::find( $id );
        $articles->delete();

        return redirect( 'articles' );
    }
}
