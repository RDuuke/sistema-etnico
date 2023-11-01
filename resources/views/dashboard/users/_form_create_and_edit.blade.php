<div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

            <div class="sm:col-span-3">
                <label for="names"
                    class="block text-sm font-medium leading-6 text-gray-900">{{__('app.names')}}</label>
                <div class="mt-2">
                    <input type="text" name="names" id="names" value="{{ old('names', $user->names ?? '') }}" autocomplete="given-name" class="input-form">
                    @error('names') <span class="error-form">{{ $message }}</span>@enderror
                </div>
            </div>

            <div class="sm:col-span-3">
                <label for="surnames"
                    class="block text-sm font-medium leading-6 text-gray-900">{{__('app.surnames')}}</label>
                <div class="mt-2">
                    <input type="text" name="surnames" id="surnames" value="{{ old('surnames', $user->surnames ?? '') }}" autocomplete="family-name" class="input-form">
                    @error('surnames') <span class="error-form">{{ $message }}</span>@enderror
                </div>
            </div>

            <div class="sm:col-span-3">
                <label for="document"
                    class="block text-sm font-medium leading-6 text-gray-900">{{__('app.document')}}</label>
                <div class="mt-2">
                    <input type="text" name="document" id="document" value="{{ old('document', $user->document ?? '') }}" autocomplete="given-name" class="input-form">
                    @error('document') <span class="error-form">{{ $message }}</span>@enderror
                </div>
            </div>

            <div class="sm:col-span-3">
                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">{{__('email')}}</label>
                <div class="mt-2">
                    <input type="text" name="email" id="email" value="{{ old('email', $user->email ?? '') }}" autocomplete="family-name" class="input-form">
                    @error('email') <span class="error-form">{{ $message }}</span>@enderror
                </div>
            </div>

        </div>
    </div>
</div>