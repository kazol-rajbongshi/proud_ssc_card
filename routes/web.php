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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('home_page.home_page');
});
Route::get('/card-request-form','HomePageController@cardRequestForm');
Route::post('/save-card-request-information','HomePageController@saveCardRequestInformation');

/*Admin Route start*/

Route::get('/admin','AdminController@adminLogin');
Route::post('/admin-login-check','AdminController@adminLoginCheck');
Route::post('/admin-logout','AdminController@adminLogout');
Route::get('/pending-users','AdminController@pendingUsers');
Route::get('/user-details/{id}','AdminController@userDetails');
Route::get('/active-users','AdminController@activeUsers');
Route::get('/request-form','AdminController@RequestForm');
Route::post('/save-request-form','AdminController@saveRequestInformation');






/*Admin Route start*/
