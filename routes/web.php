<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'GuestController@home') -> name('home');

Route::post('/register', 'Auth\RegisterController@register') -> name('register');

Route::post('/login', 'Auth\LoginController@login') -> name('login');
Route::get('/logout', 'Auth\LoginController@logout') -> name('logout');

Route::get('/api/postcards/list', 'ApiController@getPostcards') -> name('api.postcards.list');

Route::middleware('auth')->prefix('postcards')->group(function() {

    Route::get('/create', 'GuestController@create')-> name('create');
    Route::post('/store', 'GuestController@store')-> name('store');
});