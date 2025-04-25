<?php

use Illuminate\Support\Facades\Route;

// Basic route
Route::get('/greeting', function () {
    return 'Hello World from Web Routes';
});

// Route parameters
Route::get('/user/{id}', function ($id) {
    return "User ID: $id";
});

Route::get('/post/{postId}/comment/{commentId}', function ($postId, $commentId) {
    return "Post: $postId, Comment: $commentId";
});

// Number validation
Route::get('product/{id}', function (string $id) {
    return "Works!! $id";
})->whereNumber('id');

// Alpha validation
Route::get('user/{username}', function (string $username) {
    return "Works!! $username";
})->whereAlpha('username');

// Language selection validation
Route::get('{lang}/product', function (string $lang) {
    return "Your selected language is $lang";
})->whereIn('lang', ['English', 'Bengali']);

// Regex validation
Route::get('users/{name}', function (string $name) {
    return "Name accepted $name";
})->where('name', '[a-z]+');

// Combined validation
Route::get('{lang}/product/{id}', function (string $lang, string $id) {
    return "Your selected language is $lang and id is $id";
})->where([
    'lang' => '[a-z]{2}',
    'id' => '\d{4,}'
]);

//Named route with parameters

Route::get('p/{lang}/product/{id}', function(string $lang, string $id) {
    return "Your selected language is $lang and product id is $id";
})->name("product.view");

route::get('/',function(){
    $productUrl=route('product.view',['lang'=>'en','id'=>1]);
    dd($productUrl);
});