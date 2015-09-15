<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::group(['prefix' => '/', 'namespace' => 'Home'], function() {
	// 处理微信的请求消息
	Route::any('wechat', 'WechatController@serve');
	// ------ 教师相关 -------
	Route::resource('teacher', 'TeacherController');
	// Route::get('teacher', 'TeacherController@index');
	// Route::get('teacher/show/{id}', 'TeacherController@show');
	// 老师注册
	// Route::get('teacher/add', 'TeacherController@create');
	// Route::post('teacher/reg', 'TeacherController@store');

});


Route::get('/', function () {
    return view('welcome');
});
