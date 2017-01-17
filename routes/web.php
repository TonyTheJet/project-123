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
    return view('about', ['title' => 'About 123SVG']);
});


/**
 * cart page
 */

Route::get('/cart', function(){
    return view('cart', ['title' => 'My Cart']);
});


Route::get('/contact', function(){
    return view('contact', ['title' => 'Contact Us']);
});


Route::get('/privacy-policy', function(){
    return view('privacy-policy', ['title' => 'Privacy Policy']);
});

Route::get('/products', function(){
    return view('shop.products', ['title' => 'All Products']);
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
    return view('terms-and-conditions', ['title' => 'Terms & Conditions']);
});
//end open pages


//signed-in group
Route::group(['middleware' => 'auth'], function () {


    Route::get('/become-a-seller', function(){
        return view('account.seller.become-a-seller', ['title' => 'Become a Seller']);
    });

    Route::get('/checkout', function () {
        return view('shop.checkout', ['title' => 'Checkout']);
    });

    Route::get('/checkout/thanks/{order_id}', function($order_id){
        return view('shop.checkout-thanks', ['order_id' => $order_id . ' LOCK THIS DOWN!', 'title' => 'Thanks for Your Order!']);
    });

    Route::get('/checkout/thanks', function(){
        return redirect('/view-orders');
    });

    Route::get('/get-credits', function(){
        return view('shop.get-credits', ['title' => 'Get Credits']);
    });

    Route::get('/get-credits/thanks/{credit_order_id}', function($credit_order_id){
        return view('shop.get-credits-thanks', ['credit_order_id' => $credit_order_id . ' LOCK THIS DOWN!', 'title' => 'Thanks for Your Order!']);
    });

    Route::get('/get-credits/thanks', function(){
        return redirect('/my-account/credit-purchase-activity');
    });

    Route::get('/my-account', function(){
        return view('account.my-account', ['title' => 'My Account']);
    });

    Route::get('/my-account/credit-purchase-activity', function(){
        return view('account.credit-purchase-activity', ['Credit Purchase Activity']);
    });

    Route::get('/my-account/settings', function(){
        return view('account.settings', ['title' => 'Account Settings']);
    });

    Route::get('/view-orders', function(){
        return view('account.view-orders', ['title' => 'My Orders']);
    });

    Route::get('/view-orders/{order_id}', function($order_id){
        return view('account.view-order', ['order_id' => "{$order_id} (BUT LOCK THIS DOWN)", 'title' => "View Order {$order_id}"]);
    });

    Route::get('/wishlist', function(){

        return view('account.wishlist', ['title' => 'My Wishlist']);
    });

});
//end signed-in pages

//signed in and a seller
Route::group(['middleware' => 'seller'], function(){
    Route::get('/account/seller', function(){
        return view('account.seller.dashboard', ['title' => 'My Seller Dashboard']);
    });

    Route::get('/account/seller/products', function(){
        return view('account.seller.products', ['title' => 'My Products']);
    });

    Route::get('/account/seller/products/edit/{product-slug}', function($product_slug){
        return view('account.seller.products.edit-product', ['title' => 'Edit Product [will add product eventually]']);
    });

    Route::get('/account/seller/products/submit', function(){
        return view('account.seller.products.submit-product', ['title' => 'Submit New Product']);
    });

    Route::get('/account/seller/sales', function(){
        return view('account.seller.sales', ['title' => 'Seller Sales Data']);
    });
});
//end signed in and a seller


//posts

//end posts

//include routes for out-of-the-box auth
Auth::routes();

<<<<<<< HEAD
Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
=======

//common redirects
Route::get('/home', function(){
    return redirect('/');
});
>>>>>>> bc7c1e0b2ef1a40503db7ac7ee9af4f5c6d35be3
