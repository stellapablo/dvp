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

  Route::get('articulo', function() {
    return View::make('noticias.articulo');
  });

  Route::get('administracion', function() {
    return View::make('admin.inicio');
  });

  Route::get('admin', array('as' => 'portada.admin', 'uses' => 'PortadaController@indexAdmin'));
  

//Route::get('articulo/{id}', array('as' => 'noticias.articulo', 'uses' => 'NoticiasController@articulo'));
  Route::get('articulo/{slug}', array('as' => 'noticias.articuloslug', 'uses' => 'NoticiasController@articuloSlug'));
  Route::get('direccion/{slug}', array('as' => 'direccion.slug', 'uses' => 'DireccionsController@show'));
  Route::get('delegacion/{slug}', array('as' => 'delegacion.slug', 'uses' => 'DelegacionsController@show'));
  Route::get('noticias/todas', array('as' => 'noticias.all', 'uses' => 'NoticiasController@all'));


  Route::get('test', function() {

//dd(public_path() . '/upload/files/cable.jpg');

    Image::make( ''.public_path() .'/upload/files/cable.jpg'.'')
    ->resize(320, 240)->insert( public_path() . '/upload/files/cableutp.png');
  });

  Route::get('intervention', function()
  {
    $img = Image::make(''.public_path() .'/upload/files/Virgen de la Laguna.jpg'.'')  ->resize(400, 200);
    $img->save(''.public_path() .'/upload/files/virgen_laguna.png'.'');
    
    return $img->response('png');
  });

  Route::group(array('prefix' => 'sigvial'), function()
  {

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
      Route::resource('alertas', 'AlertasController');
      Route::resource('autoridades', 'AutoridadsController');
      Route::resource('direcciones', 'DireccionsController');
      Route::post('noticias/{id}/eliminacionFisicaImagenRelacionada', 'NoticiasController@eliminacionFisicaImagenRelacionada');
      Route::resource('delegaciones', 'DelegacionsController');
      Route::resource('publicidades', 'PublicidadsController');
      Route::get('noticias/{id}/delete', array('as' => 'noticia.delete', 'uses' => 'NoticiasController@delete'));
    });
    
  });   



});