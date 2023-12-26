<div class="border-gray-900/10 pb-12">

    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-2">
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

        @if($program['type_program_id'] == 6)
        <div class="sm:col-span-2">
            <label for="which" class="label-form">{{'¿' .__('app.which') . '?'}}</label>
            <input placeholder="{{'¿' .__('app.which')  . '?'}}" type="text" name="which" wire:model="program.which"
                class="input-form">
            @error('program.which') <span class="error-form">{{ $message }}</span>@enderror
        </div>
        @endif

        <div class="sm:col-span-2">
            <label for="year" class="label-form">{{__('app.year')}}</label>
            <input placeholder="{{__('app.year')}}" type="number" name="year" wire:model="program.year"
                class="input-form" maxlength="4">
            @error('program.year') <span class="error-form">{{ $message }}</span>@enderror
        </div>

        <div class="sm:col-span-2">
            <label for="apply" class="label-form">{{ '¿' . __('app.apply') . '?'}}</label>
            <select name="apply" wire:model="program.apply" class="select-form">
                <option value="">{{ __('app.select_option') }}</option>
                <option value="true">{{ 'Si' }}</option>
                <option value="false">{{ 'No' }}</option>
            </select>
            @error('program.apply') <span class="error-form">{{ $message }}</span>@enderror
        </div>

        <div class="sm:col-span-2">
            <label for="unit_of_measurement" class="label-form">{{__('app.unit_of_measurement')}}</label>
            <input placeholder="@if($program['apply'] == "" || $program['apply'] == "false") {{__('app.does_not_apply')}}
                @else {{__('app.unit_of_measurement')}} @endif" type="text" name="number_of_people"
                wire:model="program.unit_of_measurement"
                class="input-form @if($program['apply'] == "" || $program['apply'] == "false") disabled select-none
                pointer-events-none bg-gray-300 @endif">
            @error('program.unit_of_measurement') <span class="error-form">{{ $message }}</span>@enderror
        </div>

        <div class="sm:col-span-2">
            <label for="amount_of_participants" class="label-form">{{__('app.amount_of_participants')}}</label>
            <input placeholder="@if($program['apply'] == "" || $program['apply'] == "false") {{__('app.does_not_apply')}}
                @else{{__('app.amount_of_participants')}}@endif" type="number" name="amount_of_participants"
                wire:model="program.amount_of_participants"
                class="input-form @if($program['apply'] == "" || $program['apply'] == "false") disabled select-none
                pointer-events-none bg-gray-300 @endif" maxlength="4">
            @error('program.amount_of_participants') <span class="error-form">{{ $message }}</span>@enderror
        </div>

        <div class="sm:col-span-6">
            <label for="observations" class="label-form">{{__('app.observations')}}</label>
            <textarea placeholder="@if($program['apply'] == "" || $program['apply'] == "false") {{__('app.does_not_apply')}}
                @else{{__('app.observations')}}@endif" type="number" name="observations"
                wire:model="program.observations"
                class="input-form @if($program['apply'] == "" || $program['apply'] == "false") disabled select-none
                pointer-events-none bg-gray-300 @endif">
            </textarea>
            @error('program.observations') <span class="error-form">{{ $message }}</span>@enderror
        </div>


    </div>
</div>