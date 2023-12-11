<div class="space-y-12">
    <div class="border-gray-900/10 pb-12">
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

            <div class="sm:col-span-2">
                <label for="number_of_families" class="label-form">{{__('app.number_of_families')}}</label>
                <input placeholder="{{__('app.number_of_families')}}" type="number" name="number_of_families" id="number_of_families" 
                        value="{{ old('number_of_families', $census->number_of_families ?? '') }}" class="input-form">
                @error('number_of_families') <span class="error-form">{{ $message }}</span>@enderror
            </div>

            <div class="sm:col-span-2">
                <label for="number_of_people" class="label-form">{{__('app.number_of_people')}}</label>
                <input placeholder="{{__('app.number_of_people')}}" type="number" name="number_of_people" id="number_of_people"
                    value="{{ old('number_of_people', $census->number_of_people ?? '') }}" class="input-form">
                @error('number_of_people') <span class="error-form">{{ $message }}</span>@enderror
            </div>

            <div class="sm:col-span-2">
                <label for="year" class="label-form">{{__('app.date')}}</label>
                <input placeholder="{{__('app.year')}}" type="date" name="year" id="year"
                    value="{{ old('year', $census->year ?? '') }}" class="input-form">
                @error('year') <span class="error-form">{{ $message }}</span>@enderror
            </div>
            {{-- <input type="hidden" name="community_id" value="{{ $community->id }}"> --}}
        </div>
    </div>
</div>