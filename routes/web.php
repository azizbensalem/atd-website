<?php

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
Route::get('/', function () {
    return view('home');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/nos-projets', function () {
    return view('projects.projetGrid');
});
Route::get('/nos-projets/detail', function () {
    return view('projects.projetDetail');
});
Route::get('/news', function () {
    return view('news.newsGrid');
});
Route::get('/news/detail', function () {
    return view('news.newsDetail');
});
Route::get('/evenements', function () {
    return view('events.eventsGrid');
});
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
