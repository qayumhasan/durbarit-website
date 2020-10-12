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

Route::prefix('admin')->namespace('Admin')->group(function(){
  Route::get('/service','ServiceController@index')->name('admin.service.index');
  Route::get('/service/create','ServiceController@create')->name('admin.service.create');
  Route::post('/service/create','ServiceController@store')->name('admin.service.store');
  Route::get('/service/edit/{id}','ServiceController@edit')->name('admin.service.edit');
  Route::post('/service/update','ServiceController@update')->name('admin.service.update');
  Route::get('/service/status/{id}','ServiceController@status')->name('admin.service.status');
  Route::get('/service/delete/{id}','ServiceController@delete')->name('admin.service.delete');
});


Route::prefix('admin')->namespace('Admin')->group(function(){
  Route::get('/partner','PartnerController@index')->name('admin.partner.index');
  Route::get('/partner/create','PartnerController@create')->name('admin.partner.create');
  Route::post('/partner/create','PartnerController@store')->name('admin.partner.store');
  Route::get('/partner/edit/{id}','PartnerController@edit')->name('admin.partner.edit');
  Route::post('/partner/update','PartnerController@update')->name('admin.partner.update');
  Route::get('/partner/status/{id}','PartnerController@status')->name('admin.partner.status');
  Route::get('/partner/delete/{id}','PartnerController@delete')->name('admin.partner.delete');
});

Route::prefix('admin')->namespace('Admin')->group(function(){
  Route::get('/logo','LogoController@index')->name('admin.logo.index');
  Route::post('/logo/update','LogoController@update')->name('admin.logo.update');
});

Route::prefix('admin')->namespace('Admin')->group(function(){
  Route::get('/subscriber','SubscriberController@index')->name('admin.subscriber.index');
  Route::get('/subscriber/create','SubscriberController@create')->name('admin.subscriber.create');
  Route::post('/subscriber/create','SubscriberController@store')->name('admin.subscriber.store');
  Route::get('/subscriber/edit/{id}','SubscriberController@edit')->name('admin.subscriber.edit');
  Route::post('/subscriber/update','SubscriberController@update')->name('admin.subscriber.update');
  Route::get('/subscriber/status/{id}','SubscriberController@status')->name('admin.subscriber.status');
  Route::get('/subscriber/delete/{id}','SubscriberController@delete')->name('admin.subscriber.delete');
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
