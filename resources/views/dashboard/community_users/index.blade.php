@extends('layouts.app')
@section('content')

<div class="mx-6 py-6 sm:px-6 lg:px-10">
    <h1 class="text-2xl text-center font-bold text-white">{{__('app.user_management')}}</h1>
    @if($communities == 0)
    <div class="text-project-error font-bold">Para crear un usuario primero deben existir</div>
    <div class="text-project-error font-bold mb-6">comunidades registradas en plataforma</div>
    @endif
    <div class="w-12 -mb-3 -mt-6">
        <a class="@if($communities == 0) disabled @endif" href="{{route('dashboard.community-users.create')}}">
            <img src="{{ asset('images/add-user.png') }}" alt="">
        </a>
    </div>
    @livewire('tables.dashboard.community-users.get-all-community-users-table')
</div>
@endsection
