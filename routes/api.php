<?php

Route::group(['namespace' => 'Api'], function() {
    Route::resource('categories', 'CategoryController', ['except' => ['create', 'edit']]);
    Route::resource('genres', 'GenreController', ['except' => ['create', 'edit']]);
});

