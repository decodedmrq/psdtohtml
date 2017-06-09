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
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about_us');

Route::get('contact', 'ContactController@index')->name('contact');
Route::resource('feedback', 'FeedbackController');
Route::get('news/load', 'NewsController@load')->name('article.load');
Route::resource('blog', 'NewsController');
Route::resource('knowledge', 'KnowledgeController');
Route::get('category/{slug}', 'NewsController@category')->name('news.category');
Route::get('category/{slug}/load_news', 'NewsController@loadNewsCategory')->name('news.load_news_category');

Route::group(['prefix' => 'admin-nhantuong', 'namespace' => 'Admin', 'as' => 'admin.', 'middleware' => ['auth']], function () {
    Route::get('/', 'DashboardController@index')->name('dashboard');
    Route::get('feedback', 'FeedbackController@index')->name('feedback');
    Route::get('feedback/{id}', 'FeedbackController@show')->name('feedback.show');
});

Route::resource('guest', 'GuestController');
Route::resource('newsletter', 'NewsLetterController');
