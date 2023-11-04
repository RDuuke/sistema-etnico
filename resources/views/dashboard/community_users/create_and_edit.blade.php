@extends('layouts.app')
@section('content')
<div class="shadow">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-28">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ !isset($community_user) ? 'Usuarios comunidad - ' . __('app.create_user'): 'Usuarios comunidad - ' . __('app.update_user') }}</h1>
    </div>
</div>
<div class="mx-auto max-w-7xl px-10 sm:px-6 lg:px-28">
    <form
        action="{{ !isset($community_user) ? route('dashboard.community-users.store') : route('dashboard.community-users.update', ['id' => $community_user->id])  }}"
        method="POST" enctype="multipart/form-data">
        @if(isset($community_user))
        @method('put')
        @endif
        @csrf
        
        @include('dashboard.community_users._form_create_and_edit')

        <div class="mt-6 flex items-center justify-end gap-x-6 pb-10">
            <button type="button" class="px-10 py-2 button-return  hover:bg-gray-200 text-black font-bold">
                <a href="{{route('dashboard.community-users.index')}}">{{__('app.return')}}</a>
            </button>
            <button type="submit" class="px-10 py-2 button bg-gray-800 hover:bg-gray-700 text-white">{{!isset($community_user) ?__('app.create'):__('app.update')}}</button>
        </div>
    </form>
</div>
@endsection