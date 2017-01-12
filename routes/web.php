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

/**
 * home page
 */
Route::get('/', function () {
    //return view('welcome');
    return 'tony rocks the world';
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


Route::get('/checkout', function(){
    return 'yo, check me out';
});


Route::get('/checkout/thanks/{order_id}', function($order_id){
    return "ORDER ID {$order_id}";
});

Route::get('/contact', function(){
    return 'contact us. do it now.';
});

Route::get('/create-account', function(){
    return 'create a new account';
});

Route::get('/get-credits', function(){
    return 'get yo-self some stuff';
});

Route::get('/get-credits/thanks/{order_id}', function($order_id){
    return 'thanks for getting yourself some stuff with order ' . $order_id;
});

Route::get('/login', function(){
    return 'log in. now!';
});

Route::get('/logout', function(){
    return 'log out. immediately!';
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

Route::get('/seller', function(){
    return 'seller home';
});

Route::get('/seller/products/edit/{', function(){
    return 'look at my cart, isn\'t it neat?';
});

Route::get('/cart', function(){
    return 'look at my cart, isn\'t it neat?';
});

Route::get('/cart', function(){
    return 'look at my cart, isn\'t it neat?';
});

Route::get('/cart', function(){
    return 'look at my cart, isn\'t it neat?';
});


/*
/seller/products/submit
/seller/sales
/terms-and-conditions
/view-orders
/view-orders/{ORDER_ID}

 */