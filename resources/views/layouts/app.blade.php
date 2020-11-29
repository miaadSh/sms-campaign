<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ mix('css/app.css', 'vendor/zoomila/sms-campaign') }}">
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js"
      defer
    ></script>
    <title>Sms Camapaign</title>
    @yield('css')
    @livewireStyles
</head>
<body dir="rtl">
    <div>
        @include("sms::includes.nav")

        @yield('content')
    </div>


    @livewireScripts

<script src="{{ mix('js/app.js', 'vendor/zoomila/sms-campaign') }}"></script>
@yield('js')
</body>
</html>
