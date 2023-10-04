<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | {{ config('app.name', 'Laravel') }}</title>

    {{-- ... --}}
    @vite('resources/sass/app.scss')
    @vite('resources/js/app.js')
    {{-- ... --}}

</head>


<body>
    {{-- <x-header.home/> --}}
    @yield('content')
    {{-- <x-footer.home/> --}}
</body>
@stack('scripts')
</html>