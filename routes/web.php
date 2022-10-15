<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\C_Home;

Route::get('/', [C_Home::class, 'Homepage']);

Route::group(['prefix' => 'auth'], function (){

});

Route::group(['prefix' => 'app'], function (){

});

Route::group(['prefix' => 'apis'], function (){

});

