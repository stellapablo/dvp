<?php

/*
|--------------------------------------------------------------------------
| Application & Route Filters
|--------------------------------------------------------------------------
|
| Below you will find the "before" and "after" events for the application
| which may be used to do any work before or after a request into your
| application. Here you may also register your custom route filters.
|
*/

App::before(function($request)
{
	//
});


App::after(function($request, $response)
{
	//
});

/*
|--------------------------------------------------------------------------
| Authentication Filters
|--------------------------------------------------------------------------
|
| The following filters are used to verify that the user of the current
| session is logged into this application. The "basic" filter easily
| integrates HTTP Basic authentication for quick, simple checking.
|
*/

Route::filter('auth', function()
{
	if (Auth::guest())
	{
		if (Request::ajax())
		{
			return Response::make('Unauthorized', 401);
		}
		else
		{
			return Redirect::guest('login');
		}
	}
});


Route::filter('auth.basic', function()
{
	return Auth::basic();
});

Route::filter('admin', function()
{
    if (Auth::user()->rol == 1)
    {
        Route::resource('users', 'UsersController');
    }else{
    	return Redirect::back()->with('message', 'Necesita permisos de administrador');
    }
});

Route::filter('mapas', function()
{
    if (Auth::user()->rol == 2 || Auth::user()->rol == 1)
    {
        Route::resource('users', 'UsersController');
    }else{
    	return Redirect::back()->with('message', 'Necesita permisos de administrador de Mapas');
    }
});

Route::filter('alertas', function()
{
	if (Auth::user()->rol == 4 || Auth::user()->rol == 1)
	{
		Route::resource('users', 'UsersController');
	}else{
		return Redirect::back()->with('message', 'Necesita permisos de administrador de Alertas');
	}
});

Route::filter('licitraciones', function()
{
	if (Auth::user()->rol == 5 || Auth::user()->rol == 1)
	{
		Route::resource('licitaciones', 'LicitacionesController');
	}else{
		return Redirect::back()->with('message', 'Necesita permisos de administrador de Licitaciones');
	}
});

Route::filter('noticias', function()
{
    if (Auth::user()->rol == 3 || Auth::user()->rol == 1)
    {
        Route::resource('users', 'UsersController');
    }else{
    	return Redirect::back()->with('message', 'Necesita permisos de administrador de Noticias');
    }
});


/*
|--------------------------------------------------------------------------
| Guest Filter
|--------------------------------------------------------------------------
|
| The "guest" filter is the counterpart of the authentication filters as
| it simply checks that the current user is not logged in. A redirect
| response will be issued if they are, which you may freely change.
|
*/

Route::filter('guest', function()
{
	if (Auth::check()) return Redirect::to('/');
});

/*
|--------------------------------------------------------------------------
| CSRF Protection Filter
|--------------------------------------------------------------------------
|
| The CSRF filter is responsible for protecting your application against
| cross-site request forgery attacks. If this special token in a user
| session does not match the one given in this request, we'll bail.
|
*/

Route::filter('csrf', function()
{
	if (Session::token() != Input::get('_token'))
	{
		throw new Illuminate\Session\TokenMismatchException;
	}
});