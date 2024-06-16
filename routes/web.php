<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\TranferenciaController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;
use Laravel\Jetstream\Rules\Role;
use App\Http\Controllers\UserController;
use App\Http\Controllers\testController;

Route::get('/testData', [testController::class, 'test'])->name('testData');
Route::get('/', [LandingController::class, 'index'])->name('landing');
Route::get('/producto/{id}', [ProductoController::class, 'show'])->name('producto.show');

Route::get('/perfil/{id}', [PerfilController::class, 'show'])->name('perfil.show');
Route::get('productos/{categoria}', [ProductoController::class, 'buscar'])->name('producto.buscar');
//admin
Route::group(['middleware' => 'auth'  , 'middleware' => 'can:admin'], function () {
    Route::get('/admin', [AdminController::class, 'show'])->name('admin.show');
    Route::get('/admin/crear-producto', [AdminController::class, 'crear_producto'])->name('admin.create_producto');
    Route::get('/admin/crear-categoria', [AdminController::class, 'crear_categoria'])->name('admin.create_categoria');
    Route::post('/admin/crear-categoria', [AdminController::class, 'store_categoria'])->name('admin.store_categoria');
    Route::get('/admin/editar-categoria/{id}', [AdminController::class, 'editar_categoria'])->name('admin.editar_categoria');
    Route::get('/admin/editar-categoria/{id}', [AdminController::class, 'editar_categoria'])->name('admin.editar_categoria');
    Route::get('/admin/producto', [AdminController::class, 'producto'])->name('admin.producto');
    Route::get('/admin/producto/editar/{id}', [AdminController::class, 'editar_producto'])->name('admin.editar_producto');
    Route::post('/admin/editar-categoria/{id}', [AdminController::class, 'editar_categoria_put'])->name('admin.editar_categoria_put');
    Route::delete('/admin/eliminar-categoria/{id}', [AdminController::class, 'eliminar_categoria'])->name('admin.eliminar_categoria');
    Route::get('/admin/ordenes-no-pagas', [AdminController::class, 'ordenes_no_pagas'])->name('admin.ordenes_no_pagas');
    Route::get('/admin/ordenes-pagas', [AdminController::class, 'ordenes_pagas'])->name('admin.ordenes_pagas');

    Route::get('/admin/detalles/{id}', [AdminController::class, 'detalles'])->name('admin.detalles_ordenes');
    Route::post('/admin/editando_orden_estado/{id}', [AdminController::class, 'editar_orden_estan'])->name('admin.editar_orden_estan');
    Route::get('/admin/crear-empresa-de-envio', [AdminController::class, 'crear_empresa_de_envio'])->name('admin.create_empresa_de_envio');
    Route::post('/admin/crear-empresa-de-envio', [AdminController::class, 'store_empresa_de_envio'])->name('admin.store_empresa_de_envio');
    Route::get('/admin/empresa-de-envio', [AdminController::class, 'empresa_de_envio'])->name('admin.empresa_de_envio');
    Route::get('/admin/sucurales/{id}', [AdminController::class, 'sucursales'])->name('admin.sucursales');
    Route::post('/admin/sucurales/{id}', [AdminController::class, 'store_sucursales'])->name('admin.store_sucursales');
    Route::post('/admin/registrar-producto', [AdminController::class, 'producto_store'])->name('admin.store_producto');
    Route::get('/admin/fijar-dolar', [AdminController::class, 'dolar'])->name('admin.dolar');
    Route::post('/admin/fijar-dolar', [AdminController::class, 'actulizar_dolar'])->name('admin.dolar.post');

});

Route::group(['middleware' => 'auth'], function () {
    //admin crear empresa de envio
   

    //tranferencia
    Route::post('/tranferencia', [TranferenciaController::class, 'tranferencia'])->name('tranferencia.index');

    //carrito controller 
    Route::post('/carrito', [CarritoController::class, 'carrito'])->name('carrito');
    Route::get('/carrito', [CarritoController::class, 'index'])->name('carrito.index');
    Route::post('/carrito_actulizar', [CarritoController::class, 'actulizar_carrito'])->name('carrito.aculizar_cantidad');
    Route::delete('carrito'    , [CarritoController::class, 'eliminar_carrito'])->name('carrito.eliminar_carrito');
    Route::get('carrito-checkout', [CarritoController::class, 'checkout'])->name('carrito.checkout');

    //User
    Route::get('user', [UserController::class, 'perfil'])->name('user.index');
    
    Route::get('user/detalles-orden-de-pago/{id}', [UserController::class, 'detalle'])->name('user.detalle');
    
    Route::get('user/mis_ordernes_pagadas', [UserController::class, 'ordenes_pagadas'])->name('user.ordenes_pagas');
    
    Route::get('/user/datos/{id}', [UserController::class, 'datos'])->name('user.datos');
});






//login

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login-post', [AuthController::class, 'login_post'])->name('login_post');
Route::get('/registro', [AuthController::class, 'registro'])->name('registro.index');
Route::post('/registro', [AuthController::class, 'registro_post'])->name('registro.post');
Route::get('/cerrar-session', [AuthController::class, 'logout'])->name('logout');