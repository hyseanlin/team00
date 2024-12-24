<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ObservationsController;
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

Route::get(
    '/',    // 第一個參數
    function () // 第二個參數 
    {
        return view('welcome'); // 引導至一份視圖(view)：welcome view
    }
);


// 儲存一筆資料
Route::post('observations/store', [ObservationsController::class, 'store'])
    ->name('observations.store');
# 新增表單
Route::get('observations/create', [ObservationsController::class, 'create'])
    ->name('observations.create');
# 查詢資料
Route::get('observations', [ObservationsController::class, 'index'])
    ->name('observations.index');
# 顯示特定一筆資料的詳細資料
Route::get('observations/{id}', [ObservationsController::class, 'show'])
    ->where('id', '[0-9]+')
    ->name('observations.show');
# 編輯特定一筆資料
Route::get('observations/{id}/edit', [ObservationsController::class, 'edit'])
    ->where('id', '[0-9]+')
    ->name('observations.edit');
// 修改資料
Route::patch('observations/update/{id}', [ObservationsController::class, 'update'])
    ->where('id', '[0-9]+')
    ->name('observations.update');
# 刪除特定一筆資料
Route::delete('observations/delete/{id}', [ObservationsController::class, 'destroy'])
    ->where('id', '[0-9]+')
    ->name('observations.destroy');

