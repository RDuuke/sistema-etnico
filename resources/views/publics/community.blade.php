@extends('layouts.app')
@section('content')
<div class="mx-auto grid md:grid-cols-2 grid-cols-1 gap-4">
    <div x-data="{ openSection: null }">
    <!-- Sección 1 -->
        <div class="mb-4">
            <button @click="openSection = openSection === 1 ? null : 1" class="w-full text-left text-xl font-bold p-4 text-[#4f4f4f] bg-gradient-to-r from-[#f2d60c] to-[#73e162] flex justify-between">
                Información Básica 
                <x-icons.info></x-icons.info>
            </button>
            <div  x-show="openSection === 1" class="p-4 bg-gray-100 shadow-xl">
                <p><b>Nombre Comunidad:</b> {{ $community->name }}</p>
                <p><b>Pueblo:</b> {{ $community->town_name }}</p>
            </div>
        </div>
    </div>
    <div x-data="{ openSection: null }">
    <!-- Sección 1 -->
        <div class="mb-4">
            <button @click="openSection = openSection === 1 ? null : 1" class="w-full text-left text-xl font-bold p-4 text-[#4f4f4f] bg-gradient-to-r from-[#EC7710] to-[#EC7710] flex justify-between">
                Censo de población
                <x-icons.home></x-icons.home>
            </button>
            <div x-show="openSection === 1" class="p-4 bg-gray-100 shadow-xl">
                <ul>
                    @foreach($community->hasManyCensus->reverse() as $censu)
                    <li>
                        Año: {{ $censu->year}} - Nro Familias: {{ $censu->number_of_families }} - Nro Personas: {{ $censu->number_of_people }}
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
