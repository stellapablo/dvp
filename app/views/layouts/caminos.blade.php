@if(isset($caminos))
<div class="float-width ticker">
	<h3 class="cat-label1">CAMINOS Y PUENTES</h3>
	<ul class="newsticker" style="height: 40px; overflow: hidden;">
		@foreach($caminos as $camino)
		<li>
			<h4>
				{{Tipocamino::find($camino->tipo)->nombre}} 
				{{$camino->nombre}}  
				<strong>{{strtoupper (Estadocamino::find($camino->estado)->nombre)}}</strong>
			</h4>
		</li>
		@endforeach
	</ul>
	<div class="ticker-ctrls">
		<a id="tkr-prev">&#59237;</a>
        <a id="tkr-nxt">&#59238;</a>
	</div>
</div>
@endif