@extends('admin.master')
@section('content')

<div id="page-content">
    <h3><strong>Nueva Delegacion</strong></h3>
    <br/>
    <br/>
    <div class="col-md-8">
        {{ Form::open(array('route' => 'admin.delegaciones.store')); }}

        <div class="form-row">
            <div class="form-label col-md-2">
                <label for="">
                    Estado:
                    <span class="required">*</span>
                </label>
            </div>
            <div class="form-input col-md-4">
                {{ Form::select('estado_id',$estados,null,['data-required'=>'true','data-trigger'=>'change','data-type'=>'text','id'=>'estado_id']) }}
            </div>
        </div>

        <div class="form-row">
            <div class="form-label col-md-2">
                <label for="">
                    Nombre:
                    <span class="required">*</span>
                </label>
            </div>
            <div class="form-input col-md-8">
                {{ Form::input('text', 'nombre') }}
            </div>
        </div>

        <div class="form-row">
            <div class="form-label col-md-2">

            </div>
            <div class="form-input col-md-10">
                <textarea name="desarrollo" id="desarrollo" rows="3"></textarea>
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


{{ HTML::script('library/ckeditor/ckeditor.js') }}
{{ HTML::script('library/ckeditor/adapters/jquery.js') }}
<script type="text/javascript">
    CKEDITOR.config.toolbar = 'Full';

    CKEDITOR.config.toolbar_Full =
            [
                ['Bold', 'Italic', 'Underline', 'Strike', '-', 'Subscript', 'Superscript'],
                ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', 'Blockquote'],
                ['JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock'],
                '/',
                ['savebtn']
            ];

    CKEDITOR.config.extraPlugins = 'link';
    CKEDITOR.config.filebrowserBrowseUrl = "{{ URL::to('library/ckeditor/plugins/kcfinder/browse.php?type=files') }};"
    CKEDITOR.config.filebrowserImageBrowseUrl = "{{ URL::to('library/ckeditor/plugins/kcfinder/browse.php?type=images') }};";
    CKEDITOR.config.filebrowserFlashBrowseUrl = "{{ URL::to('library/ckeditor/plugins/kcfinder/browse.php?type=flash') }};";
    CKEDITOR.config.filebrowserUploadUrl = "{{ URL::to('library/ckeditor/plugins/kcfinder/upload.php?type=files') }};";
    CKEDITOR.config.filebrowserImageUploadUrl = "{{ URL::to('library/ckeditor/plugins/kcfinder/upload.php?type=images') }};";
    CKEDITOR.config.filebrowserFlashUploadUrl = "{{ URL::to('library/ckeditor/plugins/kcfinder/upload.php?type=flash') }};";

    $(document).ready(function () {
        $('#desarrollo').ckeditor();

    });



</script>
<script type="text/javascript">

    function openKCFinder(field) {
        window.KCFinder = {
            callBack: function (url) {
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