<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BookController;
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

// Partie CLIENT :
Route::get('/',[ClientController::class,'accueil']);
Route::get('/about_us',[ClientController::class,'aboutUs']);
Route::get('/contact',[ClientController::class,'contact']);
Route::get('/login',[ClientController::class,'login']);
Route::get('/cart',[ClientController::class,'cart']);
Route::get('/paiement',[ClientController::class,'paiement']);
Route::get('/shop',[ClientController::class,'shop']);
Route::get('/singleProduct',[ClientController::class,'singleProduct']);
Route::get('/wishlist',[ClientController::class,'wishlist']);

 
//PARTIE ADMINISTRATEUR :
Route::get('/admin',[AdminController::class,'dashboard']);
Route::get('/addCategory',[CategoryController::class, 'addCategory']);
Route::get('/categories',[CategoryController::class,'categories']);
Route::post('/saveCategory',[CategoryController::class, 'saveCategory']);
Route::get('/editCategory/{id}',[CategoryController::class, 'editCategory']);
Route::post('/updateCategory',[CategoryController::class, 'updateCategory']);
Route::get('/products',[BookController::class, 'products']);
Route::get('/addproducts',[BookController::class, 'addProducts']);
Route::get('/addProduct',[BookController::class, 'addProducts']);
Route::post('/savebook',[BookController::class,'savebook']);