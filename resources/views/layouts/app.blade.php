<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.partials.head')
    @stack('styles')
</head>
<body class="bg-gray-100 text-gray-900 h-screen antialiased leading-normal">
    <div id="app">
        @include('layouts.partials.navbar')

        @yield('content')

    </div>
    @include('layouts.partials.scripts')
    @stack('scripts')
</body>
</html>
