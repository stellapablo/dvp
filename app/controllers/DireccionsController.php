<?php

class DireccionsController extends \BaseController {

    /**
     * Display a listing of direccions
     *
     * @return Response
     */
    public function index() {
        $direcciones = Direccion::all();

        return View::make('direcciones.index', compact('direcciones'));
    }

    /**
     * Show the form for creating a new direccion
     *
     * @return Response
     */
    public function create() {

        $estados = Estado::lists('nombre', 'id');
        return View::make('direcciones.create', compact('estados'));
    }

    /**
     * Store a newly created direccion in storage.
     *
     * @return Response
     */
    public function store() {
        $validator = Validator::make($data = Input::all(), Direccion::$rules);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        $slug = Str::slug($data['nombre']);

        Direccion::create(["nombre" => $data['nombre'], "slug" => $slug,
            "director" => $data['director'],
            "telefono" => $data['telefono'],
            "interno" => $data['interno'],
            "email" => $data['email'],
            "desarrollo" => $data['desarrollo'],
            "estado_id" => $data['estado_id'],
        ]);

        //Direccion::create($data);

        return Redirect::route('admin.direcciones.index');
    }

    /**
     * Display the specified direccion.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($slug) {

        $alertas = Alertum::where('estado_id', '=', 1)->get();
        $direccion = Direccion::where('slug', '=', $slug)->firstOrFail();
        $direcciones = Direccion::where('estado_id', '=', 1)->get();
        $delegaciones = Delegacion::where('estado_id', '=', 1)->get();

        $autoridades = Autoridad::select('nombre','id','imagen')->orderBy('nombre','desc')->get();

        return View::make('direcciones.show', compact('direccion', 'alertas', 'direcciones','delegaciones','autoridades'));
    }

    /**
     * Show the form for editing the specified direccion.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        $direccion = Direccion::find($id);

        $estados = Estado::lists('nombre', 'id');
        return View::make('direcciones.edit', compact('direccion', 'estados'));
    }

    /**
     * Update the specified direccion in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        $direccion = Direccion::findOrFail($id);

        $validator = Validator::make($data = Input::all(), Direccion::$rules);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        $direccion->update($data);

        return Redirect::route('admin.direcciones.index');
    }

    /**
     * Remove the specified direccion from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        Direccion::destroy($id);

        return Redirect::route('direccions.index');
    }

}
