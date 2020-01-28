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
/*
Route::get('/', function () {
    return view('module',
    	[
    		'data' => 'test'
    	]
);
});
*/

Route::get('/', 'Controller@module');

Route::get('ajaxModule', 'Controller@ajaxRequestPost');

Route::post('ajaxModule', 'Controller@ajaxRequestPost');

Route::get('module', 'Controller@module');