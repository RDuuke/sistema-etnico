@extends('layouts.app')
@section('content')
<div class="mx-auto h-[90%]">
    <div class="iframe-container">
        <iframe 
        src="https://geografico.corantioquia.gov.co/mapgis9/mapa.jsp?aplicacion=1&css=css/app_corantioquia.css"
            frameborder="0"></iframe>
    </div>
</div>
@endsection
