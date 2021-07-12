<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
{{-- DevJobs v1 --}}
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    {{-- <script src="{{ mix('js/app.js') }}"></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    {{-- Contenido personalizado para css  --}}
    @yield('styles')

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-200 min-h-screen leading-none">
    @if(session('estado'))
        <div class="bg-green-500 p-8 text-center text-white font-bold uppercase"> {{ session('estado') }} </div>
    @endif
    <div id="app">
        <nav class="bg-gray-800 shadow-md py-5">
            <div class="container mx-auto md:px-0 ">
                <div class="flex items-center justify-around">
                    <a class="text-2xl text-white" href="{{ url('/') }}">
                        {{-- {{ config('app.name', 'Laravel') }} --}}
                        {{ '< devJobs />' }}
                    </a>
                        <div class="flex-1 text-right">

                            @guest
                                @if (Route::has('login'))

                                        <a class="text-white no-underline hover:underline hover:text-gray-300 p-3" href="{{ route('login') }}">{{ __('Login') }}</a>

                                @endif
    
                                @if (Route::has('register'))

                                        <a class="text-white no-underline hover:underline hover:text-gray-300 p-3" href="{{ route('register') }}">{{ __('Register') }}</a>

                                @endif
                            @else
                                <span class="text-gray-300 text-sm pr-4">  {{ Auth::user()->name }} </span>

                                <a 
                                    href=" {{ route('notificaciones') }} "
                                    class="bg-green-500 rounded-full mr-2 px-4 py-2 font-bold text-sm text-white">
                                {{ Auth::user()->unreadNotifications->count() }}</a>

                                        <a class="no-underline :hover:underline text-gray-300 text-sm p-3" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
    
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                            @endguest
                    </div>
                </div>                        
            </div>
        </nav>
        <div class="bg-gray-700">

            <nav class="container mx-auto flex  flex-col text-center md:flex-row space-x-1">
                @yield('navegacion')

            </nav>
        </div>
        <main class="mt-10 container mx-auto">
            @yield('content')
        </main>
    </div>

    @yield('scripts')
</body>
</html>
