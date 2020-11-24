<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ mix('css/app.css', 'vendor/zoomila/sms-campaign') }}">
    <title>Sms Camapaign</title>
    @livewireStyles
</head>
<body>

    @yield('content')

    @livewireScripts

<script src="{{ mix('js/app.js', 'vendor/zoomila/sms-campaign') }}"></script>
</body>
</html>
