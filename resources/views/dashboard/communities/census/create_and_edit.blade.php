<h1 class="pt-8 text-2xl text-center font-bold  text-black">{{ !isset($user) ?
    __('app.add_community_census'):__('app.update_user') }}</h1>
<h1 class="text-2xl text-center font-bold text-black">{{$community->name}}</h1>
<form
    action="{{ is_null($community) ? route('dashboard.census.create', ['community_id' => $community->id]) : route('dashboard.census.create', ['community_id' => $community->id]) /* route('dashboard.community-users.update', ['id' => $community_user->id]) */  }}"
    method="POST" enctype="multipart/form-data">
    @if(is_null($community))
    @method('put')
    @endif
    @csrf

    @include('dashboard.communities.census._form_create_and_edit')

    <div class="pb-10 flex justify-center">
        <div class="flex flex-col">
            <button type="submit" class="px-10 py-1 button-register bg-gray-800 text-black">{{!isset($user)
                ?__('app.keep'):__('app.update')}}</button>
            <a class="text-center pt-2 font-bold"
                href="{{route('dashboard.communities.manage', ['id' => $community->id])}}">{{__('app.return')}}</a>
        </div>
    </div>
</form>