<?php

class ConsorciosController extends BaseController {

    /**
     * Consorcio Repository
     *
     * @var Consorcio
     */
    protected $consorcio;

    public function __construct(Consorcio $consorcio) {
        $this->consorcio = $consorcio;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    public function buscarConsorcio(){

        $consorcios = Consorcio::where('nombre','LIKE','%'.Input::get('busqueda').'%')
        ->orWhere('numero','LIKE',Input::get('busqueda'))
        ->orWhere('secretario','LIKE','%'.Input::get('busqueda').'%')
        ->orWhere('presidente','LIKE','%'.Input::get('busqueda').'%')
        ->orWhere('tesorero','LIKE','%'.Input::get('busqueda').'%')
        ->orWhere('secretarioadjunto','LIKE','%'.Input::get('busqueda').'%')
        ->orWhere('zona','LIKE',Input::get('busqueda'))
        ->orderBy('numero')
        ->paginate(1000);

        $tiposDeMapas = Tipomapa::all();

        return View::make('consorcios.indexPublico', compact('tiposDeMapas','consorcios'));
    }

    public function indexPublico() {
     $consorcios = Consorcio::orderBy('numero')->paginate(20);

     $tiposDeMapas = Tipomapa::all();

     return View::make('consorcios.indexPublico', compact('tiposDeMapas','consorcios','mapas'));
 }

 public function verConsorcio($numero) {
    $consorcio = Consorcio::where('numero', '=', $numero)->first();
    //$mapas = Mapa::where('zona' . $consorcio->zona, '=', '1')->get();
    $mapas = Consorcioxmapa::where('consorcio','=',$numero)->get();
    $consorcios = Consorcio::lists('numero', 'id');
    $consorciosZona1 = Consorcio::where('zona', '=', 1)->orderBy('numero')->get();
    $consorciosZona2 = Consorcio::where('zona', '=', 2)->orderBy('numero')->get();
    $consorciosZona3 = Consorcio::where('zona', '=', 3)->orderBy('numero')->get();
    $consorciosZona4 = Consorcio::where('zona', '=', 4)->orderBy('numero')->get();
    $consorciosZona5 = Consorcio::where('zona', '=', 5)->orderBy('numero')->get();

    $direcciones = Direccion::where('estado_id', '=', 1)->get();

    $delegaciones = Delegacion::where('estado_id', '=', 1)->get();

    $tiposDeMapas = Tipomapa::all();

    return View::make('consorcios.showPublico', compact('tiposDeMapas','delegaciones','direcciones','consorcio', 'consorcios', 'consorciosZona1', 'consorciosZona2', 'consorciosZona3', 'consorciosZona4', 'consorciosZona5', 'mapas'));
}

public function index() {
        //$consorcios = $this->consorcio->all();
    $consorcios = DB::table('consorcios')->orderBy('numero')->get();

    return View::make('consorcios.index', compact('consorcios'));
}

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        $zonas = Zona::lists('numero', 'id');
        $departamentos = Departamento::lists('nombre', 'id');
        return View::make('consorcios.create', compact('zonas', 'departamentos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        $input = Input::all();
        $validation = Validator::make($input, Consorcio::$rules);

        if ($validation->passes()) {
            $this->consorcio->create($input);

            return Redirect::route('consorcios.index');
        }

        return Redirect::route('consorcios.create')
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
        $consorcio = $this->consorcio->findOrFail($id);

        return View::make('consorcios.show', compact('consorcio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        $consorcio = $this->consorcio->find($id);

        if (is_null($consorcio)) {
            return Redirect::route('consorcios.index');
        }
        $zonas = Zona::lists('numero', 'id');
        $departamentos = Departamento::lists('nombre', 'id');
        return View::make('consorcios.edit', compact('consorcio', 'zonas', 'departamentos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        $input = array_except(Input::all(), '_method');
        $validation = Validator::make($input, Consorcio::$rules);

        if ($validation->passes()) {
            $consorcio = $this->consorcio->find($id);
            $consorcio->update($input);

            return Redirect::route('consorcios.index');
        }

        return Redirect::route('consorcios.edit', $id)
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
        $this->consorcio->find($id)->delete();

        return Redirect::route('consorcios.index');
    }

}