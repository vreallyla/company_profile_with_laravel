<?php


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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::post('login', 'AuthController@login')->name('loginApi');
Route::post('logout', 'AuthController@logout');
Route::post('refresh', 'AuthController@refresh');
Route::post('me', 'AuthController@me');

/**
 * @routeAvailableWeb /contact
 * @desc for post a contact's form
 */


Route::group(['prefix' => '/v1', 'namespace' => 'api'], function () {

    Route::post('/send-message', 'commonController@send_msg')->name('sendMsgApi');


    Route::group(['namespace' => 'admin'], function () {
        Route::post('/login', 'authController@login')->name('loginApi');


//         config info company
        Route::group(['namespace' => 'setup', 'prefix' => 'setup'], function () {

//            api perihal informasi
            Route::group(['prefix' => 'about'], function () {
                Route::get('/', 'aboutController@index')->name('adminAboutGet');
                Route::put('/', 'aboutController@update')->name('adminAboutPut');
                Route::put('/image-changes', 'aboutController@img')->name('adminAboutImg');
                Route::put('/icon-changes', 'aboutController@logo')->name('adminAboutIcon');
            });

//            api perihal contact
            Route::get('contact', 'contactController@index')->name('adminContactGet');
            Route::put('contact', 'contactController@update')->name('adminContactPut');


//            api perihal artikel
            Route::apiResource('articles', 'articlesController');

            //            api perihal artikel
            Route::apiResource('article-categories', 'categoryController');

//            api sub product
            Route::apiResource('brands', 'brandController');
            //            api sub product
            Route::apiResource('products', 'productController');

            //            api sub product
            Route::apiResource('product-subs', 'subProductController');


        });

    });

});

route::get('/coba', function () {
    session()->put('hel', 'p');
    return \Illuminate\Support\Facades\Session::all();
});

