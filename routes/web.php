<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::name('front.')->group(function () {
    Route::get('products', [ProductController::class, 'index'])->name('products');
    Route::get('productdetail/{id}', [ProductController::class, 'detail'])->name('productdetail');

    Route::view('/' ,'front.index')->name('index');
    Route::view('cart', 'front.cart')->name('cart');
    Route::view('wishlist', 'front.wishlist')->name('wishlist');
    Route::view('checkout', 'front.checkout')->name('checkout');
    Route::view('store', 'front.store')->name('store');
    Route::view('order', 'front.order')->name('order');
    Route::view('giftservices', 'front.giftservices')->name('giftservices');
    Route::view('giftcards', 'front.giftcards')->name('giftcards');
    Route::view('return', 'front.return')->name('return');
    Route::view('shipping', 'front.shipping')->name('shipping');
    Route::view('referfriend', 'front.referfriend')->name('referfriend');
    Route::view('needhelp', 'front.needhelp')->name('needhelp');
    Route::view('faq', 'front.faq')->name('faq');
    Route::view('promotions', 'front.promotions')->name('promotions');
    Route::view('storelocator', 'front.storelocator')->name('storelocator');
    Route::view('sizechart', 'front.sizechart')->name('sizechart');

    Route::view('privacycenter', 'front.privacycenter')->name('privacycenter');
    Route::view('termsofuse', 'front.termsofuse')->name('termsofuse');
    Route::view('socialresponciblity', 'front.socialresponciblity')->name('socialresponciblity');
    Route::view('supplychain', 'front.supplychain')->name('supplychain');
    Route::view('accessibility', 'front.accessibility')->name('accessibility');
    Route::view('privacyrights', 'front.privacyrights')->name('privacyrights');
    Route::view('personalinfo', 'front.personalinfo')->name('personalinfo');
    Route::view('lookbook', 'front.lookbook')->name('lookbook');
    Route::view('whoweare', 'front.whoweare')->name('whoweare');

    Route::view('signin', 'front.registeration.signin')->name('registeration.signin');
    Route::view('createaccount', 'front.registeration.createaccount')->name('registeration.createaccount');
    Route::view('forgetpassword', 'front.registeration.forgetpass')->name('registeration.forgetpass');

    Route::view('customer/dashboard', 'front.customer.dashboard')->name('customer.dashboard');
    Route::view('customer/dashboard/edit', 'front.customer.editinfo')->name('customer.editinfo');
});

