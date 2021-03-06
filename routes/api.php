<?php

use Illuminate\Http\Request;
use App\Http\Resources\SongResource;
use App\Http\Resources\SongsCollection;
use App\Song;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/songs/{song}', 'SongController@single');

// Route::get('/home', 'HomeController@index');
Route::get('/songs', 'SongController@index');
Route::post('/songs', 'SongController@store');
Route::get('/songs/{id}/edit', 'SongController@edit');
Route::put('/songs/{id}', 'SongController@update');
Route::delete('/songs/{id}', 'SongController@destory');