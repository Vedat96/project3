<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PagesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProductsController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::group(['middleware' => 'auth'], function() {


    Route::view("about","about");
    Route::get('home', [PagesController::class, 'home']);
    // Route::get('products', [App\Http\Controllers\ProductsController::class, 'index']);
	Route::get('products', [ProductsController::class, 'index'])->name('products.index');
	Route::get('products/create', [ProductsController::class, 'create'])->name('products.create');
	Route::post('products/store', [ProductsController::class, 'store'])->name('products.store');
	Route::get('products/{id}', [ProductsController::class, 'show'])->name('products.show');
	Route::get('products/{id}/edit', [ProductsController::class, 'edit']);
	Route::post('products/update', [ProductsController::class, 'update'])->name('products.update');
	Route::get('products/{id}/destroy', [ProductsController::class, 'destroy']);


Route::group(['middleware' => 'admin'], function() {
	Route::get('users', [UsersController::class, 'index'])->name('users.index');
	Route::get('users/create', [UsersController::class, 'create'])->name('users.create');
	Route::post('users/store', [UsersController::class, 'store'])->name('users.store');
	Route::get('users/{id}', [UsersController::class, 'show'])->name('users.show');
	Route::get('users/{id}/edit', [UsersController::class, 'edit']);
	Route::post('users/update', [UsersController::class, 'update'])->name('users.update');
	Route::get('users/{id}/destroy', [UsersController::class, 'destroy']);
});

});

	// Route::get('users/{user_id}', [Userscontroller::class, 'show']);
	// Route::put('users/{user_id}/edit', [Userscontroller::class, 'update']);
	// Route::delete('users/{user_id}', [Userscontroller::class, 'destroy'])->name('users.destroy');

