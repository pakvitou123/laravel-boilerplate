<?php

/**
 * Global Routes
 * Routes that are used between both frontend and backend.
 */

// Switch between the included languages
Route::get('lang/{lang}', 'LanguageController@swap');

/* ----------------------------------------------------------------------- */

/*
 * Frontend Routes
 * Namespaces indicate folder structure
 */
Route::group(['namespace' => 'Frontend', 'as' => 'frontend.'], function () {
    includeRouteFiles(__DIR__.'/Frontend/');
});

/* ----------------------------------------------------------------------- */

/*
 * Backend Routes
 * Namespaces indicate folder structure
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    /*
     * These routes need view-backend permission
     * (good if you want to allow more than one group in the backend,
     * then limit the backend features by different roles or permissions)
     *
     * Note: Administrator has all permissions so you do not have to specify the administrator role everywhere.
     */
    includeRouteFiles(__DIR__.'/Backend/');
});

Route::get('profile', 'GroupController@showedit')->name('profile');
Route::post('profileupdate', 'GroupController@editprofile')->name('profileupdate');

Route::get('group', 'GroupController@create')->name('group');
Route::post('GroupCreate', 'GroupController@store')->name('GroupCreate');
Route::get('mygroup', 'GroupController@show')->name('mygroup');
Route::get('indexgroup/{id}', 'GroupController@index')->name('index');
Route::get('showquestion/{id_group}', 'GroupController@showquestion')->name('showquestion');
Route::post('questioncreate/{id_group}','GroupController@createquestion')->name('createquestion');
//Route::post('GroupQuestion/{')

// route question
Route::get('question', 'QuestionController@create')->name('question');
Route::post('QuestionCreate', 'QuestionController@store')->name('QuestionCreate');
Route::get('myquestion', 'QuestionController@myquestion')->name('myquestion');
Route::get('indexquestion/{id}','QuestionController@index')->name('indexquestion');
Route::get('editquestion/{id}', 'QuestionController@edit')->name('editquestion');
Route::post('updatequestion/{id}', 'QuestionController@update')->name('updatequestion');
Route::get('deletequestion/{id}', 'QuestionController@destroy')->name('deletequestion');
Route::get('like/{id}', 'QuestionController@like')->name('likequestion');
Route::get('dislike/{id}', 'QuestionController@dislike')->name('dislikequestion');

Route::any('search','searchController@search')->name('search');
Route::any('answer/{id}','AnswerController@store')->name('answer');