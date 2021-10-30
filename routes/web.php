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

// Route::get('/', function () {
//     return redirect('/index');
// });

Route::get('/', 'Website\WebsiteController@index');
Route::get('/shop', 'Website\WebsiteController@shop_page');
Route::get('/categories', 'Website\WebsiteController@categories');
Route::get('/blog', 'Website\WebsiteController@blog_Page');
Route::get('/contacts', 'Website\WebsiteController@contacts');
Route::get('/wishlist', 'Website\WebsiteController@wishlist');
Route::get('/cart', 'Website\WebsiteController@cart_page');
Route::get('/about', 'Website\WebsiteController@about_page');
Route::get('/faq', 'Website\WebsiteController@faq_page');
Route::get('/product', 'Website\WebsiteController@product');
Route::get('/post', 'Website\WebsiteController@post_page');
Route::get('/checkout1', 'Website\WebsiteController@checkout1');
Route::get('/checkout2', 'Website\WebsiteController@checkout2');
Route::get('/checkout3', 'Website\WebsiteController@checkout3');

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    $exitCode1 = Artisan::call('config:cache');
    $exitCode2 = Artisan::call('view:clear');
    $exitCode3  = Artisan::call('route:clear');
    dd("Cache is cleared");
});

Auth::routes();
Route::get('logout', 'QovexController@logout');


// You can also use auth middleware to prevent unauthenticated users
Route::group(['middleware' => 'auth'], function () {
    // Route::get('/home', 'HomeController@index')->name('home');
    
});

Route::middleware(['auth', 'Admin'])->group(function () {
    Route::get('admin', 'AdminController@admin_list');
    Route::get('user-list', 'AdminController@user_list');
    Route::get('view-user-details/{id}', 'AdminController@user_details');
    Route::get('/home', 'HomeController@index')->name('home'); 

    Route::get('view-banner', 'Admin\AdminController@view_banner');
    Route::get('add-banner', 'Admin\AdminController@add_banner');
    Route::post('submit-banner', 'Admin\AdminController@submit_banner');
    Route::get('edit-banner/{id}', 'Admin\AdminController@edit_banner');
    Route::get('delete-banner/{id}', 'Admin\AdminController@delete_banner');
    Route::get('update-banner/{id}/{status}', 'Admin\AdminController@update_tab_status');
});

Route::get('{any}', 'Website\WebsiteController@index');


