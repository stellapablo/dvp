@extends('layouts.master')
{{ HTML::style('admin/themes/minified/fides/common.min.css')}}
@section('content')
    <div class="col-md-12">
        <div class="float-width sec-cont2">
            <img src="{{ url('img/lic02.png') }}" />
            <div class="col-md-10">
                    <table class="table table-condensed" style="margin-top: 10px;">
                        <thead style="font-weight: 700; font-style: italic">
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nro de Licitacion</td>
                                <td>{{ $licitacion->nro_licitacion }}</td>
                            </tr>
                            <tr>
                                <td>Ruta</td>
                                <td>{{ $licitacion->ruta }}</td>
                            </tr>
                            <tr>
                                <td>Expediente:</td>
                                <td>{{ $licitacion->expediente }}</td>
                            </tr>
                            
                            <tr>
                                <td>Presupuesto oficial:</td>
                                <td>$ {{number_format($licitacion->presupuesto_oficial, 2, ',', '.') }}</td>
                            </tr>
                            <tr>
                                <td>Garantia:</td>
                                <td>$ {{number_format($licitacion->garantia, 2, ',', '.') }}</td>
                            </tr>
                            <tr>
                                <td>Criterio de evaluación:</td>
                                <td>{{ $licitacion->evaluacion }}</td>
                            </tr>
                            <tr>
                                <td>Plazo:</td>
                                <td>{{ $licitacion->plazo }}</td>
                            </tr>
                            <tr>
                                <td>Retiro de pliegos:</td>
                                <td>{{ $licitacion->fecha_retiro_pliegos }}</td>
                            </tr>
                             @if($licitacion->nro_licitacion === '002/2020')
                                <tr>
                                    <td>Lugar y Fecha de Presentación Ofertas:</td>
                                    <td>En la Dirección de Vialidad Provincial del Chaco, Av. 25 de Mayo y Ruta Nacional Nº 11 - Resistencia, en la Mesa General de Entradas y Salidas hasta el día 14/07/2020 a las 10:00 hs.</td>
                            </tr>
                            @endif
                            <tr>
                                <td>Lugar y Fecha de apertura:</td>
                                <td>{{ $licitacion->lugar_apertura }}</td>
                            </tr>
                           
                            <tr>
                                <td>Aviso:</td>
                                <td>
                                    <a title="" target="_blank" href="{{ url('licitaciones_nacionales/'.$licitacion->aviso) }}" data-original-title="Pliego general">Descargar
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Pliego de obra:</td>
                                <td>
                                    <a title="" target="_blank" href="{{ url('licitaciones_nacionales/'.$licitacion->pliego_tecnico) }}" data-original-title="Pliego tecnico">Descargar
                                    </a>
                                </td>
                            </tr>
                            @if($licitacion->nro_licitacion === '002/2020')
                                <tr>
                                    <td>Aclaratorias:</td>
                                    <td>
                                    <p>
                                    En el siguiente <a title="" target="_blank" href="https://docs.google.com/document/d/e/2PACX-1vTvHgnVXJWxccI1adbxmdqJ7BX8SNhRiKDFK6-l8GUgtu0kCadMudoQ4p5T-inxLmSGNW4Q_oYXg7la/pub">Link</a> se irán publicando las aclaratorias del pliego posteriores a la publicación del mismo.</p>
                                    </td>
                            </tr>
                            @endif
                            <tr>
                                <td>Acta de Apertura</td>
                                <td>
                                    <a title="" target="_blank" href="{{ url('licitaciones_nacionales/'.$licitacion->adendas) }}" data-original-title="Adendas">Descargar
                                    </a>
                                </td>
                            </tr>
							<tr>
                                <td>Lugar y Fecha Vista de expediente:</td>
                                <td>{{ $licitacion->aviso_prorroga }}</td>
								
                            </tr>
							
                            <tr>
                                <td>Contrato Administrativo de Obra</td>
                                <td>
                                    <a title="" target="_blank" href="{{ url('licitaciones_nacionales/#') }}" data-original-title="Contrato">Descargar
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Resolución Aprobación de Contrato</td>
                                <td>
                                    <a title="" target="_blank" href="{{ url('licitaciones_nacionales/#') }}" data-original-title="Resolucion">Descargar
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Consultas:</td>
                                <td>
                                    <a title="" target="_blank" href="{{ $licitacion->form_consultas }}" data-original-title="Consultas">Consultar
                                    </a>
                                </td>
                            </tr>                           
                                                        
                        </tbody>
                    </table>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function () {
            $(".fancybox").fancybox();
        });
    </script>

@stop
