<?php
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MedicinesController;
use App\Models\Medicine;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PostController;




Route::get('/', function () {
    $medii = Medicine::get();
    return view('user/home', compact('medii'));
})->name('home');
Route::middleware('admin')->group(function () {
    Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('AddMedicines', [AdminController::class, 'index1'])->name('AddMedicines');
    Route::get('AddPost', [AdminController::class, 'index2'])->name('AddPost');
    Route::post('AddMedicine', [MedicinesController::class, 'AddMedicine'])->name('AddMedicine');
    Route::get('showorder', [OrderController::class, 'showdashorder'])->name('showdashorder');
    Route::get('showmedici', [MedicinesController::class, 'showmedici'])->name('showmedici');
    Route::post('AddPosts', [PostController::class, 'AddPosts'])->name('AddPosts');

});


Route::get('/about', [HomeController::class, 'index'])->name('about');
// Route::get('/home',[HomeController::class ,'index1']);
Route::get('/login', [HomeController::class, 'index2'])->name('login');
Route::get('/register', [HomeController::class, 'index3'])->name('register');
Route::post('register1', [UserController::class, 'register1'])->name('register1');
Route::post('login1', [UserController::class, 'login1'])->name('login1');
Route::get('logout/{id}', [UserController::class, 'logout'])->name('logout');
// Route::get('dashboard',[AdminController::class ,'index'])->name('dashboard');
Route::get('/health', [MedicinesController::class, 'viewhealt'])->name('viewhealt');
Route::get('/showallhealth', [HomeController::class, 'index4'])->name('showallhealth');
Route::get('/deatilsmedicine', [MedicinesController::class, 'index5'])->name('deatilsmedicine');
// Route::get('showonlymedi/{id}', [HomeController::class, 'showonlymedi'])->name('showonlymedi/{id}');
// Route::get('showonlymedii/{id}', [HomeController::class, 'showonlymedi'])->name('showonlymedii/{id}');
//  Route::get('show_profile/{id}', [UserController::class, 'show_profile'])->name('show_profile');
Route::post('update_image/{id}', [UserController::class, 'update_image'])->name('update_image');
Route::get('edit_profile', [HomeController::class, 'index6'])->name('edit_profile');
Route::get('cntact', [HomeController::class, 'index9'])->name('cntact');
Route::get('profile', [HomeController::class, 'index8'])->name('profile');
Route::get('buy', [HomeController::class, 'index10'])->name('buy');
Route::post('storeOrder', [OrderController::class, 'storeOrder'])->name('storeOrder');
Route::get('/news', [HomeController::class, 'index7'])->name('news');
Route::get('search', [MedicinesController::class, 'search'])->name('search');
Route::get('navbar', [NotificationController::class, 'getNotifications'])->name('getNotifications');
Route::get('error', [HomeController::class, 'index11'])->name('error');
Route::post('AddMessage', [MessageController::class, 'AddMessage'])->name('AddMessage');
Route::get('showMessage', [MessageController::class, 'showMessage'])->name('showMessage');

