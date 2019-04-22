<?php

Route::prefix('api/v1')->group(function(){
    Route::get('check', function(){
        echo "Ok!";
    });
    Route::get('articles', 'Sonphfs\Ezapi\ArticleController@index');
    Route::get('articles/{id}', 'Sonphfs\Ezapi\ArticleController@show');
    Route::post('articles', 'Sonphfs\Ezapi\ArticleController@store');
    Route::post('articles/{id}', 'Sonphfs\Ezapi\ArticleController@update');
    Route::delete('articles/{id}', 'Sonphfs\Ezapi\ArticleController@delete');
});
