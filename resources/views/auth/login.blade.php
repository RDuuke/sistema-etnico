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
    <style>
        body {
            background-image: url('images/login.png');
            background-size: cover;
            background-position: center;
            margin: 0;
            overflow: hidden;
        }

        h1 {
            color: #FFF;
            text-shadow: 0px 2px 0px #000;
        }
    </style>
</head>

<body style="margin-top: 20px;">
    
    @if(! is_null(session('processResult')))
        <x-helpers.alert type="{{ session('processResult')['status'] }}" message="{{ session('processResult')['message'] }}"></x-helpers.alert>
    @endif
    <div class="flex flex-col items-center justify-center h-screen">
        <h1 class="text-center text-5xl font-bold text-white mb-12">SISTEMA DE INFORMACIÓN ÉTNICO</h1>
        <div class="border w-[30rem] h-[28rem]" style="background: rgba(29, 27, 27, 0.72);">
            <h2 class="text-center text-2xl font-bold text-white pt-10 pb-4">Bienvenido</h2>
            <div class="mx-10">
                <form class="space-y-6" action="{{ route('login') }}" method="POST">
                    <div>
                        <label for="email" class="block text-sm font-medium text-white">Usuario</label>
                        <div class="mt-2">
                            <input name="email" id="email" value="{{ old('email', $user->document ?? '') }}" autocomplete="given-name" class="input-form-login">
                            @error('email') <span class="error-form">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center justify-between">
                            <label for="password" class="block text-sm font-medium text-white">Contraseña</label>
                        </div>
                        <div class="mt-2">
                            <input type="password" name="password" id="password" autocomplete="current-password" value="{{ old('password', $user->document ?? '') }}" autocomplete="given-name" class="input-form-login">
                            @error('password') <span class="error-form">{{ $message }}</span>@enderror
                            @error('incorrect-credentials') <span class="error-form">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    @csrf
                    <div>
                        <button type="submit" class="flex justify-center px-3 py-2 text-white button-login font-bold">{{__('app.begin')}}</button>
                    </div>
                </form>
                <p class="select-none mt-4 mb-2 text-center text-sm text-white font-bold opacity-50 cursor-not-allowed"> {{__('app.you_lost_your_password')}}</p>
                <p class="select-none text-center text-sm text-white font-bold"> {{__('app.not_registered')}}
                    <a href="{{route('form-register')}}" class="font-bold underline text-white">{{__('app.check_in')}}</a>
                </p>
            </div>
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