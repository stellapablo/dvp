<?php

class TipocaminosController extends BaseController {

	/**
	 * Tipocamino Repository
	 *
	 * @var Tipocamino
	 */
	protected $tipocamino;

	public function __construct(Tipocamino $tipocamino)
	{
		$this->tipocamino = $tipocamino;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$tipocaminos = $this->tipocamino->all();

		return View::make('tipocaminos.index', compact('tipocaminos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('tipocaminos.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Tipocamino::$rules);

		if ($validation->passes())
		{
			$this->tipocamino->create($input);

			return Redirect::route('tipocaminos.index');
		}

		return Redirect::route('tipocaminos.create')
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
		$tipocamino = $this->tipocamino->findOrFail($id);

		return View::make('tipocaminos.show', compact('tipocamino'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$tipocamino = $this->tipocamino->find($id);

		if (is_null($tipocamino))
		{
			return Redirect::route('tipocaminos.index');
		}

		return View::make('tipocaminos.edit', compact('tipocamino'));
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
		$validation = Validator::make($input, Tipocamino::$rules);

		if ($validation->passes())
		{
			$tipocamino = $this->tipocamino->find($id);
			$tipocamino->update($input);

			return Redirect::route('tipocaminos.index');
		}

		return Redirect::route('tipocaminos.edit', $id)
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
		$caminos = Camino::where('tipo','=',$id)->count();
		if($caminos<= 0){
			$this->tipocamino->find($id)->delete();
			return Redirect::route('tipocaminos.index')->with('message', 'Tipo de camino o puente eliminado correctamente');
		}
			return Redirect::route('tipocaminos.index')->with('message', 'No es posible eliminar este tipo ya que posee caminos asociados');
	}

}
