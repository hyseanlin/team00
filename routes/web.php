<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\OberservationsController;
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

Route::get('observations', [OberservationsController::class, 'index'])->name('observations.index');
Route::get('observations/{id}', [OberservationsController::class, 'show'])->where('id', '[0-9]+')->name('observations.show');
Route::get('observations/{id}/edit', [OberservationsController::class, 'edit'])->where('id', '[0-9]+')->name('observations.edit');
