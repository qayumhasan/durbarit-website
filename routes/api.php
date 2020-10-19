<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::apiResource('/category','Api\CategoryController');
Route::apiResource('/whychoseus','Admin\WhyChoseUsController');
Route::apiResource('/companyinformation','Admin\ContactInformationController');


Route::prefix('slider')->namespace('Frontend')->group(function () {
    Route::get('/','FrontendController@slider');
});

Route::prefix('service')->namespace('Frontend')->group(function () {
  Route::get('/','FrontendController@searvices');
});

Route::prefix('partners')->namespace('Frontend')->group(function () {
  Route::get('/','FrontendController@partners');
});

Route::prefix('logos')->namespace('Frontend')->group(function () {
    Route::get('/','FrontendController@logos');
  });

  Route::prefix('category')->namespace('Frontend')->group(function () {
      Route::get('/','FrontendController@categoris');
      Route::get('/{id}','FrontendController@categorisid');
    });



  Route::prefix('about-us')->namespace('Frontend')->group(function () {
    Route::get('/','FrontendController@aboutUs');
  });


  Route::prefix('choose-us')->namespace('Frontend')->group(function () {
    Route::get('/','FrontendController@chooseus');
  });

  Route::prefix('clientsay')->namespace('Frontend')->group(function () {
    Route::get('/','FrontendController@clientSay');
  });

  Route::prefix('contact')->namespace('Frontend')->group(function () {
    Route::get('/','FrontendController@contact');
  });

  Route::prefix('pages')->namespace('Frontend')->group(function () {
    Route::get('/','FrontendController@pages');
  });

  Route::prefix('subscribers')->namespace('Frontend')->group(function () {
    Route::post('/create','FrontendController@NewsLetter');
  });

