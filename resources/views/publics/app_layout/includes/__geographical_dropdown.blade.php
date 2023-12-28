<li x-data="{ openGeographical:false }">
    <button type="button" x-on:click="openGeographical = !openGeographical"
        class="sidebar__button  
        {{ session('actualSection') == 'geographical' ? 'bg-project-sidebar' : '' }}"
        >
        <img width="34" height="34" src="{{ asset('images/sidebar/geographical.png') }}" alt="">
        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Visor geográfico</span>
        <span>
            <x-icons.down-arrown></x-icons.down-arrown>
        </span>
    </button>
    <ul class="py-1 ml-4 space-y-1" x-show="openGeographical" x-on:click.away="openGeographical = false">
        <li>
            <a href="{{ route('geographical-portal') }}"
                class="sidebar__li {{ session('actualSection') == 'geographical' ? 'bg-project-sidebar' : '' }}">
                <span
                    class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">{{__('app.geographical-portal')}}</span>
                <x-icons.left-arrown></x-icons.left-arrown>
            </a>
        </li>
    </ul>
</li>