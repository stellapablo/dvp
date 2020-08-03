<?php

class MensajesController extends BaseController {

	/**
	 * Mensaje Repository
	 *
	 * @var Mensaje
	 */
	protected $mensaje;

	public function __construct(Mensaje $mensaje)
	{
		$this->mensaje = $mensaje;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$mensajes = $this->mensaje->all();

		return View::make('mensajes.index', compact('mensajes'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($mapa)
	{
		$tiposDeMapas = Tipomapa::all();
		$mapaMensaje = Mapa::findOrFail($mapa);
		return View::make('mensajes.create', compact('tiposDeMapas', 'mapaMensaje'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Mensaje::$rules);

		if ($validation->passes())
		{
			$this->mensaje->create($input);

			return Redirect::to('/sigvial/mensaje/'.Input::get('mapa'))			
			->with('message', 'Gracias por comunicarse con nosotros. Nos comunicaremos con usted a la brevedad.');
		}

		return Redirect::to('/sigvial/mensaje/'.Input::get('mapa'))
			->withInput()
			->withErrors($validation)
			->with('message', 'El formulario no ha sido completado de forma correcta.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$mensaje = $this->mensaje->findOrFail($id);

		return View::make('mensajes.show', compact('mensaje'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$mensaje = $this->mensaje->find($id);

		if (is_null($mensaje))
		{
			return Redirect::route('mensajes.index');
		}

		return View::make('mensajes.edit', compact('mensaje'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = array_except(Input::all(), '_method');
		$validation = Validator::make($input, Mensaje::$rules);

		if ($validation->passes())
		{
			$mensaje = $this->mensaje->find($id);
			$mensaje->update($input);

			return Redirect::route('mensajes.show', $id);
		}

		return Redirect::route('mensajes.edit', $id)
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->mensaje->find($id)->delete();

		return Redirect::route('mensajes.index');
	}

}
