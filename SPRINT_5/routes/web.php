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



Route::get('/index', function () {
    return view ("index");
 });

 Route::get('/productos', function () {
    return view ("Productos");
 });

 Route::get('/producto', function () {
    return view ("Producto");
 });

 Route::get('/ayuda', function () {
    return view ("ayuda");
 });

 Route::get('/carrito', function () {
    return view ("carrito");
 });

 Route::get('/login', function () {
    return view ("login");
 });

 Route::get('/miperfil', function () {
   return view ("miperfil");
});

Route::get('/quienessomos', function () {
   return view ("quienessomos");
});

Route::get('/productos', function () {
   return view ("listadodeproductos");
});

Route::get('/productos', "productosController@listado" );

//Route::get('/productos/{id}', "productosController@detalle");

Route::get('/producto/{id}', function ($id) {
   $vac = compact("id"); 
   return view ("detalleproducto", $vac);
});

Route::get('/producto/{id}', "productosController@detalle" );

// Route::get('/productos/iphone', "productosController@iphone" );

 Route::get('/registrarse', function () {
    return "Registrarse";
});
Route::post('/registracion', function () {
    return "Bienvenido";
});
Route::get('/administrador', function () {
   return view("administrador");
});

Route::post('/administrador', 'productosController@store')->name('productos.store');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home'); 

