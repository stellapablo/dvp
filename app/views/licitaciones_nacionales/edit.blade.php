@extends('admin.master')
@section('content')

    <div id="page-content">
        <h3><strong>Nueva Licitación Nacional</strong></h3>
        <br/>
        <br/>
        {{ Form::model($licitacion, array('method' => 'PATCH', 'route' => array('admin.licitaciones.nacionales.update', $licitacion->id), 'enctype'=>'multipart/form-data')) }}


        <div class="col-md-6">

            <div class="form-row">
                <div class="form-label col-md-4">
                    <label for="">
                        Nro Licitación:
                        <span class="required">*</span>
                    </label>
                </div>
                <div class="form-input col-md-4">
                    {{ Form::input('text', 'nro_licitacion',null) }}
                </div>
            </div>

            <div class="form-row">
                <div class="form-label col-md-4">
                    <label for="">
                        Ruta:
                        <span class="required">*</span>
                    </label>
                </div>
                <div class="form-input col-md-8">
                    {{ Form::input('text', 'ruta',null) }}
                </div>
            </div>
            <div class="form-row">
                <div class="form-label col-md-4">
                    <label for="">
                        Expediente:
                        <span class="required">*</span>
                    </label>
                </div>
                <div class="form-input col-md-8">
                    {{ Form::input('text', 'expediente',null) }}
                </div>
            </div>

            <div class="form-row">
                <div class="form-label col-md-4">
                    <label for="">
                        Criterio Evaluacion:
                        <span class="required">*</span>
                    </label>
                </div>
                <div class="form-input col-md-8">
                    {{ Form::input('text', 'evaluacion',null) }}
                </div>
            </div>

            <div class="form-row">
                <div class="form-label col-md-4">
                    <label for="">
                        Presupuesto oficial:
                        <span class="required">*</span>
                    </label>
                </div>
                <div class="form-input col-md-4">
                    {{ Form::input('text', 'presupuesto_oficial',null) }}
                </div>
            </div>

            <div class="form-row">
                <div class="form-label col-md-4">
                    <label for="">
                        Garantia:
                        <span class="required">*</span>
                    </label>
                </div>
                <div class="form-input col-md-4">
                    {{ Form::input('text', 'garantia',null) }}
                </div>
            </div>

            <div class="form-row">
                <div class="form-label col-md-4">
                    <label for="">
                        Mes referencia:
                        <span class="required">*</span>
                    </label>
                </div>
                <div class="form-input col-md-4">
                    {{ Form::input('text', 'mes_referencia',null) }}
                </div>
            </div>


            <div class="form-row">
                <div class="form-label col-md-4">
                    <label for="">
                        Estado:
                        <span class="required">*</span>
                    </label>
                </div>
                <div class="form-input col-md-4">
                    {{ Form::select('estado_licitacion_id',$estado,null,['data-required'=>'true','data-trigger'=>'change','data-type'=>'text','id'=>'estado_id']) }}
                </div>
            </div>

            <div class="form-row">
                <div class="form-label col-md-4">
                    <label for="">
                        Fecha de apertura
                        <span class="required">*</span>
                    </label>
                </div>
                <div class="form-input col-md-4">
                    {{ Form::input('text', 'fecha_apertura',null,['placeholder'=>'00/00/0000']) }}
                </div>
            </div>

            <div class="form-row">
                <div class="form-label col-md-4">
                    <label for="">
                        Plazo
                        <span class="required">*</span>
                    </label>
                </div>
                <div class="form-input col-md-4">
                    {{ Form::input('text', 'plazo',null) }}
                </div>
            </div>

            <div class="form-row">
                <div class="form-label col-md-4">
                    <label for="">
                        Lugar de apertura
                        <span class="required">*</span>
                    </label>
                </div>
                <div class="form-input col-md-8">
                    {{ Form::input('text', 'lugar_apertura') }}
                </div>
            </div>

            <div class="form-row">
                <div class="form-label col-md-4">
                    <label for="">
                        Retiro de pliegos
                        <span class="required">*</span>
                    </label>
                </div>
                <div class="form-input col-md-4">
                    {{ Form::input('text', 'fecha_retiro_pliegos',null,['placeholder'=>'00/00/0000']) }}
                </div>
            </div>


        </div>
        <div class="col-md-6">

            <div class="form-row">
                <div class="form-label col-md-5">
                    <label for="">
                        Aviso
                    </label>
                </div>
                <div class="form-input col-md-4">
                    {{ Form::file('aviso') }}
                </div>
                @if( $licitacion->aviso != NULL)
                    <span>{{ $licitacion->aviso }}</span>
                @endif
            </div>

            <div class="form-row">
                <div class="form-label col-md-5">
                    <label for="">
                        Pliego General
                        <span class="required">*</span>
                    </label>
                </div>
                <div class="form-input col-md-4">
                    {{ Form::file('pliego_gral') }}
                </div>
                @if( $licitacion->pliego_gral != NULL)
                    <span>{{ $licitacion->pliego_gral }}</span>
                @endif
            </div>

            <div class="form-row">
                <div class="form-label col-md-5">
                    <label for="">
                        Pliego técnico
                        <span class="required">*</span>
                    </label>
                </div>
                <div class="form-input col-md-4">
                    {{ Form::file('pliego_tecnico') }}
                </div>
                @if( $licitacion->pliego_tecnico != NULL)
                    <span>{{ $licitacion->pliego_tecnico }}</span>
                @endif
            </div>

            <div class="form-row">
                <div class="form-label col-md-5">
                    <label for="">
                        Pliego obra
                        <span class="required">*</span>
                    </label>
                </div>
                <div class="form-input col-md-4">
                    {{ Form::file('pliego_obra') }}
                </div>
                @if( $licitacion->pliego_obra != NULL)
                    <span>{{ $licitacion->pliego_obra }}</span>
                @endif
            </div>

            <div class="form-row">
                <div class="form-label col-md-5">
                    <label for="">
                        Adendas
                        <span class="required">*</span>
                    </label>
                </div>
                <div class="form-input col-md-4">
                    {{ Form::file('adendas') }}
                </div>
                @if( $licitacion->adendas != NULL)
                    <span>{{ $licitacion->adendas }}</span>
                @endif
            </div>

            <div class="form-row">
                <div class="form-label col-md-5">
                    <label for="">
                        Aviso de pro.
                        <span class="required">*</span>
                    </label>
                </div>
                <div class="form-input col-md-4">
                    {{ Form::file('aviso_prorroga') }}
                </div>
                @if( $licitacion->aviso_prorrogas != NULL)
                    <span>{{ $licitacion->aviso_prorroga }}</span>
                @endif
            </div>

            <div class="form-row">
                <div class="form-label col-md-8">
                    <label for="">
                        Formulario de consultas:
                        <span class="required">*</span>
                    </label>
                </div>
                <div class="form-input col-md-10">
                    {{ Form::input('text', 'form_consultas',null) }}
                </div>
            </div>

            <div class="form-row">
                <div class="form-label col-md-10">
                    <label for="">
                        Formulario de presupuesto de oferta:
                        <span class="required">*</span>
                    </label>
                </div>
                <div class="form-input col-md-10">
                    {{ Form::input('text', 'form_presupuesto_obra',null) }}
                </div>
            </div>

            <div class="divider"></div>

        </div>



        <div class="form-row">
            <div class="form-input col-md-3 col-md-offset-2">
                {{ Form::submit('Guardar',null,['class'=>'btn medium bg-yellow radius-all-4']) }}
            </div>
        </div>

        {{ Form::close() }}
    </div>
    @if ($errors->any())
        <ul>
            {{ implode('', $errors->all('<li><div style="margin-bottom: 2px;" class="col-md-4"><div class="infobox error-bg mrg0A"><p>:message</p></div></div></li>')) }}
        </ul>
    @endif

    <script type="text/javascript">

        function openKCFinder(field) {
            window.KCFinder = {
                callBack: function(url) {
                    field.value = url;
                    window.KCFinder = null;
                }
            };
            window.open('{{ URL::to("library/ckeditor/plugins/kcfinder/browse.php?type=files&lang=es") }};', 'kcfinder_textbox',
                'status=0, toolbar=0, location=0, menubar=0, directories=0, ' + 'resizable=1, scrollbars=0, width=800, height=600' +
                'lang=es'
            );
        }

    </script>

@stop