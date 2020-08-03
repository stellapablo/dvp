@extends('layouts.master')
@section('meta')
    <meta property="og:title" content="{{ $noticia->titulo }}" />
    <meta property="og:description" content="{{ url(Request::path()) }}" />
    <meta property="og:type"   content="article" />
    <meta property="og:image" content="{{ asset($noticia->img_principal) }}" />
    <meta name="image" content="{{ asset($noticia->img_principal) }}">
@stop
@section('content')

<div class="main-left-side">
    <!-- The Article -->
    <div class="artcl-main float-width">
        <div class="artcl-body float-width">
            <h2 style="margin-top: 20px;">{{ $noticia->titulo }}</h2>
            <h5>
                <span><i class="fa fa-user"></i>Usuario </span>
                <span><i class="fa fa-clock-o"></i>{{ date_format($noticia->created_at,'d/m/Y')}}</span>
                <span>
                    <div class="addthis_sharing_toolbox" style="width: 10%; float: right;" data-url="{{ url(Request::path()); }}" data-title="{{ $noticia->titulo }}"></div>
                </span>
            </h5>
            <article class="float-width articl-data">
                <img alt="" style="width: 100%" src="{{ asset($noticia->img_principal) }}" />
                <p style="text-align: justify;">
                    <span>{{ $noticia->bajada }}</span><br />
                    {{ $noticia->desarrollo }}
                    <br />
                    <br />
                </p>
                @if(($noticia->cita != ""))
                <p class="artcl-qt">
                    <i class="fa fa-quote-left"></i>
                    <span>
                        Proin porta arcu sollicitudin magna viverra commodo. In pellentesque turpis sapien, at tincidunt dolor fringilla nec. 
                        Maecenas sollicitudin metus eget 
                        vestibulum luctus.                         
                    </span>
                </p>
                @endif
            </article>
        </div>
    </div>
    @if(count($imagenes) > 0)
    <div class="sm-gal-cont float-width">
        <h3 class="sec-title">GALERIA</h3>
        <ul class="slides">
            <?php $i = 0; ?>
            @foreach($imagenes as $row)
                @if($i > 0)
                    <li style="width: 150px; height: 100px; float: left;">
                        <a class="fancybox" rel="group" href="{{ asset($row->nombre) }}"  ><img style="width: 60%" src="{{  asset($row->nombre) }}"  alt="" /></a>
                    </li>
                @endif
                    <?php $i++; ?>
            @endforeach
        </ul>
    </div>
    @endif
    @if(count($videos) > 0)
    <div class="sm-gal-cont float-width">
        <h3 class="sec-title">VIDEOS</h3>
        <ul class="slides">
            @foreach($videos as $media)
            <li style="float:left; margin: 2px;">           
                <iframe src="//{{ $media->nombre }}" width="100%" height="200" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </li>
            @endforeach
        </ul>
    </div>
    @endif
    <!-- articulos relacionados  -->
    <div class="artcl-reltd float-width">
        <h3 class="sec-title">ARTICULOS RELACIONADOS</h3>
        @foreach($relacionados as $row)
        <div class="reltd-sngl">
            <a href="{{ $row->slug }}"><img alt="" style="height: 108px;"  src="{{ asset($row->img_principal) }}"></a>
            <div class="reltd-sngl-txt">
                 <h3>{{ str_limit($row->titulo, $limit = 50, $end = '...') }}</h3>
                <p><i class="fa fa-clock-o"></i>{{ date_format($noticia->created_at,'d/m/Y') }}</p>
            </div>
        </div>
        @endforeach
    </div>

</div>
@include('layouts.rightside')
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-56964ab060ce6290" async="async"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $(".fancybox").fancybox();
    });
</script>

@stop
