<div class="main-footers">
 <div class="container">
  <!-- Category footer -->
  <div class="cat-ftr-cont float-width">

  </div>
  <!-- Info footer -->
  <div class="info-ftr float-width">
   <div class="mag-info lefty">
    <a class="ftr-logo" href="{{url('sigvial')}}" data-original-title="" title=""><img alt="" src="{{URL('img/sigvial/logo_sigvial_footer.png')}}"></a>     
    <a class="ftr-logo" href="http://hum.unne.edu.ar/investigacion/geografia/labtig/presenta.htm" blank data-original-title="" title="">
    <img alt="" src="{{URL('img/sigvial/logo_labtig_footer.png')}}">
    </a>     
    <a class="ftr-logo" href="http://vialidadchaco.net" blank data-original-title="" title=""><img alt="" src="{{URL('img/sigvial/logo_vialidad_footer.png')}}"></a>      
    <div class="scl-ftr float-width">
      <h3>Sistema de geolocalización</h3>
     <h3>seguinos en</h3>
     <ul>
      <li>
        <a href="#" data-toggle="tooltip" data-placement="bottom" title="" class="trans1 fb-ftr" data-original-title="Facebook"></a>
      </li>
      <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="" class="trans1 vm-ftr" data-original-title="Vimeo"></a></li>
    </ul>
  </div>
</div>
<div class="post-ftr lefty">
  <h3>mapas digitales</h3>
  @foreach($tiposDeMapas as $tipoMapa)
  <div class="pst-ftr-sngl float-width">
    <div class="row">
      <div class="col-sm-3"><a href="{{url('sigvial/filtrarMapas',$tipoMapa->id)}}" class="lefty pst-ftr-img">
        {{HTML::image('img/sigvial/iconos/'.$tipoMapa->icono.'.png', 'imagen',['style'=>'width:50px'])}}
      </a></div>
      <div class="col-sm-9">      
        <h3>{{$tipoMapa->nombre}}</h3>
        <a href="{{url('sigvial/filtrarMapas',$tipoMapa->id)}}" class="all-twts left trans1">ver mapas</a>
      </div>
    </div>
  </div>
  <a href="{{url('filtrarMapas',$tipoMapa->id)}}">
    <div class="col-sm-3">

    </div>
  </a>
  @endforeach
</div>
<div class="twts-ftr lefty">
  <h3>Mapas por Zona</h3>
  <ul>
    <li><a href="{{url('sigvial/mapasZona/1')}}" class="all-twts left trans1">ZONA I</a></li>
    <li><a href="{{url('sigvial/mapasZona/2')}}" class="all-twts left trans1">ZONA II</a></li>
    <li><a href="{{url('sigvial/mapasZona/3')}}" class="all-twts left trans1">ZONA III</a></li>
    <li><a href="{{url('sigvial/mapasZona/4')}}" class="all-twts left trans1">ZONA IV</a></li>
    <li><a href="{{url('sigvial/mapasZona/5')}}" class="all-twts left trans1">ZONA V</a></li>
  </ul>
</div>
</div>
</div>
