<?php

class ConsorcioxmapasController extends BaseController {

	/**
	 * Consorcioxmapa Repository
	 *
	 * @var Consorcioxmapa
	 */
	protected $consorcioxmapa;

	public function __construct(Consorcioxmapa $consorcioxmapa)
	{
		$this->consorcioxmapa = $consorcioxmapa;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$consorcioxmapas = $this->consorcioxmapa->all();

		return View::make('consorcioxmapas.index', compact('consorcioxmapas'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('consorcioxmapas.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Consorcioxmapa::$rules);

		if ($validation->passes())
		{
			$this->consorcioxmapa->create($input);

			return Redirect::to('mapas/'.Input::get('mapa').'/edit');
		}

		return Redirect::route('consorcioxmapas.create')
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
		$consorcioxmapa = $this->consorcioxmapa->findOrFail($id);

		return View::make('consorcioxmapas.show', compact('consorcioxmapa'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$consorcioxmapa = $this->consorcioxmapa->find($id);

		if (is_null($consorcioxmapa))
		{
			return Redirect::route('consorcioxmapas.index');
		}

		return View::make('consorcioxmapas.edit', compact('consorcioxmapa'));
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
		$validation = Validator::make($input, Consorcioxmapa::$rules);

		if ($validation->passes())
		{
			$consorcioxmapa = $this->consorcioxmapa->find($id);
			$consorcioxmapa->update($input);

			return Redirect::route('consorcioxmapas.show', $id);
		}

		return Redirect::route('consorcioxmapas.edit', $id)
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
		$consorcioxmapa = $this->consorcioxmapa->find($id);
		$mapa = $consorcioxmapa->mapa;
		$consorcioxmapa->delete();

		return Redirect::to('mapas/'.$mapa.'/edit');
	}

}
