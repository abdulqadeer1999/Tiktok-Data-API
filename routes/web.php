<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TikTokVideoController;

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

// Route::get('alldata',[TikTokVideoController::class, 'getvideos'])->name('alldata');


Route::get('videos', [TikTokVideoController::class, 'fetchVideos'])->name('videos');


Route::get('allvideos',[TikTokVideoController::class,'getvideos'])->name('allvideos');


Route::get('/user-videos', [TikTokVideoController::class,'getUserVideos'])->name('user.videos');

Route::get('tiktok',[TikTokVideoController::class,'tiktok'])->name('tiktok');

Route::get('mailgun-email',[TikTokVideoController::class,'mailgunemail'])->name('mailgun-email');
