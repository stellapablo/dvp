@extends('layouts.master')
@section('content')

    <div class="contact-form float-width">
        <h3 class="sec-title">Solicitud de charla de Educación Vial</h3>
        @if (Session::has('message'))
               <div class="alert mag-alert-info">
                                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button"><i class="fa fa-times"></i></button>
                                    <strong>{{ Session::get('message')  }}</strong>
               </div>
               @endif

        {{ Form::open(array('route' => 'mensajes.educacion'))}}

        <div class="form-group">
            <div class="row">
                <div class="col-sm-4">
                    {{ Form::text('nombre', null, ['class'=>'form-control','required', 'placeholder'=>'Nombre']) }}
                </div>
                <div class="col-sm-4">
                    {{ Form::text('apellido',null,['class'=>'form-control','required', 'placeholder'=>'Apellido']) }}
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-8">
                     {{ Form::text('email', null, ['class'=>'form-control','required', 'placeholder'=>'Email']) }}
                </div>
            </div>
        </div>

        <div class="form-group">
             <div class="row">
                        <div class="col-sm-8">
                             {{ Form::text('email', null, ['class'=>'form-control', 'placeholder'=>'Contacto']) }}
                        </div>
             </div>
        </div>

     <div class="form-group" >
     <div class="row">
      <div class="col-sm-8">
      {{ Form::submit('Enviar', array('class' => 'cmnt-btn trans2')) }}
      </div>

     </div>

    </div>

    {{ Form::close() }}

    @if ($errors->any())
    <ul>
      {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
    @endif

    </div>

@stop