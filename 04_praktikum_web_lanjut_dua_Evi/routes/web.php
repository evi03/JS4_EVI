<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function(){
//     return view('welcome');
// });
Route::get('/', [PagesController::class, 'home']);
Route::get('/today-special', [PagesController::class, 'todaySpecial']);
Route::get('/menu', [PagesController::class, 'menu']);
Route::get('/contact', [PagesController::class, 'contact']);
