<?php


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

Route::get('/', function () {
    // return view('welcome');

    return view('admin.setting.profile');
});

Route::prefix('admin')->namespace('Admin')->group(function () {
   Route::get('/login','AdminController@showLoginPage')->name('admin.login.page');
   Route::post('/register','AdminController@register')->name('admin.register');
   Route::post('/login','AdminController@login')->name('admin.login');

   Route::get('/register','AdminController@showRegisterForm')->name('admin.register.form');

   Route::middleware(['auth:admin'])->group(function(){
        Route::get('/','AdminController@adminHome')->name('admin.home');
   });
   Route::post('/logout','AdminController@logout')->name('admin.logout');

   Route::get('/forgot/password','AdminController@showForgotPassword')->name('admin.forgot.passowrd');

   Route::post('/reset_password_without_token','AdminController@validatePasswordRequest')->name('admin.validate.password');
});



Route::resource('admin/slider', Admin\SliderController::class);
Route::prefix('slider')->namespace('Frontend')->group(function () {
    Route::get('/','FrontendController@slider');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// category
Route::prefix('admin')->namespace('Admin')->group(function(){
  Route::get(md5('/category/create'),'CategoryController@create')->name('admin.category.create');
  Route::post('/category/submit','CategoryController@store')->name('admin.category.store');
  Route::get(md5('/category/index'),'CategoryController@index')->name('admin.category.index');
  Route::get('/category/destroy/{id}','CategoryController@destroy');
  Route::get('/category/edit/{id}','CategoryController@edit');
  Route::post('/category/update/{id}','CategoryController@update')->name('admin.category.update');
});
// whychoseus
Route::prefix('admin')->namespace('Admin')->group(function(){
  Route::get(md5('/whychoseus/create'),'WhyChoseUsController@create')->name('admin.whychoseus.create');
  Route::post('/whychoseus/submit','WhyChoseUsController@store')->name('admin.whychoseus.store');
  Route::get(md5('/whychoseus/index'),'WhyChoseUsController@index')->name('admin.whychoseus.index');
  Route::get('/whychoseus/destroy/{id}','WhyChoseUsController@destroy');
  Route::get('/whychoseus/edit/{id}','WhyChoseUsController@edit');
  Route::post('/whychoseus/update/{id}','WhyChoseUsController@update')->name('admin.whychoseus.update');
});
