<div class="logo-top-ad">
    <div class="container">
        <div class="row">
            <!-- Magalla Logo -->
            <div class="logo col-lg-4">
                <a href="{{url('/')}}">{{HTML::image('img/logo.png', 'banner')}}</a>
            </div>
            <div class="top-banner col-lg-8">
                <?php 
                $fecha = new DateTime();
                $hora = $fecha->format('H');
                ?>
                @if($hora > 6 && $hora < 18)
                {{HTML::image('img/top-banner.jpg', 'banner')}}
                @else
                {{HTML::image('img/top-banner2.jpg', 'banner')}}
                @endif
            </div>
        </div>
    </div>
</div>