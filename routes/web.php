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

Route::get('/', function () {
    //return view('welcome');
    return 'tony rocks the world';
});



Route::get('/about', function(){
    return 'about our wonderful company';
});
/*
/about
/cart
/checkout
/checkout/thanks/{ORDER_ID}
/contact
/create-account
/get-credits
/get-credits/thanks
/login
/logout
/privacy-policy
/products
/products?filter={FILTER_DATA}
/products/category/{CATEGORY_SLUG}
/products/single/{PRODUCT_SLUG}
/products/type/{TYPE_SLUG}
/products/types
/seller
/seller/products/edit/{PRODUCT_SLUG}
/seller/products/submit
/seller/sales
/terms-and-conditions
/view-orders
/view-orders/{ORDER_ID}

 */