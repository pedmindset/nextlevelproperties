<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    @vite('resources/css/app.css')
    <title>Nextlevel</title>
    <link rel="icon" href="{{ asset('images/nextLevel_logo.png') }}" type="image/x-icon">
</head>
<body class="font-montserrat">

    {{$slot}}
    @include('partials.footer')
    @vite('resources/js/app.js')
</body>
</html>
