<?php

class TipomapasController extends BaseController {

	public $iconos = ['pdf'=>'PDF', 'jpg'=>'JPG','googleearth'=>'GOOGLE EARTH', 'garmin'=>'GARMIN', 'carrimap'=>'CARRIMAP'];
	/**
	 * Tipomapa Repository
	 *
	 * @var Tipomapa
	 */
	protected $tipomapa;

	public function __construct(Tipomapa $tipomapa)
	{
		$this->tipomapa = $tipomapa;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$tipomapas = $this->tipomapa->all();

		return View::make('tipomapas.index', compact('tipomapas'));
	}

	public function editarHtml($id){
		$tipomapa = $this->tipomapa->find($id);

		if (is_null($tipomapa))
		{
			return Redirect::route('tipomapas.index');
		}

		return View::make('tipomapas.editHtml', compact('tipomapa'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$iconos = $this->iconos; 
		return View::make('tipomapas.create', compact('iconos'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Tipomapa::$rules);

		if ($validation->passes())
		{
			$this->tipomapa->create($input);

			return Redirect::route('tipomapas.index');
		}

		return Redirect::route('tipomapas.create')
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
		$tipomapa = $this->tipomapa->findOrFail($id);

		return View::make('tipomapas.show', compact('tipomapa'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$tipomapa = $this->tipomapa->find($id);

		if (is_null($tipomapa))
		{
			return Redirect::route('tipomapas.index');
		}
		$iconos = [($tipomapa->icono)=>($tipomapa->icono)]+$this->iconos; 
		return View::make('tipomapas.edit', compact('tipomapa', 'iconos'));
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
		$validation = Validator::make($input, Tipomapa::$rules);

		if ($validation->passes())
		{
			$tipomapa = $this->tipomapa->find($id);
			$tipomapa->update($input);

			return Redirect::route('tipomapas.index');
		}

		return Redirect::route('tipomapas.edit', $id)
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
		$mapas = Mapa::where('tipo','=',$id)->count();
		if($mapas <= 0){
			$this->tipomapa->find($id)->delete();	
			return Redirect::route('tipomapas.index')->with('message', 'Tipo de mapa eliminado correctamente');
		}
		return Redirect::route('tipomapas.index')->with('message', 'No es posible eliminar porque posee mapas asociados');
	}

}
