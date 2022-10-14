<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\UserController;

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


Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function() {
    Route::get('/home', function () {
        return view('admin.dashboard.dashboard');
    });

    // Events controller
    Route::get('/event', [EventController::class, 'adminIndex']);
    Route::post('/event/add', [EventController::class, 'store']);
    Route::get('/event/edit/{events}', [EventController::class, 'edit']);
    Route::put('/event/update/{events}', [EventController::class, 'update']);
    Route::get('/event/show/{events}', [EventController::class, 'show']);
    Route::delete('/event/delete/{events}', [EventController::class, 'destroy']);
    Route::get('/event/create', function () {
        return view('admin.event.create');
    });

    // News controller
    Route::get('/news', [NewsController::class, 'adminIndex']);
    Route::post('/news/store', [NewsController::class, 'store']);
    Route::get('/news/show/{news}', [NewsController::class, 'show']);
    Route::get('/news/edit/{news}', [NewsController::class, 'edit']);
    Route::put('/news/update/{news}', [NewsController::class, 'update']);
    Route::delete('/news/delete/{news}', [NewsController::class, 'destroy']);
    Route::get('/news/create', function () {
        return view('admin.news.create');
    });

    // Projects controller
    Route::get('/projects', [ProjectController::class, 'adminIndex']);
    Route::post('/projects/store', [ProjectController::class, 'store']);
    Route::get('/projects/show/{projects}', [ProjectController::class, 'show']);
    Route::get('/projects/edit/{projects}', [ProjectController::class, 'edit']);
    Route::put('/projects/update/{projects}', [ProjectController::class, 'update']);
    Route::delete('/projects/delete/{projects}', [ProjectController::class, 'destroy']);
    Route::get('/projects/create', function () {
        return view('admin.projects.create');
    });

    // Projects controller
    Route::get('/users', [UserController::class, 'index']);
    Route::get('/users/show/{user}', [UserController::class, 'show']);

});

Route::prefix('member')->middleware(['auth'])->group(function() {
        Route::get('/home', function () {
            return view('admin.dashboard.dashboard');
        });

        // Projects controller
        Route::get('/projects', [ProjectController::class, 'adminIndex']);
        Route::get('/projects/show/{projects}', [ProjectController::class, 'show']);
        
});

Route::get('/', [HomeController::class, 'home']);
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/home', function () {
    return redirect('/');
});
Route::get('/rejoindre_atd', function () {
    return view('rejoindreATD.index');
});
Route::get('/a-propos', function () {
    return view('a-propos.index');
});

// Events controller
Route::get('/evenements', [EventController::class, 'index']);
Route::get('/event/detail/{events}', [EventController::class, 'showEvent']);


// News controller
Route::get('/news/detail/{news}', [NewsController::class,'showNews']);
Route::get('/news', [NewsController::class, 'index']);

// Projects controller
Route::get('/nos-projets/detail/{projects}', [ProjectController::class,'showProjects']);
Route::get('/nos-projets', [ProjectController::class, 'index']);

// Member controller
Route::get('/membership/{projects}', [MemberController::class,'addMember']);
Route::post('/membership/create/{projects}', [MemberController::class,'createMember']);

// Auth 
Auth::routes();
