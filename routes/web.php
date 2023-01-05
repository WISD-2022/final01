<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StaffsController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\ClassesReserveController;
use App\Http\Controllers\ReserveController;
use App\Http\Controllers\TradesController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\FlightController;

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

Route::get('/',[HomeController::class,'index'])->name('index');

#查看美甲師
Route::get('staffs/{staff}',[StaffsController::class,'index'])->name('staffs.index');
#查看課程
Route::get('classes/{class}',[ClassesController::class,'index'])->name('classes.index');
#會員預約課程
Route::get('classes/reserves/create',[ClassesReserveController::class,'create'])->name('classes.reserves.create');
Route::post('classes/{class}/reserves',[ClassesReserveController::class,'store'])->name('classes.reserves.store');
#會員取消課程
Route::delete('myreserves/{reserve}',[ReserveController::class,'destroy'])->name('myreserves.reserve.destroy');
#會員查看所有會議紀錄
Route::get('myreserves',[ReserveController::class,'index'])->name('myreserves.index');

Route::prefix('admin')->name('admin.')->group(function () {
    #後台首頁
    Route::get('/', [AdminController::class, 'index'])->name("index");

    #老師管理首頁
    Route::get('staffs', [StaffsController::class, 'index'])->name("staffs.index");
    #新增老師
    Route::get('staffs/create', [StaffsController::class, 'create'])->name("staffs.create");
    Route::post('staffs', [StaffsController::class, 'store'])->name("staffs.store");
    #上傳圖檔
    Route::get('flight/file', [FlightController::class, 'file'])->name("flight.file");
    Route::post('flight/upload', [FlightController::class, 'upload'])->name("flight.upload");
    #修改老師
    Route::get('staffs/{staff}/edit', [StaffsController::class, 'edit'])->name("staffs.edit");
    Route::patch('staffs/{staff}', [StaffsController::class, 'update'])->name("staffs.update");
    #刪除老師
    Route::delete('staffs/{staff}', [StaffsController::class, 'destroy'])->name("staffs.destroy");

    #排班首頁
    Route::get('schedules', [ScheduleController::class, 'index'])->name("schedules.index");
    #新增排班
    Route::get('schedules/create', [ScheduleController::class, 'create'])->name("schedules.create");
    Route::post('schedules', [ScheduleController::class, 'store'])->name("schedules.store");
    #修改排班
    Route::get('schedules/{schedule}/edit', [ScheduleController::class, 'edit'])->name("schedules.edit");
    Route::patch('schedules/{schedule}', [ScheduleController::class, 'update'])->name("schedules.update");
    #刪除排班
    Route::delete('schedules/{schedule}', [StaffsController::class, 'destroy'])->name("schedules.destroy");

    #課程管理
    Route::get('classes', [ClassesController::class, 'admin_index'])->name("classes.index");
    #新增課程
    Route::get('classes/create',[ClassesController::class,'create'])->name("classes.create");
    Route::post('classes',[ClassesController::class,'store'])->name('classes.store');
    #修改課程
    Route::get('classes/{class}/edit',[ClassesController::class,'edit'])->name('classes.edit');
    Route::patch('classes/{class}',[ClassesController::class,'update'])->name('classes.update');
    #刪除課程
    Route::delete('classes/{class}',[ClassesController::class,'destroy'])->name('classes.destroy');
});


/*Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/', function () {
        return view('index');
    })->name('index');
});*/


Route::resource('staffs',StaffsController::class);
Route::resource('classes',ClassesController::class);
Route::resource('schedules', ScheduleController::class);
Route::resource('reserves',ReserveController::class);
Route::resource('trades',TradesController::class);
Route::resource('classes.reserve',ClassesReserveController::class);
