<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('letter', 'Api\LetterController@index');
Route::post('letter', 'Api\LetterController@store');
Route::put('letter/{letter}', 'Api\LetterController@update');
Route::delete('letter/{letter}', 'Api\LetterController@delete');