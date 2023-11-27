<div class="space-y-12">
    <div class="border-gray-900/10 pb-12">
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

            @if ($guardWeb)
            <div class="sm:col-span-3">
                <label for="role" class="label-form">{{__('app.role_for_user')}}</label>
                <select id="role" name="role" class="select-form">
                    <option value="">{{ __('app.select_option') }}</option>
                    @foreach($roles as $role)
                    <option value="{{ $role->name }}" {{(old('role', (isset($community_user) ? $community_user->hasRole($role->name) : '')) == $role->name) ? 'selected' : '' }}>
                        {{ __('app.' . $role->name) }}
                    </option>
                    @endforeach
                </select>
                @error('role') <span class="error-form">{{ $message }}</span>@enderror
            </div>
            <br>
            @endif
            <div class="sm:col-span-3">
                <label for="names" class="label-form">{{__('app.names')}}</label>
                <input placeholder="{{__('app.names')}}" type="text" name="names" id="names" value="{{ old('names', $community_user->names ?? '') }}"
                    class="input-form">
                @error('names') <span class="error-form">{{ $message }}</span>@enderror
            </div>

            <div class="sm:col-span-3">
                <label for="surnames" class="label-form">{{__('app.surnames')}}</label>
                <input placeholder="{{__('app.surnames')}}" type="text" name="surnames" id="surnames"
                    value="{{ old('surnames', $community_user->surnames ?? '') }}" class="input-form">
                @error('surnames') <span class="error-form">{{ $message }}</span>@enderror
            </div>

            <div class="sm:col-span-3">
                <label for="type_document_id" class="label-form">{{__('app.type_document')}}</label>
                <select id="type_document_id" name="type_document_id" class="select-form">
                    <option>{{ __('app.select_option') }}</option>
                    @foreach($types_documents as $type_document)
                    <option value="{{ $type_document->id }}" {{(old('type_document_id', (isset($community_user->type_document_id) ? $community_user->type_document_id : '')) == $type_document->id) ? 'selected': '' }}>
                        {{ $type_document->name }}
                    </option>
                    @endforeach
                </select>
                @error('type_document_id') <span class="error-form">{{ $message }}</span>@enderror
            </div>

            <div class="sm:col-span-3">
                <label for="document" class="label-form">{{__('app.document')}}</label>
                <input placeholder="{{__('app.document')}}" type="text" name="document" id="document"
                    value="{{ old('document', $community_user->document ?? '') }}" class="input-form">
                @error('document') <span class="error-form">{{ $message }}</span>@enderror
            </div>

            <div class="sm:col-span-3">
                <label for="age" class="label-form">{{__('app.age')}}</label>
                <input placeholder="{{__('app.age')}}" type="number" name="age" id="age" value="{{ old('age', $community_user->age ?? '') }}" class="input-form">
                @error('age') <span class="error-form">{{ $message }}</span>@enderror
            </div>

            <div class="sm:col-span-3">
                <label for="gender_id" class="label-form">{{__('app.gender')}}</label>
                <select id="gender_id" name="gender_id" autocomplete="gender_id" class="select-form">
                    <option>{{ __('app.select_option') }}</option>
                    @foreach($genders as $gender)
                    <option value="{{ $gender->id }}" {{(old('gender_id', (isset($community_user->gender_id) ? $community_user->gender_id : '')) == $gender->id) ? 'selected' : '' }}>
                        {{ $gender->name }}
                    </option>
                    @endforeach
                </select>
                @error('gender_id') <span class="error-form">{{ $message }}</span>@enderror
            </div>

            <div class="sm:col-span-3">
                <label for="phone_1" class="label-form">{{__('app.phone_number')}}</label>
                <input placeholder="{{__('app.phone_number')}}" type="number" name="phone_1" id="phone_1" value="{{ old('phone_1', $community_user->phone_1 ?? '') }}" class="input-form">
                @error('phone_1') <span class="error-form">{{ $message }}</span>@enderror
            </div>

            <div class="sm:col-span-3">
                <label for="phone_2" class="label-form">{{__('app.other_phone_number')}}</label>
                <input placeholder="{{__('app.other_phone_number')}}" type="number" name="phone_2" id="phone_2" value="{{ old('phone_2', $community_user->phone_2 ?? '') }}" class="input-form">
                @error('phone_2') <span class="error-form">{{ $message }}</span>@enderror
            </div>

            <div class="sm:col-span-3">
                <label for="email" class="label-form">{{__('app.email')}}</label>
                <input placeholder="{{__('app.email')}}" type="text" name="email" id="email" value="{{ old('email', $community_user->email ?? '') }}" autocomplete="family-name" class="input-form">
                @error('email') <span class="error-form">{{ $message }}</span>@enderror
            </div>

            <div class="sm:col-span-3">
                <label for="community_id" class="label-form">{{__('app.community')}}</label>
                <select id="community_id" name="community_id" autocomplete="community_id" class="select-form">
                    <option>{{ __('app.select_option') }}</option>
                    @foreach($communities as $community)
                    <option value="{{ $community->id }}" {{(old('community_id', (isset($current_community->community_id) ? $current_community->community_id : '')) == $community->id) ? 'selected' : ''}}>
                        {{ $community->name }}
                    </option>
                    @endforeach
                </select>
                @error('community_id') <span class="error-form">{{ $message }}</span>@enderror
            </div>

            <div class="sm:col-span-3">
                <label for="educational_level_id" class="label-form">{{__('app.educational_level')}}</label>
                <select id="educational_level_id" name="educational_level_id" autocomplete="educational_level_id"
                    class="select-form">
                    <option>{{ __('app.select_option') }}</option>
                    @foreach($educational_levels as $educational_level)
                    <option value="{{ $educational_level->id }}" {{(old('educational_level_id', (isset($community_user->educational_level_id) ? $community_user->educational_level_id : '')) == $educational_level->id) ? 'selected' : '' }}>
                        {{ $educational_level->name }}
                    </option>
                    @endforeach
                </select>
                @error('educational_level_id') <span class="error-form">{{ $message }}</span>@enderror
            </div>

            <div class="sm:col-span-3">
                <label for="training_area_id" class="label-form">{{__('app.training_area')}}</label>
                <select id="training_area_id" name="training_area_id" autocomplete="training_area_id"
                    class="select-form">
                    <option>{{ __('app.select_option') }}</option>
                    @foreach($training_areas as $training_area)
                    <option value="{{ $training_area->id }}" {{(old('training_area_id', (isset($community_user->training_area_id) ? $community_user->training_area_id : '')) == $training_area->id) ? 'selected' : '' }}>
                        {{ $training_area->name }}
                    </option>
                    @endforeach
                </select>
                @error('training_area_id') <span class="error-form">{{ $message }}</span>@enderror
            </div>

            <div class="sm:col-span-3">
                <label for="occupation_id" class="label-form">{{__('app.occupation')}}</label>
                <select id="occupation_id" name="occupation_id" autocomplete="occupation_id" class="select-form">
                    <option>{{ __('app.select_option') }}</option>
                    @foreach($occupations as $occupation)
                    <option value="{{ $occupation->id }}" {{(old('occupation_id', (isset($community_user->occupation_id) ? $community_user->occupation_id : '')) == $occupation->id) ? 'selected' : '' }}>
                        {{ $occupation->name }}
                    </option>
                    @endforeach
                </select>
                @error('occupation_id') <span class="error-form">{{ $message }}</span>@enderror
            </div>

            <div class="sm:col-span-3">
                <label for="strategy_id" class="label-form">{{__('app.strategy')}}</label>
                <select id="strategy_id" name="strategy_id" autocomplete="strategy_id" class="select-form">
                    <option>{{ __('app.select_option') }}</option>
                    @foreach($strategies as $strategy)
                    <option value="{{ $strategy->id }}" {{(old('strategy_id', (isset($community_user->strategy_id) ? $community_user->strategy_id : '')) == $strategy->id) ? 'selected' : '' }}>
                        {{ $strategy->name }}
                    </option>
                    @endforeach
                </select>
                @error('strategy_id') <span class="error-form">{{ $message }}</span>@enderror
            </div>

        </div>
    </div>
</div>