
@extends('layouts.app')
@section('content')

<div class="mx-6 py-6 sm:px-6 lg:px-10">
    <h1 class="text-2xl text-center font-bold text-white">{{__('app.community_census')}}</h1>
    <h1 class="text-2xl text-center font-bold text-white mb-10">{{$community->name}}</h1>
    <div class="w-12 -mb-3 -mt-6">
        <a href="{{route('dashboard.census.create', ['community_id' => $community->id])}}">
            <img src="{{ asset('images/add-user.png') }}" alt="">
        </a>
    </div>
    @livewire('tables.dashboard.census.get-all-census-by-community-table', ['community_id' => $community->id])
</div>
@endsection