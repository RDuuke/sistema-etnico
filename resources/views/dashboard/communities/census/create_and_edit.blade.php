@extends('layouts.app')
@section('content')
<div class="mt-2 mx-8 px-10 sm:px-10 lg:px-10" style="background: rgba(217, 217, 217, 0.85);">
<h1 class="pt-8 text-2xl text-center font-bold  text-black">{{  !isset($community_census)  ?
    __('app.add_community_census'):__('app.update_community_census') }}</h1>
<h1 class="text-2xl text-center font-bold text-black">{{$community->name}}</h1>

<form
    action="{{ !isset($community_census) ? route('dashboard.census.store', ['community_id' => $community->id]) :  route('dashboard.census.update', ['community_id' => $community->id, 'id' => $community_census->id])  }}"
    method="POST" enctype="multipart/form-data">
    @if(isset($community_census))
    @method('put')
    @endif
    @csrf

    @include('dashboard.communities.census._form_create_and_edit')

    <div class="pb-10 flex justify-center">
        <div class="flex flex-col">
            <button type="submit" class="px-10 py-1 button-register bg-gray-800 text-black">{{ !isset($community_census)
                ?__('app.keep'):__('app.update')}}</button>
                <a class="text-center pt-2 font-bold"
                    href="{{route('dashboard.census.index', ['community_id' => $community->id])}}">{{__('app.return')}}</a>
        </div>
    </div>
</form>
@endsection