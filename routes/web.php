<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\TestMiddleware;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\GenreController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\MovieController;
use App\Http\Controllers\Admin\RegisterController;
use App\Http\Controllers\Admin\DashboardController;

Route::get('/', function () {
    return redirect('/admin/login');
});

Route::prefix('admin/register')
    ->as('admin.register.')
    ->controller(RegisterController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');
    });

Route::prefix('admin/login')
    ->as('admin.login.')
    ->controller(LoginController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'check')->name('check');
    });


Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard.index');

Route::get('/admin/genre', [GenreController::class, 'index'])->name('admin.genre.index');
Route::get('/admin/genre/create', [GenreController::class, 'create'])->name('admin.genre.create');
Route::post('/admin/genre', [GenreController::class, 'store'])->name('admin.genre.store');
Route::get('/admin/genre/{genreId}', [GenreController::class, 'edit'])->name('admin.genre.edit');
Route::put('/admin/genre/{genreId}', [GenreController::class, 'update'])->name('admin.genre.update');
Route::delete('/admin/genre/{genreId}', [GenreController::class, 'delete'])->name('admin.genre.delete');


Route::prefix('/admin/movies')
    -> as('admin.movies.')
    ->middleware(TestMiddleware::class)
    ->controller(MovieController::class)->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/', 'store')->name('store');
    Route::get('/{movieId}', 'edit')->name('edit');
    Route::put('/{movieId}', 'update')->name('update');
    Route::delete('/{movieId}','delete')->name('delete');
});

Route::prefix('/admin/user')-> as('admin.users.')->controller(UserController::class)->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/', 'store')->name('store');
    Route::get('/{userId}','edit')->name('edit');
    Route::put('/{userId}', 'update')->name('update');
    Route::delete('/{userId}','delete')->name('delete');
});



// Route::prefix('admin/movies')->as('admin.movies.')->controller(MovieController::class)->group(function () {
//     Route::get('/', 'index')->name('index'); // table get
//     Route::get('/create', 'create')->name('create'); // form dekhauna get
//     Route::post('/', 'store')->name('store'); // form ko data store, post
//     Route::get('/{movieId}', 'edit')->name('edit'); // get info before editing, get
//     Route::put('/{movieId}', 'update')->name('update'); // update the edited changes, PUT
//     Route::delete('/{movieId}', 'delete')->name('delete'); // delete
// });