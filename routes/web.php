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

Route::get('/evenements', function () {
    return view('events.eventsGrid');
});

Route::get('/admin/home', function () {
    return view('admin.dashboard.dashboard');
});


// News controller
Route::get('/news/detail/{news}', [NewsController::class,'showNews']);
Route::get('/news', [NewsController::class, 'index']);
Route::get('/admin/news', [NewsController::class, 'adminIndex']);
Route::post('/admin/news/store', [NewsController::class, 'store']);
Route::get('/admin/news/show/{news}', [NewsController::class, 'show']);
Route::get('/admin/news/edit/{news}', [NewsController::class, 'edit']);
Route::put('/admin/news/update/{news}', [NewsController::class, 'update']);
Route::delete('/admin/news/delete/{news}', [NewsController::class, 'destroy']);
Route::get('/admin/news/create', function () {
    return view('admin.news.create');
});

// Auth 
Auth::routes();
