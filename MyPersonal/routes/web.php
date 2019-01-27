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


Route::get('/','UserController@index')->name('user.index');
Route::get('/portfolio','UserController@portFolio')->name('user.portFolio');
Route::get('/about','UserController@about')->name('user.about');
Route::get('/contact','UserController@contact')->name('user.contact');
Route::post('/sendmail','UserController@sendEmail')->name('user.sendEmail');


//Admin//

Route::get('/admin/index','AdminController@index')->name('admin.login');
Route::post('/admin/index','AdminController@adminLogin')->name('admin.adminLogin');

Route::group(['middleware'=> ['adminsess']], function()
{

Route::get('/admin/logout','AdminController@adminlogout')->name('admin.adminlogout');

Route::get('/admin/home','AdminController@home')->name('admin.index'); 
Route::post('/admin/home','AdminController@homeStore')->name('admin.indexStore');

Route::get('/admin/home/edit/{id}','AdminController@homeedit')->name('admin.homeedit'); 
Route::post('/admin/home/edit/{id}','AdminController@homeupdate')->name('admin.homeupdate'); 

Route::get('/admin/portfolio','AdminController@adminPortfolio')->name('admin.adminPortfolio'); 
Route::post('/admin/portfolio','AdminController@adminPortfoliostore')->name('admin.adminPortfoliostore'); 

Route::get('/admin/portfolio/edit/{id}','AdminController@adminPortfolioedit')->name('admin.adminPortfolioedit');
Route::post('/admin/portfolio/edit/{id}','AdminController@adminPortfolioupdate')->name('admin.adminPortfolioupdate');

Route::get('/admin/about','AdminController@adminAbout')->name('admin.adminAbout'); 
Route::post('/admin/about','AdminController@aboutStore')->name('admin.aboutStore'); 

Route::get('/admin/about/edit/{id}','AdminController@aboutedit')->name('admin.aboutedit');
Route::post('/admin/about/edit/{id}','AdminController@aboutupdate')->name('admin.aboutupdate');

Route::get('/admin/footer','AdminController@adminFooter')->name('admin.adminFooter'); 
Route::post('/admin/footer','AdminController@footerStore')->name('admin.footerstore'); 

Route::get('/admin/footer/edit/{id}','AdminController@footeredit')->name('admin.footeredit');
Route::post('/admin/footer/edit/{id}','AdminController@footerupdate')->name('admin.footerupdate');

});


