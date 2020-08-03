<?php

class PublicidadsController extends \BaseController {

    /**
     * Display a listing of publicidads
     *
     * @return Response
     */
    public function index() {
        $publicidads = Publicidad::all();

        return View::make('publicidads.index', compact('publicidads'));
    }

    /**
     * Show the form for creating a new publicidad
     *
     * @return Response
     */
    public function create() {

        $estados = Estado::lists('nombre', 'id');
        return View::make('publicidads.create', compact('estados'));
    }

    /**
     * Store a newly created publicidad in storage.
     *
     * @return Response
     */
    public function store() {
        $validator = Validator::make($data = Input::all(), Publicidad::$rules);


        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        dd($data);
        
        $datos[0] = public_path() . $data['imagen'];
        
        
        $img = Image::make($datos[0])->resize(370, 340);
        $img->save($datos[0]);

        Publicidad::create($data);

        return Redirect::route('admin.publicidades.index');
    }

    /**
     * Display the specified publicidad.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        $publicidad = Publicidad::findOrFail($id);

        return View::make('publicidads.show', compact('publicidad'));
    }

    /**
     * Show the form for editing the specified publicidad.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        $publicidad = Publicidad::find($id);

        return View::make('publicidads.edit', compact('publicidad'));
    }

    /**
     * Update the specified publicidad in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        $publicidad = Publicidad::findOrFail($id);

        $validator = Validator::make($data = Input::all(), Publicidad::$rules);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        $publicidad->update($data);

        return Redirect::route('publicidads.index');
    }

    /**
     * Remove the specified publicidad from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        Publicidad::destroy($id);

        return Redirect::route('publicidads.index');
    }

}
