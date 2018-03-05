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

use App\Books;

Route::get('/', function () {
    return view('welcome');
});

Route::get('books/{id}/borrowed', 'BookController@borrowed');

Route::put('books/borrow/{id}', 'BookController@borrowed_update');
Route::get('books/borrow/{id}', 'BookController@booksinvalget');

Route::put('books/breturn/{id}', 'BookController@borrowed_return');
Route::get('books/breturn/{id}', 'BookController@booksinvalget');

Route::resource('books', 'BookController');






//Route::get('/', 'ListController@show');
Auth::routes();



Route::get('/home', 'BookController@index')->name('home');



Route::get('/got', [
    'middleware' => ['auth'],
    'uses' => function () {
     echo "You are allowed to view this page!";
  }]);


