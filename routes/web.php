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
Auth::routes();

//Dashboard
Route::get('/administrator', 'admin\AdminController@index')->name('admin.dashboard');

//موضوعات مقاله
Route::get('/administrator/category', 'admin\CategoryController@index')->name('admin.category');
Route::get('/administrator/category/create', 'admin\CategoryController@create')->name('admin.category.create');
Route::post('/administrator/category/store','admin\CategoryController@store')->name('admin.category.store');
Route::get('/administrator/category/edit/{category}', 'admin\CategoryController@edit')->name('admin.category.edit');
Route::put('/administrator/category/update/{category}', 'admin\CategoryController@update')->name('admin.category.update');
Route::get('/administrator/category/destroy/{category}', 'admin\CategoryController@destroy')->name('admin.category.destroy');
Route::get('/administrator/category/status/{category}', 'admin\CategoryController@updatestatus')->name('admin.category.updatestatus');


// مقاله
Route::get('/administrator/article', 'admin\ArticleController@index')->name('admin.article');
Route::get('/administrator/article/create', 'admin\ArticleController@create')->name('admin.article.create');
Route::post('/administrator/article/store','admin\ArticleController@store')->name('admin.article.store');
Route::get('/administrator/article/edit/{article}', 'admin\ArticleController@edit')->name('admin.article.edit');
Route::put('/administrator/article/update/{article}', 'admin\ArticleController@update')->name('admin.article.update');
Route::get('/administrator/article/status/{article}', 'admin\ArticleController@updatestatus')->name('admin.article.updatestatus');
Route::get('/administrator/article/destroy/{article}', 'admin\ArticleController@edit')->name('admin.article.destroy');

// صفحات
Route::get('/administrator/page', 'admin\PageController@index')->name('admin.page');
Route::get('/administrator/page/create', 'admin\PageController@create')->name('admin.page.create');
Route::post('/administrator/page/store','admin\PageController@store')->name('admin.page.store');
Route::get('/administrator/page/edit/{page}', 'admin\PageController@edit')->name('admin.page.edit');
Route::put('/administrator/page/update/{page}', 'admin\PageController@update')->name('admin.page.update');
Route::get('/administrator/page/status/{page}', 'admin\PageController@updatestatus')->name('admin.page.updatestatus');
Route::get('/administrator/page/destroy/{page}', 'admin\PageController@edit')->name('admin.page.destroy');

//نمایندگان
Route::get('/administrator/agent', 'admin\AgentController@index')->name('admin.agent');
Route::get('/administrator/agent/create', 'admin\AgentController@create')->name('admin.agent.create');
Route::post('/administrator/agent/store','admin\AgentController@store')->name('admin.agent.store');
Route::get('/administrator/agent/edit/{agent}', 'admin\AgentController@edit')->name('admin.agent.edit');
Route::put('/administrator/agent/update/{agent}', 'admin\AgentController@update')->name('admin.agent.update');
Route::get('/administrator/agent/destroy/{agent}', 'admin\AgentController@destroy')->name('admin.agent.destroy');
Route::get('/administrator/agent/status/{agent}', 'admin\AgentController@updatestatus')->name('admin.agent.updatestatus');


//slider
Route::get('/administrator/slider', 'admin\SliderController@index')->name('admin.slider');
Route::get('/administrator/slider/create', 'admin\SliderController@create')->name('admin.slider.create');
Route::post('/administrator/slider/store','admin\SliderController@store')->name('admin.slider.store');
Route::get('/administrator/slider/edit/{slider}', 'admin\SliderController@edit')->name('admin.slider.edit');
Route::put('/administrator/slider/update/{slider}', 'admin\SliderController@update')->name('admin.slider.update');
Route::get('/administrator/slider/destroy/{slider}', 'admin\SliderController@destroy')->name('admin.slider.destroy');
Route::get('/administrator/slider/status/{slider}', 'admin\SliderController@updatestatus')->name('admin.slider.updatestatus');


//موضوعات گالری
Route::get('/administrator/catgallery', 'admin\CatgalleryController@index')->name('admin.catgallery');
Route::get('/administrator/catgallery/create', 'admin\CatgalleryController@create')->name('admin.catgallery.create');
Route::post('/administrator/catgallery/store','admin\CatgalleryController@store')->name('admin.catgallery.store');
Route::get('/administrator/catgallery/edit/{catgallery}', 'admin\CatgalleryController@edit')->name('admin.catgallery.edit');
Route::put('/administrator/catgallery/update/{catgallery}', 'admin\CatgalleryController@update')->name('admin.catgallery.update');
Route::get('/administrator/catgallery/destroy/{catgallery}', 'admin\CatgalleryController@destroy')->name('admin.catgallery.destroy');
Route::get('/administrator/catgallery/status/{catgallery}', 'admin\CatgalleryController@updatestatus')->name('admin.catgallery.updatestatus');


// گالری
Route::get('/administrator/gallery', 'admin\GalleryController@index')->name('admin.gallery');
Route::get('/administrator/gallery/create', 'admin\GalleryController@create')->name('admin.gallery.create');
Route::post('/administrator/gallery/store','admin\GalleryController@store')->name('admin.gallery.store');
Route::get('/administrator/gallery/edit/{gallery}', 'admin\GalleryController@edit')->name('admin.gallery.edit');
Route::put('/administrator/gallery/update/{gallery}', 'admin\GalleryController@update')->name('admin.gallery.update');
Route::get('/administrator/gallery/destroy/{gallery}', 'admin\GalleryController@destroy')->name('admin.gallery.destroy');
Route::get('/administrator/gallery/status/{gallery}', 'admin\GalleryController@updatestatus')->name('admin.gallery.updatestatus');


//menu
Route::get('/administrator/menu', 'admin\MenuController@index')->name('admin.menu');
Route::get('/administrator/menu/create', 'admin\MenuController@create')->name('admin.menu.create');
Route::post('/administrator/menu/store','admin\MenuController@store')->name('admin.menu.store');
Route::get('/administrator/menu/edit/{menu}', 'admin\MenuController@edit')->name('admin.menu.edit');
Route::put('/administrator/menu/update/{menu}', 'admin\MenuController@update')->name('admin.menu.update');
Route::get('/administrator/menu/destroy/{menu}', 'admin\MenuController@destroy')->name('admin.menu.destroy');
Route::get('/administrator/menu/status/{menu}', 'admin\MenuController@updatestatus')->name('admin.menu.updatestatus');

//product
//feature
Route::get('/administrator/feature', 'admin\FeatureController@index')->name('admin.feature');
Route::get('/administrator/feature/create', 'admin\FeatureController@create')->name('admin.feature.create');
Route::post('/administrator/feature/store','admin\FeatureController@store')->name('admin.feature.store');
Route::get('/administrator/feature/edit/{feature}', 'admin\FeatureController@edit')->name('admin.feature.edit');
Route::put('/administrator/feature/update/{feature}', 'admin\FeatureController@update')->name('admin.feature.update');
Route::get('/administrator/feature/destroy/{feature}', 'admin\FeatureController@destroy')->name('admin.feature.destroy');
Route::get('/administrator/feature/status/{feature}', 'admin\FeatureController@updatestatus')->name('admin.feature.updatestatus');
