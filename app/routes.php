<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the Closure to execute when that URI is requested.
  |
 */
  Route::get('/', array('as' => 'portada', 'uses' => 'PortadaController@index'));
  Route::get('autoridades/{id}',['as'=>'autoridades.show','uses'=>'AutoridadsController@show']);

  Route::get('articulo', function() {


    $thumb = Image::make('upload/files/noticias/10.png')->fit(600,500)->save('upload/files/noticias/'. rand(10000,99999) .'.jpg');

    //Image::make('upload/files/noticias/30230.JPG')->resize(320, 240)->insert('upload/files/noticias/watermark.jpg');

  });

  Route::get('administracion', function() {
    return View::make('admin.inicio');
  });

  Route::get('admin', array('as' => 'portada.admin', 'uses' => 'PortadaController@indexAdmin'));

  Route::get('contacto', array('as' => 'contacto', 'uses' => 'PortadaController@contacto'));
  Route::post('contacto', array('as' => 'mensajes.contacto', 'uses' => 'PortadaController@enviar'));
  Route::get('educacion-vial', array('as' => 'educacion', 'uses' => 'PortadaController@educacion'));
  Route::post('educacion-vial', array('as' => 'mensajes.educacion', 'uses' => 'PortadaController@enviarEducacion'));

  Route::get('licitaciones-contrataciones', array('as' => 'licitaciones.grid', 'uses' => 'LicitacionesController@grid'));
  Route::get('licitaciones-nacionales', array('as' => 'licitaciones.nacionales.grid', 'uses' => 'LicitacionesController@gridNacionales'));

  Route::get('licitaciones-nacionales/{slug}', array('as' => 'licitaciones.nacionales.detalle', 'uses' => 'LicitacionesController@detalle'));


  Route::get('articulo/{slug}', array('as' => 'noticias.articuloslug', 'uses' => 'NoticiasController@articuloSlug'));
  Route::get('direccion/{slug}', array('as' => 'direccion.slug', 'uses' => 'DireccionsController@show'));
  Route::get('delegacion/{slug}', array('as' => 'delegacion.slug', 'uses' => 'DelegacionsController@show'));
  Route::get('noticias/todas', array('as' => 'noticias.all', 'uses' => 'NoticiasController@all'));


  Route::group(array('prefix' => 'sigvial'), function() {

    Route::get('historiasigvial/{id}', 'HistoriaController@indexPublico');
    Route::get('historiaShowPublico/{id}', 'HistoriaController@ShowPublico');
    Route::get('graficaPublica/{id}', 'HistoriaController@graficaPublica');
    Route::get('mapaInteractivo', 'MapasController@interactivo');


    Route::get('mensaje/{mapa}', 'MensajesController@create');
    Route::post('mensaje/{mapa}', 'MensajesController@store');


    Route::get('/', array('as' => 'portada', 'uses' => 'PortadaController@indexSigvial'));

    Route::get('consorcio/{numero}', 'ConsorciosController@verConsorcio');
    Route::get('consorcioscamineros', 'ConsorciosController@indexPublico');
    Route::post('consorcioscamineros','ConsorciosController@buscarConsorcio');

    Route::post('buscarMapas','MapasController@buscarMapas');
    Route::get('filtrarMapas/{id}','MapasController@filtrarMapas');
    Route::get('filtrarMapas/{id}','MapasController@filtrarMapas');
    Route::resource('mapadigital', 'MapasController@showPublico');
    Route::resource('mapasPublico', 'MapasController@indexPublico');
    Route::get('mapasZona/{id}','MapasController@filtrarMapasPorZona');


    Route::post('filtrarMapasPorConsorcio','MapasController@filtrarMapasPorConsorcio');
    Route::post('filtrarMapasPorDepartamento','MapasController@filtrarMapasPorDepartamento');
  });

  

/*  Route::get('generarusuario', function() {
    $row = new User;
    $row->nick = 'admin';
    $row->password = Hash::make('admin');
    $row->rol = '1';
    $row->save();
    return 'USUARIO GUARDADO';
  });

*/

Route::get('login', 'UsersController@login');

Route::post('login/access', ['as' => 'users.login', 'uses' => 'UsersController@ingresar']);

