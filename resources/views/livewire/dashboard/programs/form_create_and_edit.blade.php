<div class="mt-10 px-10 sm:px-10 lg:px-10 relative" style="background: rgba(217, 217, 217, 0.85);">
    <h2 class="text-black py-6 text-xl text-center font-bold">
        @if ($this->add_program)
            {{__('app.add_community_program')}} <br>
            {{__($community->name)}}
        @else
            {{__('app.update_community_program')}} <br>
            {{__($community->name)}}
        @endif
    </h2>
    <form wire:submit.prevent="save">
        @csrf

        @include('livewire.dashboard.programs._create_and_edit')

        <div class="pb-10 flex justify-center">
            <div class="flex flex-col">
                <button type="submit" class="px-10 py-1 button-register bg-gray-800 text-black">{{ !isset($community_census)
                    ?__('app.keep'):__('app.update')}}</button>
                <a class="text-center pt-2 font-bold"
                    href="{{route('dashboard.programs.index', ['community_id' => $community->id])}}">{{__('app.return')}}</a>
            </div>
        </div>
    </form>
</div>