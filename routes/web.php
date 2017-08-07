<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/','DefaultController@index');
Route::get('/test/{id}','ArticlesController@rating');


Route::prefix('article')->group(function () {
    Route::get('create',            ['as' => 'createArticle', 'uses' => 'ArticlesController@create']);
    Route::post('store',            ['as' => 'storeArticle', 'uses' => 'ArticlesController@store']);
    Route::post('update/{id}',      ['as' => 'updateArticle', 'uses' => 'ArticlesController@update']);
    Route::get('delete/{id}',       ['as' => 'deleteArticle', 'uses' => 'ArticlesController@destroy']);
    Route::get('edit/{id}',         ['as' => 'editArticle', 'uses' => 'ArticlesController@edit']);
    Route::get('show/{id}',         ['as' => 'showArticle', 'uses' => 'ArticlesController@show']);
    Route::get('/',                 ['as' => 'allArticles', 'uses' => 'ArticlesController@index']);
});


Route::prefix('picture')->group(function () {
    Route::get('create',            ['as' => 'createPicture', 'uses' => 'PicturesController@create']);
    Route::post('store',            ['as' => 'storePicture', 'uses' => 'PicturesController@store']);
    Route::post('update/{id}',       ['as' => 'updatePicture', 'uses' => 'PicturesController@update']);
    Route::get('delete/{id}',    ['as' => 'deletePicture', 'uses' => 'PicturesController@delete']);
    Route::get('edit',              ['as' => 'editPicture', 'uses' => 'PicturesController@edit']);
    Route::get('show/{id}',         ['as' => 'showPicture', 'uses' => 'PicturesController@showSingle']);
    Route::get('/',                 ['as' => 'allPictures', 'uses' => 'PicturesController@index']);
});

Route::prefix('comment')->group(function () {
    Route::get('create',            ['as' => 'createComment', 'uses' => 'CommentsController@create']);
    Route::post('store',            ['as' => 'storeComment', 'uses' => 'CommentsController@store']);
    Route::post('update/{id}',      ['as' => 'updateComment', 'uses' => 'CommentsController@update']);
    Route::get('delete/{id}',       ['as' => 'deleteComment', 'uses' => 'CommentsController@delete']);
    Route::get('edit/{id}',             ['as' => 'editComment', 'uses' => 'CommentsController@edit']);
   // Route::get('show/{id}',         ['as' => 'showPicture', 'uses' => 'PicturesController@show']);
    Route::get('/',                 ['as' => 'allComments', 'uses' => 'CommentsController@index']);
});


Route::prefix('category')->group(function () {
    Route::get('create',            ['as' => 'createCategory', 'uses' => 'CategoriesController@create']);
    Route::post('store',            ['as' => 'storeCategory', 'uses' => 'CategoriesController@store']);
    Route::post('update/{id}',      ['as' => 'updateCategory', 'uses' => 'CategoriesController@update']);
    Route::get('delete/{id}',       ['as' => 'deleteCategory', 'uses' => 'CategoriesController@delete']);
    Route::get('edit/{id}',         ['as' => 'editCategory', 'uses' => 'CategoriesController@edit']);
   // Route::get('show/{id}',       ['as' => 'showCategory', 'uses' => 'CategoriesController@show']);
    Route::get('/',                 ['as' => 'allCategories', 'uses' => 'CategoriesController@index']);
});
