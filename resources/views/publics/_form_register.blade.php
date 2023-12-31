<div class="sm:col-span-3">
    <label for="names" class="block text-sm font-medium text-white">{{__('app.names')}}</label>
    <div class="mt-1">
        <input type="text" name="names" id="names" value="{{ old('names', $user->names ?? '') }}"
            autocomplete="given-name" class="input-form-register">
        @error('names') <span class="error-form">{{ $message }}</span>@enderror
    </div>
</div>

<div class="sm:col-span-3">
    <label for="surnames"
        class="block text-sm font-medium text-white">{{__('app.surnames')}}</label>
    <div class="mt-1">
        <input type="text" name="surnames" id="surnames"
            value="{{ old('surnames', $user->surnames ?? '') }}" autocomplete="family-name"
            class="input-form-register">
        @error('surnames') <span class="error-form">{{ $message }}</span>@enderror
    </div>
</div>

<div class="sm:col-span-3">
    <label for="type_document_id" class="block text-sm font-medium text-white">{{__('app.type_document')}}</label>
    <div class="mt-1">
        <select id="type_document_id" name="type_document_id" autocomplete="type_document_id"
            class="select-form-register">
            <option>{{ __('app.select_option') }}</option>
            @foreach($types_documents as $type_document)
            <option value="{{ $type_document->id }}"
                    {{(old('type_document_id', (isset($communityUser->type_document_id) ? $communityUser->type_document_id : '')) == $type_document->id) ? 'selected' : '' }}>
                {{ $type_document->name }}
            </option>
            @endforeach
        </select>
        @error('type_document_id') <span class="error-form">{{ $message }}</span>@enderror
    </div>
</div>

<div class="sm:col-span-3">
    <label for="document"
        class="block text-sm font-medium text-white">{{__('app.document')}}</label>
    <div class="mt-1">
        <input type="text" name="document" id="document"
            value="{{ old('document', $user->document ?? '') }}" autocomplete="given-name"
            class="input-form-register">
        @error('document') <span class="error-form">{{ $message }}</span>@enderror
    </div>
</div>

<div class="sm:col-span-3">
    <label for="age"
        class="block text-sm font-medium text-white">{{__('app.age')}}</label>
    <div class="mt-1">
        <input type="number" name="age" id="age"
            value="{{ old('age', $user->age ?? '') }}" autocomplete="given-name"
            class="input-form-register">
        @error('age') <span class="error-form">{{ $message }}</span>@enderror
    </div>
</div>

<div class="sm:col-span-3">
    <label for="gender_id" class="block text-sm font-medium text-white">{{__('app.gender')}}</label>
    <div class="mt-1">
        <select id="gender_id" name="gender_id" autocomplete="gender_id"
            class="select-form-register">
            <option>{{ __('app.select_option') }}</option>
            @foreach($genders as $gender)
            <option value="{{ $gender->id }}"
                    {{(old('gender_id', (isset($communityUser->gender_id) ? $communityUser->gender_id : '')) == $gender->id) ? 'selected' : '' }}>
                {{ $gender->name }}
            </option>
            @endforeach
        </select>
        @error('gender_id') <span class="error-form">{{ $message }}</span>@enderror
    </div>
</div>

{{-- <div class="sm:col-span-3">
    <label for="phone_1"
        class="block text-sm font-medium text-white">{{__('app.phone_number')}}</label>
    <div class="mt-1">
        <input type="number" name="phone_1" id="phone_1"
            value="{{ old('phone_1', $user->phone_1 ?? '') }}" autocomplete="given-name"
            class="input-form-register">
        @error('phone_1') <span class="error-form">{{ $message }}</span>@enderror
    </div>
</div>

<div class="sm:col-span-3">
    <label for="phone_2"
        class="block text-sm font-medium text-white">{{__('app.other_phone_number')}}</label>
    <div class="mt-1">
        <input type="number" name="phone_2" id="phone_2"
            value="{{ old('phone_2', $user->phone_2 ?? '') }}" autocomplete="given-name"
            class="input-form-register">
        @error('phone_2') <span class="error-form">{{ $message }}</span>@enderror
    </div>
</div> --}}

