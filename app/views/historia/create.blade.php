@extends('layouts.scaffold')
@section('title','Historia SIGVIAL: Nuevo evento')
@section('main')

{{ Form::open(array('route' => 'historia.store','method' => 'post', 'enctype'=>'multipart/form-data')) }}

<div class="form-row">
    <div class="form-input col-md-8">
        <div class="row">
            <div class="col-md-2">
                {{ Form::label('fecha', 'Fecha:') }}
                {{ Form::text('fecha', null, ['placeholder' => 'dd-mm-AAAA']) }}dd-mm-AAAA
            </div>
            <div class="col-md-4">
                {{ Form::label('foto', 'Foto:') }}
                {{ Form::file('foto') }}
            </div>
        </div>
    </div>
</div>

<div class="form-row">
    <div class="form-input col-md-10">
        <div class="row">
            <div class="col-md-12">
                {{ Form::label('titulo', 'Titulo:') }}
                {{ Form::text('titulo') }}
            </div>            
        </div>
    </div>
</div>

<div class="form-row">
    <div class="form-input col-md-10">
        <div class="row">
            <div class="col-md-12">
                {{ Form::label('descripcion', 'Descripcion:') }}
                {{ Form::textarea('descripcion') }}
            </div>            
        </div>
    </div>
</div>

<script type="text/javascript">
    tinymce.init({
        selector: "textarea#descripcion",
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


<div class="form-row">
    <div class="form-input col-md-4"></div>
    {{ Form::submit('Guardar', ['class' => 'form-input col-md-2 btn medium bg-blue']) }}
    {{ Form::close() }}
    <div class="form-input col-md-4"></div>
</div>

@if ($errors->any())
<ul>
  {{ implode('', $errors->all('<li class="error">:message</li>')) }}
</ul>
@endif

@stop


