@extends('admin.master')
@section('content')



    <div class="col-md-12">
        <div id="page-title">
            <h3>Licitaciones y Contrataciones</h3>
        </div>

        <a class="btn x-large bg-green" href="{{ route('admin.licitaciones.create') }}">
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
                <th class="text-center">Fecha Apertura</th>
                <th class="text-center">Fecha Adjudicacion</th>
                <th class="text-center">Nro</th>
                <th class="text-center">Oficina</th>
                <th class="text-center">Tipo</th>
                <th class="text-center">Estado</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($licitaciones as $row)
                    <tr>
                        <td> {{ $row->fecha_apertura }}</td>
                        <td>{{ $row->fecha_adjudicacion }}</td>
                        <td>{{ $row->nro}}</td>
                        <td>{{ Oficina::find($row->oficina_id)->Denominacion }}</td>
                        <td>{{ TipoLic::find($row->tipo_id)->nombre }}</td>
                        <td>{{ EstadoLic::find($row->estado_id)->nombre }}</td>
                        <td>
                            <a title="" data-placement="top" class="btn small bg-azure tooltip-button" href="{{ url('admin/licitaciones/'.$row->id.'/edit') }}" data-original-title="Editar">
                                <i class="glyph-icon icon-edit"></i>
                            </a>
                            <a title="" target="_blank" data-placement="top" class="btn small bg-blue-alt tooltip-button" href="{{ url('licitaciones/'.$row->pliego_formal) }}" data-original-title="Plriego formal">
                                <i class="glyph-icon icon-download-alt "></i>
                            </a>
                            <a title="" target="_blank" data-placement="top" class="btn small bg-orange tooltip-button" href="{{ url('licitaciones/'.$row->pliego_tecnico) }}" data-original-title="Plriego tecnico">
                                <i class="glyph-icon icon-download-alt "></i>
                            </a>
                            <a class="btn small bg-red tooltip-button"  href="{{ url('admin/licitaciones/'.$row->id.'/delete') }}" data-original-title="Eliminar">
                                <i class="glyph-icon icon-remove"></i>
                            </a>
                        </td>
                    </tr>
            @endforeach

            </tbody>
        </table>
    </div>

@stop