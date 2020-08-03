<div class="float-width ticker">
    <h3 class="cat-label5">ALERTAS</h3>
    <ul class="newsticker">
        @foreach($alertas as $row) 
        <li>
            <h4>{{ $row->descripcion }}</h4>
        </li>
        @endforeach
    </ul>
    <div class="ticker-ctrls" style="margin-top: 8px;">
        <a id="tkr-prev">&#59237;</a>
        <a id="tkr-nxt">&#59238;</a>
    </div>
</div>