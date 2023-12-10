<div class="space-y-12" id="form">
    <div class="border-gray-900/10 pb-12">
        <div class="sm:col-span-6">
            <label for="district_id" class="label-form">{{__('app.type_of_community')}}</label>
            <select wire:model="community.type_community" name="type_community" class="select-form">
                <option value="">{{ __('app.select_option') }}</option>
                @foreach(AppArrayData::getTypesCommunities() as $type)
                <option value="{{ $type['id'] }}">
                    {{ __($type['value']) }}
                </option>
                @endforeach
            </select>
            @error('community.type_community') <span class="error-form">{{ $message }}</span>@enderror
        </div>
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div class="sm:col-span-3">
                @if($community['type_community'] == 1)
                    <label for="name" class="label-form">{{__('app.community_name')}}</label>
                    <input type="text" name="name" wire:model="community.name" placeholder="{{__('app.community_name')}}" class="input-form">
                    @error('community.name') <span class="error-form">{{ $message }}</span>@enderror
                @endif
                @if($community['type_community'] == 2)
                    <label for="name" class="label-form">{{__('app.name_community_council')}}</label>
                    <input type="text" name="name" wire:model="community.name" placeholder="{{__('app.name_community_council')}}" class="input-form">
                    @error('community.name') <span class="error-form">{{ $message }}</span>@enderror
                @endif
            </div>

            @if($community['type_community'] != 0)
                @if($community['type_community'] == 1)
                    <div class="sm:col-span-3">
                        <label for="reservation_name" class="label-form">{{__('app.reservation_name')}}</label>
                        <input type="text" name="reservation_name" wire:model="community.reservation_name"
                        placeholder="{{__('app.reservation_name')}}" class="input-form">
                        @error('community.reservation_name') <span class="error-form">{{ $message }}</span>@enderror
                    </div>
                    <div class="sm:col-span-3">
                        <label for="town_name" class="label-form">{{__('app.town_name')}}</label>
                        <input type="text" name="town_name" wire:model="community.town_name" placeholder="{{__('app.town_name')}}"
                            class="input-form">
                        @error('community.town_name') <span class="error-form">{{ $message }}</span>@enderror
                    </div>
                @endif

                @if($community['type_community'] == 2)
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
                <div class="sm:col-span-3">
                    <label for="contact_email" class="label-form">{{__('app.council_email')}}</label>
                    <input type="text" name="contact_email" wire:model="community.contact_email" placeholder="{{__('app.council_email')}}" class="input-form">
                    @error('community.contact_email') <span class="error-form">{{ $message }}</span>@enderror
                </div>

                <div class="sm:col-span-3">
                    <label for="contact_phone" class="label-form">{{__('app.contact_phone')}}</label>
                    <input type="text" name="contact_phone" wire:model="community.contact_phone" placeholder="{{__('app.contact_phone')}}" class="input-form">
                    @error('community.contact_phone') <span class="error-form">{{ $message }}</span>@enderror
                </div>

                <div class="sm:col-span-3">
                    <label for="municipality_id" class="label-form">{{__('app.municipality')}}</label>
                    <select wire:model="community.municipality_id" name="municipality_id" class="select-form">
                        <option>{{ __('app.select_option') }}</option>
                        @foreach($municipalities as $municipality)
                        <option value="{{ $municipality->id }}">
                            {{ $municipality->name }}
                        </option>
                        @endforeach
                    </select>
                    @error('community.municipality_id') <span class="error-form">{{ $message }}</span>@enderror
                </div>

                <div class="sm:col-span-3">
                    <label for="district_id" class="label-form">{{__('app.district')}}</label>
                    <select wire:model="community.district_id" name="district_id" class="select-form">
                        <option>{{ __('app.select_option') }}</option>
                        @foreach($districts->where('municipality_id', $community['municipality_id'])->all() as $district)
                        <option value="{{ $district->id }}">
                            {{ $district->name }}
                        </option>
                        @endforeach
                    </select>
                    @error('community.district_id') <span class="error-form">{{ $message }}</span>@enderror
                </div>

                <div class="sm:col-span-3">
                    <label for="hamlet_id" class="label-form">{{__('app.hamlet')}}</label>
                    <select wire:model="community.hamlet_id" name="hamlet_id" class="select-form">
                        <option>{{ __('app.select_option') }}</option>
                        @foreach($hamlets->where('district_id', $community['district_id'])->all() as $hamlet)
                        <option value="{{ $hamlet->id }}">
                            {{ $hamlet->name }}
                        </option>
                        @endforeach
                    </select>
                    @error('community.hamlet_id') <span class="error-form">{{ $message }}</span>@enderror
                </div>

                <div class="sm:col-span-3">
                    <label for="subregion_id" class="label-form">{{__('app.subregion')}}</label>
                    <select wire:model="community.subregion_id" name="subregion_id" class="select-form">
                        <option>{{ __('app.select_option') }}</option>
                        @foreach($subregions->where('hamlet_id', $community['hamlet_id'])->all() as $subregion)
                        <option value="{{ $subregion->id }}">
                            {{ $subregion->name }}
                        </option>
                        @endforeach
                    </select>
                    @error('community.subregion_id') <span class="error-form">{{ $message }}</span>@enderror
                </div>

                <div class="sm:col-span-3">
                    <label for="territorial_id" class="label-form">{{__('app.territorial')}}</label>
                    <select wire:model="community.territorial_id" name="territorial_id" class="select-form">
                        <option>{{ __('app.select_option') }}</option>
                        @foreach($territorials->where('subregion_id', $community['subregion_id'])->all() as $territorial)
                        <option value="{{ $territorial->id }}">
                            {{ $territorial->name }}
                        </option>
                        @endforeach
                    </select>
                    @error('community.territorial_id') <span class="error-form">{{ $message }}</span>@enderror
                </div>

                <div class="sm:col-span-3">
                    <label for="coordinates" class="label-form">{{__('app.coordinates')}}</label>
                    <input type="text" name="coordinates" wire:model="community.coordinates" placeholder="{{__('app.coordinates')}}"
                        class="input-form">
                    @error('community.coordinates') <span class="error-form">{{ $message }}</span>@enderror
                </div>

                <div class="sm:col-span-3">
                    <label for="occupied_area" class="label-form">{{__('app.occupied_area')}}</label>
                    <input type="text" name="occupied_area" wire:model="community.occupied_area" placeholder="{{__('app.occupied_area')}}"
                        class="input-form">
                    @error('community.occupied_area') <span class="error-form">{{ $message }}</span>@enderror
                </div>

                <div class="sm:col-span-3">
                    <label for="type_of_area_id" class="label-form">{{__('app.type_of_area')}}</label>
                    <select wire:model="community.type_of_area_id" name="type_of_area_id" class="select-form">
                        <option>{{ __('app.select_option') }}</option>
                        @foreach($types_of_ares as $type_of_area)
                        <option value="{{ $type_of_area->id }}">
                            {{ $type_of_area->name }}
                        </option>
                        @endforeach
                    </select>
                    @error('community.type_of_area_id') <span class="error-form">{{ $message }}</span>@enderror
                </div>
            @endif
        </div>
    </div>
</div>