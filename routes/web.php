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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/reportar', [App\Http\Controllers\HomeController::class, 'getReport'])->name('report');
Route::post('/reportar', [App\Http\Controllers\HomeController::class, 'postReport'])->name('report');

Route::group(['middleware' => ['admin']], function () {
        
    //Rutas para la gestión de los usuarios (CRUD)
    
    Route::get('/usuarios', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('usuarios');
    Route::post('/usuarios', [App\Http\Controllers\Admin\UserController::class, 'store'])->name('usuarios');
    Route::get('/usuario/{id}', [App\Http\Controllers\Admin\UserController::class, 'edit'])->name('usuario');
    Route::post('/usuario/{id}', [App\Http\Controllers\Admin\UserController::class, 'update'])->name('usuario');

    Route::get('/usuario/{id}/eliminar', [App\Http\Controllers\Admin\UserController::class, 'delete'])->name('usuario');

    //Rutas para la gestion de los proyectos (CRUD)

    Route::get('/proyectos', [App\Http\Controllers\Admin\ProjectController::class, 'index'])->name('proyectos');
    Route::post('/proyectos', [App\Http\Controllers\Admin\ProjectController::class, 'store'])->name('proyectos');
    Route::get('/proyecto/{id}', [App\Http\Controllers\Admin\ProjectController::class, 'edit'])->name('proyecto');
    Route::post('/proyecto/{id}', [App\Http\Controllers\Admin\ProjectController::class, 'update'])->name('proyecto'); 

    Route::get('/proyecto/{id}/eliminar', [App\Http\Controllers\Admin\ProjectController::class, 'delete'])->name('proyecto');
    Route::get('/proyecto/{id}/restaurar', [App\Http\Controllers\Admin\ProjectController::class, 'restore'])->name('proyecto');

    Route::get('/config', [App\Http\Controllers\Admin\ConfigController::class, 'index'])->name('config');

});

