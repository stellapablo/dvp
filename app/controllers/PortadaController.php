<?php

class PortadaController extends \BaseController {

    /**
     * Display a listing of the resource.
     * GET /portada
     *
     * @return Response
     */
    public function getPrincipales($categoria){

        return Noticium::where('estado_id', '=', 4)
            ->select('titulo','slug','id','img_principal','categoria_id')
            ->where('categoria_id', '=', $categoria)->take(1)->get();

    }

    public function getSlides($categoria,$cantidad){

        return $sliders = Noticium::where('estado_id', '=', $categoria)
            ->select('titulo','img_principal','slug','id','created_at')
            ->orderBy('created_at','desc')->take($cantidad)->get();
    }

    public function index() {

        $noticias = Noticium::where('estado_id', '=', 4)
            ->select('titulo','slug','bajada','categoria_id','estado_id','img_principal')
            ->where('categoria_id', '=', 6)
            ->orderBy('created_at','desc')
            ->take(1)
            ->get();

        $consorcios = $this->getPrincipales(5);

        $sliders = Noticium::where('estado_id', '=', 1)
            ->select('titulo','img_principal','slug','id','created_at')
            ->orderBy('created_at','desc')->take(5)->get();


        $obras = $this->getPrincipales(2);

        $urbana = $this->getPrincipales(3);

        //$alertas = Alertum::where('estado_id', '=', 1)->get();

        $direcciones = Direccion::where('estado_id', '=', 1)
            ->select('director','id','nombre','slug')
            ->get();

        $delegaciones = Delegacion::where('estado_id', '=', 1)
            ->select('id','nombre','slug')
            ->get();

        //$top = Noticium::where('estado_id', '=', 5)->take(2)->get();

        $video = Video::findOrFail(4);

        $i = 0;

        $ultimos = Video::all();


        return View::make('layouts.portada', compact('i','noticias', 'alertas', 'obras', 'urbana', 'direcciones', 'video', 'ultimos', 'imagen', 'sliders','delegaciones','consorcios'));
    }

 public function historia() {

        $tiposDeMapas = Tipomapa::all();

        $mapas = Mapa::where('zona1','=','1')
        ->where('zona2','=','1')
        ->where('zona3','=','1')
        ->where('zona4','=','1')
        ->where('zona5','=','1')
        ->get();

        $tiposDeMapas = Tipomapa::all();

        return View::make('sigvial.historia', compact('mapas','tiposDeMapas'));
    }

    public function indexSigvial() {

        $consorcios = Consorcio::lists('numero', 'id');
        $consorciosZona1 = Mapa::where('zona1', '=', 1)->get();
        $consorciosZona2 = Mapa::where('zona2', '=', 1)->get();
        $consorciosZona3 = Mapa::where('zona3', '=', 1)->get();
        $consorciosZona4 = Mapa::where('zona4', '=', 1)->get();
        $consorciosZona5 = Mapa::where('zona5', '=', 1)->get();

        $direcciones = Direccion::where('estado_id', '=', 1)->get();

        $delegaciones = Delegacion::where('estado_id', '=', 1)->get();

        $tiposDeMapas = Tipomapa::all();

        $caminos = DB::table('caminos')
        ->join('tipocaminos', 'tipocaminos.id', '=', 'caminos.tipo')
        ->join('estadocaminos', 'estadocaminos.id', '=', 'caminos.estado')
        ->select('caminos.id','caminos.nombre', 'caminos.tipo', 'caminos.estado')
        ->get();

        $mapas = Mapa::where('provinciacompleta','=','1')->get();

        $tiposDeMapas = Tipomapa::all();

        return View::make('sigvial.portadasigvial', compact('mapas','caminos','consorciosZona1', 'consorciosZona2', 'consorciosZona3','consorciosZona4','consorciosZona5','tiposDeMapas'));
    }


    /**
     * Show the form for creating a new resource.
     * GET /portada/create
     *
     * @return Response
     */
    public function indexAdmin() {
        return Redirect::action('NoticiasController@index'); 
    }

    public function contacto(){

        $direcciones = Direccion::where('estado_id', '=', 1)->get();

        $delegaciones = Delegacion::where('estado_id', '=', 1)->get();

        $alertas = Alertum::where('estado_id', '=', 1)->get();

        return View::make('mensajes.contacto',compact('direcciones','delegaciones','alertas'));
    }

    public function educacion(){

        $direcciones = Direccion::where('estado_id', '=', 1)->get();

        $delegaciones = Delegacion::where('estado_id', '=', 1)->get();

        $alertas = Alertum::where('estado_id', '=', 1)->get();

        return View::make('mensajes.educacion',compact('direcciones','delegaciones','alertas'));
    }

    public function enviar(){

        $data = Input::all();

        return Redirect::back()->with('message','Gracias por contactarnos!');
    }

    public function enviarEducacion(){

        $data = Input::all();

        return Redirect::back()->with('message','Gracias por contactarnos!');
    }





}
