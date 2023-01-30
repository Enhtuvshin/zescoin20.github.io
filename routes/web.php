<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WhitepaperController;


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

/*Route::get('/', function () {
    return view('web.index');
});*/

Route::get('/',[HomeController::class, 'index']);
Route::get('whitepaper',[WhitepaperController::class, 'whitepaper']);

/*Route::get('/whitepaper', 'WhitepaperController@whitepaper')->name('web.whitepaper');*/


