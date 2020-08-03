@extends('admin.master')
@section('content')

<div class="col-md-10">
    <div id="page-title">
        <h3>Alertas</h3>
    </div>

    <a title="" class="btn x-large bg-green" href="{{ route('admin.alertas.create') }}">
        <span class="button-content">Nuevo</span>
    </a>
    <table class="table table-condensed" style="margin-top: 10px;">
        <thead>
            <tr>
                <th class="text-center">Titulo</th>
                <th class="text-center">Estado</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alertas as $row)
            <tr>
                <td class="text-left">{{ $row->descripcion }}</td>
                <td class="text-left">{{ Estado::find($row->estado_id)->nombre }}</td>
                <td>
                    <a title="" data-placement="top" class="btn small bg-blue-alt tooltip-button" href="{{ url('admin/alertas/'.$row->id.'/edit') }}" data-original-title="Editar">
                        <i class="glyph-icon icon-edit"></i>
                    </a>

                    <a class="btn small bg-red tooltip-button"  href="{{ url('admin/alertas/'.$row->id.'/delete') }}" data-original-title="Eliminar">
                        <i class="glyph-icon icon-remove"></i>
                    </a>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@stop