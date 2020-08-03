@extends('layouts.master')
{{ HTML::style('admin/themes/minified/fides/common.min.css')}}
@section('content')


    <div class="col-md-12">
        <div class="float-width sec-cont2">
            <img src="{{ url('img/lic02.png') }}" />
            <table class="table table-condensed" style="margin-top: 10px;">
                <thead style="font-weight: 700; font-style: italic">
                <tr>
                    <td>Nro Licitacion</td>
                    <td>Ruta</td>
                    <td>Expediente</td>
                    <td style="text-align: right">ESPECIFICACIONES</td>
                </tr>
                </thead>
                <tbody>
                @foreach($licitaciones as $row)
                    <tr>
                        <td>{{ $row->nro_licitacion }}</td>
                        <td>{{ $row->ruta }}</td>
                        <td>{{ $row->expediente }}</td>
                        <td style="text-align: center"><a about="_blank" href="{{ route('licitaciones.nacionales.detalle', $row->slug) }}">VER</a></td>
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
