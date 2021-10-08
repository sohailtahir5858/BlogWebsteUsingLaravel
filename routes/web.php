<?php

use Illuminate\Database\Connection;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


Route::get('/', function () {
    return view('admin.login');
});

// for sake of testing we will directly call the pages, we will use controller later
Route::view('/admin/login', 'admin.login')->middleware(admin_islogin::class);
Route::post('/admin/login_submit', 'Admin_auth@login_submit');

Route::get('/admin/logout', function () {
    session()->forget('BLOG_USER_ID');
    session()->forget('BLOG_USER_EMAIL');
    return redirect('/admin/login');
    // to remove all by one command
    // session()->flush();

});

// Route::get('/', function () {

//     // Test database connection
//     try {
//         DB::connection()->getPdo();
//         echo "Connected successfully to: " . DB::connection()->getDatabaseName();
//     } catch (\Exception $e) {
//         die("Could not connect to the database. Please check your configuration. error:" . $e);
//     }

//     return view('welcome');
// });
Route::get('/view_session', function () {
    echo '<pre>';
    print_r(session()->all());
});

Route::group(['middleware' => ['Admin_login_auth']], function () {
    Route::get('/admin/post', 'admin\Post@listing');
    Route::get('/admin/post/edit/{id}', 'admin\Post@edit');
    Route::get('/admin/post/add', 'admin\Post@add');
    Route::post('/admin/post/submit', 'admin\Post@submit');
    Route::post('/admin/post/update/{id}', 'admin\Post@update');
    Route::get('/admin/post/delete/{id}', 'admin\Post@delete');

    Route::get('/admin/page', 'admin\Pages@listing');
    Route::get('/admin/page/edit/{id}', 'admin\Pages@edit');
    Route::get('/admin/page/add', 'admin\Pages@add');
    Route::post('/admin/page/submit', 'admin\Pages@submit');
    Route::post('/admin/page/update/{id}', 'admin\Pages@update');
    Route::get('/admin/page/delete/{id}', 'admin\Pages@delete');

    Route::get('/admin/contact', 'admin\Contact@listing');
});



Route::get('front/index', 'User@index');


Route::get('front/about', 'User@about');

Route::get('front/contact', 'User@contact');


Route::get('front/post/{id}', 'User@post');

ROute::post('front/contact_submit', 'User@contactSubmit');
Route::get('front/page/{id}', 'User@page');
