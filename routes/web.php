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

// Route::get('/welcome', function () {
//     return view('front.pages.trip_details');
// });
// Route::get('/', function () {
//     if(Auth::user()){
//         return view('front.pages.home');
//     }else{
//         return view('front.layouts.index');
//     }
//
// });
// Route::get('/blog-list', function () {
//     return view('front.pages.blog_list');
// });
// Route::get('/blog-single', function () {
//     return view('front.pages.single_blog');
// });

// Auth::routes();
 Auth::routes(['verify' => true]);

Route::get('/', 'WelcomeController@index')->name('welcome');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/users/logout', 'Auth\LoginController@Userlogout')->name('user.logout');

Route::prefix('admin')->group(function () {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin');
    Route::get('/register', 'Auth\AdminRegisterController@showRegistrationForm')->name('admin.register');
    Route::post('/register', 'Auth\AdminRegisterController@register')->name('admin.register.submit');
    Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
});



Route::prefix('admin/blog')->group(function () {
    Route::get('/show', 'AdminBlogController@blog_show')->name('admin.blog.show');
    Route::get('/details/{id}', 'AdminBlogController@details_blog')->name('admin.blog.show');
    Route::get('/create', 'AdminBlogController@blog_create')->name('admin.blog.create');
    Route::get('/edit/{id}', 'AdminBlogController@blog_edit')->name('admin.blog.create');
    Route::post('/store', 'AdminBlogController@blog_store')->name('admin.blog.store');
    Route::get('/delete/{id}', 'AdminBlogController@blog_delete')->name('admin.blog.delete');


    Route::prefix('/category')->group(function () {
      Route::get('/show', 'AdminBlogController@Show_tags')->name('admin.blog.category.show');
      Route::get('/create', 'AdminBlogController@create_tags')->name('admin.blog.category.new');
      Route::get('/edit/{id}', 'AdminBlogController@edit_tags')->name('admin.blog.category.new');
      Route::post('/store', 'AdminBlogController@store_tags')->name('admin.blog.category.store');
      Route::get('/delete/{id}', 'AdminBlogController@delete_tag')->name('admin.blog.category.delete');

    });

});

Route::prefix('admin/trips')->group(function () {
    Route::get('/show', 'AdminTripController@show_trips')->name('admin.trip.show');
    Route::get('/details/{id}', 'AdminTripController@details_trip')->name('admin.trip.details');
    Route::get('/create', 'AdminTripController@create')->name('admin.trip.create');
    Route::get('/store', 'AdminTripController@store')->name('admin.trip.store');
    Route::get('/delete/{id}', 'AdminTripController@delete_trip')->name('admin.trip.delete');

    Route::prefix('/destination')->group(function () {
        Route::get('/show', 'AdminTripController@destination_show')->name('admin.trip.destination.show');
        Route::get('/create', 'AdminTripController@destination_create')->name('admin.trip.destination.create');
        Route::get('/edit/{id}', 'AdminTripController@destination_edit')->name('admin.trip.destination.edit');
        Route::post('/store', 'AdminTripController@destination_store')->name('admin.trip.destination.store');
        Route::get('/delete/{id}', 'AdminTripController@destination_delete')->name('admin.trip.destination.delete');
    });
});

// Route::get('/page-register', function () {
//     return view('front.auth.register');
// });
//
// Route::get('/page-login', function () {
//     return view('front.auth.login');
// });
Route::prefix('trips')->group(function () {
      Route::get('/all', 'TripController@showtrips')->name('trips.show');
      Route::get('/create', 'TripController@createtrip')->name('trips.create');
      Route::get('/details/{id}', 'TripController@tripdetails')->name('trips.details');
      Route::get('/delete/{id}', 'TripController@destroy')->name('trips.delete');
      Route::post('/store-trips', 'TripController@store')->name('store-trips');
      Route::post('search-trips', 'TripController@search')->name('search-trips');

      Route::post('/store-comment', 'TripController@store_comment')->name('store.comment');
      Route::post('/store-reply', 'TripController@store_reply')->name('store.reply');


});
Route::prefix('users')->group(function () {
      Route::get('/community', 'Community@index');

});
Route::prefix('user')->group(function () {
      Route::get('/profile/{id}', 'Profile@profile')->name('user.profile');

});

Route::prefix('/posts/comment')->group(function () {
      Route::post('/store-post', 'CommunityController@store_post');

});
Route::prefix('/posts')->group(function () {
      Route::post('/store-posts', 'CommunityController@store');

});

Route::prefix('blogs')->group(function () {
      Route::get('/all', 'BlogController@showBlogs')->name('blogs.show');
      Route::get('/create', 'BlogController@createBlog')->name('blogs.create');
      Route::get('/details/{id}', 'BlogController@blogDetails')->name('blogs.details');
      Route::post('/store-blogs', 'BlogController@store')->name('store-blogs');

});
Route::post('autocomplete', 'TripController@autocomplete')->name('autocomplete');

Route::get('typeahead-response',array('as'=>'typeahead.response','uses'=>'TripController@autocomplete'));
