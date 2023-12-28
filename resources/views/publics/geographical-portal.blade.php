@extends('layouts.app')
@section('content')
<div class="mx-auto h-[90%]">
    <div class="iframe-container">
        <iframe id="geografico"
        src="https://geografico.corantioquia.gov.co/mapgis9/mapa.jsp?aplicacion=1"
            frameborder="0" sandbox="allow-scripts allow-same-origin"></iframe>
    </div>
</div>
@endsection
