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
                                <td>Espediente:</td>
                                <td>{{ $licitacion->expediente }}</td>
                            </tr>
                            <tr>
                                <td>Evaluacion:</td>
                                <td>{{ $licitacion->evaluacion }}</td>
                            </tr>
                            <tr>
                                <td>Nro de Licitacion:</td>
                                <td>{{ $licitacion->nro_licitacion }}</td>
                            </tr>
                            <tr>
                                <td>Presupuesto oficial:</td>
                                <td>{{ $licitacion->presupuesto_oficial }}</td>
                            </tr>
                            <tr>
                                <td>Mes de referencia:</td>
                                <td>{{ $licitacion->mes_referencia }}</td>
                            </tr>
                            <tr>
                                <td>Plazo:</td>
                                <td>{{ $licitacion->plazo }}</td>
                            </tr>
                            <tr>
                                <td>Lugar apertura:</td>
                                <td>{{ $licitacion->lugar_apertura }}</td>
                            </tr>
                            <tr>
                                <td>Retiro de pliegos:</td>
                                <td>{{ $licitacion->lugar_retiro_pliegos }}</td>
                            </tr>
                            <tr>
                                <td>Pliego general:</td>
                                <td>
                                    <a title="" target="_blank" href="{{ url('licitaciones_nacionales/'.$licitacion->pliego_gral) }}" data-original-title="Pliego general">Descargar
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Pliego Tecnico:</td>
                                <td>
                                    <a title="" target="_blank" href="{{ url('licitaciones_nacionales/'.$licitacion->pliego_tecnico) }}" data-original-title="Pliego tecnico">Descargar
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Formulario de presupuesto de oferta:</td>
                                <td>
                                    <a title="" target="_blank" href="{{ url('licitaciones_nacionales/'.$licitacion->aviso) }}" data-original-title="Formulario">Descargar
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
