@extends('admin.master')
@section('content')

<div id="page-content">
    <h3><strong>Nueva Alerta</strong></h3>
    <br/>
    <br/>
    <div class="col-md-8">
        {{ Form::open(array('route' => 'admin.alertas.store')); }}
        <div class="form-row">
            <div class="form-label col-md-3">
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
            <div class="form-label col-md-3">
                <label for="">
                    Descripcion:
                    <span class="required">*</span>
                </label>
            </div>
            <div class="form-input col-md-8">
                <input type="text" data-required="true" data-trigger="change" data-type="text" name="descripcion" id="nombreF">
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

@stop