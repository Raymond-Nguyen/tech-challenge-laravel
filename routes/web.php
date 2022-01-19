<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Models\Content;

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
  $content = Content::latest()->orderBy('id', 'desc')->get();
  return view('home', ['contentItems' => $content]);
})->where('name', 'home|');

Route::get('/contact', [ContactController::class, 'index']);

Route::post('/contact', [ContactController::class, 'store']);


Route::get('/learnmore', function () {
  return redirect('/home');
});

Route::get('learnmore/{id}', function ($id) {

  $content = Content::findOrFail($id);
  // Probably should have called this "show" instead of "index". For naming convention purposes but that's okay.
  return view('learnmore/index', ['content' => $content]);
});