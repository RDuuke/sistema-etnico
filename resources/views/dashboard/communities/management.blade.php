@extends('layouts.app')
@section('content')
<div class="mx-6 py-6 sm:px-6 lg:px-10">
    <h1 class="text-2xl text-center font-bold text-white">{{__('app.community_management')}}</h1>
    <h1 class="text-2xl text-center font-bold text-white mb-4">{{$community->name}}</h1>
    <a href="{{route('dashboard.communities.index')}}"
        class="flex text-vtsas-blue font-bold text-white absolute top-36">
        <x-icons.arrow-left></x-icons.arrow-left><span>{{__('app.return')}}</span>
    </a>

    <div class="flex flex-wrap justify-center">
        @foreach ($sections as $item)
        <div class="w-full md:w-1/2 lg:w-1/3 p-4 mb-4 md:mb-2 lg:mb-1 flex flex-col">
            <div class="management-card p-4 flex-grow relative">
                <h5>{{$item['section']}}</h5>
                <div class="absolute bottom-3 right-3">
                    <a class="button-card" href={{route($item['route'], $item['params'])}}>
                        Ingresar
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>
@endsection