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



Route::get('/producto', function () {
   return view ("Producto");
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

Route::get('/administrador', "productosController@listaPro" );

Route::post('/administrador', 'productosController@store')->name('productos.store');

Route::delete('/borrarProducto','productosController@borrar')->name('productos.borrar');

Route::put('/posteditar/{producto}','productosController@editar')->name('productos.editar');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home'); 

Route::get('/editar/{producto}',"productosController@detalleProducto")->name('editarProducto');
/* Route::post('/editarproducto/{{id}}',"productosController@editarProducto"); */

Route::post('/miperfil','userController@editar')->name('user.editar');

/* Route::post('/editarUsuario',"userController@userUpdate"); */
Route::get('/index', "productosController@listaProductos" );

/* Ruta para email */

Route::get('/', function () {
   return view('ayuda');
}); //Esta ruta la ponemos en la raiz para que nada mas ejecutar nuestra aplicación aparezca nuestro formulario

Route::post('/ayuda', 'EmailController@contact')->name('contact');
//Ruta que esta señalando nuestro formulario


//carrito
Route::get('Cart/Show',[
   'as'=>'Cart-show',
   'uses'=>'CartController@show'
]);