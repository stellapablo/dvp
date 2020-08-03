<?php

class EstadocaminosController extends BaseController {

	/**
	 * Estadocamino Repository
	 *
	 * @var Estadocamino
	 */
	protected $estadocamino;

	public function __construct(Estadocamino $estadocamino)
	{
		$this->estadocamino = $estadocamino;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$estadocaminos = $this->estadocamino->all();

		return View::make('estadocaminos.index', compact('estadocaminos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('estadocaminos.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Estadocamino::$rules);

		if ($validation->passes())
		{
			$this->estadocamino->create($input);

			return Redirect::route('estadocaminos.index');
		}

		return Redirect::route('estadocaminos.create')
		->withInput()
		->withErrors($validation)
		->with('message', 'There were validation errors.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$estadocamino = $this->estadocamino->findOrFail($id);

		return View::make('estadocaminos.show', compact('estadocamino'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$estadocamino = $this->estadocamino->find($id);

		if (is_null($estadocamino))
		{
			return Redirect::route('estadocaminos.index');
		}

		return View::make('estadocaminos.edit', compact('estadocamino'));
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
		$validation = Validator::make($input, Estadocamino::$rules);

		if ($validation->passes())
		{
			$estadocamino = $this->estadocamino->find($id);
			$estadocamino->update($input);

			return Redirect::route('estadocaminos.show', $id);
		}

		return Redirect::route('estadocaminos.edit', $id)
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
		$caminos = Camino::where('estado','=',$id)->count();
		if($caminos <= 0){
			$this->estadocamino->find($id)->delete();
			return Redirect::route('estadocaminos.index')->with('message', 'Estado de camino o puente elimiando correctamente');
		}
		return Redirect::route('estadocaminos.index')->with('message', 'No es posible eliminar este estado porque posee caminos asociados a el');
	}

}
