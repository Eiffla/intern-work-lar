<?php

use App\Http\Controllers\AccommodationsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\OffersController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\RegisterEmployerController;
use App\Http\Controllers\RegisterEmployeeController;
use Illuminate\Support\Facades\Auth;

/*
Route::get('/', function () {
    return view('welcome');
});


Route::get('/pracownik', 'App\Http\Controllers\EmployeeController@index');
Route::get('/pracodawca', 'App\Http\Controllers\EmployerController@index');
Route::get('/zakwaterowanie', 'App\Http\Controllers\AccommodationController@index');
*/
Route::get('/', [PagesController::class, 'index']);
Route::get('/pracownik', [PagesController::class, 'employee']);
Route::get('/pracodawca', [PagesController::class, 'employer']);
Route::get('/category/{id}', [CategoriesController::class, 'show']);


Route::resource('/oferty', OffersController::class);
Route::resource('/artykuly', ArticlesController::class);
Route::resource('/zakwaterowanie', AccommodationsController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/register-employer', [RegisterEmployerController::class, 'create']);
Route::POST('/register-employer', [RegisterEmployerController::class, 'store']);


Route::get('/register-employee', [RegisterEmployeeController::class, 'create']);
Route::POST('/register-employee', [RegisterEmployeeController::class, 'store']);

Route::get('/test', [PagesController::class, 'test']);