<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\MainController;

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

Route::get('dashboard',[MainController::class,'dashboard'])->name('dashboard_view');

Route::get('admin_login',[MainController::class,'admin_login'])->name('admin_login_view');
Route::post('admin_login_check',[MainController::class,'admin_login_check'])->name('admin_login_chech');


