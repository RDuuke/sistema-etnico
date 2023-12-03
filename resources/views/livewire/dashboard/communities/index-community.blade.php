<div>
    <div class="w-12 -mb-3 -mt-6 cursor-pointer">
        <a wire:click="add">
            <img src="{{ asset('images/add-user.png') }}" alt="Logo modules menu">
        </a>
    </div>
    @livewire('tables.dashboard.communities.get-all-communities-table')

    @if ($add_community)
        @include('livewire.dashboard.communities.create_and_edit')
    @endif
</div>