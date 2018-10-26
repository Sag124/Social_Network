<?php

Route::get('/', 'PagesController@getIndex')->name('index.welcome');
Route::get('/about', 'PagesController@getAbout')->name('index.about');
Route::get('/contact', 'PagesController@getContact')->name('index.contact');


Route::get('/user', 'UserController@getIndex')->name('index');
Route::get('profile/{slug}', 'UserController@getProfile')->name('profile');
Route::get('profile/{slug}/posts', 'UserController@getMyposts')->name('myposts');
Route::get('/editProfile', 'UserController@editProfile')->name('editProfile');
Route::post('/updateProfile', 'UserController@updateProfile')->name('updateProfile');
Route::post('/uploadPhoto', 'UserController@uploadPhoto')->name('updatePhoto');

// Notifications Page
Route::get('/notifications', 'UserController@getNotifications')->name('notifications');


Route::get('findFriends', 'UserController@getAll')->name('findFriends');

Route::get('addFriend/{id}', 'UserController@sendRequest');


Route::get('requests', 'UserController@getRequests')->name('requests');

Route::get('accept/{name}/{id}', 'UserController@getAccept')->name('accept');

Route::get('friends', 'UserController@getFriends')->name('friends');


Route::resource('posts', 'PostController', ['except' => [
	 'create', 'update' , 'destroy' , 'edit'
	]]);
Route::resource('comments', 'CommentController', ['except' => [
	'create'
	]]);



// For messages

Route::get('messages', function(){
	return view('messages');
})->name('messages');

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');

// Route::get('/index', 'PagesController@index')->name('home');


// For Skills
Route::resource('skills', 'SkillController', ['except' => [
	'create'
	]]);

// For comments
Route::post('comments/{post_id}', ['uses' => 'CommentController@store', 'as' => 'comments.store']);
	Route::get('comments/{id}/edit', ['uses' => 'CommentController@edit', 'as' => 'comments.edit']);
	Route::put('comments/{id}', ['uses' => 'CommentController@update', 'as' => 'comments.update']);
	Route::delete('comments/{id}', ['uses' => 'CommentController@destroy', 'as' => 'comments.destroy']);
	Route::get('comments/{id}/delete', ['uses' => 'CommentController@delete', 'as' => 'comments.delete']);

// For likes
	// Route::get('product/like/{id}', ['as' => 'product.like', 'uses' => 'LikeController@likeProduct']);
Route::get('post/like/{id}', ['as' => 'post.like', 'uses' => 'LikeController@likePost']);


Route::resource('upload-files','FileController');
