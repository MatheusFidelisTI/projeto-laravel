<?php

use Illuminate\Support\Facades\Route;


Route::namespace('Site')->group(function (){

    Route::get('/', 'HomeController');

    Route::get('produtos','CategoryController@index');
    Route::get('produtos/{slug}','CategoryController@show');

    Route::get('blog','BlogController');

    Route::view('sobre','site.about.index');

    Route::get('contato','ContactController@index');
    Route::post('contato','ContactController@form');
});
