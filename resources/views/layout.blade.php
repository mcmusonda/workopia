<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/35c7e655a1.js" crossorigin="anonymous"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>{{ $title ?? 'Workopia | Find and List Jobs' }}</title>
</head>
<body class="bg-gray-100">
    <x-header />
    @if(request()->is('/'))
        <x-hero />
    @endif

    <main class="container mx-auto px-4 py-8">
        {{ $slot }}
    </main>
    
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>