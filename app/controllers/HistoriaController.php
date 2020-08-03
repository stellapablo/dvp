<?php

class HistoriaController extends BaseController {

	/**
	 * Historium Repository
	 *
	 * @var Historium
	 */
	protected $historium;

	public function __construct(Historium $historium)
	{
		$this->historium = $historium;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function indexPublico($id)
	{

		$tiposDeMapas = Tipomapa::all();

		$mapas = Mapa::where('zona1','=','1')
		->where('zona2','=','1')
		->where('zona3','=','1')
		->where('zona4','=','1')
		->where('zona5','=','1')
		->get();

		$tiposDeMapas = Tipomapa::all();

		return View::make('historia.indexPublica', compact('mapas','tiposDeMapas','id'));
	}

	public function graficaPublica($id)
	{		
		$historia1 = $this->historium->find($id);
		if(isset($historia1->id)){
			$id = $historia1->id;
		}else{
			$historia1 = $this->historium->find(1);
		}

		$historia2 = $this->historium->find($historia1->id+1);
		if(isset($historia2->id)){
			$id = $historia2->id;
		}else{
			$historia2 = $this->historium->find(1);
		}

		$historia3 = $this->historium->find($historia2->id+1);
		if(isset($historia3->id)){
			$id = $historia3->id;
		}else{
			$historia3 = $this->historium->find(1);
		}

		$historia4 = $this->historium->find($historia3->id+1);
		if(isset($historia4->id)){
			$id = $historia4->id;
		}else{			
			$historia4 = $this->historium->find(1);
		}


		return View::make('historia.graficaPublica2', compact('historia1','historia2','historia3','historia4'));
	}

	public function graficaPublica2()
	{
		//$historia = $this->historium->all()->paginate(1)->get();
		$historia = DB::table('historia')->simplePaginate(1);

		return View::make('historia.graficaPublica2', compact('historia'));
	}

	public function index()
	{
		$historia = $this->historium->orderBy('fecha')->get();

		return View::make('historia.index', compact('historia'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('historia.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Historium::$rules);

		if ($validation->passes())
		{

			if (is_uploaded_file($_FILES['foto']['tmp_name'])) {

				$uploaddir = 'imghistoria/';

            $extensionesArchivo = array('jpg', 'jpeg', 'gif', 'png'); // File extensions
            $fileParts = pathinfo($_FILES['foto']['name']);

            if (in_array($fileParts['extension'], $extensionesArchivo)) {

            	print_r($_FILES['foto']);
            	$name = $_FILES['foto']['name'];
            	$fechaArchivo = New DateTime('now');
            	$nombreArchivo = date_format($fechaArchivo, 'Y-m-d H:i:s').Input::file('foto')->getClientOriginalName();
            	$uploaddir = $uploaddir .$nombreArchivo;

            	$tempname = $_FILES['foto']['tmp_name'];

            	$result = move_uploaded_file($_FILES['foto']['tmp_name'], $uploaddir);

            }

            $img = Image::make($uploaddir);
            $img->resize(399, 244);
            $img->save($uploaddir);            
        }

        $historia = new Historium();

        $fecha = New DateTime(Input::get('fecha'));
        $historia->fecha = date_format($fecha,'Y-m-d');

        if(isset($nombreArchivo)){
        	$historia->foto = $nombreArchivo;	
        }
        
        $historia->titulo = Input::get('titulo');
        $historia->descripcion = Input::get('descripcion');
        $historia->save();

        return Redirect::route('historia.index');
        
    }

    return Redirect::route('historia.create')
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
		$historium = $this->historium->findOrFail($id);

		return View::make('historia.show', compact('historium'));
	}

	public function ShowPublico($id)
	{
		$historium = $this->historium->findOrFail($id);
		$tiposDeMapas = Tipomapa::all();
		return View::make('historia.showPublico', compact('historium', 'tiposDeMapas'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$historium = $this->historium->find($id);
		$fecha = new DateTime($historium->fecha);
		$fechaFormateada = date_format($fecha, 'd-m-Y');

		if (is_null($historium))
		{
			return Redirect::route('historia.index');
		}

		return View::make('historia.edit', compact('historium', 'fechaFormateada'));
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
		$validation = Validator::make($input, Historium::$rules);

		if ($validation->passes())
		{
			$historia = $this->historium->find($id);

			//------------------ARCHIVO-----------------

			if (is_uploaded_file($_FILES['foto']['tmp_name'])) {

				File::delete('imghistoria/' . $historia->foto);

				$uploaddir = 'imghistoria/';

	            $extensionesArchivo = array('jpg', 'jpeg', 'gif', 'png'); // File extensions
	            $fileParts = pathinfo($_FILES['foto']['name']);

	            if (in_array($fileParts['extension'], $extensionesArchivo)) {

	            	print_r($_FILES['foto']);
	            	$name = $_FILES['foto']['name'];
	            	$fechaArchivo = New DateTime('now');
	            	$nombreArchivo = date_format($fechaArchivo, 'Y-m-d H:i:s').Input::file('foto')->getClientOriginalName();
	            	$uploaddir = $uploaddir .$nombreArchivo;

	            	$tempname = $_FILES['foto']['tmp_name'];

	            	$result = move_uploaded_file($_FILES['foto']['tmp_name'], $uploaddir);

	            }

	            $img = Image::make($uploaddir);
	            $img->resize(399, 244);
	            $img->save($uploaddir);

	            $historia->foto = $nombreArchivo;
	        }

			//------------------ARCHIVO-----------------

	        $fecha = New DateTime(Input::get('fecha'));
	        $historia->fecha = date_format($fecha,'Y-m-d');

	        $historia->titulo = Input::get('titulo');
	        $historia->descripcion = Input::get('descripcion');
	        $historia->save();

	        return Redirect::route('historia.show', $id);
	    }

	    return Redirect::route('historia.edit', $id)
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
		$historia = $this->historium->find($id);
		
		File::delete('imghistoria/' . $historia->foto);

		$historia->delete();
		

		return Redirect::route('historia.index');
	}

}
