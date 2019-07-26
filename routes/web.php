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
//shopinglist
//store
Route::POST('/userpages.shoppinglistgroceries', 'GroceryController@store')->name('userpages.shoppinglistgroceries');
Route::POST('/userpages.shoppinglisthouseholditems', 'HouseholditemController@store')->name('userpages.shoppinglisthouseholditems');
Route::POST('/userpages.shoppinglistclothes', 'ClothingController@store');
//chore list
//Store
Route::POST('userpages.chorelisthome', 'HouseholdChoreController@store');
Route::POST('userpages.chorelistentertainment', 'MytodoController@store');
//chorelist update
Route::get('/userpages/{householdchore}/updatehouseholdchore', 'HouseholdChoreController@show');
Route::PATCH('/userpages/{householdchore}/updatehouseholdchore', 'HouseholdChoreController@update');
Route::get('/userpages/{mytodo}/updatemytodo', 'MytodoController@show');
Route::PATCH('/userpages/{mytodo}/updatemytodo', 'MytodoController@update');
//chorelist delete
Route::get('/userpages/{householdchore}/deletehouseholdchore', 'HouseholdChoreController@showDelete');
Route::DELETE('/userpages/{householdchore}/deletehouseholdchore', 'HouseholdChoreController@destroy');
Route::DELETE('/userpages/chorelisthome', 'HouseholdChoreController@destroyAll');

Route::get('/userpages/{mytodo}/deletemytodo', 'MytodoController@showDelete');
Route::DELETE('/userpages/{mytodo}/deletemytodo', 'MytodoController@destroy');
Route::DELETE('/userpages/chorelistentertainment', 'MytodoController@destroyAll');



Route::get('/userpages/{grocery}/updategrocery', 'GroceryController@show')->name('userpages/{grocery}/updategrocery');
Route::PATCH('/userpages/{grocery}/updategrocery', 'GroceryController@update')->name('userpages/{grocery}/updategrocery');
Route::get('/userpages/{householditem}/updatehouseholditem', 'HouseholditemController@show')->name('userpages/{householditem}/updatehouseholditem');
Route::PATCH('/userpages/{householditem}/updatehouseholditem', 'HouseholditemController@update');
Route::get('/userpages/{clothing}/updateclothes', 'ClothingController@show');
Route::PATCH('/userpages/{clothing}/updateclothes', 'ClothingController@update');
//delete
Route::get('/userpages/{grocery}/deletegrocery', 'GroceryController@showDelete');
Route::DELETE('/userpages/{grocery}/deletegrocery', 'GroceryController@destroy');
Route::DELETE('/userpages/shoppinglistgroceries', 'GroceryController@destroyAll');

Route::get('/userpages/{householditem}/deletehouseholditem', 'HouseholditemController@showDelete');
Route::DELETE('/userpages/{householditem}/deletehouseholditem', 'HouseholditemController@destroy');
Route::DELETE('/userpages/shoppinglisthouseholditems', 'HouseholditemController@destroyAll');

Route::get('/userpages/{clothing}/deleteclothes', 'ClothingController@showDelete');
Route::DELETE('/userpages/{clothing}/deleteclothes', 'ClothingController@destroy');
Route::DELETE('/userpages/shoppinglistclothes', 'ClothingController@destroyAll');
