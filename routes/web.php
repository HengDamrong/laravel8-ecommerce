<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\AdminProfileController;
use App\Http\Controllers\Frontend\IndexController;

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
    return view('frontend.index');
});

Route::group(['prefix' => 'admin', 'middleware' => ['admin:admin']], function () {
    Route::get('/login', [AdminController::class, 'loginForm']);
    Route::post('/login', [AdminController::class, 'store'])->name('admin.login');
});




Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard', function () {
    return view('admindashbord.index');
})->name('dashboard');

//All admin Route
Route::get('admin/logout', [AdminController::class, 'destroy'])->name('admin.logout');
Route::get('admin/profile', [AdminProfileController::class, 'AdminProfile'])->name('admin.profile');
Route::get('admin/profile/edit', [AdminProfileController::class, 'AdminProfileEdit'])->name('admin.profile.edit');
Route::post('admin/profile/store', [AdminProfileController::class, 'AdminProfileStore'])->name('admin.profile.store');
Route::get('admin/change/password', [AdminProfileController::class, 'AdminChangPassword'])->name('admin.change.password');
Route::post('update/change/password', [AdminProfileController::class, 'UpdateChangPassword'])->name('update.change.password');





Route::middleware(['auth:sanctum,web', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
//All User Route
Route::get('user/logout', [IndexController::class, 'UserLogout'])->name('user.logout');
Route::get('user/profile', [IndexController::class, 'UserProfile'])->name('user.profile');
Route::post('user/profile/store', [IndexController::class, 'UserProfileStore'])->name('user.profile.store');
Route::get('user/chang/password', [IndexController::class, 'UserChangPassword'])->name('chang.password');
Route::post('user/password/update', [IndexController::class, 'UserPasswordUpdate'])->name('user.password.update');
