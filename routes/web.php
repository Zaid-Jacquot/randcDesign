<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Middleware\Admin;

use Illuminate\Support\Facades\Route;


Route::get('/dashboard',[HomeController::class,'login_home'])
->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', [HomeController::class,'home'])->middleware(['auth', 'verified'])->name('dashboard');



Route::get('/dashboard',[HomeController::class,'home'])
->middleware(['auth', 'verified'])->name('dashboard');

// Route vers desrtoy

Route::get('/destroy',[AuthenticatedSessionController::class,'destroy'])
->middleware(['auth', 'verified'])->name('dashboard');

/*Route::get('/dashboard', function () {
    return view('home.index');
})middleware(['auth', 'verified'])->name('dashboard');*/


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('admin/dashboard',[HomeController::class,'index'])->middleware(['auth', 'admin']);

Route::get('view_category',[AdminController::class,'view_category'])->middleware(['auth', 'admin']);

Route::post('add_category',[AdminController::class,'add_category'])->middleware(['auth', 'admin']);

//**********Route Delete Product**********//

Route::get('delete_category/{id}',[AdminController::class,'delete_category'])->middleware(['auth', 'admin']);

//**********Route Edit_category**********//

Route::get('edit_category/{id}',[AdminController::class,'edit_category'])->middleware(['auth', 'admin']);

//**********Route Update_Category**********//

Route::post('update_category/{id}',[AdminController::class,'update_category'])->middleware(['auth', 'admin']);

//**********Route Add_Product**********//

Route::get('add_product',[AdminController::class,'add_product'])->
middleware(['auth', 'admin']);

//**********Route Upload_product**********//

Route::post('upload_product',[AdminController::class,'upload_product'])->
middleware(['auth', 'admin']);

//**********Route view_product**********//

Route::get('view_product',[AdminController::class,'view_product'])->
middleware(['auth', 'admin']);

//**********Route Delete_product**********//

Route::get('delete_product/{id}',[AdminController::class,'delete_product'])->
middleware(['auth', 'admin']);

//**********Route Update_Product**********//

Route::get('update_product/{id}',[AdminController::class,'update_product'])->
middleware(['auth', 'admin']);

//**********Route Edit_Product**********//

Route::post('edit_product/{id}',[AdminController::class,'edit_product'])->
middleware(['auth', 'admin']);

//**********Route Search_Product**********//

Route::get('product_search',[AdminController::class,'product_search'])->
middleware(['auth', 'admin']);


//*=*=*=*=*=*=*=*=*=*=*=Route Product_details*=*=*=*=*=*=*=*=//

Route::get('product_details/{id}', [HomeController::class, 'product_details']);

Route::get('add_cart/{id}',[HomeController::class, 'add_cart'])->middleware(['auth', 'verified']);



