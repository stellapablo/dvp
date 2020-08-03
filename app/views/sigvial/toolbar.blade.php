<div class="top-tool-bar">
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Toolbar get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Servicios <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="http://www.ecomchaco.com.ar/licitaciones/licitaciones.asp?ministerio=13&tipo=%27Licitaci%F3n+P%FAblica%27">Licitaciones y Contrataciones</a></li>
                            <li><a href="{{ url('licitaciones-nacionales') }}">Licitaciones Nacionales</a></li>
                            <li><a href="{{ route('licitaciones.grid') }}">Descarga de Pliegos</a></li>
                            <li><a href="http://japps3.chaco.gov.ar/ciudadanos/servlet/hpaneluno">Consulta de expedientes</a></li>
                        </ul>
                    </li>
                    <li>
                         <a href="{{ url('educacion-vial')  }}" >Educación Vial </a>
                    </li>
                    <li><a href="{{ url('contacto') }}">Contacto</a></li>
                </ul>
                <ul class="nav navbar-nav righty">
                    @if(isset(Auth::user()->id))
                    <li><a href="{{url('administracion')}}">Panel</a></li>
                    <li><a href="{{url('logout')}}">Salir</a></li>
                    @else
                    <li><a href="{{url('login')}}">Ingresar</a></li>
                    @endif
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
</div>