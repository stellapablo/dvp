<div id="page-title">
    <h3>@yield('title')</h3> 
    @if (Session::has('message'))
    <br>
    <div class="infobox infobox-close-wrapper warning-bg mrg0A">
        <a href="#" title="Close Message" class="glyph-icon infobox-close icon-remove"></a>
        <div class="bg-yellow large btn info-icon">
            <i class="glyph-icon icon-warning-sign"></i>
        </div>
        <h4 class="infobox-title" >{{ Session::get('message') }}</h4><br>
    </div>
    @endif  
</div>

