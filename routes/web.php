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
    return view('welcome');
});


Route::get('nosotros', function () {
    return view('nosotros');
});

Route::get('contacto', function () {
    return view('contacto');
});

Route::get('compras', function () {
    return view('productos/historial_compras');
});

# LAS RUTAS DEL LISTADO, CREACION Y ELIMINACION DE USUSARIOS    

#           ↓   ese es el nombre con el que se podra acceder desde el navegador como link, ejemplo: "tests.test/usuarios"
Route::get('usuarios', 'App\Http\Controllers\UserController@index');
Route::post('usuarios/filtro', 'App\Http\Controllers\UserController@filtro')->name('usuarios.filtro');
Route::post('usuarios', 'App\Http\Controllers\UserController@store')->name('usuarios.agregar');
Route::delete('usuarios/{usuario}', 'App\Http\Controllers\UserController@destroy')->name('usuarios.eliminar');

# LAS RUTAS DEL LISTADO, CREACION Y ELIMINACION DE TIPOS DE PRODUCTOS  

Route::get('tipos-productos', 'App\Http\Controllers\TipoProductoController@index');
Route::post('tipos-productos/filtro', 'App\Http\Controllers\TipoProductoController@filtro')->name('tipos-productos.filtro');
Route::post('tipos-productos', 'App\Http\Controllers\TipoProductoController@store')->name('tproductos.agregar');
Route::delete('tipos-productos/{tproducto}', 'App\Http\Controllers\TipoProductoController@destroy')->name('tproductos.eliminar');
Auth::routes();

# LAS RUTAS DEL LISTADO, CREACION Y ELIMINACION DE PRODUCTOS  

Route::get('productos', 'App\Http\Controllers\ProductoController@index');
Route::post('productos/filtro', 'App\Http\Controllers\ProductoController@filtro')->name('productos.filtro');
Route::post('productos', 'App\Http\Controllers\ProductoController@store')->name('productos.agregar');
Route::delete('productos/{producto}', 'App\Http\Controllers\ProductoController@destroy')->name('productos.eliminar');
Auth::routes();

# ESTO NOS DA UN MINIMO DE SEGURIDAD CON EL MIDDLEWARE, LO QUE HACE ES REDIRIGIRNOS AL HOME QUE NOS PERTENEZCA CUANDO LOGUEAMOS CON "X" TIPO DE USUARIO

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware(['redirectus']);

Route::get('perfil-cliente', 'App\Http\Controllers\UserController@perfil')->name('perfil-cliente');

# LAS RUTAS DE LOS INICIOS DE LOS USUARIOS

Route::get('admin-home', function(){
    return view('usuarios/admin-home');
})->middleware('auth');

Route::get('cliente-home', function(){
    return view('welcome');
})->middleware('auth');

Route::get('trabajador-home', function(){
    return view('usuarios/trabajador-home');
})->middleware('auth');



# LAS RUTAS DE PRODUCTOS - CLIENTE

Route::get('productos-tipo', 'App\Http\Controllers\TipoProductoController@tipo');

Route::get('productos-cliente/{tproducto}', 'App\Http\Controllers\TipoProductoController@tipoVista')->name('productos.cliente');

Route::get('productos-vista/{producto}', 'App\Http\Controllers\ProductoController@clienteVista')->name('productos.vista');

Route::get('/', 'App\Http\Controllers\ProductoController@home')->name('welcome.home');

#CARRITO

Route::get('carrito', 'App\Http\Controllers\ItemController@itemsCarrito')->name('carrito.show');
Route::post('items/{producto}', 'App\Http\Controllers\ItemController@store')->name('items.crear');
Route::put('carrito/items/{id}', 'App\Http\Controllers\ItemController@actualizarItem')->name('items.actualizar');
Route::delete('items/{id}', 'App\Http\Controllers\ItemController@borrarItem')->name('items.eliminar');

Route::post('historial', 'App\Http\Controllers\CompraController@store')->name('compra.crear');

#HISTORIAL

Route::get('historial', 'App\Http\Controllers\CompraController@historial')->name('compras.historial');