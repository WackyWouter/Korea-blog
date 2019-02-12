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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/post/{slug}', 'ShowPostsController@index');
Route::post('/saveComment/{post_id}', 'StoreController@storeComment');
Route::get('/account', 'AccountController@index');
Route::post('/saveAccount', 'AccountController@update');


// admin routes

Route::get('/addAnnouncement', 'AddAnnouncementController@index')->middleware("checkAdmin");
Route::get('/manage/posts', 'ManagePostsController@index')->middleware("checkAdmin");
Route::get('/manage/photos', 'ManagePhotosController@index')->middleware("checkAdmin");
Route::get('/permissions', 'PermissionsController@index')->middleware("checkAdmin");
Route::post('/savePermission', 'PermissionsController@save')->middleware('checkAdmin');


Route::get('/dashboard', 'DashboardController@index')->middleware('checkAdmin');
Route::get('/gallery', 'GalleryController@index');


Route::get('/delete/comment/{post_id}/{comment_id}', 'DeleteController@index')->middleware('checkAdmin');
Route::get('/delete/post/{post_id}', 'DeleteController@post')->middleware('checkAdmin');
Route::get('/delete/photo/{photo_id}', 'DeleteController@photo')->middleware('checkAdmin');
Route::get('/delete/user/{user_id}', 'DeleteController@user')->middleware('checkAdmin');
Route::post('/saveAnnouncement', 'StoreController@storeAnnouncement')->middleware('checkAdmin');
Route::post('/updatePosts', 'ManagePostsController@update')->middleware('checkAdmin');
Route::post('/updatePhotos', 'ManagePhotosController@update')->middleware('checkAdmin');
// changed get to post aby addAnnouncement and permissions addphoto addpost save photo

Route::get('/addPhoto', 'ShowPhotoFormController@index')->middleware("checkAdmin")->name('upload.file');
Route::post('/addPhoto', 'StoreController@index')->middleware('checkAdmin');

Route::get('/addPost', "ShowPostFormController@index")->middleware('checkAdmin')->name('upload.post');
Route::post('/addPost', 'StoreController@storePost')->middleware('checkAdmin');
