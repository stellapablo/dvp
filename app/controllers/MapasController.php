<?php

class MapasController extends BaseController {

    /**
     * Mapa Repository
     *
     * @var Mapa
     */
    protected $mapa;

    public function __construct(Mapa $mapa) {
        $this->mapa = $mapa;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    public function interactivo(){
        return View::make('mapas.mapaInteractivo');
    }

    public function index() {
        $mapas = $this->mapa->all();

        return View::make('mapas.index', compact('mapas'));
    }

    public function buscarMapas() {

       $caminos = DB::table('caminos')
       ->join('tipocaminos', 'tipocaminos.id', '=', 'caminos.tipo')
       ->join('estadocaminos', 'estadocaminos.id', '=', 'caminos.estado')       
       ->select('caminos.id', 'caminos.nombre', 'caminos.tipo', 'caminos.estado')       
       ->get();

       $tiposDeMapas = Tipomapa::all();

       $alertas = Alertum::where('estado_id', '=', 1)->get();

       $mapas = $this->mapa->where('nombre','LIKE','%'.Input::get('busqueda').'%')->orderBy('nombre')->paginate(10);

       $direcciones = Direccion::where('estado_id', '=', 1)->get();

       $delegaciones = Delegacion::where('estado_id', '=', 1)->get();

       $departamentos =['0'=>'-SELECCIONAR-']+ Departamento::lists('nombre', 'id');
       $consorcios =['0'=>'-SELECCIONAR-']+ Consorcio::lists('nombre', 'id');

       return View::make('mapas.indexPublico', compact('delegaciones', 'direcciones', 'mapas', 'caminos', 'tiposDeMapas','alertas','departamentos','consorcios'));
   }

   public function filtrarMapas($id) {
    $caminos = DB::table('caminos')
    ->join('tipocaminos', 'tipocaminos.id', '=', 'caminos.tipo')
    ->join('estadocaminos', 'estadocaminos.id', '=', 'caminos.estado')
    ->select('caminos.id', 'caminos.nombre', 'caminos.tipo', 'caminos.estado')
    ->get();

    $tiposDeMapas = Tipomapa::all();

    $mapas = $this->mapa->where('tipo', '=', $id)->orderBy('nombre')->paginate(10);

    $direcciones = Direccion::where('estado_id', '=', 1)->get();

    $delegaciones = Delegacion::where('estado_id', '=', 1)->get();

    $departamentos =['0'=>'-SELECCIONAR-']+ Departamento::lists('nombre', 'id');
    $consorcios =['0'=>'-SELECCIONAR-']+ Consorcio::lists('nombre', 'id');

    return View::make('mapas.indexPublico', compact('delegaciones','direcciones','mapas', 'caminos', 'tiposDeMapas', 'departamentos', 'consorcios'));
}

public function filtrarMapasPorZona($id) {
    $caminos = DB::table('caminos')
    ->join('tipocaminos', 'tipocaminos.id', '=', 'caminos.tipo')
    ->join('estadocaminos', 'estadocaminos.id', '=', 'caminos.estado')
    ->select('caminos.id', 'caminos.nombre', 'caminos.tipo', 'caminos.estado')
    ->get();

    $tiposDeMapas = Tipomapa::all();

    $mapas = $this->mapa->where('zona'.$id, '=', '1')
    ->orderBy('nombre')
    ->paginate(10);

    $direcciones = Direccion::where('estado_id', '=', 1)->get();

    $delegaciones = Delegacion::where('estado_id', '=', 1)->get();

    $departamentos =['0'=>'-SELECCIONAR-']+ Departamento::lists('nombre', 'id');
    $consorcios =['0'=>'-SELECCIONAR-']+ Consorcio::lists('nombre', 'id');

    return View::make('mapas.indexPublico', compact('delegaciones','direcciones','mapas', 'caminos', 'tiposDeMapas','departamentos','consorcios'));
}

public function filtrarMapasPorConsorcio() {

    $tiposDeMapas = Tipomapa::all();

    $mapas = DB::table('mapas')
    ->join('consorcioxmapas', 'mapas.id', '=', 'consorcioxmapas.mapa')
    ->where('consorcioxmapas.consorcio','=',Input::get('consorcios'))
    ->select('mapas.archivo','mapas.id', 'mapas.nombre', 'mapas.descripcion', 'mapas.tipo', 'mapas.tipo', 'mapas.zona1', 'mapas.zona2','mapas.zona3', 'mapas.zona4', 'mapas.zona5', 'mapas.tamanio', 'mapas.provinciacompleta')
    ->orderBy('nombre')
    ->paginate(10);

    $direcciones = Direccion::where('estado_id', '=', 1)->get();

    $delegaciones = Delegacion::where('estado_id', '=', 1)->get();

    $departamentos =['0'=>'-SELECCIONAR-']+ Departamento::lists('nombre', 'id');
    $consorcios =['0'=>'-SELECCIONAR-']+ Consorcio::lists('nombre', 'id');

    return View::make('mapas.indexPublico', compact('departamentos','consorcios','delegaciones','direcciones','mapas','tiposDeMapas'));
}

public function filtrarMapasPorDepartamento() {

    $tiposDeMapas = Tipomapa::all();

    $mapas = DB::table('mapas')
    ->join('deptoxmapas', 'mapas.id', '=', 'deptoxmapas.mapa')
    ->where('deptoxmapas.departamento','=',Input::get('departamento'))
    ->select('mapas.archivo','mapas.id', 'mapas.nombre', 'mapas.descripcion', 'mapas.tipo', 'mapas.tipo', 'mapas.zona1', 'mapas.zona2','mapas.zona3', 'mapas.zona4', 'mapas.zona5', 'mapas.tamanio', 'mapas.provinciacompleta')
    ->orderBy('nombre')
    ->paginate(10);

    $direcciones = Direccion::where('estado_id', '=', 1)->get();

    $delegaciones = Delegacion::where('estado_id', '=', 1)->get();

    $departamentos =['0'=>'-SELECCIONAR-']+ Departamento::lists('nombre', 'id');
    $consorcios =['0'=>'-SELECCIONAR-']+ Consorcio::lists('nombre', 'id');

    return View::make('mapas.indexPublico', compact('departamentos','consorcios','delegaciones','direcciones','mapas','tiposDeMapas'));
}

public function indexPublico() {
    $caminos = DB::table('caminos')
    ->join('tipocaminos', 'tipocaminos.id', '=', 'caminos.tipo')
    ->join('estadocaminos', 'estadocaminos.id', '=', 'caminos.estado')
    ->select('caminos.id', 'caminos.nombre', 'caminos.tipo', 'caminos.estado')
    ->get();
    $tiposDeMapas = Tipomapa::all();
    $alertas = Alertum::where('estado_id', '=', 1)->get();
    $mapas = $this->mapa->orderBy('nombre')->paginate(10);

    $direcciones = Direccion::where('estado_id', '=', 1)->get();

    $delegaciones = Delegacion::where('estado_id', '=', 1)->get();

    $departamentos =['0'=>'-SELECCIONAR-']+ Departamento::lists('nombre', 'id');
    $consorcios =['0'=>'-SELECCIONAR-']+ Consorcio::lists('nombre', 'id');

    return View::make('mapas.indexPublico', compact('consorcios','departamentos','delegaciones', 'direcciones', 'mapas', 'caminos', 'tiposDeMapas','alertas'));
}

public function showPublico($id) {
    $mapa = $this->mapa->findOrFail($id);

    if ($mapa->zona1 == 1) {
        $consorciosZona1 = Consorcio::where('zona', '=', '1')->orderBy('numero')->get();
    }
    if ($mapa->zona2 == 1) {
        $consorciosZona2 = Consorcio::where('zona', '=', '2')->orderBy('numero')->get();
    }
    if ($mapa->zona3 == 1) {
        $consorciosZona3 = Consorcio::where('zona', '=', '3')->orderBy('numero')->get();
    }
    if ($mapa->zona4 == 1) {
        $consorciosZona4 = Consorcio::where('zona', '=', '4')->orderBy('numero')->get();
    }
    if ($mapa->zona5 == 1) {
        $consorciosZona5 = Consorcio::where('zona', '=', '5')->orderBy('numero')->get();
    }

    $caminos = DB::table('caminos')
    ->join('tipocaminos', 'tipocaminos.id', '=', 'caminos.tipo')
    ->join('estadocaminos', 'estadocaminos.id', '=', 'caminos.estado')
    ->select('caminos.id', 'caminos.nombre', 'caminos.tipo', 'caminos.estado')
    ->get();

    $direcciones = Direccion::where('estado_id', '=', 1)->get();

    $delegaciones = Delegacion::where('estado_id', '=', 1)->get();

    $tiposDeMapas = Tipomapa::all();

    $deptoxmapas = Deptoxmapa::where('mapa','=',$id)->get();
    $consorcioxmapas = Consorcioxmapa::where('mapa','=',$id)->get();

    return View::make('mapas.showPublico', compact('consorcioxmapas','deptoxmapas','tiposDeMapas','delegaciones', 'direcciones', 'mapa', 'caminos', 'consorciosZona1', 'consorciosZona2', 'consorciosZona3', 'consorciosZona4', 'consorciosZona5'));
}

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        $tiposDeMapas = Tipomapa::lists('nombre', 'id');
        return View::make('mapas.create', compact('tiposDeMapas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {

        $input = Input::all();
        $validation = Validator::make($input, Mapa::$rules);
        ini_set('post_max_size', '100M');
        ini_set('upload_max_filesize', '100M');
        ini_set('max_execution_time', '1000');
        ini_set('max_input_time', '1000');
        if ($validation->passes() && Input::hasFile('archivo')) {

            if (Input::hasFile('archivo')) {
                $tamanio = Input::file('archivo')->getSize();
                Input::file('archivo')->move('repositoriomapas', Input::file('archivo')->getClientOriginalName());
            }

            $mapa = new Mapa();
            $mapa->nombre = Input::get('nombre');
            $mapa->archivo = Input::file('archivo')->getClientOriginalName();
            $mapa->descripcion = Input::get('descripcion');
            $mapa->tipo = Input::get('tipo');
            $mapa->tamanio = $tamanio;

            if (Input::get('provinciacompleta')) {
                $mapa->provinciacompleta = 1;
            } else {
                $mapa->provinciacompleta = 0;
            }

            if (Input::get('zona1')) {
                $mapa->zona1 = 1;
            }

            if (Input::get('zona2')) {
                $mapa->zona2 = 1;
            }

            if (Input::get('zona3')) {
                $mapa->zona3 = 1;
            }

            if (Input::get('zona4')) {
                $mapa->zona4 = 1;
            }

            if (Input::get('zona5')) {
                $mapa->zona5 = 1;
            }

            $mapa->save();

            return Redirect::route('mapas.index');
        }

        return Redirect::route('mapas.create')
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
    public function show($id) {
        $mapa = $this->mapa->findOrFail($id);

        return View::make('mapas.show', compact('mapa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        $mapa = $this->mapa->find($id);

        if (is_null($mapa)) {
            return Redirect::route('mapas.index');
        }
        $departamentos = Departamento::lists('nombre', 'id');
        $tiposDeMapas = Tipomapa::lists('nombre', 'id');        
        $deptoxmapas = Deptoxmapa::where('mapa','=',$id)->get();
        $consorcios = Consorcio::lists('nombre', 'id');
        $consorcioxmapas = Consorcioxmapa::where('mapa','=',$id)->get();
        return View::make('mapas.edit', compact('mapa', 'tiposDeMapas','departamentos', 'deptoxmapas', 'consorcios','consorcioxmapas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        $input = array_except(Input::all(), '_method');
        $validation = Validator::make($input, Mapa::$rules);

        if ($validation->passes()) {

            $mapa = $this->mapa->find($id);


            if (Input::hasFile('archivo')) {
                File::delete('repositoriomapas/' . $mapa->archivo);
                Input::file('archivo')->move('repositoriomapas', Input::file('archivo')->getClientOriginalName());
                $mapa->archivo = Input::file('archivo')->getClientOriginalName();
            }

            $mapa->nombre = Input::get('nombre');
            $mapa->descripcion = Input::get('descripcion');
            $mapa->tipo = Input::get('tipo');

            if (Input::get('provinciacompleta')) {
                $mapa->provinciacompleta = 1;
            } else {
                $mapa->provinciacompleta = 0;
            }

            if (Input::get('zona1')) {
                $mapa->zona1 = 1;
            } else {
                $mapa->zona1 = 0;
            }

            if (Input::get('zona2')) {
                $mapa->zona2 = 1;
            } else {
                $mapa->zona2 = 0;
            }

            if (Input::get('zona3')) {
                $mapa->zona3 = 1;
            } else {
                $mapa->zona3 = 0;
            }

            if (Input::get('zona4')) {
                $mapa->zona4 = 1;
            } else {
                $mapa->zona4 = 0;
            }

            if (Input::get('zona5')) {
                $mapa->zona5 = 1;
            } else {
                $mapa->zona5 = 0;
            }

            $mapa->update();

            return Redirect::route('mapas.index');
        }

        return Redirect::route('mapas.edit', $id)
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
    public function destroy($id) {

        $mapa = $this->mapa->find($id);
        File::delete('repositoriomapas/' . $mapa->archivo);
        $mapa->delete();
        DB::table('consorcioxmapas')->where('mapa','=',$id)->delete();
        DB::table('deptoxmapas')->where('mapa','=',$id)->delete();
        return Redirect::route('mapas.index')->with('message', 'Mapa eliminado correctamente');
    }

}