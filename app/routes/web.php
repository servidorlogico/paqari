<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

///front routes
Route::get('/help','FrontController@help');

Route::get('/','FrontController@welcome');
Route::post('/suscription',[
	'uses'=>'SuscriptionController@suscription',
	'as'=>'suscript'
	]);

Route::get('/products',[
	'uses'=>'FrontController@products',
	'as'=>'products'
	]);

Route::get('/products/{section}', [
	'uses'=>'FrontController@section_products',
	'as'=>'allproducts'
	]);

Route::get('/products/{section}/{id}',[
	'uses'=>'FrontController@product_detail',
	'as'=>'product_front_show'
]);

Route::get('/contact',[
	'uses'=>'FrontController@contact',
	'as'=>'contact'
	
	]);


Route::get('/about','FrontController@about');

Route::post('/message/send',[
	'uses'=>'MessageController@send_menssage',
	'as'=>'send.message'
	]);

Route::get('/about-association','FrontController@about_association');

Route::get('/events','FrontController@events');

Route::GET('search',[
	'uses'=>'FrontController@search',
	'as'=>'search_front'
	]);
/// autentificacion
Auth::routes();



//logear con redes sociales	

Route::get('auth/{provider}', [
	'uses'=>'Auth\LoginController@redirectToProvider',
	'as'=>'logsocial'
	]);

Route::get('auth/{provider}/callback',[
	'uses'=>'Auth\LoginController@handleProviderCallback',
	'as'=>'callback'
	]);

/// adminisrtradoor
Route::group(['middleware' => ['auth','admin']], function(){
	Route::get('/home',[
	'uses'=>'HomeController@index',
	'as'=>'home'
	]);

	Route::resource('admin','AdministratorController');
	Route::resource('product','ProductController');

	Route::get('admin/{id}/destroy','AdministratorController@destroy');

	Route::get('admin/{id}/edit',[
		'uses'=>'AdministratorController@edit',
		'as'=>'admin.edit'
		]);

  	
  	Route::get('product/{id}/destroy','ProductController@destroy');

  	Route::get('product/{id}/edit',[
		'uses'=>'ProductController@edit',
		'as'=>'product.edit'
		]);
	
	Route::get('suscrip/{id}/destroy',[
		'uses'=>'SuscriptionController@destroy',
		'as'=>'suscrip.delete'
	]);
	
	
	Route::get('search-product',[
		'uses'=>'ProductController@search',
		'as'=>'search.product'
		]);
	
	Route::get('suscriptions',[
		'uses'=>'SuscriptionController@index',
		'as'=>'suscrip.index'
	]);
	
	Route::get('messages',[
		'uses'=>'MessageController@index',
		'as'=>'msg.index'
	]);
	Route::get('msg/{id}/destroy',[
		'uses'=>'MessageController@destroy',
		'as'=>'msg.destroy'
	]);
	Route::get('messages/{id}',[
		'uses'=>'MessageController@show',
		'as'=>'msg.show'
	]);
	Route::get('search-messages',[
		'uses'=>'MessageController@search',
		'as'=>'search.message'
		]);
		
		
	Route::get('search-suscriptions',[
		'uses'=>'SuscriptionController@search',
		'as'=>'search.suscrip'
		]);
		
	
	
});



/// usuario
Route::group(['middleware'=>['auth','user']], function(){
Route::get('cart',[
	'uses'=>'CartController@show',
	'as'=>'cart.show'
	]);

Route::get('cart/{item}/add',[
	'uses'=>'CartController@add',
	'as'=>'cart.add'
	]);


Route::get('cart/{item}/delete',[
	'uses'=>'CartController@delete',
	'as'=>'cart.delete.item'
	]);	
Route::get('cart/delete',[
	'uses'=>'CartController@delete_cart',
	'as'=>'cart.delete'
	]);	

Route::get('cart/facturation',[
	'uses'=>'CartController@facturaction',
	'as'=>'cart.fact'
	]);	


});

