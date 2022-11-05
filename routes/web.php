<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MembershipController;
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

Route::prefix('admin')->middleware(['auth','isSuperAdmin'])->group(function() {

    // user controller
    Route::get('/admins', [UserController::class, 'indexAdmin']);
    Route::get('/admins/show/{user}', [UserController::class, 'showAdmin']);
    Route::put('/admins/update/{user}', [UserController::class, 'update']);
    Route::get('/admins/edit/{user}', [UserController::class, 'editAdmin']);
    Route::delete('/admins/destroy/{user}', [UserController::class, 'destroy']);
    Route::get('/admins/create', [UserController::class, 'createAdmin']);
    Route::post('/admins/store', [UserController::class, 'storeAdmin']);
    Route::put('/admins/changerole/admin/{user}', [UserController::class, 'changeRoleAdmin']);
    Route::put('/admins/changerole/user/{user}', [UserController::class, 'changeRoleMember']);
    Route::put('/admins/approuver/{user}', [UserController::class, 'approuver']);
    Route::get('/profile/edit', [UserController::class, 'profileEdit']);
    Route::get('/admins/newpassword/{user}', [UserController::class, 'editPasswordAdmin']);
    Route::put('/admins/changepassword/{user}', [UserController::class, 'changePassword']);

    Route::get('/profile/edit/password', [UserController::class, 'editPasswordProfileAdmin']);
    Route::put('/profile/update/password/{user}', [UserController::class, 'changePasswordProfile']);

});

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function() {
    
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
    Route::get('/projects/show/members/{projects}', [ProjectController::class, 'showAllMembers']);
    Route::get('/projects/show/participants/{projects}', [ProjectController::class, 'showAllParticipants']);
    Route::get('/projects/edit/{projects}', [ProjectController::class, 'edit']);
    Route::put('/projects/update/{projects}', [ProjectController::class, 'update']);
    Route::delete('/projects/delete/{projects}', [ProjectController::class, 'destroy']);
    Route::get('/projects/create', [ProjectController::class, 'create']);

    // user controller
    Route::get('/users', [UserController::class, 'index']);
    Route::get('/users/show/{user}', [UserController::class, 'show']);
    Route::put('/users/update/{user}', [UserController::class, 'update']);
    Route::get('/users/edit/{user}', [UserController::class, 'edit']);
    Route::delete('/users/delete/{user}', [UserController::class, 'destroy']);
    Route::get('/users/create', [UserController::class, 'create']);
    Route::post('/users/store', [UserController::class, 'store']);
    Route::get('/profile/edit', [UserController::class, 'profileEdit']);
    Route::put('/profile/update/{user}', [UserController::class, 'updateProfile']);
    Route::get('/users/newpassword/{user}', [UserController::class, 'editPasswordMember']);
    Route::put('/users/changepassword/{user}', [UserController::class, 'changePassword']);

    // Member controller
    Route::put('/projects/membership/{memberships}', [MembershipController::class, 'accepter']);
    Route::put('/projects/membership/cancel/{memberships}', [MembershipController::class, 'annuler']);

    Route::get('/profile/edit/password', [UserController::class, 'editPasswordProfileAdmin']);
    Route::put('/profile/update/password/{user}', [UserController::class, 'changePasswordProfile']);

});

Route::prefix('member')->middleware(['auth'])->group(function() {

        // Profile controllers
        Route::get('/profile/edit', [UserController::class, 'profileEdit']);
        Route::put('/profile/update/{user}', [UserController::class, 'updateProfile']);
        Route::get('/profile/edit/password', [UserController::class, 'editPasswordProfileMember']);
        Route::put('/profile/update/password/{user}', [UserController::class, 'changePasswordProfile']);

        // Projects controllers
        Route::get('/projects', [ProjectController::class, 'adminIndex']);
        Route::get('/projects/show/{projects}', [ProjectController::class, 'show']);

        Route::get('/projects/membership/{project}', [MembershipController::class, 'create'])->middleware('isApproved');
        Route::post('/projects/membership/{project}', [MembershipController::class, 'store'])->middleware('isApproved');
        Route::delete('/projects/membership/delete/{memberships}', [MembershipController::class, 'supprimer'])->middleware('isApproved');
    
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
Route::get('a-propos', function () {
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
Auth::routes(['verify' => true]);
