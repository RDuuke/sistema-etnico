<div class="mt-10 px-10 sm:px-10 lg:px-10 relative" style="background: rgba(217, 217, 217, 0.85);">
    <button type="button" wire:click="preview" class="close-form-livewire">
        <x-icons.close-form></x-icons.close-form>
    </button>
    <h2 class="text-black pt-6 text-xl text-center font-bold">
        @if ($this->add_community)
            {{__('app.add_community')}}
        @else
            {{__('app.edit_community')}}
        @endif
    </h2>
    <form wire:submit.prevent="save">
        @csrf

        @include('livewire.dashboard.communities.includes.form.form_create_and_edit')
        @if($errors->any())
        <span class="error-form font-bold block text-right pb-10">Por favor revisa el formulario y vuelve a intentar.</span>
        @endif

        <div class="pb-10 flex justify-center">
            <div class="flex flex-col">
                <button type="submit" class="px-10 py-1 button-register bg-gray-800 text-black">{{!isset($user) ?__('app.keep'):__('app.update')}}</button>
                <a class="text-center pt-2 font-bold cursor-pointer" wire:click="preview">{{__('app.return')}}</a>
            </div>
        </div>
    </form>
</div>