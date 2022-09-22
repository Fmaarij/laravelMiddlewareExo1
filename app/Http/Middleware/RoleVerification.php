<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleVerification
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        //verifier si l'utilisateur est administrateur (admin==1)
        if(Auth::user()->admin=='1'){
            //si oui, continuer jusqu'à la prochaine requete
            return $next($request);
        }else{
            //sinon renvoyer un 403 (accès forbidden)
            abort('403');
        }
    }
}
