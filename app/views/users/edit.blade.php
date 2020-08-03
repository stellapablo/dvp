@extends('layouts.scaffold')
@section('title','Editar datos del usuario')
@section('main')

{{ Form::model($user, array('method' => 'PATCH', 'route' => array('users.update', $user->id))) }}
<div class="form-row">
    <div class="form-input col-md-10">
        <div class="row">
            <div class="col-md-2">
                {{ Form::label('nick', 'Nick:') }}
                {{ Form::text('nick') }}
            </div>
            <div class="col-md-4">
                {{ Form::label('password', 'Password:') }}
                {{ Form::password('password') }}
            </div>
            @if(Auth::user()->rol == 1)
            <div class="col-md-2">
                {{ Form::label('rol', 'Rol:') }}
                {{ Form::select('rol', $roles) }}
            </div>
            @endif
        </div>
    </div>
</div>

<div class="form-row col-sm-10">
    <div class="form-input col-md-3"></div>
    {{ Form::submit('Actualizar', array('class' => 'form-input col-md-1 btn medium bg-blue')) }}
    <div class="form-input col-md-4"></div>
</div>
{{ Form::close() }}

@if ($errors->any())
<ul>
  {{ implode('', $errors->all('<li class="error">:message</li>')) }}
</ul>
@endif

@stop
