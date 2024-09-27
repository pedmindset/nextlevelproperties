<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Nextlevel</title>
    <link rel="icon" href="{{ asset('images/nxtlevel_logo.png') }}" type="image/x-icon">
</head>
<body class="font-montserrat">

    {{$slot}}
    @include('partials.footer')
</body>
</html>