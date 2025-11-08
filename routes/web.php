<?php

use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');

// Placeholder routes for header navigation
Route::get('/search', function () {
    return view('home'); // Will implement later
})->name('search');

Route::get('/shop', function () {
    return view('home'); // Will implement later
})->name('shop');

Route::get('/categories', function () {
    return view('home'); // Will implement later
})->name('categories');

Route::get('/collections', function () {
    return view('home'); // Will implement later
})->name('collections');

Route::get('/brands', function () {
    return view('home'); // Will implement later
})->name('brands');

Route::get('/about', function () {
    return view('home'); // Will implement later
})->name('about');

Route::get('/contact', function () {
    return view('home'); // Will implement later
})->name('contact');

Route::get('/wishlist', function () {
    return view('home'); // Will implement later
})->name('wishlist');

Route::get('/cart', function () {
    return view('home'); // Will implement later
})->name('cart');

Route::get('/checkout', function () {
    return view('home'); // Will implement later
})->name('checkout');

Route::get('/login', function () {
    return view('home'); // Will implement later
})->name('login');

Route::get('/account', function () {
    return view('home'); // Will implement later
})->name('account');

Route::post('/cart', function (Request $request) {
    $productId = (int) $request->input('product_id');
    $product = \App\Models\Product::find($productId);

    if (!$product) {
        return back()->withErrors(__('Product is unavailable.'));
    }

    $cart = $request->session()->get('cart', []);

    if (isset($cart[$productId])) {
        $cart[$productId]['quantity']++;
    } else {
        $cart[$productId] = [
            'product_id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'image' => asset($product->hero_image),
            'brand' => optional($product->brand)->name,
            'quantity' => 1,
        ];
    }

    $request->session()->put('cart', $cart);

    return back()->with('cart_added', $product->name.' added to cart.');
})->name('cart.add');

Route::delete('/cart/{id}', function ($id, Request $request) {
    $cart = $request->session()->get('cart', []);
    unset($cart[$id]);
    $request->session()->put('cart', $cart);

    return back();
})->name('cart.remove');

