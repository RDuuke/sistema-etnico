@extends('layouts.app')
@section('content')
<div class="mx-6 py-6 sm:px-6 lg:px-10">
    <h1 class="text-2xl text-center font-bold text-white">{{__('app.communities')}}</h1>
    @livewire('dashboard.communities.index-community')
</div>
@endsection