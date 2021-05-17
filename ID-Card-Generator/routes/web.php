<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IDCardController;
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
Route::get('index',[IDCardController::class,'index']);
Route::post('index',[IDCardController::class,'Save']);



Route::get('employees',[IDCardController::class,'employees']);

Route::post('viewEmployee/{emp_id}',[IDCardController::class,'viewEmployee']);

Route::post('downloads',[IDCardController::class,'download']);


