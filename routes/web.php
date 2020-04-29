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


Route::get('/', 'SurveysController@index');

// ユーザ登録
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');


// ログイン認証
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

//ユーザ機能
Route::group(['middleware' => 'auth'], function () {
    Route::resource('users', 'UsersController', ['only' => ['index', 'show']]);
    Route::resource('surveys', 'SurveysController');
    Route::resource('questionsheets', 'QuestionsheetsController');
    Route::resource('answers', 'AnswersController');
    Route::resource('teams', 'TeamsController');
    Route::resource('maintenances', 'MaintenancesController');
    Route::resource('roles', 'RolesController');
    Route::resource('answers', 'AnswersController');
    Route::resource('enterquestions', 'EnterQuestionsController');
    Route::resource('surveyusers', 'SurveyUsersController');
    Route::resource('questions', 'QuestionsController');
    Route::resource('results', 'ResultsController');
    Route::resource('surveyareas', 'SurveyAreasController');
    Route::resource('surveypoints', 'SurveyPointsController');
    Route::resource('surveyprefectures', 'SurveyPrefecturesController');
    Route::resource('teams', 'TeamsController');
    Route::post('surveys/delete','SurveysController@delete')->name('surveys.delete');
});