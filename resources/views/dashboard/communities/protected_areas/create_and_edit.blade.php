@extends('layouts.app')
@section('content')
<div class="mt-2 mx-8 px-10 sm:px-10 lg:px-10" style="background: rgba(217, 217, 217, 0.85);">
    <h1 class="text-lg py-4 text-center font-bold text-black">{{$community->name}}</h1>
<h1 class="text-2xl text-center font-bold  text-black">{{  !isset($protected_area)  ?
    __('app.add_protected_area'):__('app.update_protected_area') }}</h1>

<form
    action="{{ !isset($protected_area) ? route('dashboard.protected-areas.store', ['community_id' => $community->id]) :  route('dashboard.protected-areas.update', ['community_id' => $community->id, 'id' => $protected_area->id])  }}"
    method="POST" enctype="multipart/form-data">
    @if(isset($protected_area))
    @method('put')
    @endif
    @csrf

    @include('dashboard.communities.protected_areas._form_create_and_edit')

    <div class="pb-10 flex justify-center">
        <div class="flex flex-col">
            <button type="submit" class="px-10 py-1 button-register bg-gray-800 text-black">{{ !isset($protected_area)
                ?__('app.keep'):__('app.update')}}</button>
                <a class="text-center pt-2 font-bold"
                    href="{{route('dashboard.protected-areas.index', ['community_id' => $community->id])}}">{{__('app.return')}}</a>
        </div>
    </div>
</form>
@endsection