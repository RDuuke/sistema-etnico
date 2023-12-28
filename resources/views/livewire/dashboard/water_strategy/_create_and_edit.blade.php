<div class="border-gray-900/10 pb-12">

    <div class="section-water__content3">
        <div class="sm:col-span-6">
            <label for="types_water_strategy_id" class="label-form">{{__('app.type_of_program')}}</label>
            <select wire:model="water_strategy.types_water_strategy_id" name="types_water_strategy_id"
                class="select-form">
                <option>{{ __('app.select_option') }}</option>
                @foreach($types_water_strategies as $type_water_strategy)
                <option value="{{ $type_water_strategy->id }}">
                    {{ $type_water_strategy->name }}
                </option>
                @endforeach
            </select>
            @error('water_strategy.types_water_strategy_id') <span class="error-form">{{ $message }}</span>@enderror
        </div>
    </div>
    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

        @if($water_strategy['types_water_strategy_id'] != 0)
        <div class="sm:col-span-2">
            <label for="year" class="label-form">{{__('app.year')}}</label>
            <input placeholder="{{__('app.year')}}" type="number" name="year" wire:model="water_strategy.year"
                class="input-form" maxlength="4">
            @error('water_strategy.year') <span class="error-form">{{ $message }}</span>@enderror
        </div>
        <div class="sm:col-span-2">
            <label for="state" class="label-form">{{__('app.state')}}</label>
            <select name="state" wire:model="water_strategy.state" class="select-form">
                <option value="">{{ __('app.select_option') }}</option>
                <option value="0">{{ 'Bueno' }}</option>
                <option value="1">{{ 'Regular' }}</option>
                <option value="2">{{ 'Malo' }}</option>
            </select>
            @error('water_strategy.state') <span class="error-form">{{ $message }}</span>@enderror
        </div>
        <div class="sm:col-span-2">
            <label for="housing_with_service" class="label-form">{{__('app.housing_with_service')}}</label>
            <input placeholder="{{__('app.housing_with_service')}}" type="number" name="housing_with_service"
                wire:model="water_strategy.housing_with_service" class="input-form" maxlength="4">
            @error('water_strategy.housing_with_service') <span class="error-form">{{ $message }}</span>@enderror
        </div>
        @endif
    </div>

</div>