<div class="sm:col-span-3">
    <label for="email" class="block text-sm font-medium text-white">{{__('app.email')}}</label>
    <div class="mt-1">
        <input type="text" name="email" id="email" value="{{ old('email', $user->email ?? '') }}"
            autocomplete="family-name" class="input-form-register">
        @error('email') <span class="error-form">{{ $message }}</span>@enderror
    </div>
</div>

<div class="sm:col-span-3">
    <label for="community_id" class="block text-sm font-medium text-white">{{__('app.community')}}</label>
    <div class="mt-1">
        <select id="community_id" name="community_id" autocomplete="community_id"
            class="select-form-register">
            <option>{{ __('app.select_option') }}</option>
            @foreach($communities as $community)
            <option value="{{ $community->id }}"
                    {{(old('community_id', (isset($communityUser->community_id) ? $communityUser->community_id : '')) == $community->id) ? 'selected' : '' }}>
                {{ $community->name }}
            </option>
            @endforeach
        </select>
        @error('community_id') <span class="error-form">{{ $message }}</span>@enderror
    </div>
</div>

{{-- <div class="sm:col-span-3">
    <label for="educational_level_id" class="block text-sm font-medium text-white">{{__('app.educational_level')}}</label>
    <div class="mt-1">
        <select id="educational_level_id" name="educational_level_id" autocomplete="educational_level_id"
            class="select-form-register">
            <option>{{ __('app.select_option') }}</option>
            @foreach($educational_levels as $educational_level)
            <option value="{{ $educational_level->id }}"
                    {{(old('educational_level_id', (isset($educational_levelUser->educational_level_id) ? $educational_levelUser->educational_level_id : '')) == $educational_level->id) ? 'selected' : '' }}>
                {{ $educational_level->name }}
            </option>
            @endforeach
        </select>
        @error('educational_level_id') <span class="error-form">{{ $message }}</span>@enderror
    </div>
</div>

<div class="sm:col-span-3">
    <label for="training_area_id" class="block text-sm font-medium text-white">{{__('app.training_area')}}</label>
    <div class="mt-1">
        <select id="training_area_id" name="training_area_id" autocomplete="training_area_id"
            class="select-form-register">
            <option>{{ __('app.select_option') }}</option>
            @foreach($training_areas as $training_area)
            <option value="{{ $training_area->id }}"
                    {{(old('training_area_id', (isset($training_areaUser->training_area_id) ? $training_areaUser->training_area_id : '')) == $training_area->id) ? 'selected' : '' }}>
                {{ $training_area->name }}
            </option>
            @endforeach
        </select>
        @error('training_area_id') <span class="error-form">{{ $message }}</span>@enderror
    </div>
</div>

<div class="sm:col-span-3">
    <label for="occupation_id" class="block text-sm font-medium text-white">{{__('app.occupation')}}</label>
    <div class="mt-1">
        <select id="occupation_id" name="occupation_id" autocomplete="occupation_id"
            class="select-form-register">
            <option>{{ __('app.select_option') }}</option>
            @foreach($occupations as $occupation)
            <option value="{{ $occupation->id }}"
                    {{(old('occupation_id', (isset($occupationUser->occupation_id) ? $occupationUser->occupation_id : '')) == $occupation->id) ? 'selected' : '' }}>
                {{ $occupation->name }}
            </option>
            @endforeach
        </select>
        @error('occupation_id') <span class="error-form">{{ $message }}</span>@enderror
    </div>
</div>

<div class="sm:col-span-3">
    <label for="strategy_id" class="block text-sm font-medium text-white">{{__('app.strategy')}}</label>
    <div class="mt-1">
        <select id="strategy_id" name="strategy_id" autocomplete="strategy_id"
            class="select-form-register">
            <option>{{ __('app.select_option') }}</option>
            @foreach($strategies as $strategy)
            <option value="{{ $strategy->id }}"
                    {{(old('strategy_id', (isset($occupationUser->strategy_id) ? $occupationUser->strategy_id : '')) == $strategy->id) ? 'selected' : '' }}>
                {{ $strategy->name }}
            </option>
            @endforeach
        </select>
        @error('strategy_id') <span class="error-form">{{ $message }}</span>@enderror
    </div>
</div> --}}