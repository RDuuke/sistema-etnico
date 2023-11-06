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
    @yield('style')
</head>

<body>
    <div class="min-h-full">
        <nav class="bg-gray-800">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <img class="h-8 w-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Sistema étnico">
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <a href="/" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium @if(request()->routeIs('dashboard')) bg-gray-700 @endif">Inicio</a>
                                @can('users.index')
                                    <a href="{{ route('dashboard.users.index') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium @if(request()->routeIs('dashboard.users.index')) bg-gray-700 @endif">{{__('app.platform_users')}}</a>
                                @endcan
                                @can('community-users.index')
                                    <a href="{{ route('dashboard.community-users.index') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium @if(request()->routeIs('dashboard.community-users.index')) bg-gray-700 @endif">{{__('app.community_users')}}</a>
                                @endcan
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('logout') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">{{__('app.logout')}}</a>
                </div>
            </div>
        </nav>
        <header class="bg-white">
            @if(! is_null(session('processResult')))
            <x-helpers.alert type="{{ session('processResult')['status'] }}" message="{{ session('processResult')['message'] }}"></x-helpers.alert>
            @endif
            @yield('content')
        </header>
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