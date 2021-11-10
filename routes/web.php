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
Route::get('/Web-login', 'Website\WebsiteController@login');
Route::get('/Web-register', 'Website\WebsiteController@registration');
Route::post('/Register-submit', 'Website\WebsiteController@register_submit');
Route::post('Login-submit', 'Website\WebsiteController@login_submit');
Route::get('/shop', 'Website\WebsiteController@index');
Route::get('/categories', 'Website\WebsiteController@categories');
Route::get('/blog', 'Website\WebsiteController@blog_Page');
Route::get('/contacts', 'Website\WebsiteController@contacts');
Route::get('/wishlist', 'Website\WebsiteController@wishlist');
Route::get('/my-cart', 'Website\WebsiteController@cart_page');
Route::get('/about', 'Website\WebsiteController@about_page');
Route::get('/faq', 'Website\WebsiteController@faq_page');
Route::get('/product', 'Website\WebsiteController@product');
Route::get('/post', 'Website\WebsiteController@post_page');
Route::get('/checkout1', 'Website\WebsiteController@checkout1');
Route::get('/checkout2', 'Website\WebsiteController@checkout2');
Route::get('/checkout3', 'Website\WebsiteController@checkout3');
Route::get('/ProductList/{Cat_id}', 'Website\WebsiteController@productList');
Route::get('/ProductDetail/{product_id}', 'Website\WebsiteController@ProductDetail');
Route::post('/add-to-cart', 'Website\EcomController@add_to_cart');

Route::post('/remove-product','Website\WebsiteController@removeProduct'); 
Route::post('/cart-update','Website\WebsiteController@cartUpdate'); 

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
Route::group(['middleware' => 'auth', 'User'], function () {
    // Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/checkout', 'Website\WebsiteController@checkout');
    Route::post('checkout-submit','Website\WebsiteController@checkoutSubmit');

    Route::get('confirm-order/{order_id}','RazorpayController@confirm')->name('confirm.order');
    Route::post('payment','RazorpayController@payment')->name('payment');
    Route::get('order-success/{order_id}','Website\WebsiteController@orderSuccessPage');

    Route::get('/My-Address', 'Website\WebsiteController@My_Address');
    Route::post('user-address-submit','Website\WebsiteController@userAddressSubmit');
    Route::get('user-address-edit/{id}','Website\WebsiteController@userAddressEdit');
    Route::get('user-address-delete/{id}','Website\WebsiteController@userAddressDelete'); 
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

    Route::get('view-product', 'Admin\ProductController@view_product');
    Route::get('add-product', 'Admin\ProductController@add_product');
    Route::post('submit-product', 'Admin\ProductController@submit_product');
    Route::get('edit-product/{id}', 'Admin\ProductController@edit_product');
    Route::get('delete-product/{id}', 'Admin\ProductController@delete_product');

    Route::get('view-product-attribute/{id}', 'Admin\ProductController@view_product_attribute');
    Route::get('add-product-attribute/{id}', 'Admin\ProductController@add_product_attribute');
    Route::post('submit-product-attribute', 'Admin\ProductController@submit_product_attribute');
    Route::get('edit-product-attribute/{id}', 'Admin\ProductController@edit_product_attribute');
    Route::get('delete-product-attribute/{id}', 'Admin\ProductController@delete_product_attribute');

    Route::get('view-product-images/{id}', 'Admin\ProductController@view_product_images');
    Route::get('add-product-images/{id}', 'Admin\ProductController@add_product_images');
    Route::post('submit-product-images', 'Admin\ProductController@submit_product_images');
    Route::get('edit-product-images/{id}', 'Admin\ProductController@edit_product_images');
    Route::get('delete-product-images/{id}', 'Admin\ProductController@delete_product_images');

});

Route::get('{any}', 'Website\WebsiteController@index');


