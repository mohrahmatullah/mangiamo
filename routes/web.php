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

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});

Route::get('/', 'HomeController@index')->name('home');
Route::get('abouts', 'AboutsController@index')->name('abouts');
Route::get('menu/{slug}', 'MenuController@index')->name('menu');
Route::get('menu-detail/{slug}', 'MenuController@detail')->name('menu-detail');
Route::get('contact', 'MessageController@index')->name('contact');
Route::get('promo', 'PromoController@index')->name('promo');
Route::get('promo-detail/{slug}', 'PromoController@detail')->name('promo-detail');
Route::get('blogs', 'NewsController@index')->name('news');
Route::get('blog-detail/{slug}', 'NewsController@detail')->name('blog-detail');
Route::get('gallery', 'GalleryController@index')->name('gallery');
Route::get('career', 'CareerController@index')->name('career');

Route::post('career', 'CareerController@saveCareerMsg')->name('save-career');

Route::post('ajax/get-menus-by-categories', 'AjaxController@getMenusByCategories')->name('get-menus-by-categories');
Route::post('ajax/get-menus-by-categories-m', 'AjaxController@getMenusByCategoriesMobile')->name('get-menus-by-categories-mobile');
Route::post('ajax/save-messages', 'MessageController@saveMessage')->name('save-messages');