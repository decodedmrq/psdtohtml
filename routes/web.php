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

Route::get('/register_trial', 'GuestController@register_trial')->name('register_trial');
Route::post('captcha', 'GuestController@captcha');

Route::get('/', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about_us');
Route::get('/thanks_for_registered', function () {
    return view('single.thanks_for_registered');
})->name('thanks_for_registered');

Route::get('contact', 'ContactController@index')->name('contact');
Route::resource('feedback', 'FeedbackController');
Route::get('news/load', 'NewsController@load')->name('news.load');
Route::get('news/related', 'NewsController@related')->name('news.related');
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
Route::get('/register_trial', 'GuestController@register_trial')->name('register_trial');
Route::get('/test_mail', function() {
    return view('emails.thanks_for_registered');
});