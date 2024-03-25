<?php

use App\Http\Controllers\QueryController;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/setupRoles',function(){


    return Role::all();
});
Route::get('/setupUsers',function(){
    return User::all();
});

Route::get('/setupPosts',[\App\Http\Controllers\PostController::class,'create']);

Route::get('/query',QueryController::class);
Route::get('/login',function(){
   $credentials=['email'=>'naveed@gmail.com','password'=>'password'];

   if(Auth::attempt($credentials))
   {
       session()->regenerate();
       //dd (Auth::user());
   }
   else {
       dd("User Not Found");
   }

});
Route::get('/edit/{id}',[\App\Http\Controllers\PostController::class,'edit']);
Route::get('/add',[\App\Http\Controllers\PostController::class,'add']);