//PERMISOS DE ADMINISTRADOR

Route::group(array('before' => 'auth'), function() {

  Route::get('logout', ['as' => 'users.logout', 'uses' => 'UsersController@logout']);

  Route::group(array('before' => 'admin'), function() {      
    //PERMISOS DE ADMINISTRADOR ROL 1
    Route::resource('users', 'UsersController');
    Route::resource('departamentos', 'DepartamentosController');
    Route::resource('zonas', 'ZonasController');
    Route::resource('deptoxmapas', 'DeptoxmapasController');
    Route::resource('consorcioxmapas', 'ConsorcioxmapasController');
  });

  Route::group(array('before' => 'mapas'), function() {
      //PERMISOS DE MAPAS Y CONSORCIOS ROL1
    Route::resource('mapaxzonas', 'MapaxzonasController');
    Route::resource('mapaxdepartamentos', 'MapaxdepartamentosController');
    Route::resource('mensajes', 'MensajesController');
    Route::resource('tipomapas/{id}/editHtml', 'TipomapasController@editarHtml');
    Route::resource('consorcios', 'ConsorciosController');
    Route::resource('tipomapas', 'TipomapasController');
    Route::resource('mapas', 'MapasController');
  });

  Route::group(array('before' => 'noticias'), function() {
      //PERMISOS DE NOTICIAS
    Route::resource('historia', 'HistoriaController');
    Route::resource('tipocaminos', 'TipocaminosController');
    Route::resource('estadocaminos', 'EstadocaminosController');
    Route::resource('caminos', 'CaminosController');

    Route::group(array('prefix' => 'admin'), function() {

      Route::resource('categorias', 'CategoriasController');
      Route::resource('noticias', 'NoticiasController');
      Route::resource('autoridades', 'AutoridadsController');
      Route::resource('direcciones', 'DireccionsController');
      Route::post('noticias/{id}/eliminacionFisicaImagenRelacionada', 'NoticiasController@eliminacionFisicaImagenRelacionada');
      Route::post('noticias/{id}/eliminacionVideoRelacionado', 'NoticiasController@eliminacionVideoRelacionado');
      Route::resource('delegaciones', 'DelegacionsController');
      Route::resource('publicidades', 'PublicidadsController');
      Route::get('noticias/{id}/delete', array('as' => 'noticia.delete', 'uses' => 'NoticiasController@delete'));
    });
    
  });

  Route::group(array('before' => 'alertas','prefix' => 'admin'), function() {
    Route::get('alertas/{id}/delete', array('as' => 'alertas.delete', 'uses' => 'AlertasController@destroy'));
    Route::resource('alertas', 'AlertasController');
  });

  Route::group(array('before' => 'licitaciones','prefix' => 'admin'), function() {

    Route::resource('licitaciones', 'LicitacionesController');

    //licitaciones nacionales
    Route::get('licitaciones-nacionales', array('as' => 'licitaciones.nacionales.index', 'uses' => 'LicitacionesController@indexNacionales'));
    Route::get('licitaciones-nacionales/create', 'LicitacionesController@createNacional');
    Route::get('licitaciones-nacionales/{id}/delete', ['as' => 'licitaciones.nacional.delete', 'uses' => 'LicitacionesController@deleteNacional']);
    Route::get('licitaciones-nacionales/{id}/edit', ['as' => 'admin.licitaciones.nacional.edit', 'uses' => 'LicitacionesController@editNacional']);
    Route::post('licitaciones-nacionales/store', ['as'=>'admin.licitaciones_nacionales.store','uses'=>'LicitacionesController@storeNacional']);
    Route::get('licitaciones-nacionales/{id}/delete', ['as' => 'licitaciones.nacional.delete', 'uses' => 'LicitacionesController@deleteNacional']);
    Route::patch('licitaciones-nacionales/{id}/update', array('as' => 'admin.licitaciones.nacionales.update', 'uses' => 'LicitacionesController@updateNacional'));
    Route::get('licitaciones/{id}/delete', array('as' => 'licitaciones.delete', 'uses' => 'LicitacionesController@delete'));

  });
  
  


    App::missing(function($exception) {
        Log::error($exception);
        return Response::view('errors.error_404', array('code' => 'http_error_404'), 404);
    });



});
