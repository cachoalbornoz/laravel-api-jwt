<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group([ 'middleware' => 'api'], function ($router) {

    Route::post('login', 'App\Http\Controllers\AuthController@login');
    Route::post('logout', 'App\Http\Controllers\AuthController@logout');
    Route::post('refresh', 'App\Http\Controllers\AuthController@refresh');
    Route::post('profile', 'App\Http\Controllers\AuthController@profile');
    Route::post('register', 'App\Http\Controllers\AuthController@register');

    Route::get('/note', ['App\Http\Controllers\NoteController', 'index']);
    Route::post('/note', ['App\Http\Controllers\NoteController', 'store']);

});