<?php

class LicitacionNacional extends Eloquent {


    protected $guarded = array();

    protected $table = 'licitaciones_nacionales';

    public static $rules = [
        'nro_licitacion' => 'required',
        'ruta' => 'required',
        'estado_licitacion_id' => 'required',
        'expediente' => 'required',
        'evaluacion' => 'required',
        'presupuesto_oficial' => 'required',
        'mes_referencia' => 'required',
        'plazo' => 'required',
        'fecha_apertura' => 'required',
        'lugar_apertura' => 'required',
        'pliego_general' => 'mimes:pdf,rar,RAR,doc,docx,xls,xlsx',
        'pliego_tecnico' => 'mimes:pdf,rar,RAR,doc,docx,xls,xlsx',
        'pliego_obra' => 'mimes:pdf,rar,RAR,doc,docx,xls,xlsx',
        'form_consultas' => 'required',
        'form_presupuesto_obra' => 'required',
    ];

    public function addDocumentos($id){

        $lic = LicitacionNacional::find($id);

        if (Input::hasFile('aviso')) {
            $lic->aviso =  rand(10000,99999).'.'.Input::file('aviso')->getClientOriginalExtension();
            Input::file('aviso')->move('licitaciones_nacionales', $lic->aviso);

        }

        if (Input::hasFile('adendas')) {
            $lic->adendas = rand(1000,99999).'.'.Input::file('adendas')->getClientOriginalExtension();
            Input::file('adendas')->move('licitaciones_nacionales', $lic->adendas);
        }

        if (Input::hasFile('aviso_prorroga')) {
            $lic->aviso_prorroga = rand(10000,99999).'.'.Input::file('aviso_prorroga')->getClientOriginalExtension();
            Input::file('aviso_prorroga')->move('licitaciones_nacionales', $lic->aviso_prorroga);
        }


        if (Input::hasFile('pliego_gral')) {
            $lic->pliego_gral = rand(10000,99999).'.'.Input::file('pliego_gral')->getClientOriginalExtension();
            Input::file('pliego_gral')->move('licitaciones_nacionales', $lic->pliego_gral);

        }

        if (Input::hasFile('pliego_tecnico')) {
            $lic->pliego_tecnico = rand(10000,99999).'.'.Input::file('pliego_tecnico')->getClientOriginalExtension();
            Input::file('pliego_tecnico')->move('licitaciones_nacionales', $lic->pliego_tecnico);
        }

        if (Input::hasFile('pliego_obra')) {
            $lic->pliego_obra = rand(10000,99999).'.'.Input::file('pliego_obra')->getClientOriginalExtension();
            Input::file('pliego_obra')->move('licitaciones_nacionales', $lic->pliego_obra);
        }


        $lic->save();

    }

    public function guardar($data){

        $lic = LicitacionNacional::create(["nro_licitacion" => $data['nro_licitacion'],
                                    "ruta" => $data['ruta'],
                                    "estado_licitacion_id" => $data['estado_licitacion_id'],
                                    "expediente" => $data['expediente'],
                                    "evaluacion" => $data['evaluacion'],
                                    "presupuesto_oficial" => $data['presupuesto_oficial'],
                                    "garantia" => $data['garantia'],
                                    'mes_referencia' => $data['mes_referencia'],
                                    'plazo' => $data['plazo'],
                                    'fecha_apertura' => $data['fecha_apertura'],
                                    'lugar_apertura' => $data['lugar_apertura'],
                                    'fecha_retiro_pliegos' => $data['fecha_retiro_pliegos'],
                                    //'lugar_retiro_pliegos' => $data['lugar_retiro_pliegos'],
                                    'form_consultas' => $data['form_consultas'],
                                    'form_presupuesto_obra' => $data['form_presupuesto_obra'],
                                    'slug'=>  Str::slug($data['ruta']) ,

        ]);

        $lic->save();

        $this->addDocumentos($lic->id,$data);

    }

    public function actualizar($data,$id){

        LicitacionNacional::find($id)->update(["nro_licitacion" => $data['nro_licitacion'],
            "ruta" => $data['ruta'],
            "estado_licitacion_id" => $data['estado_licitacion_id'],
            "expediente" => $data['expediente'],
            "evaluacion" => $data['evaluacion'],
            "presupuesto_oficial" => $data['presupuesto_oficial'],
            "garantia" => $data['garantia'],
            "mes_referencia" => $data['mes_referencia'],
            "plazo" => $data['plazo'],
            "fecha_apertura" => $data['fecha_apertura'],
            "lugar_apertura" => $data['lugar_apertura'],
            "fecha_retiro_pliegos" => $data['fecha_retiro_pliegos'],
            "form_consultas" => $data['form_consultas'],
            "form_presupuesto_obra" => $data['form_presupuesto_obra'],
            'slug'=> Str::slug($data['ruta'])
        ]);

        $this->addDocumentos($id,$data);

    }
}
