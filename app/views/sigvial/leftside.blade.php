<!-- Main Left side -->
<div class="main-left-side">
    <div class="top-news float-width">
        <div class="float-width sec-cont">
            <h3 class="sec-title">Top</h3>
            <div class="top-big-two">
               @foreach($top as $row)
                <div class="big-two-{{++$i}} blocky boxgrid3 caption">
                    <img alt="" src="{{ $row->img_principal}}"/>
                    <div class="cover boxcaption3">
                        <h3><a href="{{ $row->slug}}">{{ $row->titulo}}</a></h3>
                        <p class="artcl-time-1">
                            <span><i class="fa fa-clock-o"></i>{{ $row->created_at}}</span>
                        </p>
                        <p>{{ $row->bajada }}</p>
                    </div>
                </div>
               @endforeach
            </div>
        </div>
    </div>

    <div class="qk-slider float-width" style=" background: none repeat scroll 0 0 #ffffff; box-shadow: 1px 1px 3px 0 rgba(0,0,0,0.4);">
        <h3 class="sldr-title">ANTERIORES</h3>
        <div class="flexslider news-sldr">
            <ul class="slides">
                @foreach($sliders as $row)
                <?php $row->titulo = str_limit($row->titulo, $limit = 30, $end = '...') ?>
                <li>
                    <div class="trans2 slide-sngl" >
                        <a class="text-center" href="#"><img style="width: 100%; height: 108px;"  alt="" src="{{ asset($row->img_principal) }}" /></a>
                        <h4><a href="{{ route('noticias.articuloslug',$row->slug)}}">{{ $row->titulo}}</a></h4>
                        <p>{{ $row->bajada}}</p>
                        <h6><span><i class="fa fa-clock-o"></i>{{ $row->created_at}}</span></h6>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="sm-gal-cont float-width" style="box-shadow: 1px 1px 3px 0 rgba(0,0,0,0.4);">
        <h3 class="sec-title">GALERIA DE IMAGENES</h3>
        <div class="flexslider img-sm-gal lefty" style="width: 100%;">
            <ul class="slides">
                @foreach($ultimos_img as $row)
                <li>
                    <a class="fancybox" rel="group" href="{{ asset($row->nombre) }}"  ><img src="{{  asset($row->nombre) }}"  alt="" /></a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="vid-gal float-width" style="box-shadow: 1px 1px 3px 0 rgba(0,0,0,0.4);">
        <h3 class="sec-title">VIDEOS</h3>
        <div class="vid-gal-bg float-width">
            <iframe src="//{{ $video->nombre }}" width="100%" height="387" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
        <div class="vid-thmb">
            <ul class="float-width" >
                @foreach($ultimos as $row)
                <li><iframe src="//{{ $row->nombre }}" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $(".fancybox").fancybox();
    });
</script>
