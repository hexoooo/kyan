<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CafeMenuController;
use App\Http\Controllers\MainHomeController;
use App\Http\Controllers\CafeReceiptController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\RestaurantMenuController;
use App\Http\Controllers\RestaurantReceiptController;
use App\Http\Controllers\MainPageController;
use Illuminate\Routing\RouteGroup;
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
Route::group(['prefix'=>'cafe'],function(){
    route::get('/cafe-receipts',[CafeReceiptController::class,'index'])->name('cafe.receipts');
    route::delete('/cafe-menu/{cafe-menu}',[CafeMenuController::class,'destroy'])->name('cafe-menu.destroy');
    Route::resource('/cafe-menu', CafeMenuController::class);
});
Route::group(['prefix'=>'restaurant'],function(){
    route::get('/restaurant-receipts',[RestaurantReceiptController::class,'index'])->name('restaurant.receipts');
    route::delete('/restaurant-menu/{restaurant-menu}',[RestaurantMenuController::class,'destroy'])->name('restaurant-menu.destroy');
    Route::resource('/restaurant-menu', RestaurantMenuController::class);

});
Route::resource('/mail', MailController::class)->only(['index','show','delete']);
Route::group(['prefix'=>'site'],function(){
    route::get('/home',[MainHomeController::class,'index'])->name('home');
    route::get('/menu',[MainHomeController::class,'menu'])->name('menu');
    route::post('/message',[MainHomeController::class,'message'])->name('message');
    route::get('/contact',function(){return view('site.contact');})->name('contact');
    route::get('/orders',function(){return view('site.orders');})->name('orders');
    route::get('/form',function(){return view('site.form');})->name('form');


});
Route::get('/main-page', [MainPageController::class,'index']);
Route::get('/{page}', [AdminController::class,'index']);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
