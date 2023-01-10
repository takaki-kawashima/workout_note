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

Route::get('/',[RecordController::class,'index'])->name('top');
Route::get('/logout', 'Auth\LoginController@logout');

Route::resource('record', 'RecordController');




Route::get('/my',[TopController::class,'mypage'])->name('mypage');
Route::get('/menu',[TopController::class,'menu'])->name('menu');

Route::get('/profile',[TopController::class,'profile'])->name('prof');
Route::get('/editprofile',[RegisterController::class,'EditProfile'])->name('editprofile');


Route::post('/profile_update/{id}',[RegisterController::class,'profile_update'])->name('profileupdate');




Route::get('/menuadd',[RegisterController::class,'menuadd'])->name('add');
Route::post('/menuadd',[RegisterController::class, 'menuadd2']);
Route::post('/upload',[RegisterController::class, 'upload']);


Route::get('/delete/{id}',[RegisterController::class, 'delete'])->name('delete');

Route::post('/comment/add/ajax',[RegisterController::class, 'commentAdd'])->name('commentadd');

Route::get('/create', [RegisterController::class, 'create'])->name('item.create');

Route::post('/store', [RegisterController::class, 'store'])->name('item.store');

Route::get('/userlist',[TopController::class,'userlist'])->name('userlist');

Route::get('/commentall',[TopController::class,'commentall'])->name('commentall');
Route::get('/commentlist/{id}',[TopController::class,'commentlist'])->name('commentlist');
Route::get('/commentdelete/{id}',[TopController::class,'commentdelete'])->name('commentdelete');

Route::get('/userdelete/{id}',[TopController::class,'userdelete'])->name('userdelete');



Route::get('/create', [TopController::class, 'create'])->name('item.create');
Route::post('/store', [TopController::class, 'store'])->name('item.store');




});



