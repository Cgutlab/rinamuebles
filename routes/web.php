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


Route::get('/', 'HomeController@index')->name('index');
Route::get('/empresa', 'EmpresaController@index')->name('seccion_empresa');
Route::get('/producto', 'ProductoController@index')->name('familias');
Route::get('/producto/{id}', 'ProductoController@productos')->name('list_productos');
Route::get('/producto/descripcion/{id}', 'ProductoController@producto')->name('producto_info');
Route::get('/ambientes', 'AmbienteController@index')->name('ambientes');
Route::get('/ambientes/{id}', 'AmbienteController@ambiente')->name('ambiente_info');
Route::get('/presupuesto', 'PresupuestoController@index')->name('presupuesto');
Route::post('/presupuesto/send', 'PresupuestoController@enviarMail')->name('presupuesto_send');
Route::get('/contacto', 'ContactoController@index')->name('contacto');
Route::post('/contacto/send', 'ContactoController@enviarMail')->name('contacto_send');
Route::post('/buscador', 'BuscadorController@index')->name('buscador');
Auth::routes();  
Route::group(['middleware' => 'auth', 'prefix' => 'adm'], function() {

    Route::get('/', 'adm\admController@index')->name('adm_index');
    
    Route::get('/home-{seccion}', 'adm\HomeController@showEdit')->name('home_show');

    Route::get('/empresa', 'adm\EmpresaController@showEdit')->name('empresa');

    Route::get('/familia', 'adm\FamiliaController@index')->name('familia');
    Route::get('/familia/nuevo', 'adm\FamiliaController@showCreate')->name('familia_create');

    Route::get('/caracteristicas', 'adm\CaracteristicaController@index')->name('caracteristicas');
    Route::get('/caracteristicas/nuevo', 'adm\CaracteristicaController@showCreate')->name('caracteristicas_create');

    Route::get('/productos-{seccion}', 'adm\ProductoController@index')->name('productos');
    Route::get('/productos/nuevo-{seccion}', 'adm\ProductoController@showCreate')->name('producto_create');


    Route::get('/logo', 'adm\LogoController@index')->name('logo');

    Route::get('/metadatos', 'adm\MetadatoController@index')->name('metadatos');

    Route::get('/usuario', 'adm\UserController@index')->name('usuario');
    Route::get('/usuario/nuevo', 'adm\UserController@showCreate')->name('usuario_create');

    Route::get('/slider-{seccion}', 'adm\SliderController@index')->name('slider');
    Route::get('/slider/nuevo-{seccion}', 'adm\SliderController@showCreate')->name('slider_create');

    Route::get('/redes', 'adm\RedesController@index')->name('redes');

   //Ruta de los eventos de Home
    Route::group(['prefix' => 'home'], function() {
        Route::put('/{id}', ['uses' => 'adm\HomeController@update', 'as' => 'update']);
    });

    //Ruta de los eventos de Empresa
    Route::group(['prefix' => 'empresa'], function() {
        Route::put('/{id}', ['uses' => 'adm\EmpresaController@update', 'as' => 'update']);
    });

    //Ruta de los eventos de familia
    Route::group(['prefix' => 'familia'], function() {
        Route::post('/nuevo/send', ['uses' => 'adm\FamiliaController@store', 'as' => '.store']);
        Route::get('/editar/{id}', ['uses' => 'adm\FamiliaController@showEdit', 'as' => 'familia_show']);
        Route::put('/{id}', ['uses' => 'adm\FamiliaController@update', 'as' => 'update']);
        Route::get('/eliminar/{id}', ['uses' => 'adm\FamiliaController@eliminar', 'as' => 'eliminar']);
    });

    //Ruta de los eventos de caracteristicas
    Route::group(['prefix' => 'caracteristicas'], function() {
        Route::post('/nuevo/send', ['uses' => 'adm\CaracteristicaController@store', 'as' => '.store']);
        Route::get('/editar/{id}', ['uses' => 'adm\CaracteristicaController@showEdit', 'as' => 'caracteristica_show']);
        Route::put('/{id}', ['uses' => 'adm\CaracteristicaController@update', 'as' => 'update']);
        Route::get('/eliminar/{id}', ['uses' => 'adm\CaracteristicaController@eliminar', 'as' => 'eliminar']);
    });

    //Ruta de los eventos de productos y Amboblamientos
    Route::group(['prefix' => 'productos'], function() {
        Route::post('/nuevo/nuevo', ['uses' => 'adm\ProductoController@store', 'as' => '.store']);
        Route::get('/editar/{id}', ['uses' => 'adm\ProductoController@showEdit', 'as' => 'producto_show']);
        Route::put('/{id}', ['uses' => 'adm\ProductoController@update', 'as' => 'update']);
        Route::get('/basesList', ['uses' => 'adm\ProductoController@listadoBase', 'as' => 'lista_productos']);
        Route::get('/eliminar-{id}', ['uses' => 'adm\ProductoController@eliminar', 'as' => 'eliminar']);
    });

    //Ruta de los eventos de logo
    Route::group(['prefix' => 'logo'], function() {
        Route::get('/editar/{id}', ['uses' => 'adm\LogoController@showEdit', 'as' => 'logo_show']);
        Route::put('/{id}', ['uses' => 'adm\LogoController@update', 'as' => 'update']);
        Route::get('/eliminar//{id}', ['uses' => 'adm\LogoController@eliminar', 'as' => 'eliminar']);
    });

    //Ruta de los eventos de metadata
    Route::group(['prefix' => 'metadatos'], function() {
        Route::post('/nuevo/send', ['uses' => 'adm\MetadatoController@store', 'as' => '.store']);
        Route::get('/editar/{id}', ['uses' => 'adm\MetadatoController@showEdit', 'as' => 'metadatos_show']);
        Route::put('/{id}', ['uses' => 'adm\MetadatoController@update', 'as' => 'update']);
    });

    //Ruta de los eventos de slider
    Route::group(['prefix' => 'slider'], function() {
        Route::post('/nuevo/send', ['uses' => 'adm\SliderController@store', 'as' => '.store']);
        Route::get('/editar/{id}', ['uses' => 'adm\SliderController@showEdit', 'as' => 'slider_show']);
        Route::put('/{id}', ['uses' => 'adm\SliderController@update', 'as' => 'update']);
        Route::get('/eliminar/{id}', ['uses' => 'adm\SliderController@eliminar', 'as' => 'eliminar']);
    });

    //Ruta de los eventos de usuario
    Route::group(['prefix' => 'usuario'], function() {
        Route::post('/nuevo/send', ['uses' => 'adm\UserController@store', 'as' => '.store']);
        Route::get('/editar/{id}', ['uses' => 'adm\UserController@showEdit', 'as' => 'usuario_show']);
        Route::put('/{id}', ['uses' => 'adm\UserController@update', 'as' => 'update']);
        Route::get('/eliminar/{id}', ['uses' => 'adm\UserController@eliminar', 'as' => 'eliminar']);
    });

    //Ruta de los eventos de datos
    Route::group(['prefix' => 'datos'], function() {
        Route::get('/editar/{id}', ['uses' => 'adm\DatoController@showEdit', 'as' => 'datos_show']);
        Route::put('/update', ['uses' => 'adm\DatoController@update', 'as' => 'update']);
    });

    //Ruta de los eventos de redes sociales
    Route::group(['prefix' => 'redes'], function() {
        Route::get('/editar/{id}', ['uses' => 'adm\RedesController@showEdit', 'as' => 'redes_show']);
        Route::put('/{id}', ['uses' => 'adm\RedesController@update', 'as' => 'update']);
    });

});
