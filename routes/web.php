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
    return view('welcome');
});


Route::post('profile/{profileId}/follow', 'ProfileController@followUser')->name('user.follow');
Route::post('/{profileId}/unfollow', 'ProfileController@unFollowUser')->name('user.unfollow');

Route::get('post/{id}',['as'=>'home.post','uses'=>'AdminPostsController@post']);



Route::post('favorite/{post}/add','FavoriteController@add')->name('post.favorite');

 

Route::group(['middleware'=>'checkRole:User'], function(){
    //user only
    // Route::get('/home','PostsController@index')->name('post.index'); 
    // route::get('/profile/{id}/{slug?}','HomeController@profile')->name('front.profile');
    // route::post('profile/{profileId}/follow', 'ProfileController@add')->name('user.follow');
});

Route::namespace('user')->prefix('user')->middleware('checkRole:User')->group(function () {
    Route::get('/home','FanController@index');
    Route::get('/categories', 'FanController@category');
    Route::get('/post/category/{name}', 'FanController@showAll')->name('fan.category.showAll');
    // Route::get('/post/{id}', 'PostsController@show')->name('post.show');
    Route::any('/search','FanController@meduimsearch');
    Route::post('/comment', 'commentsController@index');
    route::get('/profile/{id}/{slug?}','FanController@profile')->name('fan.front.profile');
    route::post('profile/{profileId}/follow', 'FanProfileController@add')->name('fan.user.follow');


});

Route::group(['middleware'=>'checkRole:Admin,Expert'], function(){
    Route::resource('/home','PostsController');
    
});

Route::group(['middleware'=>'checkRole:Admin,Talent,User'], function(){
//admin and talent
//Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/home','PostsController');
Route::get('/home','PostsController@index')->name('post.index');
Route::resource('/categories', 'CategoriesController');
Route::get('/post/category/{name}', 'CategoriesController@showAll')->name('category.showAll');
Route::get('/post/{id}', 'PostsController@show')->name('post.show');
Route::get('/post/{id}/edit', 'PostsController@edit')->name('post.edit');
Route::put('/post/{id}/edit', 'PostsController@update')->name('post.update');
Route::delete('/post/{id}/delete', 'PostsController@destroy')->name('post.delete');
Route::post('/like', 'LikesController@index');
Route::post('/comment', 'commentsController@index');
Route::get('/users', 'HomeController@listUser');
Route::get('/users/{id}', 'HomeController@showUser')->name('user.show');
Route::post('/friend', 'FriendController@index');
Route::get('/friend/{id}', 'FriendController@showFriends')->name('friend.show');
Route::post('/friend/remove', 'FriendController@remove');
Route::post('/request', 'FriendController@request');
route::get('/profile/{id}/{slug?}','HomeController@profile')->name('front.profile');

// route::post('profile/{profileId}/follow', 'ProfileController@followUser')->name('user.follow');
// route::post('/{profileId}/unfollow', 'ProfileController@unFollowUser')->name('user.unfollow');

route::post('profile/{profileId}/follow', 'ProfileController@add')->name('user.follow');

// Route::get('/test/getposts', 'ProfileController@latestPosts');

// suggest right aside
//Route::get('/users', 'HomeController@friendsuggest')->name('suggest.user');

// edit profile
Route::get('editprofile', 'UserController@profile');
//Route::post('profile', 'UserController@update_avatar');

Route::get('editprofile', 'ProfileController@index')->name('profile');
Route::post('editprofile', 'ProfileController@updateProfile')->name('profile.update');

Route::get('frontend/home','HomeController@frontendindex');

Route::any('/srch','SearchController@meduimsearch');

Route::get('topfive', 'postsController@rightAside');

Route::get('voted', 'LikesController@topPosts');


});



//admin routes
Route::namespace('admin')->group(function(){
    Route::group(['middleware'=>'checkRole:Admin'], function(){
        //admin only
        Route::prefix('admin')->group(function(){
            Route::get('/', function(){
                return view('admin.index');
            });
            
            Route::resource('/users','AdminUsersController');
            Route::resource('/posts','AdminPostsController');
            Route::resource('/categories', 'AdminCategoriesController');
            Route::resource('/comments', 'PostCommentsController');
            Route::resource('/comments/replies', 'CommentRepliesController');
        });
    });
});



Route::group(['middleware'=>'auth'], function(){
    Route::Post('comment/reply', 'CommentConrollerReply@createreply');
});

Auth::routes();





