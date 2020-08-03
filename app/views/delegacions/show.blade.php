@extends('layouts.master')
@section('content')


<div class="main-left-side">
    <!-- Articulo delegacion -->
    <div class="artcl-main float-width">
        <div class="artcl-body float-width">
            <h2 style="margin-top: 20px;">Delegación {{ $delegacion->nombre }}</h2>
            <h5>
            </h5>
            <div class="col-lg-5">
                <p>
                    {{ $delegacion->desarrollo }}
                    <br />
                    <br />
                </p>
            </div>
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
