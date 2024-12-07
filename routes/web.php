<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;

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
    return view('backend.login.index');
});
Route::get('login',[AuthController::class,'index'])->name('auth.login');
Route::post('checklogin',[AuthController::class,'checklogin'])->name('auth.checklogin');
Route::get('logout',[AuthController::class,'logout'])->name('auth.logout');
Route::get('register',[AuthController::class,'register'])->name('auth.register');
Route::post('register',[AuthController::class,'saveRegister'])->name('auth.saveRegister');


    


Route::prefix('/')->middleware('customer')->group(function(){
    //// Admin ////
    Route::get('adminPage',[AdminController::class,'adminPage'])->name('admin.adminHome');
    Route::get('adminUser',[AdminController::class,'adminUser'])->name('admin.adminUser');
    Route::get('addUser',[AdminController::class,'create'])->name('admin.addUser');
    Route::post('addUser',[AdminController::class,'store'])->name('admin.store');
    Route::get('editUser={id}',[AdminController::class,'edit'])->name('admin.edit');
    Route::post('updateUser={id}',[AdminController::class,'update'])->name('admin.update');
    Route::get('deleteUser={id}',[AdminController::class,'destroy'])->name('admin.delete');
    Route::get('searchUser',[AdminController::class,'adminSearch'])->name('admin.searchUser');
    Route::get('searchProducts',[AdminController::class,'adminSearchProduct'])->name('admin.searchProduct');

    
    //// adminProduct ////
    Route::get('adminProduct',[ProductController::class,'adminProduct'])->name('admin.adminProduct');
    Route::post('adminProduct',[ProductController::class,'store'])->name('admin.storeProduct');
    Route::get('addProduct',[ProductController::class,'create'])->name('admin.addProduct');
    Route::get('editProduct={id}',[ProductController::class,'edit'])->name('admin.editProduct');
    Route::post('updateProduct={id}',[ProductController::class,'update'])->name('admin.updateProduct');
    Route::get('deleteProduct={id}',[ProductController::class,'destroy'])->name('admin.deleteProduct');


    
});
Route::get('index',[DashboardController::class,'index'])->name('dashboard.index');
Route::get('shop',[DashboardController::class,'shop'])->name('dashboard.shop');
Route::get('cart',[DashboardController::class,'showCart'])->name('dashboard.showCart');
Route::get('Addcart/{id}',[DashboardController::class,'cart'])->name('addTocart');
Route::get('updateCart',[DashboardController::class,'updateCart'])->name('dashboard.updateCart');
Route::get('deleteCart',[DashboardController::class,'deleteCart'])->name('dashboard.deleteCart');
Route::get('ProductsDetail={id}',[DashboardController::class,'Productsdetail'])->name('dashboard.productsDetail');
Route::get('Contact',[DashboardController::class,'Contact'])->name('dashboard.Contact');