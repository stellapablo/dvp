@extends('layouts.scaffold')
@section('title','Editar Tipo de mapa')
@section('main')


<script type="text/javascript">
    tinymce.init({
        selector: "textarea#tutorial",
        theme: "modern",
        plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen",
        "insertdatetime media nonbreaking save table contextmenu directionality",
        "emoticons template paste textcolor colorpicker textpattern"
        ],
        toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
        toolbar2: "print preview media | forecolor backcolor emoticons",
        image_advtab: true,
        templates: [
        {title: 'Test template 1', content: 'Test 1'},
        {title: 'Test template 2', content: 'Test 2'}
        ]
    });
</script>

{{ Form::model($tipomapa, array('method' => 'PATCH', 'route' => array('tipomapas.update', $tipomapa->id))) }}
<div class="form-row">
	<div class="form-input col-md-12">
		<div class="row">
			<div class="col-md-12">
				{{ Form::label('nombre', 'Nombre:') }}
				{{ Form::text('nombre') }}
                {{ Form::label('icono', 'Icono:') }}
                {{ Form::select('icono', $iconos,'null') }}
				{{ Form::label('tutorial', 'Tutorial:') }}
				{{ Form::textarea('tutorial') }}
			</div>
		</div>
	</div>
</div>
<br>
<div class="form-row col-md-12">
    <div class="form-input col-md-1"></div>
    {{ Form::submit('Actualizar', array('class' => 'form-input col-md-1 btn medium bg-blue')) }}
    <div class="form-input col-md-1"></div>
    {{ link_to_route('tipomapas.index', 'Cancelar', $tipomapa->id, array('class' => 'form-input col-md-1 btn medium bg-yellow')) }}
    {{ Form::close() }}

    <div class="form-input col-md-1"></div>
    {{ Form::open(array('method' => 'DELETE', 'route' => array('tipomapas.destroy', $tipomapa->id))) }}
    {{ Form::submit('Eliminar', array('class' => 'form-input col-md-1 btn medium bg-red')) }}
    {{ Form::close() }}
</div>

@if ($errors->any())
<ul>
  {{ implode('', $errors->all('<li class="error">:message</li>')) }}
</ul>
@endif

@stop
