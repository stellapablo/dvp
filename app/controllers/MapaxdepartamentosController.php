<?php

class MapaxdepartamentosController extends BaseController {

	/**
	 * Mapaxdepartamento Repository
	 *
	 * @var Mapaxdepartamento
	 */
	protected $mapaxdepartamento;

	public function __construct(Mapaxdepartamento $mapaxdepartamento)
	{
		$this->mapaxdepartamento = $mapaxdepartamento;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$mapaxdepartamentos = $this->mapaxdepartamento->all();

		return View::make('mapaxdepartamentos.index', compact('mapaxdepartamentos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('mapaxdepartamentos.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Mapaxdepartamento::$rules);

		if ($validation->passes())
		{
			$this->mapaxdepartamento->create($input);

			return Redirect::route('mapaxdepartamentos.index');
		}

		return Redirect::route('mapaxdepartamentos.create')
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
		$mapaxdepartamento = $this->mapaxdepartamento->findOrFail($id);

		return View::make('mapaxdepartamentos.show', compact('mapaxdepartamento'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$mapaxdepartamento = $this->mapaxdepartamento->find($id);

		if (is_null($mapaxdepartamento))
		{
			return Redirect::route('mapaxdepartamentos.index');
		}

		return View::make('mapaxdepartamentos.edit', compact('mapaxdepartamento'));
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
		$validation = Validator::make($input, Mapaxdepartamento::$rules);

		if ($validation->passes())
		{
			$mapaxdepartamento = $this->mapaxdepartamento->find($id);
			$mapaxdepartamento->update($input);

			return Redirect::route('mapaxdepartamentos.show', $id);
		}

		return Redirect::route('mapaxdepartamentos.edit', $id)
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
		$this->mapaxdepartamento->find($id)->delete();

		return Redirect::route('mapaxdepartamentos.index');
	}

}
