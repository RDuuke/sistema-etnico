<div class="sm:col-span-6 flex flex-col pt-6 pb-2 border-black text-black">
    <h3 class="font-semibold">{{__('app.optional_fields')}}</h3>
    <ul class="items-center w-full text-sm font-medium border border-black sm:flex">
        <li class="w-full border-b border-black sm:border-b-0 sm:border-r">
            <div class="flex items-center ps-3">
                <input id="collective_title" type="checkbox" wire:model="checkCollectiveTitle" class="w-5 h-5 border-black">
                <label class="w-full py-3 ms-2 text-sm font-medium">{{__('app.collective_title')}}</label>
            </div>
        </li>
        <li class="w-full sm:border-b-0 sm:border-r border-black">
            <div class="flex items-center ps-3">
                <input id="name_community_council" type="checkbox" wire:model="checkNameCommunityCouncil" class="w-5 h-5 border-black">
                <label class="w-full py-3 ms-2 text-sm font-medium">{{__('app.name_community_council')}}</label>
            </div>
        </li>
        <li class="w-full border-b border-black sm:border-b-0 sm:border-r">
            <div class="flex items-center ps-3">
                <input id="reservation_name" type="checkbox" wire:model="checkReservationName" class="w-5 h-5 border-black">
                <label class="w-full py-3 ms-2 text-sm font-medium">{{__('app.reservation_name')}}</label>
            </div>
        </li>
        <li class="w-full">
            <div class="flex items-center ps-3">
                <input id="town_name" type="checkbox" wire:model="checkTownName" class="w-5 h-5 border-black">
                <label class="w-full py-3 ms-2 text-sm font-medium">{{__('app.town_name')}}</label>
            </div>
        </li>
    </ul>
</div>

<div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 pb-6 border-b border-black">

    @if($checkCollectiveTitle)
        <div class="sm:col-span-3">
            <label for="collective_title" class="label-form">{{__('app.collective_title')}}</label>
            <select wire:model="community.collective_title" name="collective_title" class="select-form">
                <option value="">{{ __('app.select_option') }}</option>
                <option value="{{  1 }}"> Si </option>
                <option value="{{  0 }}"> No </option>
            </select>
            @error('community.collective_title') <span class="error-form">{{ $message }}</span>@enderror
        </div>
    @endif
    
    @if($checkNameCommunityCouncil)
        <div class="sm:col-span-3">
            <label for="name_community_council" class="label-form">{{__('app.name_community_council')}}</label>
            <input type="text" name="name_community_council" wire:model="community.name_community_council"
                placeholder="{{__('app.name_community_council')}}" class="input-form">
            @error('community.name_community_council') <span class="error-form">{{ $message }}</span>@enderror
        </div>
    @endif

    @if($checkReservationName)
        <div class="sm:col-span-3">
            <label for="reservation_name" class="label-form">{{__('app.reservation_name')}}</label>
            <input type="text" name="reservation_name" wire:model="community.reservation_name"
            placeholder="{{__('app.reservation_name')}}" class="input-form">
            @error('community.reservation_name') <span class="error-form">{{ $message }}</span>@enderror
        </div>
    @endif

    @if($checkTownName)
        <div class="sm:col-span-3">
            <label for="town_name" class="label-form">{{__('app.town_name')}}</label>
            <input type="text" name="town_name" wire:model="community.town_name" placeholder="{{__('app.town_name')}}"
                class="input-form">
            @error('community.town_name') <span class="error-form">{{ $message }}</span>@enderror
        </div>
    @endif

</div>