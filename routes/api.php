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

Route::middleware('auth:api')->get('/user', function (Request $request) {
  return $request->user();
});

//Route::apiResource('/category','Api\CategoryController');
Route::apiResource('/whychoseus','Admin\WhyChoseUsController');
Route::apiResource('/companyinformation','Api\ContactInformationController');
Route::apiResource('/product','Api\ProductController');
Route::apiResource('/contactmessage','Api\ContactMessageController');
Route::apiResource('/social','Api\SocialController');





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


  Route::prefix('team')->namespace('Frontend')->group(function () {
    Route::get('/','FrontendController@team');
  });
  Route::prefix('career')->namespace('Frontend')->group(function () {
    Route::get('/','FrontendController@career');
  });

  // Route::prefix('product')->namespace('Frontend')->group(function () {
  //   Route::get('/','FrontendController@product');
  // });

  Route::prefix('contact')->namespace('Frontend')->group(function () {
    Route::get('/','FrontendController@contact');
  });

  Route::prefix('pages')->namespace('Frontend')->group(function () {
    Route::get('/','FrontendController@pages');
  });

  Route::prefix('subscribers')->namespace('Frontend')->group(function () {
    Route::post('/create','FrontendController@NewsLetter');
  });


  Route::prefix('categores')->namespace('Frontend')->group(function () {
    Route::get('/','FrontendController@categores');
  });

  Route::prefix('projects')->namespace('Frontend')->group(function () {
    Route::get('/','FrontendController@projects');
  });

  Route::prefix('projectsdetails')->namespace('Frontend')->group(function () {
    Route::get('/{id}','FrontendController@projectsDetails');
  });

  Route::prefix('single/page')->namespace('Frontend')->group(function () {
    Route::get('/{id}','FrontendController@singlePage');
  });

  Route::prefix('login')->namespace('Frontend')->group(function () {
    Route::post('/','AuthController@login');
  });

  Route::prefix('logout')->namespace('Frontend')->group(function () {
    Route::get('/','AuthController@logout');
  });

  Route::namespace('Frontend')->group(function () {
    Route::post('/add/to/cart','FrontendController@addToCart');
  });
  Route::namespace('Frontend')->group(function () {
    Route::get('/total/quantity','FrontendController@totalQty');
  });
  Route::namespace('Frontend')->group(function () {
    Route::get('/cart/data','FrontendController@getCartData');
  });
  Route::namespace('Frontend')->group(function () {
    Route::get('/cart/data/delete/{id}','FrontendController@cartDataDelete');
  });
  Route::namespace('Frontend')->group(function () {
    Route::get('/cart/total','FrontendController@totalPrice');
  });


