<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


//open (non-signed-in) pages
/**
 * home page
 */
Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});


/**
 * about the company
 */
Route::get('/about', function(){
    return 'about our wonderful company';
});


/**
 * cart page
 */

Route::get('/cart', function(){
    return 'look at my cart, isn\'t it neat?';
});


Route::get('/contact', function(){
    return 'contact us. do it now.';
});


Route::get('forgot-password', function(){
    return 'forgot password page';
});


Route::get('/privacy-policy', function(){
    return 'read this very exciting privacy policy!';
});

Route::get('/products', function(){
    return 'look at all of these products!';
});

Route::get('/products/{filter_data}', function($filter_data){
    return "filter data {$filter_data}";
});

Route::get('/products/category/{category_slug}', function($category_slug){
    return "category {$category_slug}";
});

Route::get('/products/single/{product_slug}', function($product_slug){
    return "look at single product {$product_slug}";
});

Route::get('/products/type/{type_slug}', function($type_slug){
    return "look at all products with the slug type {$type_slug}";
});

Route::get('/products/types', function(){
    return 'info about the various types of products';
});

Route::get('/terms-and-conditions', function(){
    return 'read these awesome terms and conditions';
});
//end open pages


//signed-in group
Route::group(['middleware' => 'auth'], function () {

    Route::get('/account-settings', function(){
        return 'my account settings';
    });

    Route::get('/become-a-seller', function(){
        return 'become a seller';
    });

    Route::get('/checkout', function () {
        return 'yo, check me out';
    });

    Route::get('/checkout/thanks/{order_id}', function($order_id){
        return "ORDER ID {$order_id}";
    });

    Route::get('/get-credits', function(){
        return 'get yo-self some stuff';
    });

    Route::get('/get-credits/thanks/{order_id}', function($order_id){
        return 'thanks for getting yourself some stuff with order ' . $order_id;
    });

    Route::get('/logout', function(){
        return 'log out. immediately!';
    });

    Route::get('/my-account', function(){
        return view('my-account');
    });

    Route::get('/view-orders', function(){
        return 'view all of the user\'s orders';
    });

    Route::get('/view-orders/{order_id}', function($order_id){
        return "look at order {$order_id}";
    });

    Route::get('/wishlist', function(){

        return "look at my wish list";
    });

});
//end signed-in pages

//signed in and a seller
Route::group(['middleware' => 'seller'], function(){
    Route::get('/seller', function(){
        return 'seller home';
    });

    Route::get('/seller/products/edit/{product-slug}', function($product_slug){
        return "editing product {$product_slug}";
    });

    Route::get('/seller/products/submit', function(){
        return 'submit a new product';
    });

    Route::get('/seller/sales', function(){
        return 'get sales data';
    });
});
//end signed in and a seller


//posts

//end posts






Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
