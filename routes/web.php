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
  Route::get('/subscriber/status/{id}','SubscriberController@status')->name('admin.subscriber.status');
  Route::get('/subscriber/delete/{id}','SubscriberController@delete')->name('admin.subscriber.delete');
});


Route::prefix('admin')->namespace('Admin')->group(function(){
  Route::get('/career','CareerController@index')->name('admin.career.index');
  Route::get('/career/create','CareerController@create')->name('admin.career.create');
  Route::post('/career/create','CareerController@store')->name('admin.career.store');
  Route::get('/career/edit/{id}','CareerController@edit')->name('admin.career.edit');
  Route::post('/career/update','CareerController@update')->name('admin.career.update');
  Route::get('/career/status/{id}','CareerController@status')->name('admin.career.status');
  Route::get('/career/delete/{id}','CareerController@delete')->name('admin.career.delete');
});

Route::prefix('admin')->namespace('Admin')->group(function(){
  Route::get('/team','TeamController@index')->name('admin.team.index');
  Route::get('/team/create','TeamController@create')->name('admin.team.create');
  Route::post('/team/create','TeamController@store')->name('admin.team.store');
  Route::get('/team/edit/{id}','TeamController@edit')->name('admin.team.edit');
  Route::post('/team/update','TeamController@update')->name('admin.team.update');
  Route::get('/team/status/{id}','TeamController@status')->name('admin.team.status');
  Route::get('/team/delete/{id}','TeamController@delete')->name('admin.team.delete');
});

Route::prefix('admin')->namespace('Admin')->group(function(){
  Route::get('/page','PageController@index')->name('admin.page.index');
  Route::get('/page/create','PageController@create')->name('admin.page.create');
  Route::post('/page/create','PageController@store')->name('admin.page.store');
  Route::get('/page/edit/{id}','PageController@edit')->name('admin.page.edit');
  Route::post('/page/update','PageController@update')->name('admin.page.update');
  Route::get('/page/status/{id}','PageController@status')->name('admin.page.status');
  Route::get('/page/delete/{id}','PageController@delete')->name('admin.page.delete');
});

Route::prefix('admin')->namespace('Admin')->group(function(){
  Route::get('/client/say','ClientController@index')->name('admin.client.index');
  Route::get('/client/say/create','ClientController@create')->name('admin.client.create');
  Route::post('/client/say/create','ClientController@store')->name('admin.client.store');
  Route::get('/client/say/edit/{id}','ClientController@edit')->name('admin.client.edit');
  Route::post('/client/say/update','ClientController@update')->name('admin.client.update');
  Route::get('/client/say/status/{id}','ClientController@status')->name('admin.client.status');
  Route::get('/client/say/delete/{id}','ClientController@delete')->name('admin.client.delete');
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
// ContactInformation
Route::prefix('admin')->namespace('Admin')->group(function(){
  Route::get('/contactinformation/edit','ContactInformationController@edit')->name('admin.contactinformation');
  Route::post('/contactinformation/update/{id}','ContactInformationController@update')->name('admin.contactinformation.update');
});


// seo
Route::prefix('admin')->namespace('Admin')->group(function(){
  Route::get('/seo/edit','SeoController@edit')->name('admin.seo.edit');
  Route::post('/seo/update/{id}','SeoController@update')->name('admin.seo.update');
});

Route::prefix('admin')->namespace('Admin')->group(function(){
  Route::get(md5('/product/create'),'ProductController@create')->name('admin.product.create');
  Route::post(md5('/product/create/submit'),'ProductController@store')->name('admin.product.store');
  // Route::post('/whychoseus/submit','ProductController@store')->name('admin.whychoseus.store');
  // Route::get(md5('/whychoseus/index'),'ProductController@index')->name('admin.whychoseus.index');
  // Route::get('/whychoseus/destroy/{id}','ProductController@destroy');
  // Route::get('/whychoseus/edit/{id}','ProductController@edit');
  // Route::post('/whychoseus/update/{id}','ProductController@update')->name('admin.whychoseus.update');
});
