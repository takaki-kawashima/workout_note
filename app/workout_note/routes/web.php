<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
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
//     return view('mypage');
// });

Auth::routes();


Route::get('/',[HomeController::class,'home'])->name('home');

Route::get('/my',[HomeController::class,'mypage'])->name('mypage');
Route::get('/menu',[HomeController::class,'menu'])->name('menu');
Route::get('/profile',[HomeController::class,'profile'])->name('prof');


Route::get('/profile_update',[RegisterController::class,'profile_update'])->name('prof_update');


Route::get('/workout',[RegisterController::class,'register'])->name('workout');
Route::post('/workout',[RegisterController::class,'workoutregister']);

Route::get('/menuadd',[RegisterController::class,'menuadd'])->name('add');
Route::post('/menuadd',[RegisterController::class, 'menuadd2']);
