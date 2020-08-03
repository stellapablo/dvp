@extends('layouts.master')
@section('content')


<div class="main-left-side">
    <div class="news-sec-1 float-width">
        <div class="float-width sec-cont2">
            <h3 class="sec-title">NOTICIAS</h3>
            @foreach($noticias as $row)
            <div class="sec-1-big float-width">
                <a href="{{  route('noticias.articuloslug',$row->slug) }}"><img src="{{ asset($row->img_principal) }}" class="blocky" alt=""></a>
                <div class="sec-1-big-text lefty">
                    <h3><a href="{{ route('noticias.articuloslug',$row->slug)}}">{{ $row->titulo }}</a></h3>
                    <h6><span><i class="fa fa-user"></i></span><span><i class="fa fa-clock-o"></i>{{ date_format($row->created_at,'d/m/Y') }}</span></h6>
                    <p>{{ $row->bajada }}</p>
                </div>
            </div>
            @endforeach
            {{ $noticias->links() }}

        </div>
    </div>
</div>
@include('layouts.rightside')

<script type="text/javascript">
    $(document).ready(function () {
        $(".fancybox").fancybox();
    });
</script>

@stop
