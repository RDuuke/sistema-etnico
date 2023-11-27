<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema Étnico</title>
    @vite('resources/css/app.css')
    @livewireStyles
    @stack('styles')
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.x.x/dist/alpine.min.js" defer></script>
    @yield('style')
</head>

<body>
    <button data-drawer-target="sidebar-multi-level-sidebar" data-drawer-toggle="sidebar-multi-level-sidebar"
        aria-controls="sidebar-multi-level-sidebar" type="button"
        class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:focus:ring-gray-600">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd"
                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
            </path>
        </svg>
    </button>
    <div class="w-32 ml-28">
        <a href="/dashboard">
            <img src="{{ asset('images/logo-comunidad-x.png') }}" alt="Logo modules menu">
        </a>
    </div>
    <aside
        class="fixed top-28 left-0 z-40 w-[21.375rem] h-screen transition-transform -translate-x-full sm:translate-x-0"
        aria-label="Sidebar">
        <div class="sidebar">
            <ul class="space-y-2 font-medium py-4">
                @if(!is_null(Auth::guard('community')->user()) && Auth::guard('community')->user()->hasRole('community_coordinator') || Auth::guard('web')->user())
                <li x-data="{ openCommunity:false }">
                    <button type="button" x-on:click="openCommunity = !openCommunity" class="sidebar__button  {{ session('actualSection') == 'communities' ? 'bg-project-sidebar' : '' }}">
                        <img src="{{ asset('images/sidebar/communities.png') }}" alt="">
                        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Comunidades</span>
                        <span>
                            <x-icons.down-arrown></x-icons.down-arrown>
                        </span>
                    </button>
                    <ul class="py-1 ml-4 space-y-1" x-show="openCommunity" x-on:click.away="openCommunity = false">
                        <li>
                            <a href="{{ route('dashboard.community-users.index') }}" class="sidebar__li {{ session('actualSection') == 'communities' ? 'bg-project-sidebar' : '' }}">
                                <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">{{__('app.user_management')}}</span>
                                <x-icons.left-arrown></x-icons.left-arrown>
                            </a>
                        </li>
                    </ul>
                </li>
                @endif
                @if(Auth::guard('web')->user())
                <li x-data="{ openSecurity:false }">
                    <button type="button" x-on:click="openSecurity = !openSecurity" class="sidebar__button {{ session('actualSection') == 'users' ? 'bg-project-sidebar' : '' }}">
                        <img src="{{ asset('images/sidebar/padlock.png') }}" alt="">
                        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Seguridad</span>
                        <x-icons.down-arrown></x-icons.down-arrown>
                    </button>
                    <ul class="py-1 ml-4 space-y-1" x-show="openSecurity" x-on:click.away="openSecurity = false">
                        <li>
                            <a href="{{ route('dashboard.users.index') }}" class="sidebar__li {{ session('actualSection') == 'users' ? 'bg-project-sidebar' : '' }}">
                                <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">{{__('app.internal_user')}}</span>
                                <x-icons.left-arrown></x-icons.left-arrown>
                            </a>
                        </li>
                    </ul>
                </li>
                @endif
                <li>
                    <a type="button" class="sidebar__button" href="{{ route('logout') }}">
                        <img src="{{ asset('images/sidebar/setting.png') }}" alt="">
                        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">{{__('app.logout')}}</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <div class="p-4 sm:ml-[21.375rem]">
        <header>
            @if(! is_null(session('processResult')))
            <x-helpers.alert type="{{ session('processResult')['status'] }}"
                message="{{ session('processResult')['message'] }}"></x-helpers.alert>
            @endif
            @yield('content')
        </header>
    </div>

    </div>
    @livewireScripts
    @stack('scripts')
    @stack('js')
    <script>
        function closeAlert(alertId) {
            var alertElement = document.getElementById(alertId);
            if (alertElement) {
                alertElement.style.display = 'none';
            }
        }
    </script>
</body>

</html>