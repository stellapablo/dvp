<!-- Main Left side -->
<div class="main-left-side">
    <div class="qk-slider float-width" style=" background: none repeat scroll 0 0 #ffffff; box-shadow: 1px 1px 3px 0 rgba(0,0,0,0.4);">
        <a target="_blank" href="http://asamblea.vialidadchaco.net">
            <img style="margin: 5px 15px 10px;" src="{{ url('img/asamblea2.png') }}">
        </a>
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
                        <h6><span><i class="fa fa-clock-o"></i>{{ date_format($row->created_at,'d/m/Y')}}</span></h6>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="tn-small-1 blocky">
            <a class="lefty cat-a cat-label4" href="{{ route('noticias.all') }}">Ver todas..</a>
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
                <li>
                    <iframe src="//{{ $row->nombre }}" height="100" width="200"  webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </li>
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
