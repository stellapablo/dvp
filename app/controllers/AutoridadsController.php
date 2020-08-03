<?php

class AutoridadsController extends \BaseController {

    /**
     * Display a listing of autoridads
     *
     * @return Response
     */
    public function index() {
        $autoridades = Autoridad::all();

        return View::make('autoridades.index', compact('autoridades'));
    }

    /**
     * Show the form for creating a new autoridad
     *
     * @return Response
     */
    public function create() {
        $estados = Estado::lists('nombre', 'id');
        return View::make('autoridades.create', compact('estados'));
    }

    /**
     * Store a newly created autoridad in storage.
     *
     * @return Response
     */
    public function store() {
        $validator = Validator::make($data = Input::all(), Autoridad::$rules);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }


        if($data['imagen'] != ''){
            $string = explode("/upload", $data['imagen']);
            $data['imagen'] = "/upload" . $string[1];
        }

        Autoridad::create($data);

        return Redirect::route('admin.autoridades.index');
    }

    /**
     * Display the specified autoridad.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        $autoridad = Autoridad::findOrFail($id);

        $alertas = Alertum::where('estado_id', '=', 1)->get();
        $direcciones = Direccion::where('estado_id', '=', 1)->get();
        $delegaciones = Delegacion::where('estado_id', '=', 1)->get();


        $autoridades = Autoridad::select('nombre','id','imagen')->orderBy('nombre','desc')->get();


        return View::make('autoridades.show', compact('autoridad','alertas','direcciones','delegaciones','autoridades'));
    }

    /**
     * Show the form for editing the specified autoridad.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        $autoridad = Autoridad::find($id);

        $estados = Estado::lists('nombre', 'id');

        return View::make('autoridades.edit', compact('autoridad', 'estados'));
    }

    /**
     * Update the specified autoridad in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        $autoridad = Autoridad::findOrFail($id);

        $validator = Validator::make($data = Input::all(), Autoridad::$rules);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }


        if($data['imagen'] != ''){
            $string = explode("/upload", $data['imagen']);
            $data['imagen'] = "/upload" . $string[1];
        }

        $autoridad->update($data);

        return Redirect::route('admin.autoridades.index');
    }

    /**
     * Remove the specified autoridad from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        Autoridad::destroy($id);

        return Redirect::route('autoridades.index');
    }

}
