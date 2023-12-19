<div class="border-gray-900/10 pb-12">
    <p class="section-water__p -mt-6">Agua potable</p>
    <div class="section-water__content3">
        <div class="sm:col-span-2">
            <label for="apply" class="label-form">{{ '¿' . __('app.drinking_water') . '?'}}</label>
            <select name="apply" wire:model="water_strategy.drinking_water" class="select-form">
                <option value="">{{ __('app.select_option') }}</option>
                <option value="0">{{ 'Si' }}</option>
                <option value="1">{{ 'No' }}</option>
            </select>
            @error('water_strategy.drinking_water') <span class="error-form">{{ $message }}</span>@enderror
        </div>

        <div class="sm:col-span-2">
            <label for="drinking_water_date" class="label-form">{{__('app.drinking_water_date')}}</label>
            <input placeholder="{{__('app.drinking_water_date')}}" type="number" name="drinking_water_date"
                wire:model="water_strategy.drinking_water_date" class="input-form">
            @error('water_strategy.drinking_water_date') <span class="error-form">{{ $message }}</span>@enderror
        </div>

        <div class="sm:col-span-2">
            <label for="drinking_water_status" class="label-form">{{ '¿' . __('app.drinking_water_status') .
                '?'}}</label>
            <select name="drinking_water_status" wire:model="water_strategy.drinking_water_status" class="select-form">
                <option value="">{{ __('app.select_option') }}</option>
                <option value="1">{{ 'Agua potable' }}</option>
                <option value="0">{{ 'Sin acceso' }}</option>
                <option value="2">{{ 'No aplica' }}</option>
            </select>
            @error('water_strategy.drinking_water_status') <span class="error-form">{{ $message }}</span>@enderror
        </div>
    </div>

    <p class="section-water__p border-t">Sistema de potabilización de agua (SPA)</p>
    <div class="section-water__content4">
        <div class="sm:col-span-2">
            <label for="water_purification_system" class="label-form">{{ '¿' . __('SPA') . '?'}}</label>
            <select name="water_purification_system" wire:model="water_strategy.water_purification_system"
                class="select-form">
                <option value="">{{ __('app.select_option') }}</option>
                <option value="0">{{ 'Si' }}</option>
                <option value="1">{{ 'No' }}</option>
            </select>
            @error('water_strategy.water_purification_system') <span class="error-form">{{ $message }}</span>@enderror
        </div>

        <div class="sm:col-span-2">
            <label for="water_purification_system_date"
                class="label-form">{{__('app.water_purification_system_date')}}</label>
            <input placeholder="{{__('app.water_purification_system_date')}}" type="number"
                name="water_purification_system_date" wire:model="water_strategy.water_purification_system_date"
                class="input-form">
            @error('water_strategy.water_purification_system_date') <span class="error-form">{{ $message
                }}</span>@enderror
        </div>

        <div class="sm:col-span-2">
            <label for="water_purification_system_status" class="label-form">{{ '¿' .
                __('app.water_purification_system_status') .
                '?'}}</label>
            <select name="water_purification_system_status" wire:model="water_strategy.water_purification_system_status"
                class="select-form">
                <option value="">{{ __('app.select_option') }}</option>
                <option value="1">{{ 'Acueducto' }}</option>
                <option value="0">{{ 'Sin acceso' }}</option>
                <option value="2">{{ 'No aplica' }}</option>
            </select>
            @error('water_strategy.water_purification_system_status') <span class="error-form">{{ $message
                }}</span>@enderror
        </div>

        <div class="sm:col-span-2">
            <label for="families_with_drinking_water" class="label-form">{{__('Familias con SPA')}}</label>
            <input placeholder="{{__('app.families_with_drinking_water')}}" type="number"
                name="families_with_drinking_water" wire:model="water_strategy.families_with_drinking_water"
                class="input-form">
            @error('water_strategy.families_with_drinking_water') <span class="error-form">{{ $message
                }}</span>@enderror
        </div>
    </div>

    <p class="section-water__p border-t">Acueducto</p>
    <div class="section-water__content4">
        <div class="sm:col-span-2">
            <label for="aqueduct" class="label-form">{{ '¿' . __('app.aqueduct') . '?'}}</label>
            <select name="aqueduct" wire:model="water_strategy.aqueduct" class="select-form">
                <option value="">{{ __('app.select_option') }}</option>
                <option value="0">{{ 'Si' }}</option>
                <option value="1">{{ 'No' }}</option>
            </select>
            @error('water_strategy.aqueduct') <span class="error-form">{{ $message }}</span>@enderror
        </div>

        <div class="sm:col-span-2">
            <label for="aqueduct_date" class="label-form">{{__('app.aqueduct_date')}}</label>
            <input placeholder="{{__('app.aqueduct_date')}}" type="number" name="aqueduct_date"
                wire:model="water_strategy.aqueduct_date" class="input-form">
            @error('water_strategy.aqueduct_date') <span class="error-form">{{ $message }}</span>@enderror
        </div>

        <div class="sm:col-span-2">
            <label for="aqueduct_status" class="label-form">{{ '¿' .
                __('app.aqueduct_status') .
                '?'}}</label>
            <select name="aqueduct_status" wire:model="water_strategy.aqueduct_status" class="select-form">
                <option value="">{{ __('app.select_option') }}</option>
                <option value="1">{{ 'Acueducto' }}</option>
                <option value="0">{{ 'Sin acceso' }}</option>
                <option value="2">{{ 'No aplica' }}</option>
            </select>
            @error('water_strategy.aqueduct_status') <span class="error-form">{{ $message
                }}</span>@enderror
        </div>

        <div class="sm:col-span-2">
            <label for="families_with_aqueduct" class="label-form">{{__('app.families_with_aqueduct')}}</label>
            <input placeholder="{{__('app.families_with_aqueduct')}}" type="number"
                name="families_with_aqueduct" wire:model="water_strategy.families_with_aqueduct"
                class="input-form">
            @error('water_strategy.families_with_aqueduct') <span class="error-form">{{ $message
                }}</span>@enderror
        </div>
    </div>

    <p class="section-water__p border-t">Alcantarillado</p>
    <div class="section-water__content4">
        <div class="sm:col-span-2">
            <label for="septic_tank_sewer" class="label-form">{{ '¿' . __('Alcantarillado') . '?'}}</label>
            <select name="septic_tank_sewer" wire:model="water_strategy.septic_tank_sewer" class="select-form">
                <option value="">{{ __('app.select_option') }}</option>
                <option value="0">{{ 'Si' }}</option>
                <option value="1">{{ 'No' }}</option>
            </select>
            @error('water_strategy.septic_tank_sewer') <span class="error-form">{{ $message }}</span>@enderror
        </div>

        <div class="sm:col-span-2">
            <label for="septic_tank_date" class="label-form">{{__('app.septic_tank_date')}}</label>
            <input placeholder="{{__('app.septic_tank_date')}}" type="number" name="septic_tank_date"
                wire:model="water_strategy.septic_tank_date" class="input-form">
            @error('water_strategy.septic_tank_date') <span class="error-form">{{ $message }}</span>@enderror
        </div>

        <div class="sm:col-span-2">
            <label for="septic_tank_status" class="label-form">{{ '¿' .
                __('Estado') .
                '?'}}</label>
            <select name="septic_tank_status" wire:model="water_strategy.septic_tank_status" class="select-form">
                <option value="">{{ __('app.select_option') }}</option>
                <option value="1">{{ 'Alcantarillado' }}</option>
                <option value="0">{{ 'Sin acceso' }}</option>
                <option value="2">{{ 'No aplica' }}</option>
            </select>
            @error('water_strategy.septic_tank_status') <span class="error-form">{{ $message
                }}</span>@enderror
        </div>

        <div class="sm:col-span-2">
            <label for="families_with_sewer" class="label-form">{{__('Familias alcantarillado')}}</label>
            <input placeholder="{{__('app.families_with_sewer')}}" type="number"
                name="families_with_sewer" wire:model="water_strategy.families_with_sewer"
                class="input-form">
            @error('water_strategy.families_with_sewer') <span class="error-form">{{ $message
                }}</span>@enderror
        </div>
    </div>
    @if ($errors->any())
    <p>Hay errores!</p>
    @endif

</div>