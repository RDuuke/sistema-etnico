<li x-data="{ openSecurity:false }">
    <button type="button" x-on:click="openSecurity = !openSecurity"
        class="sidebar__button {{ session('actualSection') == 'users' ? 'bg-project-sidebar' : '' }}">
        <img src="{{ asset('images/sidebar/padlock.png') }}" alt="">
        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Seguridad</span>
        <x-icons.down-arrown></x-icons.down-arrown>
    </button>
    <ul class="py-1 ml-4 space-y-1" x-show="openSecurity" x-on:click.away="openSecurity = false">
        <li>
            <a href="{{ route('dashboard.users.index') }}"
                class="sidebar__li {{ session('actualSection') == 'users' ? 'bg-project-sidebar' : '' }}">
                <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">{{__('app.internal_user')}}</span>
                <x-icons.left-arrown></x-icons.left-arrown>
            </a>
        </li>
    </ul>
</li>