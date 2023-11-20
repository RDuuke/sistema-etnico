@extends('layouts.app')
@section('content')
<div class="shadow">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-28">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{__('app.community_users')}}</h1>
    </div>
</div>
<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-28">

    @if($communities == 0)
    <div class="text-project-error font-bold">Para crear un usuario primero deben existir</div>
    <div class="text-project-error font-bold mb-4">comunidades registradas en plataforma</div>
    @endif

    <div class="mt-4 text-left">
        <a href="{{route('dashboard.community-users.create')}}" class="px-10 py-2 button bg-gray-800 hover:bg-gray-700 text-white @if($communities == 0) disabled @endif">{{__('app.create_user') }}</a>
    </div>
    @livewire('tables.dashboard.community-users.get-all-community-users-table')
</div>
@endsection