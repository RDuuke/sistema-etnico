@extends('layouts.app')
@section('content')
<div class="shadow">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-28">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900 ">Inicio</h1>
    </div>
</div>
<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-28">
    <div class="mt-4 text-left">
        <h1 class="text-2xl font-bold tracking-tight text-gray-900 ">Bienvenido {{ $userName }}</h1>
    </div>
</div>
@endsection