@extends('layouts.master')
@section('content')


<div class="main-left-side">
    <!-- The Article -->
    <div class="artcl-main float-width">
        <div class="artcl-body float-width">
            <h2 style="margin-top: 20px;">Dirección de {{ $direccion->nombre }}</h2>
            <h5>
            </h5>
            <article class="float-width articl-data">
                <p>
                    {{$direccion->desarrollo }}
                    <br />
                    <br />
                </p>
            </article>

            <div class="lists-elements float-width">
                <ul class="magalla-ul lefty">
                    <li>Director: {{ $direccion->director}}</li>
                    <li>Telefono: {{ $direccion->telefono}}</li>
                    <li>Interno: {{ $direccion->interno}}</li>
                    <li>Email: {{ $direccion->email}}</li>
                </ul>

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
    $(document).ready(function() {
        $(".fancybox").fancybox();
    });
</script>

@stop
