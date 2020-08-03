<?php

class AlertasController extends \BaseController {

    /**
     * Display a listing of alertas
     *
     * @return Response
     */
    public function index() {
        $alertas = Alertum::all();

        return View::make('alertas.index', compact('alertas'));
    }

    /**
     * Show the form for creating a new alerta
     *
     * @return Response
     */
    public function create() {
        $estados = Estado::lists('nombre', 'id');

        return View::make('alertas.create', compact('estados'));
    }

    /**
     * Store a newly created alerta in storage.
     *
     * @return Response
     */
    public function store() {
        $validator = Validator::make($data = Input::all(), Alertum::$rules);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        Alertum::create($data);

        return Redirect::route('admin.alertas.index');
    }

    /**
     * Display the specified alerta.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        $alerta = Alerta::findOrFail($id);

        $estados = Estado::lists('nombre', 'id');

        return View::make('alertas.show', compact('alerta', 'estados'));
    }

    /**
     * Show the form for editing the specified alerta.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        $alerta = Alertum::find($id);

        $estados = Estado::lists('nombre', 'id');

        return View::make('alertas.edit', compact('alerta', 'estados'));
    }

    /**
     * Update the specified alerta in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        
        
        $alerta = Alertum::findOrFail($id);

        $validator = Validator::make($data = Input::all(), Alertum::$rules);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        $alerta->update($data);

        return Redirect::route('admin.alertas.index');
    }

    /**
     * Remove the specified alerta from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        Alerta::destroy($id);

        return Redirect::route('alertas.index');
    }

}
