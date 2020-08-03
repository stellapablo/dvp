<?php

class DeptoxmapasController extends BaseController {

	/**
	 * Deptoxmapa Repository
	 *
	 * @var Deptoxmapa
	 */
	protected $deptoxmapa;

	public function __construct(Deptoxmapa $deptoxmapa)
	{
		$this->deptoxmapa = $deptoxmapa;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$deptoxmapas = $this->deptoxmapa->all();

		return View::make('deptoxmapas.index', compact('deptoxmapas'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('deptoxmapas.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Deptoxmapa::$rules);

		if ($validation->passes())
		{
			$this->deptoxmapa->create($input);
			return Redirect::to('mapas/'.Input::get('mapa').'/edit');
		}

		return Redirect::route('deptoxmapas.create')
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
		$deptoxmapa = $this->deptoxmapa->findOrFail($id);

		return View::make('deptoxmapas.show', compact('deptoxmapa'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$deptoxmapa = $this->deptoxmapa->find($id);

		if (is_null($deptoxmapa))
		{
			return Redirect::route('deptoxmapas.index');
		}

		return View::make('deptoxmapas.edit', compact('deptoxmapa'));
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
		$validation = Validator::make($input, Deptoxmapa::$rules);

		if ($validation->passes())
		{
			$deptoxmapa = $this->deptoxmapa->find($id);
			$deptoxmapa->update($input);

			return Redirect::route('deptoxmapas.show', $id);
		}

		return Redirect::route('deptoxmapas.edit', $id)
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
		$departamentoxmapa = $this->deptoxmapa->find($id); 
		$mapa = $departamentoxmapa->mapa;
		$departamentoxmapa->delete();

		return Redirect::to('mapas/'.$mapa.'/edit');
	}

}
