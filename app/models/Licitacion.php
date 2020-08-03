<?php

class Licitacion extends Eloquent {
	protected $guarded = array();

	protected $table = 'licitaciones';

	public static $rules = [
		'fecha_recepcion' => 'required',
		'fecha_apertura' => 'required',
		'fecha_adjudicacion' => 'required',
		'anio_adquisicion' => 'required',
		'nro' => 'required',
		'tipo_id' => 'required',
		'objeto' => 'required',
		'oficina_id' => 'required',
		'estado_id' => 'required',
		'monto_presupuesto' => 'required',
		'estado_id' => 'required',
		'pliego_formal' => 'required|mimes:pdf,rar,RAR',
		'pliego_tecnico' => 'required|mimes:pdf,rar,RAR	'
	];

	public static $rules_edit = [
		'fecha_recepcion' => 'required',
		'fecha_apertura' => 'required',
		'fecha_adjudicacion' => 'required',
		'anio_adquisicion' => 'required',
		'nro' => 'required',
		'tipo_id' => 'required',
		'objeto' => 'required',
		'oficina_id' => 'required',
		'estado_id' => 'required',
		'monto_presupuesto' => 'required',
		'estado_id' => 'required',
//		'pliego_formal' => 'required|mimes:pdf,rar,RAR',
//		'pliego_tecnico' => 'required|mimes:pdf,rar,RAR	'
	];

	public static function guardar($data){

		if (Input::hasFile('pliego_formal')) {
			$formal = rand(10000,99999).'.'.Input::file('pliego_formal')->getClientOriginalExtension();
			Input::file('pliego_formal')->move('licitaciones', $formal);
		}

		if (Input::hasFile('pliego_tecnico')) {
			$tecnico = rand(10000,99999).'.'.Input::file('pliego_tecnico')->getClientOriginalExtension();
			Input::file('pliego_tecnico')->move('licitaciones', $tecnico);
		}

		Licitacion::create(["fecha_recepcion" => $data['fecha_recepcion'],
			"fecha_apertura" => $data['fecha_apertura'],
			"fecha_adjudicacion" => $data['fecha_adjudicacion'],
			"anio_adquisicion" => $data['anio_adquisicion'],
			"nro" => $data['nro'],
			"tipo_id" => $data['tipo_id'],
			"objeto" => $data['objeto'],
			"oficina_id" => $data['oficina_id'],
			"estado_id" => $data['estado_id'],
			"monto_presupuesto" => $data['monto_presupuesto'],
			"pliego_formal" => $formal,
			"pliego_tecnico" => $tecnico,
			"resolucion_adjudicacion" => $data['resolucion_adjudicacion'],
			"anio_resolucion" => $data['anio_resolucion'],
		]);


	}

	public static function actualizar($data,$id){

		$pliego = Licitacion::find($id);

		$pliego_tecnico = $pliego->pliego_tecnico;
		$pliego_formal = $pliego->formal;


		if (Input::hasFile('pliego_formal')) {
			$pliego_formal = rand(10000,99999).'.'.Input::file('pliego_formal')->getClientOriginalExtension();
			Input::file('pliego_formal')->move('licitaciones', $pliego_formal);
		}

		if (Input::hasFile('pliego_tecnico')) {
			$pliego_tecnico = rand(10000,99999).'.'.Input::file('pliego_tecnico')->getClientOriginalExtension();
			Input::file('pliego_tecnico')->move('licitaciones', $pliego_tecnico);
		}

		Licitacion::find($id)->update(["fecha_recepcion" => $data['fecha_recepcion'],
			"fecha_apertura" => $data['fecha_apertura'],
			"fecha_adjudicacion" => $data['fecha_adjudicacion'],
			"anio_adquisicion" => $data['anio_adquisicion'],
			"nro" => $data['nro'],
			"tipo_id" => $data['tipo_id'],
			"objeto" => $data['objeto'],
			"oficina_id" => $data['oficina_id'],
			"estado_id" => $data['estado_id'],
			"pliego_formal" => $pliego_tecnico,
			"pliego_tecnico" => $pliego_formal,
			"monto_presupuesto" => $data['monto_presupuesto'],
			"resolucion_adjudicacion" => $data['resolucion_adjudicacion'],
			"anio_resolucion" => $data['anio_resolucion'],
		]);


	}

}
