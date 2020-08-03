<div id="page-sidebar" class="scrollable-content">
    <div id="sidebar-menu">
        <ul>
            <li>
                <a href="{{ route('admin.noticias.index')}}" title="Categorias">
                    <i class="glyph-icon icon-dashboard"></i>
                    Gestor de Publicaciones
                </a>
            </li>
            <li>
                <a href="{{ route('admin.categorias.index')}}" title="Categorias">
                    <i class="glyph-icon icon-archive"></i>
                    Categorias
                </a>
            </li>
            <li>
                <a href="{{ route('admin.autoridades.index')}}" title="Autoridades">
                    <i class="glyph-icon icon-book"></i>
                    Autoridades
                </a>
            </li>
            <li>
                <a href="{{ route('admin.direcciones.index')}}" title="Delegaciones">
                    <i class="glyph-icon icon-archive"></i>
                    Direcciones
                </a>
            </li>
            <li>
                <a href="{{ route('admin.delegaciones.index')}}" title="Delegaciones">
                    <i class="glyph-icon icon-tasks"></i>
                    Delegaciones
                </a>
            </li>
            <li>
                <a href="javascript:;" title="Components">
                    <i class="glyph-icon icon-paperclip"></i>
                    Noticias
                </a>
                <ul>
                    <li>
                        <a href="{{ route('admin.noticias.index') }}" title="Noticias">
                            <i class="glyph-icon icon-pencil"></i>
                            Listar
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.noticias.create') }}" title="Noticias">
                            <i class="glyph-icon icon-pencil"></i>
                            Nuevo
                        </a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="{{ route('admin.alertas.index')}}" title="Alertas">
                    <i class="glyph-icon icon-exclamation"></i>
                    Alertas
                </a>
            </li>

            <li>
                <a href="{{ route('admin.licitaciones.index')}}" title="Licitaciones">
                    <i class="glyph-icon icon-file-text-alt "></i>
                    Licitaciones
                </a>
            </li>

            <li>
                <a href="javascript:;" title="Components">
                    <i class="glyph-icon icon-book"></i>
                    Historia SIGVIAL
                </a>
                <ul>
                    <li>
                        <a href="{{url('historia')}}" title="Dashboard panels">
                            <i class="glyph-icon icon-circle"></i>
                            Listar
                        </a>
                    </li> 
                    <li>
                        <a href="{{url('historia/create')}}" title="Dashboard panels">
                            <i class="glyph-icon icon-tags"></i>
                            Nueva
                        </a>
                    </li>                  
                </ul>
            </li>   
            <ul>
                <li>
                    <a href="javascript:;" title="Components">
                        <i class="glyph-icon icon-road"></i>
                        Caminos
                    </a>
                    <ul>
                        <li>
                            <a href="{{url('caminos')}}" title="Dashboard panels">
                                <i class="glyph-icon icon-circle"></i>
                                Listar
                            </a>
                        </li> 
                        <li>
                            <a href="{{url('tipocaminos')}}" title="Dashboard panels">
                                <i class="glyph-icon icon-tags"></i>
                                Tipos
                            </a>
                        </li>
                        <li>
                            <a href="{{url('estadocaminos')}}" title="Dashboard panels">
                                <i class="glyph-icon icon-eye-open"></i>
                                Estados
                            </a>
                        </li>                   
                    </ul>
                </li>
            </ul>
            <div class="divider mrg5T mobile-hidden"></div>      
            <ul>
                <li>
                    <a href="javascript:;" title="Components">
                        <i class="glyph-icon icon-stop"></i>
                        Consorcios
                    </a>
                    <ul>
                        <li>
                            <a href="{{url('consorcios')}}" title="Dashboard panels">
                                <i class="glyph-icon icon-circle"></i>
                                Listar
                            </a>
                        </li> 
                    </ul>
                </li>                
            </ul>
            <ul>
                <li>
                    <a href="javascript:;" title="Components">
                        <i class="glyph-icon icon-globe"></i>
                        Mapas
                    </a>
                    <ul>
                        <li>
                            <a href="{{url('mapas')}}" title="Dashboard panels">
                                <i class="glyph-icon icon-circle"></i>
                                Listar
                            </a>
                        </li>                   
                        <li>
                            <a href="{{url('tipomapas')}}" title="Dashboard panels">
                                <i class="glyph-icon icon-tags"></i>
                                Tipos de mapas
                            </a>
                        </li> 
                        <li>
                            <a href="{{url('mensajes')}}" title="Dashboard panels">
                                <i class="glyph-icon icon-circle"></i>
                                Mensajes
                            </a>
                        </li> 
                    </ul>
                </li>
            </ul>
            <div class="divider mrg5T mobile-hidden"></div>      
            <ul>
                <li>
                    <a href="javascript:;" title="Components">
                        <i class="glyph-icon icon-user"></i>
                        Usuarios
                    </a>
                    <ul>
                        <li>
                            <a href="{{url('users')}}" title="Dashboard panels">
                                <i class="glyph-icon icon-group"></i>
                                Listar
                            </a>
                        </li>      
                    </ul>
                </li>
            </ul>
        </ul>
    </div>

</div><!-- #page-sidebar -->