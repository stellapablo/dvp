@extends('admin.master')
@section('content')

    <div id="page-content">
        <h3><strong>Nueva Licitación</strong></h3>
        <br/>
        <br/>
        <div class="col-md-9">
            {{ Form::open(array('route' => 'admin.licitaciones.store','files'=>true)); }}

            <div class="form-row">
                <div class="form-label col-md-3">
                    <label for="">
                        Fecha recepcion:
                        <span class="required">*</span>
                    </label>
                </div>
                <div class="form-input col-md-3">
                    {{ Form::input('text', 'fecha_recepcion',null,['placeholder'=>'00/00/0000']) }}
                </div>
            </div>

            <div class="form-row">
                <div class="form-label col-md-3">
                    <label for="">
                        Fecha apertura:
                        <span class="required">*</span>
                    </label>
                </div>
                <div class="form-input col-md-3">
                    {{ Form::input('text', 'fecha_apertura',null,['placeholder'=>'00/00/0000']) }}
                </div>
            </div>

            <div class="form-row">
                <div class="form-label col-md-3">
                    <label for="">
                        Fecha adjudicacion:
                        <span class="required">*</span>
                    </label>
                </div>
                <div class="form-input col-md-3">
                    {{ Form::input('text', 'fecha_adjudicacion',null,['placeholder'=>'00/00/0000']) }}
                </div>
            </div>

            <div class="form-row">
                <div class="form-label col-md-3">
                    <label for="">
                        Año adquisición:
                        <span class="required">*</span>
                    </label>
                </div>
                <div class="form-input col-md-3">
                    {{ Form::input('text', 'anio_adquisicion',null) }}
                </div>
            </div>

            <div class="form-row">
                <div class="form-label col-md-3">
                    <label for="">
                        Número:
                        <span class="required">*</span>
                    </label>
                </div>
                <div class="form-input col-md-3">
                    {{ Form::input('text', 'nro',null) }}
                </div>
            </div>

            <div class="form-row">
                <div class="form-label col-md-3">
                    <label for="">
                    Objeto:
                    <span class="required">*</span>
                    </label>
                </div>
                <div class="form-input col-md-9">
                    {{ Form::textarea('objeto',null,['rows'=>'3']) }}
                </div>
            </div>

            <div class="form-row">
                <div class="form-label col-md-3">
                    <label for="">
                        Oficina:
                        <span class="required">*</span>
                    </label>
                </div>
                <div class="form-input col-md-8">
                    {{ Form::select('oficina_id',$oficinas,null,['data-required'=>'true','data-trigger'=>'change','data-type'=>'text','id'=>'estado_id']) }}
                </div>
            </div>

            <div class="form-row">
                <div class="form-label col-md-3">
                    <label for="">
                        Estado:
                        <span class="required">*</span>
                    </label>
                </div>
                <div class="form-input col-md-4">
                    {{ Form::select('estado_id',$estado,null,['data-required'=>'true','data-trigger'=>'change','data-type'=>'text','id'=>'estado_id']) }}
                </div>
            </div>
            <div class="form-row">
                <div class="form-label col-md-3">
                    <label for="">
                        Monto Presupuesto:
                        <span class="required">*</span>
                    </label>
                </div>
                <div class="form-input col-md-4">
                    {{ Form::input('text', 'monto_presupuesto',null) }}
                </div>
            </div>

            <div class="form-row">
                <div class="form-label col-md-3">
                    <label for="">
                        Tipo:
                        <span class="required">*</span>
                    </label>
                </div>
                <div class="form-input col-md-4">
                    {{ Form::select('tipo_id',$tipo,null,['data-required'=>'true','data-trigger'=>'change','data-type'=>'text','id'=>'estado_id']) }}
                </div>
            </div>


            <div class="form-row">
                <div class="form-label col-md-3">
                    <label for="">
                        Pliego formal
                        <span class="required">*</span>
                    </label>
                </div>
                <div class="form-input col-md-4">
                    {{ Form::file('pliego_formal') }}
                </div>
            </div>

            <div class="form-row">
                <div class="form-label col-md-3">
                    <label for="">
                        Pliego técnico
                        <span class="required">*</span>
                    </label>
                </div>
                <div class="form-input col-md-4">
                    {{ Form::file('pliego_tecnico') }}
                </div>
            </div>

            <div class="form-row">
                <div class="form-label col-md-3">
                    <label for="">
                        Resolucion adjudicación:
                        <span class="required">*</span>
                    </label>
                </div>
                <div class="form-input col-md-4">
                    {{ Form::input('text', 'resolucion_adjudicacion',null) }}
                </div>
            </div>

            <div class="form-row">
                <div class="form-label col-md-3">
                    <label for="">
                        Año resolución:
                        <span class="required">*</span>
                    </label>
                </div>
                <div class="form-input col-md-4">
                    {{ Form::input('text', 'anio_resolucion',null) }}
                </div>
            </div>


            <div class="divider"></div>

            <div class="form-row">
                <div class="form-input col-md-3 col-md-offset-2">
                    {{ Form::submit('Guardar',null,['class'=>'btn medium bg-yellow radius-all-4']) }}
                </div>
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