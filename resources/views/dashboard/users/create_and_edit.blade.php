@extends('layouts.app')
@section('content')
<div class="mt-2 mx-8 px-10 sm:px-10 lg:px-10" style="background: rgba(217, 217, 217, 0.85);">
    <h1 class="text-2xl pt-8 text-center font-bold  text-black">{{ !isset($user) ? __('app.create_user'):__('app.update_user') }}</h1>
    <form
        action="{{ !isset($user) ? route('dashboard.users.store') : route('dashboard.users.update', ['id' => $user->id])  }}"
        method="POST" enctype="multipart/form-data">
        @if(isset($user))
        @method('put')
        @endif
        @csrf

        @include('dashboard.users._form_create_and_edit')

        <div class="pb-10 flex justify-center">
            <div class="flex flex-col">
                <button type="submit" class="px-10 py-1 button-register bg-gray-800 text-black">{{!isset($user) ?__('app.keep'):__('app.update')}}</button>
                <a class="text-center pt-2 font-bold" href="{{ route('dashboard.users.index') }}">{{__('app.return')}}</a>
            </div>
        </div>
    </form>
</div>
@endsection