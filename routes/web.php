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

//Route::get('/', function () {
//    return view('welcome');
//});

route::get('/', 'publicController@index')->name('index');
route::get('/about', 'publicController@about')->name('about');
route::get('/news', 'publicController@news')->name('news');
route::get('/news/{id}', 'publicController@newSingle')->name('news_single');

route::get('contact', 'publicController@contact')->name('contact');

route::get('product', 'publicController@products')->name('product');
route::get('product/{product}', 'publicController@productDetails')->name('productDetails');
route::get('product/{product}/{brand}', 'publicController@subProduct')->name('subProduct');



route::get('catalogue', 'publicController@catalog')->name('catalogue');

Route::group(['prefix' => '/admin', 'namespace' => 'admin'], function () {

    Route::post('redirect', [
        'uses' => 'adminController@redirect',
        'as' => 'reAdmin',
        'middleware' => 'reAdmin'
    ]);

    route::get('/login', 'adminController@login')->name('loginAdmin');
    route::get('/dashboard', 'adminController@dashboard')->name('indexAdmin');

    Route::group(['prefix' => '/articles'], function () {


//            category article
        route::get('/categories', function () {
            return view('admin.articles.categories.categories');
        })->name('cArticleAdmin');

        Route::group(['prefix' => '/list'], function () {

            route::get('/', function () {
                $cat = \App\categoryArticle::orderBy('cat_name', 'asc')->get();

                return view('admin.articles.list.articles',compact('cat'));
            })->name('articleAdmin');

            route::get('/manipulate', function () {
                $cat = \App\categoryArticle::orderBy('cat_name', 'asc')->get();
                $id=request('key');
                $article = $id ? \App\article::findOrFail($id) : '';
                return view('admin.articles.list.mArticle', compact('cat','id','article'));
            })->name('mArticleAdmin');
        });

    });

    Route::group(['prefix' => '/products'], function () {
        route::get('/brands', 'adminController@brands')->name('brandAdmin');
        route::get('/product-categories', 'adminController@productCategories')->name('cProductAdmin');
        route::get('/products', 'adminController@products')->name('productAdmin');

    });

    Route::group(['prefix' => '/settings'], function () {
        route::get('/about', 'adminController@about')->name('aboutAdmin');
        route::get('/contacts', 'adminController@contacts')->name('contactAdmin');
        route::get('/slides', 'adminController@slides')->name('slideAdmin');
        route::get('/testimonials', 'adminController@tetimonials')->name('testimonialAdmin');

    });



});

route::get('/coba', function () {
    return urlencode('&');
});
