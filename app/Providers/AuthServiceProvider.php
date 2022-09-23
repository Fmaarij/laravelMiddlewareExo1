<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Article;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Gate::define('access-btnDelete', function ($user, $article) {
        //  return $user->role == 'redacteur';
        if($user->role ==  'admin' || ($user->role == 'webmaster'  && $user->id === $article->user_id)) {

            return true;
        }


        // Gate::define('view-webMaster', function( $user, $article ){
        //     if ( $user->role_id == 1 || ($user->id === $article->user_id && $user->role_id == 3  )) {
        //       return true;
        //     }

        });

        // Gate::define('access-btnDelete-self', function (Article $article, User $user) {
        //     return $article->user_id == $user->id;
        //    });

    }
}
