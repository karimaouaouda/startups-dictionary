<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::resource('companies', CompanyController::class)
    ->only(['index', 'show']);


Route::resource('employees', EmployeeController::class)
    ->only(['index', 'show']);

Route::controller(PostController::class)
    ->group(function () {
        Route::get('company/{company}/posts', 'companyPosts')->name('company.posts');
    });

Route::get('/search', [CompanyController::class, 'search'])->name('search');

