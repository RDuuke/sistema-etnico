<div class="space-y-12">
    <div class="border-gray-900/10 pb-12">
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div class="sm:col-span-2">
                <label for="year" class="label-form">{{__('app.date')}}</label>
                <input placeholder="{{__('app.year')}}" type="number" name="year" id="year"
                    value="{{ old('year', $protected_area->year ?? '') }}" class="input-form" maxlength="4">
                @error('year') <span class="error-form">{{ $message }}</span>@enderror
            </div>
        </div>
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div class="sm:col-span-3">
                <label for="protected_hectares" class="label-form">{{__('app.protected_hectares')}}</label>
                <input placeholder="{{__('app.protected_hectares')}}" type="number" step="0.000000001"
                    name="protected_hectares" id="protected_hectares"
                    value="{{ old('protected_hectares', $protected_area->protected_hectares ?? '') }}"
                    class="input-form">
                @error('protected_hectares') <span class="error-form">{{ $message }}</span>@enderror
            </div>

            <div class="sm:col-span-3">
                <label for="payments_environmental_services"
                    class="label-form">{{__('app.payments_environmental_services')}}</label>
                <input placeholder="{{__('app.payments_environmental_services')}}" type="number" step="0.000000001"
                    name="payments_environmental_services" id="payments_environmental_services"
                    value="{{ old('payments_environmental_services', $protected_area->payments_environmental_services ?? '') }}"
                    class="input-form">
                @error('payments_environmental_services') <span class="error-form">{{ $message }}</span>@enderror
            </div>

        </div>
    </div>
</div>