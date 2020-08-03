<?php

class MapaxzonasController extends BaseController {

	/**
	 * Mapaxzona Repository
	 *
	 * @var Mapaxzona
	 */
	protected $mapaxzona;

	public function __construct(Mapaxzona $mapaxzona)
	{
		$this->mapaxzona = $mapaxzona;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$mapaxzonas = $this->mapaxzona->all();

		return View::make('mapaxzonas.index', compact('mapaxzonas'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('mapaxzonas.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Mapaxzona::$rules);

		if ($validation->passes())
		{
			$this->mapaxzona->create($input);

			return Redirect::route('mapaxzonas.index');
		}

		return Redirect::route('mapaxzonas.create')
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
		$mapaxzona = $this->mapaxzona->findOrFail($id);

		return View::make('mapaxzonas.show', compact('mapaxzona'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$mapaxzona = $this->mapaxzona->find($id);

		if (is_null($mapaxzona))
		{
			return Redirect::route('mapaxzonas.index');
		}

		return View::make('mapaxzonas.edit', compact('mapaxzona'));
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
		$validation = Validator::make($input, Mapaxzona::$rules);

		if ($validation->passes())
		{
			$mapaxzona = $this->mapaxzona->find($id);
			$mapaxzona->update($input);

			return Redirect::route('mapaxzonas.show', $id);
		}

		return Redirect::route('mapaxzonas.edit', $id)
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
		$this->mapaxzona->find($id)->delete();

		return Redirect::route('mapaxzonas.index');
	}

}
