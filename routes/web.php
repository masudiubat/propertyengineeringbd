<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', 'Frontend\WelcomeController@landing');
Route::get('/about-us', 'Frontend\AboutUsController@about_us')->name('about.us');
Route::get('/project', 'Frontend\ProjectController@projects')->name('project');
Route::get('/project/show/{id}', 'Frontend\ProjectController@show')->name('project.show');
Route::get('/product', 'Frontend\ProductController@index')->name('product');
Route::get('/product/show', 'Frontend\ProductController@show')->name('product.show');
Route::get('/gallery', 'Frontend\GalleryController@index')->name('gallery');
Route::get('/blog', 'Frontend\BlogController@index')->name('blog');
Route::get('/blog/show', 'Frontend\BlogController@show')->name('blog.show');
Route::get('/contact', 'Frontend\ContactController@index')->name('contact');

Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::resource('tag', 'TagController');
    Route::resource('category', 'CategoryController');
    Route::resource('post', 'PostController');
    Route::post('/post/publication', 'PostController@publication')->name('post.publication');
    Route::resource('/comment', 'CommentController');
    Route::get('/comment/{id}/hide', 'CommentController@hide')->name('comment.hide');
    Route::resource('/subscribe', 'SubscribeController');
    Route::resource('/contributor', 'ContributorController');
    Route::get('/contributor/posts/{id}', 'ContributorController@contributor_posts')->name('contributor.posts');
    Route::get('/contributor/comments/{id}', 'ContributorController@contributor_comments')->name('contributor.comments');
    Route::get('/contributor/edit/{id}', 'ContributorController@contributor_edit')->name('contributor.edit');
    Route::get('/contributor/change-avater/{id}', 'ContributorController@change_avater')->name('contributor.change-avater');
    Route::patch('avater/change', 'ContributorController@avater_change')->name('avater.change');

    Route::resource('project', 'Project\ProjectController');

    /**
     * All Project category related routes 
     */
    Route::get('/porject/category', 'Project\PorjectCategoryController@index')->name('project.category.index');
    Route::post('/project/category/store', 'Project\PorjectCategoryController@store')->name('project.category.store');
    Route::get('/project/category/search/{id}', 'Project\PorjectCategoryController@search')->name('project.category.search');
    Route::post('/project/category/update', 'Project\PorjectCategoryController@update')->name('project.category.update');
    Route::delete('/project/category/destroy/{id}', 'Project\PorjectCategoryController@destroy')->name('project.category.destroy');

    Route::resource('product', 'Product\ProductController');
    Route::get('/product/subcategory/search/{id}', 'Product\ProductController@subcategory_search')->name('product.subcategory.search');

    /**
     * All Product category related routes 
     */
    Route::get('/product/main/category', 'Product\ProductCategoryController@index')->name('product.main.category.index');
    Route::post('/product/category/store', 'Product\ProductCategoryController@store')->name('product.category.store');
    Route::get('/product/category/search/{id}', 'Product\ProductCategoryController@search')->name('product.category.search');
    Route::post('/product/category/update', 'Product\ProductCategoryController@update')->name('product.category.update');
    Route::delete('/product/category/destroy/{id}', 'Product\ProductCategoryController@destroy')->name('product.category.destroy');

    /**
     * All Product sub category related routes 
     */
    Route::get('/product/sub/category', 'Product\ProductSubCategoryController@index')->name('product.sub.category.index');
    Route::post('/product/sub/category/store', 'Product\ProductSubCategoryController@store')->name('product.sub.category.store');
    Route::get('/product/sub/category/search/{id}', 'Product\ProductSubCategoryController@search')->name('product.sub.category.search');
    Route::post('/product/sub/category/update', 'Product\ProductSubCategoryController@update')->name('product.sub.category.update');
    Route::delete('/product/sub/category/destroy/{id}', 'Product\ProductSubCategoryController@destroy')->name('product.sub.category.destroy');

    Route::get('/profile', 'AdminProfileController@show')->name('profile');
    Route::post('/profile/change', 'AdminProfileController@change')->name('profile.change');
    Route::post('/profile/update', 'AdminProfileController@update')->name('profile.update');
    Route::post('/change/password', 'AdminProfileController@change_password')->name('change.password');
});



Route::group(['as' => 'editor.', 'prefix' => 'editor', 'namespace' => 'Editor', 'middleware' => ['auth', 'editor']], function () {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
