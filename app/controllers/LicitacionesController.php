<?php

class LicitacionesController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$licitaciones = Licitacion::all();

        return View::make('licitaciones.index',compact('licitaciones'));
	}

    public function indexNacionales()
    {
        $licitaciones = LicitacionNacional::all();

        return View::make('licitaciones_nacionales.index',compact('licitaciones'));
    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$oficinas = Oficina::lists('denominacion','id');

		$tipo = TipoLic::lists('nombre','id');

		$estado = EstadoLic::lists('nombre','id');


        return View::make('licitaciones.create',compact('oficinas','estado','tipo'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$data = Input::all();

		$validator = Validator::make($data = Input::all(), Licitacion::$rules);

		if ($validator->fails()) {
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Licitacion::guardar($data);


		return Redirect::route('admin.licitaciones.index')->with('msg', 'Nueva licitación!');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

        return View::make('licitaciones.show');
	}

	public function grid(){

		$licitaciones = Licitacion::select('id','pliego_tecnico','pliego_formal','fecha_apertura',
											'fecha_recepcion','anio_adquisicion','nro','tipo_id','objeto')
									->orderBy('id','DESC')
                                    ->get();


		$direcciones = Direccion::where('estado_id', '=', 1)->get();

		$delegaciones = Delegacion::where('estado_id', '=', 1)->get();

		return View::make('licitaciones.show',compact('licitaciones','direcciones','delegaciones'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$licitacion = Licitacion::find($id);

		$oficinas = Oficina::lists('denominacion','id');

		$tipo = TipoLic::lists('nombre','id');

		$estado = EstadoLic::lists('nombre','id');

        return View::make('licitaciones.edit',compact('licitacion','oficinas','tipo','estado'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$validator = Validator::make($data = Input::all(), Licitacion::$rules);

		if ($validator->fails()) {
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Licitacion::actualizar($data,$id);


		return Redirect::route('admin.licitaciones.index')->with('msg', 'Licitación actualizada!');
	}

	/**
	 * Create licitacion nacional.
	 *
	 * @return Response
	 */
	public function createNacional()
	{
	    $estado = ['1'=>'Publicada',
                    '2'=>'Evaluacion de ofertas',
                    '3'=>'Preadjudicada',
                    '4'=>'Adjudicada',
                    '5'=>'Contratada'];

        return View::make('licitaciones_nacionales.create',compact('estado'));
	}

	public function storeNacional(){


        $validator = Validator::make($data = Input::all(), LicitacionNacional::$rules);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        $lic = new LicitacionNacional();
        $lic->guardar($data);

    }

    public function detalle($slug){

	    $licitacion = LicitacionNacional::where('slug','=',$slug)->first();


        $direcciones = Direccion::where('estado_id', '=', 1)->get();

        $delegaciones = Delegacion::where('estado_id', '=', 1)->get();

        return View::make('licitaciones_nacionales.detalle',compact('licitacion','direcciones','delegaciones'));
    }

    public function gridNacionales(){

        $licitaciones = LicitacionNacional::select('id','nro_licitacion','ruta','expediente','slug')
            ->orderBy('id','DESC')
            ->get();


        $direcciones = Direccion::where('estado_id', '=', 1)->get();

        $delegaciones = Delegacion::where('estado_id', '=', 1)->get();

        return View::make('licitaciones_nacionales.show',compact('licitaciones','direcciones','delegaciones'));
    }

	public function delete($id) {

		Licitacion::find($id)->delete();

		return Redirect::route('admin.licitaciones.index')->with('msg', 'Licitación eliminada!');
	}

	public function editNacional($id){
        $licitacion = LicitacionNacional::find($id);

        $estado = ['1'=>'Publicada',
            '2'=>'Evaluacion de ofertas',
            '3'=>'Preadjudicada',
            '4'=>'Adjudicada',
            '5'=>'Contratada'];

        return View::make('licitaciones_nacionales.edit',compact('licitacion','estado'));
    }
    public function deleteNacional($id) {

        LicitacionNacional::find($id)->delete();

        return Redirect::url('admin/licitaciones-nacionales');
    }

    public function updateNacional($id){


        $validator = Validator::make($data = Input::all(), LicitacionNacional::$rules);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }


        $lic = new LicitacionNacional();
        $lic->actualizar($data,$id);

        return Redirect::route('licitaciones.nacionales.index');


    }

}
