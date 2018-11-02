<?php


use App\Country;
use App\Post;
use App\User;
use App\Photos;
use App\Tag;
use App\Address;

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
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| ELOQUENT TUTORIALS
|--------------------------------------------------------------------------
*/

// Route::get('/findwhere', function(){

// 	$posts = Post::where('id', 4)->orderBy('id', 'asc')->take(1)->get();

// 	return $posts;
// });

// Route::get('/findmore', function(){

// 	// $posts = Post::findOrfail(1);

// 	// return $posts;


// 	$posts = Post::where('users_count', '<', 50)->firstOrfail();

// });


/*
|--------------------------------------------------------------------------
| ELOQUENT TUTORIALS - Insert Data
|--------------------------------------------------------------------------
*/

// Route::get('/basicinsert', function(){

// 	$post = new Post;

// 	$post ->title = "New Eloquent title Insert again";
// 	$post->content = "Eloquent functions are really good to use...I am loving it.";
// 	$post->save();

// });

/*
|--------------------------------------------------------------------------
| ELOQUENT TUTORIALS - Creating Data
|--------------------------------------------------------------------------
*/

 // Route::get('/create', function(){

 // 	Post::create(['title' => 'Making mass assignments just once more', 'content' => 'This is only possible if the fillables array has been filled with the column names and indexes....I understand...hope you do']);
 // });

/*
|--------------------------------------------------------------------------
| ELOQUENT TUTORIALS - Updating Data
|--------------------------------------------------------------------------
*/
// Route::get('/update', function(){

// 	Post::where('id', 2)->update(['title'=>'New Title for this content', 'content' =>'This is a better way to update CMS in Laravel']);
// });

/*
|--------------------------------------------------------------------------
| ELOQUENT TUTORIALS - Deleting Data
|--------------------------------------------------------------------------
*/

// Route::get('/delete', function(){

// 	$post = Post::find(1);

// 	$post->delete();

// });

/*
|--------------------------------------------------------------------------
| ELOQUENT TUTORIALS - Soft Deleting Data
|--------------------------------------------------------------------------
*/

// Route::get('/softDelete', function(){

// 	Post::find(8)->delete();

// });

/*
|--------------------------------------------------------------------------
| ELOQUENT TUTORIALS - Retrieving Soft Deleted Data
|--------------------------------------------------------------------------
*/

// Route::get('/readsoftdelete', function(){

// 	// $post = Post::onlyTrashed()->get();

// 	$post = Post::withTrashed()->get();

// 	return $post;
// });

/*
|--------------------------------------------------------------------------
| ELOQUENT TUTORIALS - Inserting data by using a needle
|--------------------------------------------------------------------------
*/
// Route::get('/basicinsert2', function(){

// 	$post = Post::find(2);

// 	$post->title = 'New Eloquent title insert 2';
// 	$post->content = 'Inserting data this way requires that an Id be found first, before the insert is done';

// 	$post->save();

// });

/*
|--------------------------------------------------------------------------
| ELOQUENT TUTORIALS - Restoring a soft deleted item
|--------------------------------------------------------------------------
*/
// Route::get('restoresoftdelete', function(){

// 	Post::onlyTrashed()->restore();
// });


/*
|--------------------------------------------------------------------------
| ELOQUENT TUTORIALS - Deleting an item permanently
|--------------------------------------------------------------------------
*/

// Route::get('/forcedDelete', function(){

// 	Post::onlyTrashed()->forceDelete();

// });

/*
|--------------------------------------------------------------------------
| ELOQUENT Relationships
|--------------------------------------------------------------------------
*/

// One to one relationship

// Route::get('/user/{id}/post', function($id){

// 	$user = User::find($id)->post;

// 	return $user->title;

// });

// Inverse of one to one relationship

// Route::get('/post/{id}/user', function($id){

// 	$post = Post::find($id)->user->name;

// 	return $post;
// });

// One to Many relationship

// Route::get('/posts', function(){

// 	$user = User::find(1);

// 	foreach($user->posts as $post){

// 		echo $post->content . "<br>";
// 	}

// });

// Many to Many relationship

// Route::get('/user/{id}/roles', function($id){

// 	$user = User::find($id)->roles()->orderBy('id', 'desc')->get();

// 	return $user; 
	// foreach ($user->roles as $role) {
	// 	echo $role->name;
	// }

// });

// Has Many Through relationship

// Route::get('/user/{id}/country', function($id){

// 	$country = Country::find($id);

// 	foreach ($country->posts as $post) {
		
// 		return $post->title;
// 	}
// });

// Polymorphic relationship

// Route::get('/user/photos', function(){

// 	$user = User::find(1);

// 	foreach ($user->photos as $photo) {
		
// 		return $photo;
// 	}
// });

// Polymorphic Many to Many relationship

// Route::get('/tag/photos', function ()
// {
// 	$tag = Tag::find(1);

// 	foreach ($tag->photos as $photo) {

// 		return $photo;
// 	}
// });

// Route::get('/tag/post', function(){

// 	$tag = Tag::find(2);

// 	foreach ($tag->posts as $post) {
		
// 		return $post->name;
// 	}
// });

// Route::get('/insert', function()
// {
// 	$user= User::findOrFail(1);

// 	$address = new Address(['name' => '3, Adeleye Street, Iju Ishaga']);

// 	$user->address()->save($address);
// });

// Route::get('/update', function(){

// 	$address = Address::whereUserId(1)->first();

// 	$address->name = "10, Ogunji Streeet, Industrial Estate Otta";

// 	$address->save();
// });

// Route::get('read/{name}', function($name){

// 	$user = User::find(1);

// 	return $user->address->name;

// });


/*
|--------------------------------------------------------------------------
| CRUD Application
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::group(['middleware' => 'web'], function(){

	Route::resource('/posts', 'PostController');

});