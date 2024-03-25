<?php

namespace App\Providers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        Gate::define('update-post',function(User $user, Post $post){
           return $user->id===$post->user_id;
        });
        Gate::define('add-post',function(User $user){
            // Only Allow Addition if User Role is 2..
            return $user->role_id===2;
        });
    }
}
