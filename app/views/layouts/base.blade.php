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

    <meta name="description" content="Vialidad Provincial de la Provincia del Chaco">

    <meta name="viewport" content="width=device-width">
    {{HTML::style('css8b0d.css?file=bootstrap.min')}}
    {{HTML::style('css97f7.css?file=bootstrap-theme')}}
    {{HTML::style('css4610.css?file=normalize')}}
    {{HTML::style('fonts/font-awesome/css/font-awesome.min.css')}}
    {{HTML::style('css35ad.css?file=main')}}
    {{HTML::style('css9a38.css?file=responsive')}}
    {{HTML::style('cssf83a.css?file=calendar')}}
    {{HTML::style('cssf83a.css?file=calendar')}}

    {{HTML::script('jsde43.css?file=vendor/modernizr-2.6.2-respond-1.1.0.min')}}
    {{HTML::script('js5a10.css?file=vendor/jquery-1.10.1.min')}}
    {{HTML::script('js9978.css?file=vendor/bootstrap.min')}}
    {{HTML::script('jsec26.css?file=jquery.smartmenus.min')}}
    {{HTML::script('js047d.css?file=jquery.flexslider-min')}}
    {{HTML::script('js288f.css?file=newsTicker')}}
    {{HTML::script('js6a7f.css?file=jquery.customSelect.min')}}
    {{HTML::script('jse3a4.css?file=retina-1.1.0.min')}}
    {{HTML::script('jsf0b3.css?file=jflickrfeed.min')}}
    {{HTML::script('jsf83a.css?file=calendar')}}
    {{HTML::script('js35ad.css?file=main')}}    

</head>
<body>
    <!-- Main Home Layout start -->      
    <!-- Top toolbar -->
    @include('layouts.toolbar')
    <!-- Logo y banner -->
    @include('layouts.banner')
    <!-- Main Menu -->
    @include('layouts.mainmenu')
    <!-- Main Body -->
    <div class="container">
        @yield('content')
        @yield('main')
    </div>
    <!-- Footer -->
    @include('layouts.footer')
    <!-- Copy right footer -->
    <div class="copy-rt-ftr">
        <div class="container">
            <a href="{{url('/')}}" class="lefty"><strong>Vialidad Provincial</strong> Provincia del Chaco </a>
            <a href="http://www.terobit.com/" class="righty" target="_new">Diseñado por Terobit</a>
        </div>
    </div>
    <!-- Main Home Layout Ends -->   
</body>
</html>