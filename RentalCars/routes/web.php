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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('website.home');
})->name('home');

Route::get('/login','Frontend\LoginController@login');
Route::post('/login','Frontend\LoginController@postLogin')->name('login');

Route::get('/register','Frontend\RegistrationController@register');
Route::post('/register','Frontend\RegistrationController@postRegister')->name('register');

Route::get('/admin','Backend\LoginController@login');
Route::post('/admin','Backend\LoginController@postLogin')->name('admin.login');

Route::get('news','Frontend\NewsController@index')->name('news');

Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Backend','middleware'=>'admin'], function(){
    Route::get('/logout','LoginController@logout')->name('logout');
    Route::get('dashboard','DashboardController@index')->name('dashboard');
    Route::get('profile','ProfileController@index')->name('profile');
    Route::get('contact','ContactController@index')->name('contact');
    Route::put('profile-update','ProfileController@updateProfile')->name('profile.update');
    Route::put('password-update','ProfileController@updatePassword')->name('password.update');
    Route::resource('manufacter','ManufacterController');
    Route::resource('seat','SeatController');
    Route::resource('car','CarController');
    Route::resource('category','CategoryController');
    Route::resource('post','PostController');
    Route::get('logo-slide','BannerController@showLogoAndSlide')->name('banner');
    Route::post('logo','BannerController@updateLogo')->name('banner.updateLogo');
    Route::post('slide','BannerController@updateSlide')->name('banner.updateSlide');
    //     Route::get('/author/index','AuthorController@index')->name('author.index');
    //     Route::get('/pending/post','PostController@pending')->name('post.pending');
    //     Route::put('/post/approveAll','PostController@approvalAll')->name('post.approveAll');
    //     Route::put('/post/{id}/approve','PostController@approval')->name('post.approve');
});
