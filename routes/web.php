<?php

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

Route::get(
    '/',    // 第一個參數
    function () // 第二個參數 
    {
        return view('welcome'); // 引導至一份視圖(view)：welcome view
    }
);

Route::get(
    '/sdgs',
    function () {
        return view('intro_sdgs'); // 引導至一份視圖(view)：welcome view
    }
);