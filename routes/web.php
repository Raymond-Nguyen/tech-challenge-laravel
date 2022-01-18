<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::get('/{name}', function () {
  return view('home');
})->where('name', 'home|');

Route::get('/contact', [ContactController::class, 'index']);

Route::post('/contact', [ContactController::class, 'store']);


Route::get('/learnmore', function () {
  return redirect('/home');
});

Route::get('learnmore/{id}', function ($id) {

  return view('learnmore/index', ['slug' => $id]);
});