<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayersController;
use App\Http\Controllers\TeamsController;
use Illuminate\Support\Facades\Auth;

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
Route::middleware(['auth'])->group(function () {
    // 註解一下
    Route::get('/', function () {
        return redirect('players');
    });
    // 顯示所有球員資料
    Route::get('players', [PlayersController::class, 'index'])->name('players.index');
    // 顯示資深球員資料
    Route::get('players/senior', [PlayersController::class, 'senior'])->name('players.senior');
    // 顯示本月球員資料
    Route::get('players/birthday', [PlayersController::class, 'birthday'])->name('players.birthday');
    // 選定位置查詢球員
    Route::get('players/position', [PlayersController::class, 'position'])->name('players.position');
    // 選定國家查詢球員
    Route::get('players/nationality', [PlayersController::class, 'nationality'])->name('players.nationality');
    // 顯示單一球員資料
    Route::get('players/{id}', [PlayersController::class, 'show'])->where('id', '[0-9]+')->name('players.show');
    // 修改單一球員表單
    Route::get('players/{id}/edit', [PlayersController::class, 'edit'])->where('id', '[0-9]+')->name('players.edit');
    // 刪除單一球員資料
    Route::delete('players/delete/{id}', [PlayersController::class, 'destroy'])->where('id', '[0-9]+')->name('players.destroy')->middleware('can:admin');
    // 新增球員表單
    Route::get('players/create', [PlayersController::class, 'create'])->name('players.create')->middleware('can:admin');
    // 修改球員表單
    Route::get('players/{id}/edit', [PlayersController::class, 'edit'])->where('id', '[0-9]+')->name('players.edit');
    // 修改球員資料
    Route::patch('players/update/{id}', [PlayersController::class, 'update'])->where('id', '[0-9]+')->name('players.update');
    // 儲存新球員資料
    Route::post('players/store', [PlayersController::class, 'store'])->where('id', '[0-9]+')->name('players.store')->middleware('can:admin');

    // 顯示顯示所有球隊資料
    Route::get('teams', [TeamsController::class, 'index'])->name('teams.index');
    // 顯示顯示東區球隊資料
    Route::get('teams/eastern', [TeamsController::class, 'eastern'])->name('teams.eastern');
    // 顯示顯示西區球隊資料
    Route::get('teams/western', [TeamsController::class, 'western'])->name('teams.western');
    // 顯示單一球隊資料
    Route::get('teams/{id}', [TeamsController::class, 'show'])->where('id', '[0-9]+')->name('teams.show');
    // 修改單一球隊表單
    Route::get('teams/{id}/edit', [TeamsController::class, 'edit'])->where('id', '[0-9]+')->name('teams.edit');
    // 刪除單一球隊及旗下球員資料
    Route::delete('teams/delete/{id}', [TeamsController::class, 'destroy'])->where('id', '[0-9]+')->name('teams.destroy')->middleware('can:admin');
    // 新增球隊表單
    Route::get('teams/create', [TeamsController::class, 'create'])->name('teams.create')->middleware('can:admin');
    // 修改球隊表單
    Route::get('teams/{id}/edit', [TeamsController::class, 'edit'])->where('id', '[0-9]+')->name('teams.edit');
    // 修改球隊資料
    Route::patch('teams/update/{id}', [TeamsController::class, 'update'])->where('id', '[0-9]+')->name('teams.update');
    // 儲存新球隊資料
    Route::post('teams/store', [TeamsController::class, 'store'])->name('teams.store')->middleware('can:admin');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
