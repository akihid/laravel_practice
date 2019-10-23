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

Route::get('/', function () {
	return view('welcome');
});

Route::get('hello','HelloController@index');

// Route::get('hello','HelloController');

// Route::get('hello','HelloController@index');
// Route::get('hello/other','HelloController@other');


// Route::get('hello/{id?}/{pass?}','HelloController@index');

// Route::get('hello/{msg?}', function($msg='no message') {
// $html = <<<EOF
// <html lang="ja">
// <head>
// <title>index</title>
// <style>
// 	body{ font-size:16px; color:#999; }
//   h1 { font-size:100pt; text-align:right; color:#eee; margin:-40px 0px -50px 0px;}
// </style>
// 	<h1>hello</h1>
// 	<p> {$msg} </p>
// 	<p> サンプルです </p>
// </body>
// </html>
// EOF;
//     return $html;
// });

// $html = <<<EOF
// <html lang="ja">
// <head>
// <title>index</title>
// <style>
// 	body{ font-size:16px; color:#999; }
// 	h1 { font-size:100pt; text-align:right; color:#eee; margin:-40px 0px -50px 0px;}
// </style>
// 	<h1>hello</h1>
// 	<p> sample page </p>
// 	<p> サンプルです </p>
// </body>
// </html>
// EOF;

// Route::get('hello',function() use ($html) {
// 	return $html;
// });

// Route::get('hello',function() use ($html) {
//     return $html;
// });
// Route::get('hello',function(){
//     return '<html><body><h1>hello</h1><p> sample page </p></body></html>';
// });