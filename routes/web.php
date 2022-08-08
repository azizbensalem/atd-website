<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
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
Route::get('/news/detail', function () {
    return view('news.newsDetail');
});
Route::get('/evenements', function () {
    return view('events.eventsGrid');
});

Route::get('/admin/home', function () {
    return view('admin.dashboard.dashboard');
});

Route::get('/admin/news', [NewsController::class, 'adminIndex']);
Route::post('/admin/news/store', [NewsController::class, 'store']);
Route::get('/admin/news/create', function () {
    return view('admin.news.create');
});
Route::get('/news', [NewsController::class, 'index']);
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
