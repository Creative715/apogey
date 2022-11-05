<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'MainController@index');
Route::get('/category/{slug?}.html', 'MainController@category')->name('category');
Route::get('/category', 'MainController@categories')->name('categories');
Route::get('/product/{slug?}.html', 'MainController@more')->name('post');
Route::get('/posts', 'MainController@posts')->name('posts');
Route::get('/kompaniia', 'PageController@index')->name('pages');
Route::get('/kompaniia/{slug?}.html', 'PageController@page')->name('page');
Route::get('/en', 'EnpageController@index')->name('en');
Route::get('/en/category/{slug?}.html', 'EnpageController@encategory')->name('encategory');
Route::get('/en/categories', 'EnpageController@encategories')->name('encategories');
Route::get('/en/product/{slug?}.html', 'EnpageController@more')->name('enpost');
Route::get('/en/posts', 'EnpageController@enposts')->name('enposts');
Route::get('/en/the-company', 'EnpageController@enpage')->name('enpages');
Route::get('/en/the-company/{slug?}.html', 'EnpageController@page')->name('enpage');
Route::get('/ru', 'RupageController@index')->name('ru');
Route::get('/ru/category/{slug?}.html', 'RupageController@rucategory')->name('rucategory');
Route::get('/ru/categories', 'RupageController@rucategories')->name('rucategories');
Route::get('/ru/product/{slug?}.html', 'RupageController@more')->name('rupost');
Route::get('/ru/posts', 'RupageController@ruposts')->name('ruposts');
Route::get('/ru/o-kompanii', 'RupageController@rupage')->name('rupages');
Route::get('/ru/o-kompanii/{slug?}.html', 'RupageController@page')->name('rupage');

Auth::routes();

Route::group(['prefix'=>'inside', 'namespace'=>'Admin', 'middleware'=>['auth']], function(){
    Route::get('/', 'DashboardController@dashboard')->name('admin.index');
    Route::resource('/category', 'CategoryController', ['as'=>'admin']);
    Route::resource('/post', 'PostController', ['as'=>'admin']);
    Route::resource('/page', 'PageController', ['as'=>'admin']);
    Route::resource('/encategory', 'CategoryenController', ['as'=>'admin']);
    Route::resource('/enpost', 'PostenController', ['as'=>'admin']);
    Route::resource('/enpage', 'PageenController', ['as'=>'admin']);
    Route::resource('/rucategory', 'CategoryruController', ['as'=>'admin']);
    Route::resource('/rupost', 'PostruController', ['as'=>'admin']);
    Route::resource('/rupage', 'PageruController', ['as'=>'admin']);

});
