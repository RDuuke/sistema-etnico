@extends('layouts.app')
@section('content')
<div class="shadow">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-28">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ !isset($user) ? __('app.create_user'):__('app.update_user') }}</h1>
    </div>
</div>
<div class="mx-auto max-w-7xl px-10 sm:px-6 lg:px-28">
    <form
        action="{{ !isset($user) ? route('dashboard.users.store') : route('dashboard.users.update', ['id' => $user->id])  }}"
        method="POST" enctype="multipart/form-data">
        @if(isset($user))
        @method('put')
        @endif
        @csrf

        @include('dashboard.users._form_create_and_edit')

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="px-10 py-2 button-return  hover:bg-gray-200 text-black font-bold">
                <a href="{{route('dashboard.users.index')}}">{{__('app.return')}}</a>
            </button>
            <button type="submit" class="px-10 py-2 button bg-gray-800 hover:bg-gray-700 text-white">{{!isset($user) ?__('app.create'):__('app.update')}}</button>
        </div>
    </form>
</div>
@endsection