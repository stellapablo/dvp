<?php

class CategoriasController extends \BaseController {

    /**
     * Display a listing of categorias
     *
     * @return Response
     */
    public function index() {
        $categorias = Categorium::all();

        return View::make('categorias.index', compact('categorias'));
    }

    /**
     * Show the form for creating a new categoria
     *
     * @return Response
     */
    public function create() {
        return View::make('categorias.create');
    }

    /**
     * Store a newly created categoria in storage.
     *
     * @return Response
     */
    public function store() {
        $validator = Validator::make($data = Input::all(), Categorium::$rules);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        Categorium::create($data);

        return Redirect::route('admin.categorias.index');
    }

    /**
     * Display the specified categoria.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        $categoria = Categoria::findOrFail($id);

        return View::make('categorias.show', compact('categoria'));
    }

    /**
     * Show the form for editing the specified categoria.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        $categoria = Categorium::find($id);

        return View::make('categorias.edit', compact('categoria'));
    }

    /**
     * Update the specified categoria in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        $categoria = Categorium::findOrFail($id);

        $validator = Validator::make($data = Input::all(), Categorium::$rules);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        $categoria->update($data);

        return Redirect::route('admin.categorias.index');
    }

    /**
     * Remove the specified categoria from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        Categoria::destroy($id);

        return Redirect::route('categorias.index');
    }

}
