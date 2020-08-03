@extends('admin.master')
@section('content')

<div id="page-content">
    <h3><strong>Nueva noticia</strong></h3>
    <br/>
    <br/>
    <div class="col-md-8">
        {{ Form::open(array('route' => 'admin.noticias.store')); }}
        
        <div class="form-row">
            <div class="form-label col-md-2">
                <label for="">
                    Categoria:
                    <span class="required">*</span>
                </label>
            </div>
            <div class="form-input col-md-4">
                {{ Form::select('categoria_id',$categorias,null,['data-required'=>'true','data-trigger'=>'change','data-type'=>'text','id'=>'categoria_id']) }}
            </div>
        </div>
        
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
                    Titulo:
                    <span class="required">*</span>
                </label>
            </div>
            <div class="form-input col-md-8">
                <input type="text" data-required="true" data-trigger="change" data-type="text" name="titulo" id="nombreF">
            </div>
        </div>
        
         <div class="form-row">
            <div class="form-label col-md-2">
                <label for="">
                    Bajada:
                    <span class="required">*</span>
                </label>
            </div>
            <div class="form-input col-md-8">
                <input type="text" data-required="true" data-trigger="change" data-type="text" name="bajada" id="nombreF">
            </div>
        </div>

        <div class="form-row">
            <div class="form-label col-md-2">
                <label for="">
                    Imagen:
                    <span class="required">*</span>
                </label>
            </div>
            <div class="form-input col-md-8">
                {{ Form::input('text', 'img_principal',null,['id'=>'img_principal','onclick'=>'openKCFinder(this)']) }}
            </div>
        </div>

        <div class="form-row">
            <div class="form-label col-md-2">
                <label for="">
                    Epigrafe:
                    <span class="required">*</span>
                </label>
            </div>
            <div class="form-input col-md-8">
                <input type="text" data-required="true" data-trigger="change" data-type="text" name="epigrafe" id="epigrafe">
            </div>
        </div>

        <div class="form-row">
            <div class="form-label col-md-2">
                <label for="">
                    Desarrollo:
                    <span class="required">*</span>
                </label>
            </div>
            <div class="form-input col-md-10">
                <textarea name="desarrollo" id="descripcion" rows="3"></textarea>
            </div>
        </div>

        <div class="form-row"> 
            <div class="form-label col-md-2">
                <button type="button" class="btn x-large bg-orange" onclick="agregarImagenes()">ASIGNAR IMAGENES</button>
            </div>
        </div>

        <div class="form-row"> 
            <div id="resBusImagenes"  tabindex="-1">
                <table id="listaImagenes" class="table table-rounded" class="display" cellspacing="0">
                    <thead>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="divider"></div>

        <div class="form-row">         
            <div class="form-label col-md-2">
                <button type="button" class="btn x-large bg-orange"  onclick="agregarVideos()">ASIGNAR VIDEOS</button>
            </div>
        </div>
        <div class="form-row"> 
            <div id="resBusVideos"  tabindex="-1">
                <table id="listaVideos" class="table table-rounded" class="display" cellspacing="0">
                    <thead>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
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

    $(document).ready(function() {
        $('#descripcion').ckeditor();

    });



</script>
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
<script type='text/javascript'>

    function eliminarFila(link, tabla) {
        //alert(link);
        // alert($(link).parent().parent());
        $(link).parent().parent().remove();

        if ($('#' + tabla + ' >tbody >tr').length == 0) {
            var cantidadFilas = 0;
        } else {
            var cantidadFilas = $('#' + tabla + ' >tbody >tr').length;
        }
        //  console.log(cantidadFilas);

        if (cantidadFilas == 0)
        {
            $('#' + tabla).css('display', 'none');
        } else {
            $('#' + tabla).css('display', 'block');
        }
    }

    function agregarImagenes() {
        var aleatorio = Math.floor(Math.random() * 51) + 25;

        var html = '<tr>\n\
                                    <td><div class="form-input "><input type="text" class="text-left" id="imagen_relacionadas[' + aleatorio + ']" name="imagen_relacionadas[' + aleatorio + ']" value="" onclick="openKCFinder(this);" /></div></td>\n\
                                    <td><a onclick ="eliminarFila(this,\'listaColores\');" class ="btn x-large primary-bg"> Eliminar</a></td>\n\
                                 </tr>';

        $('#listaImagenes').find('tbody').append(html);
    }

    function agregarVideos() {
        var aleatorio = Math.floor(Math.random() * 51) + 25;

        var html = '<tr>\n\
                                    <td><div class="form-input "><input type="text" placeholder="player.vimeo.com/video/VIDEO" class="text-left" id="videos_relacionados[' + aleatorio + ']" name="videos_relacionados[' + aleatorio + ']" value="" /></div></td>\n\
                                    <td><a onclick ="eliminarFila(this,\'listaColores\');" class ="btn x-large primary-bg"> Eliminar</a></td>\n\
                                 </tr>';

        $('#listaVideos').find('tbody').append(html);
    }

</script>
@stop