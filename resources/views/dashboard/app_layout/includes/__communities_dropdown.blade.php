<li x-data="{ openCommunity:false }">
    <button type="button" x-on:click="openCommunity = !openCommunity"
        class="sidebar__button  {{ session('actualSection') == 'communities' ? 'bg-project-sidebar' : '' }}">
        <img src="{{ asset('images/sidebar/communities.png') }}" alt="">
        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Comunidades</span>
        <span>
            <x-icons.down-arrown></x-icons.down-arrown>
        </span>
    </button>
    <ul class="py-1 ml-4 space-y-1" x-show="openCommunity" x-on:click.away="openCommunity = false">
        <li>
            <a href="{{ route('dashboard.community-users.index') }}"
                class="sidebar__li {{ session('actualSection') == 'communities' ? 'bg-project-sidebar' : '' }}">
                <span
                    class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">{{__('app.user_management')}}</span>
                <x-icons.left-arrown></x-icons.left-arrown>
            </a>
        </li>
    </ul>
    <ul class="py-1 ml-4 space-y-1" x-show="openCommunity" x-on:click.away="openCommunity = false">
        <li>
            <a href="{{ route('dashboard.community-users.index') }}"
                class="sidebar__li {{ session('actualSection') == '' ? 'bg-project-sidebar' : '' }}">
                <span
                    class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">{{__('app.community_management')}}</span>
                <x-icons.left-arrown></x-icons.left-arrown>
            </a>
        </li>
    </ul>
</li>