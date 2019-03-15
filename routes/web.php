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
    return view('pages.index');
});
Route::get('/pages.index', 'PagesController@index');
Route::get('/pages.about', 'PagesController@about');
Route::get('/pages.contact', 'PagesController@contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/userpages.chorelist', 'HomeController@chorelist')->name('userpages.chorelist');
Route::get('/userpages.shoppinglist', 'HomeController@shoppinglist')->name('userpages.shoppinglist');
Route::get('/userpages.shoppinglistgroceries', 'HomeController@shoppinglistgroceries')->name('userpages.shoppinglistgroceries');
Route::get('/userpages.shoppinglistclothes', 'HomeController@shoppinglistclothes')->name('userpages.shoppinglistclothes');
Route::get('/userpages.shoppinglisthouseholditems', 'HomeController@shoppinglisthouseholditems')->name('userpages.shoppinglisthouseholditems');
Route::get('/userpages.chorelisthome', 'HomeController@chorelisthome')->name('userpages.chorelisthome');
Route::get('/userpages.chorelistjob', 'HomeController@chorelistjob')->name('userpages.chorelistjob');
Route::get('/userpages.chorelistentertainment', 'HomeController@chorelistentertainment')->name('userpages.chorelistentertainment');
Route::POST('/userpages.shoppinglistgroceries', 'GroceryController@store')->name('userpages.shoppinglistgroceries');
Route::POST('/userpages.shoppinglisthouseholditems', 'HouseholditemController@store')->name('userpages.shoppinglisthouseholditems');
