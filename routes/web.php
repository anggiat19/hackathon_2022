<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\KonsumenController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RentLogController;
use App\Http\Controllers\Desk_pemesananController;

use App\Models\Pembayaran;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// ->middleware('auth')


Route::get('/',[CategoryController::class,'index1']);

    Route::get('login', [AuthController::class,'login'])->name('login');
    Route::post('login',[AuthController::class,'authenticationg']);
    Route::get('register', [AuthController::class,'register']);
    Route::post('register', [AuthController::class,'registerprocess']);



Route::middleware('auth')->group(function(){
    Route::get('logout',[AuthController::class,'logout']);
    Route::get('dashboard',[DashboardController::class, 'index'])->middleware('only_admin');
    Route::get('profile',[UserController::class, 'profile'])->middleware('only_client');


    // Route::get('books',[BookController::class,'index']);
    // Route::get('book-add',[BookController::class,'add']);
    // Route::post('book-add',[BookController::class,'store']);
    // Route::get('book-edit/{slug}',[BookController::class,'edit']);
    // Route::post('book-edit/{slug}',[BookController::class,'update']);
    // Route::get('book-delete/{slug}',[BookController::class,'delete']);
    // Route::get('book-destroy/{slug}',[BookController::class,'destroy']);
    // Route::get('book-deleted',[BookController::class,'deletedBook']);
    // Route::get('book-restore/{slug}',[BookController::class,'restore']);

    Route::get('produks',[ProdukController::class,'index']);
     Route::get('produk-add',[ProdukController::class,'add']);
    Route::post('produk-add',[ProdukController::class,'store']);
    // Route::get('book-edit/{slug}',[BookController::class,'edit']);
    // Route::post('book-edit/{slug}',[BookController::class,'update']);
    // Route::get('book-delete/{slug}',[BookController::class,'delete']);
    // Route::get('book-destroy/{slug}',[BookController::class,'destroy']);
    // Route::get('book-deleted',[BookController::class,'deletedBook']);
    // Route::get('book-restore/{slug}',[BookController::class,'restore']);


    Route::get('konsumen',[KonsumenController::class,'index']);
    // Route::get('book-add',[BookController::class,'add']);
    // Route::post('book-add',[BookController::class,'store']);
    // Route::get('book-edit/{slug}',[BookController::class,'edit']);
    // Route::post('book-edit/{slug}',[BookController::class,'update']);
    // Route::get('book-delete/{slug}',[BookController::class,'delete']);
    // Route::get('book-destroy/{slug}',[BookController::class,'destroy']);
    // Route::get('book-deleted',[BookController::class,'deletedBook']);
    // Route::get('book-restore/{slug}',[BookController::class,'restore']);

    Route::get('pembayaran',[PembayaranController::class,'index']);
    // Route::get('book-add',[BookController::class,'add']);
    // Route::post('book-add',[BookController::class,'store']);
    // Route::get('book-edit/{slug}',[BookController::class,'edit']);
    // Route::post('book-edit/{slug}',[BookController::class,'update']);
    // Route::get('book-delete/{slug}',[BookController::class,'delete']);
    // Route::get('book-destroy/{slug}',[BookController::class,'destroy']);
    // Route::get('book-deleted',[BookController::class,'deletedBook']);
    // Route::get('book-restore/{slug}',[BookController::class,'restore']);


    Route::get('pemesanan',[Desk_pemesananController::class,'index']);
    // Route::get('book-add',[BookController::class,'add']);
    // Route::post('book-add',[BookController::class,'store']);
    // Route::get('book-edit/{slug}',[BookController::class,'edit']);
    // Route::post('book-edit/{slug}',[BookController::class,'update']);
    // Route::get('book-delete/{slug}',[BookController::class,'delete']);
    // Route::get('book-destroy/{slug}',[BookController::class,'destroy']);
    // Route::get('book-deleted',[BookController::class,'deletedBook']);
    // Route::get('book-restore/{slug}',[BookController::class,'restore']);









    Route::get('category',[CategoryController::class,'index']);
    Route::get('category-add',[CategoryController::class,'add']);
    Route::post('category-add',[CategoryController::class,'store']);
    Route::get('category-edit/{slug}',[CategoryController::class,'edit']);
    Route::put('category-edit/{slug}',[CategoryController::class,'update']);
    Route::get('category-delete/{slug}',[CategoryController::class,'delete']);
    Route::get('category-destroy/{slug}',[CategoryController::class,'destroy']);
    Route::get('category-deleted',[CategoryController::class,'deletedcategory']);
    Route::get('category-restore/{slug}',[CategoryController::class,'restore']);




    Route::get('user',[UserController::class,'index']);
    Route::get('rentlog',[RentLogController::class,'index']);

});