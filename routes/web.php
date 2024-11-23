<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoanDetailsController;
use App\Http\Controllers\EMIController;
use App\Http\Middleware\Authenticate;


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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', [AuthController::class,"loginView"])->name("login");

Route::get('/login', [AuthController::class,"loginView"])->name("login");
Route::post('/do-login', [AuthController::class,"doLogin"]);

Route::group(['middleware' =>Authenticate::class ], function () {
    Route::get('/dashboard', [AuthController::class,"dashboard"]);
    Route::get('/logout', [AuthController::class,"logout"]);
	
	Route::get('/process-emi', [EMIController::class, 'index']);
	Route::post('/process-emi', [EMIController::class, 'processData']);
	Route::get('/loan-details', [LoanDetailsController::class, 'index']);

});
