<?php

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

Route::get('/', function () {
    return view('page.index');
});

Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/password-change', 'HomeController@changePassword')->name('password.change');
Route::post('/password-update', 'HomeController@updatePassword')->name('password.update');
Route::get('/user/logout', 'HomeController@Logout')->name('user.logout');

//admin=======
Route::get('admin/home', 'AdminController@index');
Route::get('admin', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin', 'Admin\LoginController@login');
        // Password Reset Routes...
Route::get('admin/password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin-password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin/reset/password/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
Route::post('admin/update/reset', 'Admin\ResetPasswordController@reset')->name('admin.reset.update');
Route::get('/admin/Change/Password','AdminController@ChangePassword')->name('admin.password.change');
Route::post('/admin/password/update','AdminController@Update_pass')->name('admin.password.update'); 
Route::get('admin/logout', 'AdminController@logout')->name('admin.logout');

// category
Route::get('admin/category', 'Admin\category\CategoryController@index')->name('categories');
Route::post('admin/store/category', 'Admin\category\CategoryController@store')->name('store.category');
Route::get('delete/category/{id}', 'Admin\category\CategoryController@delete');
Route::get('edit/category/{id}', 'Admin\category\CategoryController@edit');
Route::post('update/category/{id}', 'Admin\category\CategoryController@update');
//brands
Route::get('admin/brands', 'Admin\brand\BrandController@index')->name('brands');
Route::post('admin/store/brand', 'Admin\brand\BrandController@store')->name('store.brand');
Route::get('delete/brand/{id}', 'Admin\brand\BrandController@delete');
Route::get('edit/brand/{id}', 'Admin\brand\BrandController@edit');
Route::post('update/brand/{id}', 'Admin\brand\BrandController@update');

// subcategory
Route::get('admin/subcategory', 'Admin\subcategory\SubcategoryController@index')->name('subcategories');
Route::post('admin/store/subcategory', 'Admin\subcategory\SubcategoryController@store')->name('store.subcategory');
Route::get('delete/subcategory/{id}', 'Admin\subcategory\SubcategoryController@delete');
Route::get('edit/subcategory/{id}', 'Admin\subcategory\SubcategoryController@edit');
Route::post('update/subcategory/{id}', 'Admin\subcategory\SubcategoryController@update');
//cupon
Route::get('admin/cupon', 'Admin\cupon\CuponController@index')->name('cupons');
Route::post('admin/store/cupon', 'Admin\cupon\CuponController@store')->name('store.cupon');
Route::get('delete/cupon/{id}', 'Admin\cupon\CuponController@delete');
Route::get('edit/cupon/{id}', 'Admin\cupon\CuponController@edit');
Route::post('update/cupon/{id}', 'Admin\cupon\CuponController@update');
// newslatter
Route::get('admin/newslatter', 'Admin\newslaters\NewaLaterController@index')->name('newslatter');
Route::get('delete/newslatter/{id}', 'Admin\newslaters\NewaLaterController@delete');
// ajax subcategory
Route::get('get/subcategory/{category_id}', 'Admin\product\ProductController@getsubcategory');
//produce
Route::get('admin/add/product', 'Admin\product\ProductController@create')->name('add.product');
Route::get('admin/all/product', 'Admin\product\ProductController@index')->name('all.product');
Route::post('admin/store/product', 'Admin\product\ProductController@store')->name('store.product');
Route::get('inactive/product/{id}', 'Admin\product\ProductController@inactive');
Route::get('active/product/{id}', 'Admin\product\ProductController@active');
Route::get('delete/product/{id}', 'Admin\product\ProductController@delete');
Route::get('view/product/{id}', 'Admin\product\ProductController@view');
Route::get('edit/product/{id}', 'Admin\product\ProductController@edit');
Route::post('update/product/withoutphoto/{id}', 'Admin\product\ProductController@update');
Route::post('update/product/photo/{id}', 'Admin\product\ProductController@updatephoto');

//post

Route::get('admin/post/category', 'Admin\post\PostController@categoryindex')->name('post.category');
Route::post('admin/store/post/category', 'Admin\post\PostController@storecategory')->name('store.postcategory');
Route::get('delete/post/category/{id}', 'Admin\post\PostController@categorydelete');
Route::get('edit/post/category/{id}', 'Admin\post\PostController@categoryedit');
Route::post('update/post/category/{id}', 'Admin\post\PostController@categoryupdate');

// add post
Route::get('admin/post', 'Admin\post\PostController@index')->name('add.post');
Route::post('admin/store/post/', 'Admin\post\PostController@store')->name('store.post');
Route::get('delete/post/{id}','Admin\post\PostController@destroy');
Route::get('edit/post/{id}','Admin\post\PostController@edit');
Route::post('update/post/{id}','Admin\post\PostController@update');
Route::get('admin/all/post', 'Admin\post\PostController@allpost')->name('all.post');





//wishlist
Route::get('add/wishlist/{id}','WishlistController@addwishlist');
//add to cart
Route::get('add/cart/{id}','AddcartController@addcart');
// ------------------------------------------------------------------------------------------------------------
//                                           Frontend Route
// ----------------------------------------------------------------------------------------------------------
Route::post('store/news/latter', 'FrontendController@newalatterstore')->name('news.latter');