@extends('admin.master')
@section('content')



    <div class="col-md-12">
        <div id="page-title">
            <h3>Licitaciones Nacionales</h3>
        </div>

        <a class="btn x-large bg-green" href="{{ url('admin/licitaciones-nacionales/create') }}">
            <span class="button-content">Nueva</span>
        </a>

        @if(Session::get('msg'))
            <div style="margin-top: 5px;" class="infobox infobox-close-wrapper success-bg">
                <a class="glyph-icon infobox-close icon-remove" title="Close Message" href="#"></a>
                <div class="bg-green large btn info-icon">
                    <i class="glyph-icon icon-ok-sign"></i>
                </div>
                <h4 class="infobox-title"></h4>
                <p>{{ Session::get('msg') }}</p>
                <p>&nbsp;</p>
            </div>
        @endif
        <table class="table table-condensed" style="margin-top: 10px;">
            <thead>
            <tr>
                <th class="text-center">Nro Licitacion</th>
                <th class="text-center">Ruta</th>
                <th class="text-center">Expediente</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($licitaciones as $row)
                <tr>
                    <td> {{ $row->nro_licitacion }}</td>
                    <td>{{ $row->ruta }}</td>
                    <td>{{ $row->expediente }}</td>
                    <td>{{ $row->pliego_gral }}</td>
                    <td>{{ $row->pliego_tecnico }}</td>
                    <td>{{ $row->aviso }}</td>
                    <td>
                        <a title="" data-placement="top" class="btn small bg-azure tooltip-button" href="{{ url('admin/licitaciones-nacionales/'.$row->id.'/edit') }}" data-original-title="Editar">
                            <i class="glyph-icon icon-edit"></i>
                        </a>
                        </br>
                        <a class="btn small bg-red tooltip-button"  href="{{ url('admin/licitaciones-nacionales/'.$row->id.'/delete') }}" data-original-title="Eliminar">
                            <i class="glyph-icon icon-remove"></i>
                        </a>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>

@stop