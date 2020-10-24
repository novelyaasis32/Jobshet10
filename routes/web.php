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
//Route
// Route::get('/', function () {
//     return "SELAMAT DATANG";
// });
// Route::get('/about', function () {
//     return "Nama : Novelya Asis S <br> 
//     NIM : 1931710053";
// });
// Route::get('articles/{id}', function ($id) {
//     return "Halaman Artikel ini dengan id".$id;
// });
// Route::get('/', 'WelcomeController@hello');
// Route::get('/about', 'AboutController@about');
// Route::get('/article($page)', 'ArticleController@article($page)');
Route::get('/mahasiswa1', 'Mahasiswa1Controller@index');
Route::get('/', function(){
    return view ('Home');
});
Route::get('/about', function(){
    return view ('About');
});
Route::get('article($page)', function(){
    return view ('article($page)');
});
Route::get('/index', function(){
    return view ('index');
});
Route::get('/coba', function(){
    return view ('coba');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
