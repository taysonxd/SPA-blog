<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/posts', 'HomeController@home');
Route::get('/post/{post}', 'PostController@show');
Route::get('/archive', 'PagesController@archive');

Route::get('/categories/{category}', 'PostController@postsByCategory');
Route::get('/tags/{tag}', 'PostController@postsByTag');

Route::post('/messages', function() {
  return true;
});
