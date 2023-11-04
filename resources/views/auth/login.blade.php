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
    @if(! is_null(session('processResult')))
        <x-helpers.alert type="{{ session('processResult')['status'] }}" message="{{ session('processResult')['message'] }}"></x-helpers.alert>
    @endif
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Sistema étnico">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">SISTEMA ÉTNICO</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">

            <form class="space-y-6" action="{{ route('login') }}" method="POST">
                <div>
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Usuario</label>
                    <div class="mt-2">
                        <input name="email" id="email" value="{{ old('email', $user->document ?? '') }}" autocomplete="given-name" class="input-form">
                        @error('email') <span class="error-form">{{ $message }}</span>@enderror
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Contraseña</label>
                    </div>
                    <div class="mt-2">
                        <input type="password" name="password" id="password" autocomplete="current-password" value="{{ old('password', $user->document ?? '') }}" autocomplete="given-name" class="input-form">
                        @error('password') <span class="error-form">{{ $message }}</span>@enderror
                        @error('incorrect-credentials') <span class="error-form">{{ $message }}</span>@enderror
                    </div>
                </div>
                @csrf
                <div>
                    <button type="submit" class="flex w-full justify-center rounded-md px-3 py-2 bg-gray-800 hover:bg-gray-700 text-white ">{{__('app.sign_in')}}</button>
                </div>
            </form>

            <p class="mt-10 text-center text-sm text-gray-500"> {{__('app.not_registered')}}
                <a href="{{route('form-register')}}" class="font-semibold leading-6 text-gray-800 hover:text-gray-700">{{__('app.check_in')}}</a>
            </p>
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