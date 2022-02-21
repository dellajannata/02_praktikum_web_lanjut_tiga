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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ContactController;
// No. 1
Route::get('/',[HomeController::class,'home']);

// No.2
Route::prefix('category')->group(function(){
    Route::get('/marbeledugames',[ProductController::class,'marbeledugames']);
    Route::get('/marbelandfriendskidsgames',[ProductController::class,'marbelandfriendskidsgames']);
    Route::get('/riristorybooks',[ProductController::class,'riristorybooks']);
    Route::get('/kolakkidssongs',[ProductController::class,'kolakkidssongs']);
});

// No.3
Route::get('news', function(){
    return redirect('https://www.educastudio.com/news');
});

Route::get('/news/{title}', function($title){
    return redirect('https://www.educastudio.com/news/' .$title);
});

// No.4
Route::prefix('program')->group(function(){
    Route::get('/karir',[ProgramController::class,'karir']);
    Route::get('/magang',[ProgramController::class,'magang']);
    Route::get('/kunjunganindustri',[ProgramController::class,'kunjunganindustri']);
});

// No.5
Route::get('AboutUs', function(){
    return redirect('https://www.educastudio.com/about-us');
});

// No.6
Route::resource('contactus', ContactController::class);