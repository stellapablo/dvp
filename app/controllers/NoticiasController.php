<?php

class NoticiasController extends \BaseController {

    /**
     * Display a listing of noticias
     *
     * @return Response
     */
    public function index() {
        $noticias = Noticium::orderBy('created_at', 'ASC')->get();


        return View::make('noticias.index', compact('noticias'));
    }

    /**
     * Show the form for creating a new noticia
     *
     * @return Response
     */
    public function create() {

        $estados = Estado::lists('nombre', 'id');
        $categorias = Categorium::lists('descripcion', 'id');

        return View::make('noticias.create', compact('noticias', 'estados', 'categorias'));
    }

    /**
     * Store a newly created noticia in storage.
     *
     * @return Response
     */
    public function store() {

        $data = Input::all();

        $validator = Validator::make($data = Input::all(), Noticium::$rules);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        if($data['img_principal'] != ''){
            $string = substr($data['img_principal'], 1);
            $nombre = 'upload/files/noticias/' . rand(10000,99999).'.jpg';

            Image::make($string)
                   ->fit(600,500)
                   ->save($nombre);

        }


        $slug = Str::slug($data['titulo']);
        $row = Noticium::create(["titulo" => $data['titulo'], "slug" => $slug,
                    "desarrollo" => $data['desarrollo'],
                    "bajada" => $data['bajada'],
                    "img_principal" => $nombre,
                    "epigrafe" => $data['epigrafe'],
                    "categoria_id" => $data['categoria_id'],
                    "estado_id" => $data['estado_id'],
        ]);

        $id = $row->id;

        if (isset($data['imagen_relacionadas'])) {
            $this->storeImagenes($row->id, $data['imagen_relacionadas']);
        }

        if (isset($data['videos_relacionados'])) {
            $this->storeVideos($row->id, $data['videos_relacionados']);
        }

        $imagenes = Input::get('imagen_relacionadas');


        if (isset($imagenes)) {
            foreach ($imagenes as $row) {
                $img = new Imagen();

                $string = explode("/upload", $row);
                $string_seccion = "/upload" . $string[1];

                $img->nombre = $string_seccion;
                $img->noticia_id = $id;
                $img->save();
            }
        }

        return Redirect::route('admin.noticias.index')->with('msg', 'Nueva noticia!');
    }

    public function storeImagenes($id, $imagenes) {

        foreach ($imagenes as $row) {
            Imagen::create(['nombre' => $row, 'noticia_id' => $id]);
        }
    }

    public function storeVideos($id, $videos) {
        foreach ($videos as $row) {
            Video::create(['nombre' => $row, 'noticia_id' => $id]);
        }
    }

    /**
     * Display the specified noticia.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        $noticia = Noticia::findOrFail($id);

        return View::make('noticias.show', compact('noticia'));
    }

    /**
     * Show the form for editing the specified noticia.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        $noticia = Noticium::find($id);

        $estados = Estado::lists('nombre', 'id');
        $categorias = Categorium::lists('descripcion', 'id');

        $imagenes = Noticium::find($id)->imagenes;

        $videos = Noticium::find($id)->videos;


        return View::make('noticias.edit', compact('noticia', 'estados', 'categorias', 'imagenes','videos'));
    }

    /**
     * Update the specified noticia in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        $noticia = Noticium::findOrFail($id);

        $validator = Validator::make($data = Input::all(), Noticium::$rules);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }


        $slug = Str::slug($data['titulo']);

        $nombre = $noticia->img_principal;

        if($data['img_principal'] != ''){
            $string = substr($data['img_principal'], 1);
            $nombre = 'upload/files/noticias/' . rand(10000,99999).'.jpg';

            Image::make($string)
                ->fit(600,500)
                ->save($nombre);

        }

        Noticium::where('id', '=', $id)->update(["titulo" => $data['titulo'], "slug" => $slug,
            "desarrollo" => $data['desarrollo'],
            "bajada" => $data['bajada'],
            "img_principal" => $nombre,
            "epigrafe" => $data['epigrafe'],
            "categoria_id" => $data['categoria_id'],
            "estado_id" => $data['estado_id'],
        ]);

        $imagenes = Input::get('imagen_relacionadas');
        $videos = Input::get('videos_relacionados');

        if(isset($videos)){
            $this->storeVideos($noticia->id, $data['videos_relacionados']);
        }


        if (isset($imagenes)) {
            foreach ($imagenes as $row) {
                $img = new Imagen();

                $string = explode("/upload", $row);
                $string_seccion = "/upload" . $string[1];

                $img->nombre = $string_seccion;
                $img->noticia_id = $id;
                $img->save();
            }
        }

        return Redirect::route('admin.noticias.index')->with('msg', 'Noticia actualizada!');
    }

    /**
     * Remove the specified noticia from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function delete($id) {

        Noticium::find($id)->delete();

        return Redirect::route('admin.noticias.index');
    }

    public function articulo($id) {

        $noticia = Noticium::findOrFail($id);


        return View::make('noticias.articulo', compact('noticia'));
    }

    public function articuloSlug($slug) {

        $alertas = Alertum::where('estado_id', '=', 1)->get();

        $noticia = Noticium::where('slug', '=', $slug)->firstOrFail();

        $imagenes = Noticium::find($noticia->id)->imagenes;

        $videos = Noticium::find($noticia->id)->videos;

        $relacionados = Noticium::where('categoria_id', '=', $noticia->categoria_id)->take(4)->get();

        $direcciones = Direccion::where('estado_id', '=', 1)->get();

        $delegaciones = Delegacion::where('estado_id', '=', 1)->get();


        return View::make('noticias.articulo', compact('delegaciones', 'noticia', 'imagenes', 'alertas', 'relacionados', 'videos', 'direcciones'));
    }

    public function eliminacionFisicaImagenRelacionada() {
        $input = Input::all();
        $idImagen = $input['id'];
        Imagen::destroy($idImagen);
    }


    public function eliminacionVideoRelacionado() {
        $input = Input::all();
        $idImagen = $input['id'];
        Video::destroy($idImagen);
    }

    public function all() {
        $noticias = Noticium::orderBy('created_at','desc')->paginate(10);
        $alertas = Alertum::where('estado_id', '=', 1)->get();
        $direcciones = Direccion::where('estado_id', '=', 1)->get();
        $delegaciones = Delegacion::where('estado_id', '=', 1)->get();

        return View::make('noticias.all', compact('noticias', 'direcciones', 'delegaciones', 'alertas'));
    }

}
