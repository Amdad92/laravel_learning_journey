<?php

use Illuminate\Support\Facades\Route;

//Basic route

// Responds to GET /greeting

Route::get('/greeting', function () {
    return 'Hello World from Web Routes';
});


// Route parameter

//Basic parameter:

Route::get('/user/{id}', function ($id) {
    return "User ID: $id";
});

//Multiple Parameters:

Route::get('/post/{postId}/comment/{commentId}', function ($postId, $commentId) {
    return "Post: $postId, Comment: $commentId";
});