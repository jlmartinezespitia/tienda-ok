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
// inyección de dependencias
Route::bind('product',function($slug){
	return App\Product::where('slug',$slug)->first();
});

Route::bind('category', function($category){
	return App\Category::find($category);
});

Route::bind('user', function($user){
	return App\User::find($user);
});
//
Route::get('/', [
	'as' => 'home',
	'uses' => 'StoreController@index'
]);
Route::get('product/{slug}', [
	'as' => 'product-detail',
	'uses' => 'StoreController@show'
]);

//Carrito -----------------
Route::get('cart/show', [
	'as' => 'cart-show',
	'uses' => 'CartController@show'
]);

Route::get('cart/add/{product}', [
	'as' => 'cart-add',
	'uses' => 'CartController@add'
]);

Route::get('cart/delete/{product}', [
	'as' => 'cart-delete',
	'uses' => 'CartController@delete'
]);

Route::get('cart/trash', [
	'as' => 'cart-trash',
	'uses' => 'CartController@trash'
]);

Route::get('cart/update/{product}/{cantidad}', [
	'as' => 'cart-update',
	'uses' => 'CartController@update'
]);

Route::get('order-detail', [
	'middleware' => 'auth',
	'as' => 'order-detail',
	'uses' => 'CartController@orderDetail'
]);

//Auth 
Auth::routes();

Route::get('/home', 'HomeController@index');

//ADMIN***************

Route::group(['namespace' => 'Admin', 'middleware' => ['auth','siadm']], function()
{

	Route::get('admin/home', function(){
		return view('admin.home');
	});

	Route::resource('category', 'CategoryController');

	Route::resource('product', 'ProductController');

	Route::resource('user', 'UserController');

	Route::get('orders', [
		'as'	=> 'admin.order.index',
		'uses'	=> 'OrderController@index'
	]);

	Route::post('admin/order/get-items', [
		'as'	=> 'admin.order.getItems',
		'uses'	=> 'OrderController@getItems'
	]);

	Route::get('order/{id}', [
		'as'	=> 'admin.order.destroy',
		'uses'	=> 'OrderController@destroy'
	]);
});