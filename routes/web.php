<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

Route::get('/', 'HomeController@index') -> name('home');

Route::get('/api/postcards/list', 'ApiController@getPostcards') -> name('api.postcards.list');
Route::get('/postcard/create', 'HomeController@createPostcard') -> name('postcard.create');
Route::post('/postcard/store', 'HomeController@storePostcard') -> name('postcard.store');


Route::post('/register', 'Auth\RegisterController@register') -> name('register');
Route::post('/login', 'Auth\LoginController@login') -> name('login');
Route::get('/logout', 'Auth\LoginController@logout') -> name('logout');