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
    Route::get('admin', 'Admin\AdminController@admin_list');
    Route::get('user-list', 'Admin\AdminController@user_list');
    Route::get('view-user-details/{id}', 'AdminController@user_details');
    Route::get('/home', 'HomeController@index')->name('home'); 

    Route::get('view-banner', 'Admin\AdminController@view_banner');
    Route::get('add-banner', 'Admin\AdminController@add_banner');
    Route::post('submit-banner', 'Admin\AdminController@submit_banner');
    Route::get('edit-banner/{id}', 'Admin\AdminController@edit_banner');
    Route::get('delete-banner/{id}', 'Admin\AdminController@delete_banner');
    Route::get('update-banner/{id}/{status}', 'Admin\AdminController@update_tab_status');

    Route::get('view-category', 'Admin\AdminController@view_category');
    Route::get('add-category', 'Admin\AdminController@add_category');
    Route::post('submit-category', 'Admin\AdminController@submit_category');
    Route::get('edit-category/{id}', 'Admin\AdminController@edit_category');
    Route::get('delete-category/{id}', 'Admin\AdminController@delete_category');
    Route::get('update-category/{id}/{status}', 'Admin\AdminController@update_category_status');

    Route::get('view-sub-category', 'Admin\AdminController@view_sub_category');
    Route::get('add-sub-category', 'Admin\AdminController@add_sub_category');
    Route::post('submit-sub-category', 'Admin\AdminController@submit_sub_category');
    Route::get('edit-sub-category/{id}', 'Admin\AdminController@edit_sub_category');
    Route::get('delete-sub-category/{id}', 'Admin\AdminController@delete_sub_category');
    Route::get('update-sub-category/{id}/{status}', 'Admin\AdminController@update_sub_category_status');

    Route::get('view-blogs', 'Admin\AdminController@view_blogs');
    Route::get('add-blogs', 'Admin\AdminController@add_blogs');
    Route::post('submit-blogs', 'Admin\AdminController@submit_blogs');
    Route::get('edit-blogs/{id}', 'Admin\AdminController@edit_blogs');
    Route::get('delete-blogs/{id}', 'Admin\AdminController@delete_blogs');
    Route::get('update-blogs/{id}/{status}', 'Admin\AdminController@update_tab_status');


    Route::get('view-plans', 'Admin\AdminController@view_plans');
    Route::get('add-plans', 'Admin\AdminController@add_plans');
    Route::post('submit-plans', 'Admin\AdminController@submit_plans');
    Route::get('edit-plans/{id}', 'Admin\AdminController@edit_plans');
    Route::get('delete-plans/{id}', 'Admin\AdminController@delete_plans');
    Route::get('update-plans/{id}/{status}', 'Admin\AdminController@update_plan_status');


});

Route::get('{any}', 'Website\WebsiteController@index');


