<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


// Route::get('/', 'HomeController@data');
// return view('welcome');
Route::get('/', function () {
  return redirect('login');
});

Auth::routes();

Route::middleware("auth")->group(
  function () {
    Route::get('/home', 'HomeController@index')->name('home');
  }
);
