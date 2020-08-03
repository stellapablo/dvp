<?php

class DelegacionsController extends \BaseController {

    /**
     * Display a listing of delegacions
     *
     * @return Response
     */
    public function index() {
        $delegaciones = Delegacion::all();

        return View::make('delegacions.index', compact('delegaciones'));
    }

    /**
     * Show the form for creating a new delegacion
     *
     * @return Response
     */
    public function create() {
        $estados = Estado::lists('nombre', 'id');
        return View::make('delegacions.create', compact('estados'));
    }

    /**
     * Store a newly created delegacion in storage.
     *
     * @return Response
     */
    public function store() {
        $validator = Validator::make($data = Input::all(), Delegacion::$rules);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        Delegacion::create($data);

        return Redirect::route('admin.delegaciones.index');
    }

    /**
     * Display the specified delegacion.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($slug) {

        $alertas = Alertum::where('estado_id', '=', 1)->get();
        $delegacion = Delegacion::where('slug', '=', $slug)->firstOrFail();
        $direcciones = Direccion::where('estado_id', '=', 1)->get();
        $delegaciones = Delegacion::where('estado_id', '=', 1)->get();
        return View::make('delegacions.show', compact('delegacion', 'alertas', 'direcciones', 'delegaciones'));
    }

    /**
     * Show the form for editing the specified delegacion.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        $delegacion = Delegacion::find($id);

        $estados = Estado::lists('nombre', 'id');
        return View::make('delegacions.edit', compact('delegacion', 'estados'));
    }

    /**
     * Update the specified delegacion in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        $delegacion = Delegacion::findOrFail($id);

        $validator = Validator::make($data = Input::all(), Delegacion::$rules);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        $delegacion->update($data);

        return Redirect::route('admin.delegaciones.index');
    }

    /**
     * Remove the specified delegacion from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        Delegacion::destroy($id);

        return Redirect::route('delegaciones.index');
    }

}
