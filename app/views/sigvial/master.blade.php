<!DOCTYPE html>
<!--[if lt IE 7]>      
<html class="no-js lt-ie9 lt-ie8 lt-ie7">
<![endif]-->
<!--[if IE 7]>         
<html class="no-js lt-ie9 lt-ie8">
<![endif]-->
<!--[if IE 8]>         
<html class="no-js lt-ie9">
<![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>@yield('title')</title>
    <meta name="description" content="Direccion de Vialidad Provincial">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="{{ url('css8b0d.css?file=bootstrap.min')}} ">
    <link rel="stylesheet" href="{{ url('css97f7.css?file=bootstrap-theme')}}">
    <link rel="stylesheet" href="{{ url('css4610.css?file=normalize')}}">
    <link rel="stylesheet" href="{{ url('fonts/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ url('css35ad.css?file=main')}}">
    <link rel="stylesheet" href="{{ url('css9a38.css?file=responsive')}}">
    <link rel="stylesheet" href="{{ url('cssf83a.css?file=calendar')}}">
    <link rel="stylesheet" href="{{ url('css/flexslider.css')}}">
    <script src="{{ url('jsde43.css?file=vendor/modernizr-2.6.2-respond-1.1.0.min')}}"></script>
    <!-- Add fancyBox -->
    <script type="text/javascript" src="{{url('js/jquery-latest.min.js')}}"></script>
    <link rel="stylesheet" href="{{ url('fancybox/jquery.fancybox.css?v=2.1.5')}}" type="text/css" media="screen" />
    <script type="text/javascript" src="{{ url('fancybox/jquery.fancybox.pack.js?v=2.1.5') }}"></script>

</head>
<body>
    <!-- Top toolbar -->
    @include('sigvial.toolbar')
    <!-- Logo y banner -->
    @include('sigvial.banner')
    <!-- Main Menu -->
    @include('sigvial.mainmenu')
    <!-- Home Slider and Big news blocks -->
    <div class="container">
        @include('sigvial.caminos')
    </div>
    <!-- Main Body -->
    <div class="container">
        @yield('content')        
        @yield('main')
    </div>
    <!-- Footer -->
    @include('sigvial.footer')
    <!-- Copy right footer -->
    <div class="copy-rt-ftr">
        <div class="container">
            <a class="lefty">DVP Informatica 2014</a>
        </div>
    </div>
    <!-- Main Home Layout Ends -->   
    <script src="{{ url('js/jquery.flexslider.min.js') }}"></script>    
    <script src="{{ url('js9978.css?file=vendor/bootstrap.min')}}"></script>
    <script src="{{ url('jsec26.css?file=jquery.smartmenus.min')}}"></script>
    <script src="{{ url('js047d.css?file=jquery.flexslider-min')}}"></script>
    <script src="{{ url('js288f.css?file=newsTicker')}}"></script>
    <script src="{{ url('js6a7f.css?file=jquery.customSelect.min')}}"></script>
    <script src="{{ url('jse3a4.css?file=retina-1.1.0.min')}}"></script>
    <script src="{{ url('jsf0b3.css?file=jflickrfeed.min')}}"></script>
    <script src="{{ url('jsf83a.css?file=calendar')}}"></script>
    <script src="{{ url('js35ad.css?file=main')}}"></script>
</body>
</html>