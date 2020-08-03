@extends('admin.master')
@section('content')

<!-- jQuery -->
<!--<script type="text/javascript" charset="utf8" src="//code.jquery.com/jquery-1.10.2.min.js"></script>-->
<div class="col-md-10">
    <div id="page-title">
        <h3>Categorias</h3>
    </div>

    <a title="" class="btn x-large bg-green" href="{{ route('admin.categorias.create') }}">
        <span class="button-content">Nuevo</span>
    </a>
    <table class="table table-condensed" style="margin-top: 10px;">
        <thead>
            <tr>
                <th class="text-center">Nro</th>
                <th class="text-center">Tipos</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categorias as $row)
            <tr>
                <td class="text-left">{{ $row->id }}</td>
                <td class="text-left">{{ $row->descripcion }}</td>
                <td>
                    <a title=""  href="{{ url('admin/categorias/'.$row->id.'/edit') }}" data-placement="top" class="btn small bg-blue-alt tooltip-button" href="javascript:;" data-original-title="Editar">
                        <i class="glyph-icon icon-edit"></i>
                    </a>
                    <a title="" data-placement="top" class="btn small bg-red tooltip-button" href="javascript:;" data-original-title="Remove" >
                        <i class="glyph-icon icon-remove"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>





</div>

@stop