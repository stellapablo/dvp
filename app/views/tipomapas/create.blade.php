@extends('layouts.scaffold')
@section('title','Nuevo Tipo de mapa')
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

{{ Form::open(array('route' => 'tipomapas.store')) }}
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
<div class="form-row">
	<div class="form-input col-md-2"></div>
	{{ Form::submit('Guardar', array('class' => 'form-input col-md-2 btn medium bg-blue')) }}      
	<div class="form-input col-md-2"></div>
</div>

{{ Form::close() }}

@if ($errors->any())
<ul>
	{{ implode('', $errors->all('<li class="error">:message</li>')) }}
</ul>
@endif

@stop


