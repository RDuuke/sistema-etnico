<div class="border-gray-900/10 pb-12">

    <div class="sm:col-span-3">
        <label for="type_program_id" class="label-form">{{__('app.type_of_program')}}</label>
        <select wire:model="program.type_program_id" name="type_program_id" class="select-form">
            <option>{{ __('app.select_option') }}</option>
            @foreach($types_programs as $type_program)
            <option value="{{ $type_program->id }}">
                {{ $type_program->name }}
            </option>
            @endforeach
        </select>
        @error('program.type_program_id') <span class="error-form">{{ $message }}</span>@enderror
    </div>

    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

        @if($program['type_program_id'] == 6)
            <div class="sm:col-span-6">
                <label for="which" class="label-form">{{'¿' .__('app.which')  . '?'}}</label>
                <input placeholder="{{'¿' .__('app.which')  . '?'}}" type="text" name="which"
                wire:model="program.which" class="input-form">
                @error('program.which') <span class="error-form">{{ $message }}</span>@enderror
            </div>
        @endif

        <div class="sm:col-span-2">
            <label for="apply" class="label-form">{{ '¿' . __('app.apply') . '?'}}</label>
            <select name="apply" wire:model="program.apply" class="select-form">
                <option value="">{{ __('app.select_option') }}</option>
                <option value="1">{{ 'Si' }}</option>
                <option value="0">{{ 'No' }}</option>
            </select>
            @error('program.apply') <span class="error-form">{{ $message }}</span>@enderror
        </div>

        <div class="sm:col-span-2">
            <label for="unit_of_measurement" class="label-form">{{__('app.unit_of_measurement')}}</label>
            <input placeholder="{{__('app.unit_of_measurement')}}" type="text" name="number_of_people"
                wire:model="program.unit_of_measurement" class="input-form">
            @error('program.unit_of_measurement') <span class="error-form">{{ $message }}</span>@enderror
        </div>

        <div class="sm:col-span-2">
            <label for="amount_of_participants" class="label-form">{{__('app.amount_of_participants')}}</label>
            <input placeholder="{{__('app.amount_of_participants')}}" type="number" name="amount_of_participants"
            wire:model="program.amount_of_participants" class="input-form" maxlength="4">
            @error('program.amount_of_participants') <span class="error-form">{{ $message }}</span>@enderror
        </div>

    </div>
</div>