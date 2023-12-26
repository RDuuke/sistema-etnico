@extends('layouts.app')
@section('content')

<div class="mx-6 py-6 sm:px-6 lg:px-10 relative">
    <h1 class="text-lg text-center font-bold text-white">{{$community->name}}</h1>
    <h1 class="text-2xl text-center font-bold text-white mt-2">{{__('app.strategies_and_programs_for_community_strengthening')}}</h1>
    <a href="{{route('dashboard.communities.manage', ['id' => $community->id])}}"
        class="flex text-vtsas-blue font-bold ml-20 text-white absolute top-6 -left-10">
        <x-icons.arrow-left></x-icons.arrow-left><span>{{__('app.return')}}</span>
    </a>

    <div class="w-12 -mb-3 -mt-6">
        <a href="{{route('dashboard.protected-areas.create', ['community_id' => $community->id])}}">
            <img src="{{ asset('images/add-user.png') }}" alt="">
        </a>
    </div>
    @livewire('tables.dashboard.protected-areas.get-all-protected-areas-by-community-table', ['community_id' => $community->id])
</div>
@endsection