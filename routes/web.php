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
    return view('home');
})->name('home');
Route::get('/assurance', function () {
    return view('assurance');
})->name('assurance');
Route::get('/weil', function () {
    return view('weil');
})->name('weil');



Route::get('/articles', 'ArticleController@index')->name('articles');
Route::get('/articles/search', 'ArticleController@search')->name('article.search');
Route::get('/article/{id}', 'ArticleController@show')->name('article.show');



Route::get('/jobs', 'JobsController@index')->name('jobs');
Route::get('/jobs/create', 'JobsController@create')->name('jobs.create');
Route::get('jobs/search', 'JobsController@search')->name('jobs.search');
Route::post('/jobs/create', 'JobsController@store')->name('jobs.store');
Route::get('/jobs/{id}', 'JobsController@show')->name('jobs.show');
Route::get('/jobs/{id}/postule', 'JobsController@postule')->name('jobs.postule');
Route::get('/jobs/{id}/like', 'JobsController@addLike')->name('jobs.like');
Route::post('/submit/{job}', 'CandidatureController@store')->name('candidature.store');

Route::group(['namespace' => 'Auth'], function () {
    Route::get('register', 'RegistersController@create')->name('registers');
    Route::post('register', 'RegistersController@store');
    Route::get('logout', 'LoginsController@logout')->name('logout');
    Route::post('login', 'LoginsController@store')->name('login');
    Route::get('login', 'LoginsController@create')->name('login');
    Route::get('auth/{provider}', 'LoginsController@redirectToProvider');
    Route::get('auth/{provider}/callback', 'LoginsController@handleProviderCallBack');
    Route::get('/compte/{user}', 'CompteController@show')->name('compte.show');
    Route::get('/compte/{user}/edit', 'CompteController@edit')->name('compte.edit');
    Route::patch('/compte/{user}', 'CompteController@update')->name('compte.update');
    Route::get('/profil/{user}/edit', 'CompteController@profiledite')->name('profil.edit');
    Route::patch('/profil/{user}', 'CompteController@profilupdate')->name('profil.update');
    Route::post('{article}/commentaires', 'CommentaireController@store')->name('commentaire.store');
    Route::delete('{article}/{commentaire}', 'CommentaireController@destroy')->name('commentaire.destroy');
});

Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/categorie/create', 'CategorieController@create')->name('categorie.create');
    Route::post('/categorie/create', 'CategorieController@store')->name('categorie.store');

    Route::get('/article/create', 'ArticleController@create')->name('article.create');
    Route::post('/article/create', 'ArticleController@store')->name('article.store');
});
