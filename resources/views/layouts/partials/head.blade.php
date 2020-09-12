<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="csrf-token" content="{{ csrf_token() }}">

<title>@isset($title) {{ $title}} | @endisset {{ config('app.name') }}</title>

{{-- <script src="{{ asset('js/app.js') }}"></script> --}}

{{-- <link href="{{ mix('css/app.css') }}" rel="stylesheet"> --}}

<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/custom-forms.min.css') }}">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
@livewireStyles
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
