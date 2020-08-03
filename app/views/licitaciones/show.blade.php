@extends('layouts.master')
{{ HTML::style('admin/themes/minified/fides/common.min.css')}}
@section('content')


        <div class="col-md-12">
            <div class="float-width sec-cont2">
                <img src="{{ url('img/lic02.png') }}" />
                <h3>Los archivos para descargas son para consultas. Interesados en participar, deberan adquirir los pliegos como establece la reglamentación en el Depatamento de Licitaciones y Compras de la DVP</h3>
                <table class="table table-condensed" style="margin-top: 10px;">
                    <thead style="font-weight: 700; font-style: italic">
                        <tr>
                            <td>Fecha Apertura</td>
                            <td>Fecha de Recepción</td>
                            <td>TIPO</td>
                            <td>OBJETO</td>
                            <td>AÑO-NRO</td>
                            <td style="text-align: right">DESCARGAR</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($licitaciones as $row)
                            <tr>
                                <td>{{ $row->fecha_apertura }}</td>
                                <td>{{ $row->fecha_recepcion }}</td>
                                <td>{{ TipoLic::find($row->tipo_id)->nombre }}</td>
                                <td>{{ $row->objeto }}</td>
                                <td>{{ $row->anio_adquisicion }} - {{ $row->nro }}</td>
                                <td>
                                    <a title="" target="_blank" href="{{ url('licitaciones/'.$row->pliego_tecnico) }}" data-original-title="Pliego formal">
                                        Técnico
                                    </a>/
                                    <a title="" target="_blank" href="{{ url('licitaciones/'.$row->pliego_formal) }}" data-original-title="Pliego tecnico">
                                        Formal
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    <script type="text/javascript">
        $(document).ready(function () {
            $(".fancybox").fancybox();
        });
    </script>

@stop
