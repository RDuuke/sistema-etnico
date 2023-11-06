<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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
    <form
        action="{{route('register')}}"
        method="POST" enctype="multipart/form-data">
        @if(isset($user))
        @method('put')
        @endif
        @csrf
        <div class="shadow">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-28">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{__('app.check_in')}}</h1>
            </div>
        </div>
    
        <div class="px-40 py-10">

            @include('publics._form_register')

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="px-10 py-2 button-return  hover:bg-gray-200 text-black font-bold">
                <a href="{{route('form-login')}}">{{__('app.cancel')}}</a>
            </button>
            <button type="submit" class="px-10 py-2 button bg-gray-800 hover:bg-gray-700 text-white">{{__('app.check_in')}}</button>
        </div>
        </div>
    </form>

    
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