<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="csrf-token" content="{{ csrf_token() }}">

<title>@isset($title) {{ $title}} | @endisset {{ config('app.name') }}</title>

<link rel="stylesheet" href="{{ mix('/css/app.css') }}">
@livewireStyles
{{-- <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> --}}
