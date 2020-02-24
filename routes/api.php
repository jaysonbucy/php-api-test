<?php

use Illuminate\Http\Request;
use App\Article;

Route::get('articles', 'ArticleController@index');

Route::get('articles/{article}', 'ArticleController@show');

Route::post('articles', 'ArticleController@create');

Route::put('articles/{article}', 'ArticleController@update');

Route::delete('article/{article}', 'ArticleController@delete');