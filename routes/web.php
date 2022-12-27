<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\ClassesController;
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
    return  view('index');
});

Route::prefix('admin')->name('admin.')->group(function () {
    #後台首頁
    Route::get('/', [AdminController::class, 'index'])->name("index");

    #老師管理首頁
    Route::get('staffs', [StaffController::class, 'index'])->name("staffs.index");
    #新增老師
    Route::get('staffs/create', [StaffController::class, 'create'])->name("staffs.create");
    Route::post('staffs', [StaffController::class, 'store'])->name("staffs.store");
    #修改老師
    Route::get('staffs/{staff?}/edit', [StaffController::class, 'edit'])->name("staffs.edit");
    Route::patch('staffs/{staff?}', [StaffController::class, 'update'])->name("staffs.update");
    #刪除老師
    Route::delete('staffs/{staff?}', [StaffController::class, 'destroy'])->name("staffs.create");

    #課程管理
    Route::get('classes', [ClassesController::class, 'index'])->name("classes.index");

    /*Route::get('posts', [AdminPostsController::class, 'index'])->name("posts.index");
    Route::get('posts/create', [AdminPostsController::class, 'create'])->name("posts.create");
    Route::post('posts', [AdminPostsController::class, 'store'])->name("posts.store");
    Route::get('posts/{post}/edit', [AdminPostsController::class, 'edit'])->name("posts.edit");
    Route::patch('posts/{post}', [AdminPostsController::class, 'update'])->name("posts.update");
    Route::delete('posts/{post}', [AdminPostsController::class, 'destroy'])->name("posts.destroy");*/
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::resource('staffs',StaffController::class);
Route::resource('classes',ClassesController::class);
Route::resource('schedules', ScheduleController::class);
Route::resource('reserves',ReserveController::class);
Route::resource('trades',TradesController::class);
