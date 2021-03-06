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


Route::get('/', function(){
    return view('welcome');
});

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
    //Route::resource('surveyunits', 'SurveyUnitsController');

    Route::group(['prefix' => 'surveys/{id}'], function () {
        //Route::get('surveyunits', 'SurveyUnitsController@index1')->name('surveyunits.index1');
        Route::resource('surveyunits', 'SurveyUnitsController');
        Route::resource('questions', 'QuestionsController');
        Route::resource('surveyprefectures', 'SurveyPrefecturesController');
        Route::resource('surveyusers', 'SurveyUsersController');
        });

    Route::group(['prefix' => 'surveys/{surveyid}'], function(){
        Route::group(['prefix' => 'surveyprefectures/{surveyprefectureid}'], function () {
            Route::resource('surveyareas', 'SurveyAreasController');
        });
    });
    
    Route::group(['prefix' => 'surveys/{surveyid}'], function(){
        Route::group(['prefix' => 'surveyprefectures/{surveyprefectureid}'], function () {
            Route::group(['prefix' => 'surveypreareas/{surveyareaid}'], function () {
                Route::resource('surveypoints', 'SurveyPointsController');
            });
        });
    });

    Route::resource('answers', 'AnswersController');
    Route::resource('teams', 'TeamsController');
    Route::resource('roles', 'RolesController');
    Route::resource('answers', 'AnswersController');
    Route::resource('answerquestions', 'AnswerQuestionsController');
    Route::resource('results', 'ResultsController');
    Route::resource('teams', 'TeamsController');
    Route::resource('maintenances', 'MaintenancesController');
    Route::post('surveys/delete','SurveysController@delete')->name('surveys.delete');
});