<div>
    @if (!$edit_community)
        <div class="w-12 -mb-3 -mt-6 cursor-pointer">
            <a onclick="scrollToBottom();" wire:click="add">
                <img src="{{ asset('images/add-user.png') }}" alt="Logo modules menu">
            </a>
        </div>
    @endif
    @livewire('tables.dashboard.communities.get-all-communities-table')

    @if ($add_community || $edit_community)
        @include('livewire.dashboard.communities.create_and_edit')
    @endif
</div>

<script>
    function scrollToBottom() {
var bottomValue = 500;

setTimeout(function() {
window.scrollTo({
top: bottomValue,
behavior: "smooth"
});
}, 100);
}
</script>