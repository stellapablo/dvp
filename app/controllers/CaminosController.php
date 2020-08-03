<?php

class CaminosController extends BaseController {

	/**
	 * Camino Repository
	 *
	 * @var Camino
	 */
	protected $camino;

	public function __construct(Camino $camino)
	{
		$this->camino = $camino;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$caminos = $this->camino->all();
		
		return View::make('caminos.index', compact('caminos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$tipos = Tipocamino::lists('nombre','id');
		$estados = Estadocamino::lists('nombre','id');
		return View::make('caminos.create', compact('estados', 'tipos'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Camino::$rules);

		if ($validation->passes())
		{
			$this->camino->create($input);

			return Redirect::route('caminos.index');
		}

		return Redirect::route('caminos.create')
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
		$camino = $this->camino->findOrFail($id);

		return View::make('caminos.show', compact('camino'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$camino = $this->camino->find($id);

		if (is_null($camino))
		{
			return Redirect::route('caminos.index');
		}
		$tipos = Tipocamino::lists('nombre','id');
		$estados = Estadocamino::lists('nombre','id');
		return View::make('caminos.edit', compact('camino', 'tipos', 'estados'));
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
		$validation = Validator::make($input, Camino::$rules);

		if ($validation->passes())
		{
			$camino = $this->camino->find($id);
			$camino->update($input);

			return Redirect::route('caminos.index');
		}

		return Redirect::route('caminos.edit', $id)
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
		$this->camino->find($id)->delete();

		return Redirect::route('caminos.index');
	}

}
