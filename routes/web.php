<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $users = App\Models\User::get();
    return view('welcome', compact('users'));
});

Route::get('/profile/{id}', function($id){
    $user = App\Models\User::find($id);
    return view('profile', compact('user'));
})->name('profile');




////////////////////////////////////////////
/// instalado package Barryvdh/Debugbar barra de consultas- solo Dev
////////////////