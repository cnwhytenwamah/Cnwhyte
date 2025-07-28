<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>@yield('title', 'Perpend')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,600,700" rel="stylesheet" />
    
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet"/>

    

    <style>
        body { font-family: 'Instrument Sans', sans-serif; margin: 0; }
    </style>
    
</head>
<body class="bg-white text-gray-800 leading-relaxed min-h-screen flex flex-col font-sans">

    <!-- Header -->
    @include('front-pages.components.nav')

    <!-- Main Content -->
    <main class="container mx-auto px-4">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('front-pages.components.footer')

</body>
</html>