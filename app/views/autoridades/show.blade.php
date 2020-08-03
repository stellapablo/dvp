@extends('layouts.master')
@section('content')


<div class="main-left-side">
    <!-- autoridad  -->
    <div class="float-width sec-cont">
                  <div class="sec-1-big float-width">
                     {{--@if($autoridad->imagen != ' ')--}}
                          {{--<img src="{{ url($autoridad->imagen) }}" class="blocky">--}}
                     {{--@endif--}}
                     <div>
                        <h2>{{ $autoridad->nombre }}</h2>
                        <p style="text-align: justify">
                            {{ $autoridad->descripcion}}
                        </p>
                     </div>
                  </div>
               </div>
</div>
<!-- Main Right side -->
<div class="main-right-side">
    <div class="trending lefty">
        <h3 class="sec-title">AUTORIDADES</h3>
        <div class="float-width">
            @foreach($autoridades as $row)
            <div>
                <div class="float-width ticker">
                    <h3 class="cat-label5"><a href='{{ route('autoridades.show', $row->id) }}'>{{ $row->nombre }}</a></h3>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $(".fancybox").fancybox();
    });
</script>

@stop
