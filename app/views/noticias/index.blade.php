@extends('admin.master')
@section('content')

<div class="col-md-12">
    <div id="page-title">
        <h3>Noticias</h3>
    </div>

    @if(Session::get('msg'))
    <div class="infobox infobox-close-wrapper success-bg">
        <a class="glyph-icon infobox-close icon-remove" title="Close Message" href="#"></a>
        <div class="bg-green large btn info-icon">
            <i class="glyph-icon icon-ok-sign"></i>
        </div>
        <h4 class="infobox-title"></h4>
        <p>{{ Session::get('msg') }}</p>
        <p>&nbsp;</p>
    </div>
    @endif
    <table class="table table-condensed" id="noticias">
        <thead>
            <tr>
                <th class="text-center">Fecha</th>
                <th class="text-center">Titulo</th>
                <th class="text-center">Categoria</th>
                <th class="text-center">Estado</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($noticias as $row)
                @if ($row->estado_id == 4)
                    <tr style="background-color: #F3E651;">
                @else
                    <tr>
                @endif
                        <td class="text-left"> {{ $start_day = date("d/m/Y", strtotime($row->created_at)); }}</td>
                        <td class="text-left">{{ $row->titulo }}</td>
                        <td class="text-left">{{ Categorium::find($row->categoria_id)->descripcion }}</td>
                        <td class="text-left">{{ Estado::find($row->estado_id)->nombre }}</td>
                        <td>
                            <a title="" data-placement="top" class="btn small bg-blue-alt tooltip-button" href="{{ url('admin/noticias/'.$row->id.'/edit') }}" data-original-title="Editar">
                                <i class="glyph-icon icon-edit"></i>
                            </a>
                            <a class="btn small bg-red tooltip-button"  href="{{ url('admin/noticias/'.$row->id.'/delete') }}" data-original-title="Eliminar">
                                <i class="glyph-icon icon-remove"></i>
                            </a>
                        </td>
                    </tr>
            @endforeach

        </tbody>
    </table>

</div>
@stop
@section('scripts')
    <!-- DataTables -->
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.js"></script>
    {{ HTML::style('admin/css/bootstrap.css')}}
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.css">

    <script type="text/javascript">
        $(document).ready(function() {

            $('#noticias').dataTable({
                "searching": true,
                "ordering": false,
                "iDisplayLength": 50
            });

        });
    </script>

@stop

