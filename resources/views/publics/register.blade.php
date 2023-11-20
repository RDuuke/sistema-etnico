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
            background-image: url('images/register.png');
            background-size: cover;
            margin: 0;
            overflow: hidden;
        }
    </style>
</head>

<body>
    <form action="{{route('register')}}" method="POST" enctype="multipart/form-data">
        @if(isset($user))
        @method('put')
        @endif
        @csrf
    <div class="flex items-center justify-center h-screen">
        <div class="px-14 py-4" style="background: rgba(29, 27, 27, 0.72);">
            <div class="border-b border-gray-900/10 pb-12">
            <h1 class="text-center text-3xl font-bold text-white">{{__('app.check_in')}}</h1>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-4 sm:grid-cols-12">
                    @include('publics._form_register')
                </div>
            </div>
            <div class=" flex flex-col items-center justify-center gap-x-6">
                <button type="submit" class="px-20 py-2 mb-2 button-register text-white">{{__('app.check_in')}}</button>
                <a class="font-bold text-white underline" href="{{route('form-login')}}">{{__('app.cancel')}}</a>
            </div>
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