<div class="main-news-blks">
    <div class="hm-slider-cont">
        <!-- News slider -->
        <div class="flex-container">
            <div class="flexslider hm-slider">
                <ul class="slides">
                    @foreach($noticias as $row)
                    <li>
                        <img alt="" style="width: 100%; height: 474px;"   src="{{ asset($row->img_principal)}}" />
                        <h3 class="cat-label cat-label1"><a href="#">{{ Categorium::find($row->categoria_id)->descripcion }}</a></h3>
                        <div class="hm-sldr-caption">
                            <h3><a href="articulo/{{ $row->slug }}">{{ $row->titulo }}</a></h3>
                            <p>{{ $row->bajada }}
                            </p>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <!-- Fixed Blocks -->
    <div class="mid-blks-cont">
        <!-- Block1 -->
        <div class="mid-block-1 boxgrid caption">
            @foreach($consorcios as $row)
            <img alt="" style="width: 100%" src="{{ asset($row->img_principal) }}"/>
            <h4 class="cat-label cat-label2"><a href="#"> {{Categorium::find($row->categoria_id)->descripcion }}</a></h4>
             <div class="hm-sldr-caption">
                <h3><a href="articulo/{{ $row->slug }}">{{ $row->titulo }}</a></h3>
                <p>{{ $row->bajada}} </p>
            </div>
            @endforeach

        </div>
        <!-- Block2 -->
        <div class="mid-block-2 boxgrid caption">
            @foreach($urbana as $row)
            <img alt="" style="width: 100%" src="{{ asset($row->img_principal) }}"/>
            <h4 class="cat-label cat-label3"><a href="#"> {{Categorium::find($row->categoria_id)->descripcion }}</a></h4>
             <div class="hm-sldr-caption">
                <h3><a href="articulo/{{ $row->slug }}">{{ $row->titulo }}</a></h3>
                <p>{{ $row->bajada}} </p>
            </div>
            @endforeach
        </div>
    </div>
    <!-- Block3 -->
    <div class="rt-bk-cont">
        <div class="rt-block boxgrid2 caption">
            @foreach($obras as $row)
            <img alt="" src="{{ asset($row->img_principal) }}"/>
            <h4 class="cat-label cat-label4"><a href="#"> {{Categorium::find($row->categoria_id)->descripcion }}</a></h4>
            <div class="hm-sldr-caption">
                <h3><a href="articulo/{{ $row->slug }}">{{ $row->titulo }}</a></h3>
                <p>{{ $row->bajada }}</p>
            </div>
            @endforeach
        </div>
    </div>
</div>