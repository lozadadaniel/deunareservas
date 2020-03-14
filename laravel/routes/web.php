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

use App\Company;
use App\Product;

Route::bind('products', function($id){
	return App\Product::where('id',$id)->first();
});

Route::get('/', 'ControlaInicio@inicio')->name('index');
Route::get('/home', 'ControlaInicio@inicio')->name('home');
Route::get('/destacados', 'ControlaInicio@destacados')->name('destacados');
Route::get('/terminos', 'ControlaInicio@terminos')->name('terminos');
Route::get('/sobrenosotros', 'ControlaInicio@nosotros')->name('nosotros');
Route::get('/politicas', 'ControlaInicio@politicas')->name('politicas');
Route::get('/company/maps', 'ControlaInicio@maps')->name('company.maps');



Auth::routes();


//Usuario
Route::get('/login', 'Auth\LoginController@index')->name('login');

Route::get('/configuracion', 'UserController@config')->name('config');
Route::post('/user/update', 'UserController@update')->name('user.update');
Route::get('/user/avatar/{filename}', 'UserController@getImage')->name('user.avatar');
Route::get('/perfil/{id}', 'UserController@profile')->name('profile');

//Social route
Route::get('/redirect', 'SocialController@redirect')->name('redirect');
Route::get('/callback', 'SocialController@callback')->name('callback');


//Company
Route::get('//avatar/{filename}', 'CompanyController@getImages')->name('company.avatar');
Route::get('/company/services/{filename}', 'CompanyController@getIcon')->name('company.services');
Route::get('/crear-reserva', 'ControlaInicio@reserva')->name('crear.reserva');
Route::get('/like/{company_id}', 'LikeController@like')->name('like.save');
Route::get('/dislike/{company_id}', 'LikeController@dislike')->name('like.delete');

Route::get('/aliados/{nombre}', 'CompanyController@companyProfile')->name('company.profile'); 

//Categoria
Route::get('/categoria/{name}', 'CompanyController@category')->name('company.category');
Route::get('/restaurantes/{nombre}', 'CompanyController@restaurantes')->name('company.restaurantes');
Route::get('/canchas/{nombre}', 'CompanyController@canchas')->name('company.canchas');
Route::get('/servicios/{nombre}', 'CompanyController@canchas')->name('company.servicios');
Route::get('/salones/{nombre}', 'CompanyController@canchas')->name('company.salones');
Route::get('/eventos/{nombre}', 'CompanyController@canchas')->name('company.eventos');



//nueva
Route::post('/categoria/{id}', ['as' => 'categoria', 'uses' => 'CompanyController@category_city']);

//Reserva
Route::get('/reserva/ver', 'ReservasController@ver')->name('ver.reserva');
Route::get('/reserva/add/{id}', 'ReservasController@add')->name('add.item');

//Shopping Cart
Route::post('insert-shopping-cart', ['as' => 'insert-shopping-cart', 'uses' => 'ShoppingCartController@insertCart']);
Route::get('ver_carrito', ['as' => 'ver_carrito', 'uses' => 'ShoppingCartController@ver']);
Route::post('guardar-reserva', ['as' => 'guardar-reserva', 'uses' => 'ShoppingCartController@guardar_reserva']);