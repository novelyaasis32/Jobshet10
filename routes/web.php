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
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/manage', 'ArticleController@index')->name('manage');

Route::get('/user', 'ArticleeController@index')->name('user');
Route::get('/article/addUser','ArticleController@addUser');
Route::post('/article/createUser','ArticleController@createUser');

Route::get('/article/deleteUser','ArticleController@deleteUser');

Route::get('/article/editUser','ArticleController@editUser');
Route::post('/article/updateUser','ArticleController@updateUser');
Route::get('/article/cetak_pdf', 'ArticleController@cetak_pdf');


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