<div class="main-menu">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <!-- Main Menu -->
                <ul id="main-menu-items" class="sm sm-menu menu-efct">
                    <li class="active"><a href="#">INSTITUCIONAL</a></li>
                    <li>
                        <a href="#">DIRECCIONES</a>
                        <ul class="main-menu-sub">
                            @foreach($direcciones as $row)
                            <li><a href="{{ route('direccion.slug',$row->slug)}}">{{ $row->nombre}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="mega-menu-li">
                        <a href="#">AUTORIDADES</a>
                        <!-- Main Menu - Mega Menu -->
                        <ul class="mega-menu">
                            <li>
                                <div class="sec-1-sm">
                                    <img alt="" class="blocky" src="{{ url('img/V.png')}}" />
                                    <div class="sec-1-sm-text blocky">
                                        <h3><a href='{{ route('autoridades.show',9) }}'>Ing. Hugo Alberto Varela</a></h3>
                                        <p>Administrador</p>
                                    </div>
                                </div>
                                <div class="sec-1-sm">
                                    <img alt="" class="blocky" src="{{ url('img/N.png')}}" />
                                    <div class="sec-1-sm-text blocky">
                                        <h3><a href='{{ route('autoridades.show',10) }}'>Ing. Alberto Navarro</a></h3>
                                        <p>Subadministrador</p>
                                    </div>
                                </div>
                                <div class="sec-1-sm">
                                    <img alt="" class="blocky" src="{{ url('img/ing_frank.png')}}" />
                                    <div class="sec-1-sm-text blocky">
                                        <h3><a href='{{ route('autoridades.show',11) }}'>Ing. Eduardo Horacio Frank</a></h3>
                                        <p>Ingeniero en Jefe</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">DELEGACIONES</a>
                        <ul class="main-menu-sub">
                            @foreach($delegaciones as $row)
                            <li><a href="{{ route('delegacion.slug',$row->slug)}}">{{ $row->nombre}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li>
                        <a href="{{url('sigvial')}}">SIGVIAL</a>
                    </li>   

                </ul>
            </div>
            {{--<div class="col-lg-4 main-search-bar">--}}
                {{--<form class="navbar-form float-width" role="search">--}}
                    {{--<div class="form-group float-width">--}}
                        {{--<input type="text" class="form-control float-width" placeholder="Buscar">--}}
                    {{--</div>--}}
                    {{--<a href="#" type="submit"><i class="fa fa-search"></i></a>--}}
                {{--</form>--}}
            {{--</div>--}}
        </div>
        <!-- Close the Fixed Menu button -->
        <a class="fxd-mnu-x trans1" title="Close" id="hidemenu"><span class="fa-stack fa-lg"> <i class="fa fa-times fa-stack-1x fa-inverse"></i> </span></a>
    </div>
</div>