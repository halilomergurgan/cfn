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
    return view('frontend.content');
});
Route::get('/contact', function () {
    return view('frontend.contact');
});
Route::get('/about', function () {
    return view('frontend.about');
});
Route::get('/news', function () {
    return view('frontend.news');
});


Route::group(array('prefix' => 'admin'), function()
{

    Route::get('dashboard', 'AdminController@index');
    /*News için resource kullanıldı.*/
    Route::resource('news','NewsController');
    /*Announcement*/
    Route::get('announcement','AnnouncementController@index')->name('announcement.index');
    Route::get('announcement/create','AnnouncementController@create');
    Route::post('announcement/store','AnnouncementController@store')->name('announcement.store');
    Route::get('announcement/edit/{id}', 'AnnouncementController@edit')->name('announcement.edit');
    Route::post('announcement/update{id}', 'AnnouncementController@update')->name('announcement.update');
    Route::get('announcement/index', 'AnnouncementController@index')->name('announcement.index');
    Route::delete('announcement/destroy/{id}', 'AnnouncementController@destroy')->name('announcement.destroy');
    /*About*/
    Route::resource('about','AboutController');
    /*Menu*/
    Route::resource('menu','MenuController');
    /*Solitions*/
    Route::resource('solitions','SolitionsController');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
