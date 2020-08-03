  {{Form::open(array('url' => 'sigvial/buscarMapas', 'method' => 'POST'))}}
  <div class="row">
  	<div class="col-sm-10">
  	{{Form::text('busqueda', null, ['class' => 'form-control float-width', 'placeholder'=>'Buscar mapa'])}}
  	</div>
  	<div class="col-sm-2">
  		{{Form::submit('Buscar', array('class' => 'name'))}}
  	</div>
  </div>
  {{Form::close()}}
