<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OpenIDController;
use Illuminate\Http\Request;

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

Route::get('/', [HomeController::class,'index'])->name('index');
//openid登入
Route::get('sso', [OpenIDController::class,'sso'])->name('sso');
Route::get('auth/callback', [OpenIDController::class,'callback'])->name('callback');
Route::get('logout', [OpenIDController::class,'logout'])->name('logout');

Route::get('/ping', function () {
    return response()->json(['ok' => true]);
})->middleware('check.session');

Route::post('/save-google-user', function (Request $request) {
    // 驗證並將 Google 資料存入 Laravel Session
    session([
        'google_user' => [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'picture' => $request->input('picture'),
        ]
    ]);

    return response()->json(['status' => 'success']);
})->name('save.google.user');