<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopController;
use App\Http\Controllers\Registercontroller;
use App\Http\Controllers\RecordController;

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

Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset/{token}', 'Auth\ResetPasswordController@reset');

Route::group(['middleware' => 'auth'],function(){


Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/',[RecordController::class,'index'])->name('top');

Route::get('/my',[TopController::class,'mypage'])->name('mypage');
Route::get('/menu',[TopController::class,'menu'])->name('menu');
Route::get('/profile',[TopController::class,'profile'])->name('prof');


Route::get('/profile_update',[RegisterController::class,'profile_update'])->name('prof_update');


Route::get('/workout',[RecordController::class,'create'])->name('workout');
Route::post('/workout',[RecordController::class,'store']);

Route::get('/menuadd',[RegisterController::class,'menuadd'])->name('add');
Route::post('/menuadd',[RegisterController::class, 'menuadd2']);


Route::get('/detail/{id}', [RecordController::class,'show'])->name('detail');
Route::get('/editrecord/{id}', [RecordController::class,'edit'])->name('edit');
Route::post('/editrecord2',[RecordController::class,'update'])->name('editreco');

Route::get('/delete/{id}',[RegisterController::class, 'Delete'])->name('delete');



});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
