<div class="main-menu">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <!-- Main Menu -->
                <ul id="main-menu-items" class="sm sm-menu menu-efct">
                    <li class="active"><a href="{{url('sigvial')}}">Inicio</a></li>                   
                    <li><a href="{{url('/sigvial/mapasPublico')}}">Mapas</a></li>                    
                    <li><a href="{{url('/sigvial/consorcioscamineros')}}">Consorcios</a></li>     
                    <li><a href="{{url('/sigvial/historiasigvial/1')}}">Historia</a></li>     
 		    <li><a href="http://190.183.255.83:81/pmapper/map_default.phtml" blank>Pmapper</a></li>     
                </ul>
            </div>
            <div class="col-lg-4 main-search-bar">
               @include('sigvial.buscador')
            </div>
        </div>
        <!-- Close the Fixed Menu button -->
        <a class="fxd-mnu-x trans1" title="Close" id="hidemenu"><span class="fa-stack fa-lg"> <i class="fa fa-times fa-stack-1x fa-inverse"></i> </span></a>
    </div>
</div>
