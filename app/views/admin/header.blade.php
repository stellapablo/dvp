l<div id="page-header" class="clearfix">
<div id="header-logo">
    <a href="javascript:;" class="tooltip-button" data-placement="bottom" title="Close sidebar" id="close-sidebar">
        <i class="glyph-icon icon-caret-left"></i>
    </a>
    <a href="javascript:;" class="tooltip-button hidden" data-placement="bottom" title="Open sidebar" id="rm-close-sidebar">
        <i class="glyph-icon icon-caret-right"></i>
    </a>
    <a href="javascript:;" class="tooltip-button hidden" title="Navigation Menu" id="responsive-open-menu">
        <i class="glyph-icon icon-align-justify"></i>
    </a>
    ADMIN DVP v2 <i class="opacity-80">1.0</i>
</div>
    <div class="top-icon-bar">
        <div class="dropdown">
            <a href="{{ url('/') }}" title="Portada" target="_blank">
                <i class="glyph-icon icon-laptop"></i>
            </a>
        </div>
        <div class="dropdown">
            <a href="{{ url('sigvial') }}" title="Sigvial" target="_blank" >
                <i class="glyph-icon icon-road"></i>
            </a>
        </div>
    </div>

@if(isset(Auth::user()->nick))
<div class="user-profile dropdown">
    <a href="javascript:;" title="" class="user-ico clearfix" data-toggle="dropdown">
        <span>{{ Auth::user()->nick }}</span>
        <span></span>
        <i class="glyph-icon icon-chevron-down"></i>
    </a>
    <ul class="dropdown-menu float-right">
        <li>
            <a href="javascript:;" title="">
                <i class="glyph-icon icon-user mrg5R"></i>
                Detalles de cuenta
            </a>
        </li>
        <li>
            <a href="" title="">
                <i class="glyph-icon icon-cog mrg5R"></i>
                Editar Perfil
            </a>
        </li>
        <li>
            <a href="{{ url('logout')}}" title="">
                <i class="glyph-icon icon-signout font-size-13 mrg5R"></i>
                <span class="font-bold">Salir</span>
            </a>
        </li>
    </ul>
</div>
@endif
</div><!-- #page-header -->