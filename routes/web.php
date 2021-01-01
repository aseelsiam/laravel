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

Route::get('/', 'HomeController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/offers', 'OfferController@index');
Route::get('/dashboard', 'DashboardController@index');

Route::resource('posts', 'PostsController');

Route::get('/posts/find/title/{id}', 'FindController@title');
Route::get('/posts/find/created_at/{id}', 'FindController@created_at');
Route::get('/posts/find/user/{id}', 'FindController@user');
Route::get('/posts/find/body/{id}', 'FindController@body');

Route::get('storage/{filename}', function ($filename)
{
    $path = storage_path('app/public/cover_images' . $filename);

    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});

Route::middleware('auth')->delete('offer/{id}','OfferController@delete');