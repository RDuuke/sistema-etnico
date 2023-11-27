<div class="space-y-12">
    <div class="border-gray-900/10 pb-12">
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

            <div class="sm:col-span-3">
                <label for="names" class="label-form">{{__('app.names')}}</label>
                    <input type="text" name="names" id="names" placeholder="{{__('app.names')}}" value="{{ old('names', $user->names ?? '') }}" autocomplete="given-name" class="input-form">
                    @error('names') <span class="error-form">{{ $message }}</span>@enderror
            </div>

            <div class="sm:col-span-3">
                <label for="surnames" class="label-form">{{__('app.surnames')}}</label>
                    <input type="text" name="surnames" id="surnames" placeholder="{{__('app.surnames')}}" value="{{ old('surnames', $user->surnames ?? '') }}" autocomplete="family-name" class="input-form">
                    @error('surnames') <span class="error-form">{{ $message }}</span>@enderror
            </div>

            <div class="sm:col-span-3">
                <label for="document" class="label-form">{{__('app.document')}}</label>
                    <input type="text" name="document" id="document" placeholder="{{__('app.document')}}" value="{{ old('document', $user->document ?? '') }}" autocomplete="given-name" class="input-form">
                    @error('document') <span class="error-form">{{ $message }}</span>@enderror
            </div>

            <div class="sm:col-span-3">
                <label for="email" class="label-form">{{__('app.email')}}</label>
                    <input type="text" name="email" id="email" placeholder="{{__('app.email')}}" value="{{ old('email', $user->email ?? '') }}" autocomplete="family-name" class="input-form">
                    @error('email') <span class="error-form">{{ $message }}</span>@enderror
            </div>

        </div>
    </div>
</div>