<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RefereeController;
use App\Http\Controllers\RegistrationController;

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

Route::get('/', [RefereeController::class, 'show']);

Route::post('verify', [RefereeController::class, 'verify']);

Route::get('registration', [RegistrationController::class, 'show']);

Route::post('send-code', [RegistrationController::class, 'store']);
