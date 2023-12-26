@extends('layouts.app')
@section('content')

<div class="mx-6 py-6 sm:px-6 lg:px-10 relative">
    <h1 class="text-2xl text-center font-bold text-white">{{__('app.strategies_and_programs_for_community_strengthening')}}</h1>
    <h1 class="text-2xl text-center font-bold text-white mb-10">{{$community->name}}</h1>
    <a href="{{route('dashboard.communities.manage', ['id' => $community->id])}}"
        class="flex text-vtsas-blue font-bold ml-20 text-white absolute top-16 -left-10">
        <x-icons.arrow-left></x-icons.arrow-left><span>{{__('app.return')}}</span>
    </a>

    @if($complete)
        <div class="bg-project-primary font-bold py-1 px-4">Todos los programas ya fueron creados</div>
    @else
        <div class="w-12 -mb-3 -mt-6">
            <a href="{{route('dashboard.programs.create-and-edit', ['community_id' => $community->id, 'id' => 0])}}">
                <img src="{{ asset('images/add-user.png') }}" alt="">
            </a>
        </div>
    @endif
    @livewire('tables.dashboard.programs.get-all-programs-by-community-table', ['community_id' => $community->id])
</div>
@endsection