@extends('admin.master')
@section('content')

<div class="col-md-10">
    <div id="page-title">
        <h3>Direcciones</h3>
    </div>


    <a title="" class="btn x-large bg-green" href="{{ route('admin.direcciones.create') }}">
        <span class="button-content">Nuevo</span>
    </a>
    <table class="table table-condensed" style="margin-top: 10px;">
        <thead>
            <tr>
                <th class="text-left">#</th>
                <th class="text-center">Nombre</th>
                <th class="text-center">Estado</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($direcciones as $row)
            <tr>
                <td>{{ $row->id }}</td>
                <td class="text-left">{{ $row->nombre }}</td>
                <td class="text-left">{{ Estado::find($row->estado_id)->nombre }}</td>
                <td>
                    <a title="" data-placement="top" class="btn small bg-blue-alt tooltip-button" href="{{ url('admin/direcciones/'.$row->id.'/edit') }}" data-original-title="Editar">
                        <i class="glyph-icon icon-edit"></i>
                    </a>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@stop