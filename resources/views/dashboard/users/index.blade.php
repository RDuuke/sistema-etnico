@extends('layouts.app')
@section('content')
<div class="mx-auto py-6 sm:px-6 lg:px-10">
    <h1 class="text-2xl text-center font-bold text-white">{{__('app.internal_user')}}</h1>
    <div class="w-12 -mb-3 -mt-6">
        <a href="{{route('dashboard.users.create')}}">
            <img src="{{ asset('images/add-user.png') }}" alt="Logo modules menu">
        </a>
    </div>
    @livewire('tables.dashboard.users.get-all-users-table')
</div>
@endsection