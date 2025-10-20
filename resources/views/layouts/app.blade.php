<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') | LaraSocial</title>

        {{-- Google Fonts / Poppins --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="flex flex-col min-h-screen bg-gray-100">
        <header class="mb-8">
            @include('layouts.includes.topbar')
        </header>

        <main class="grow flex justify-center items-center">
            <div class="container mx-auto w-full text-center px-4">
                @yield('content')
            </div>
        </main>

        <footer class="bg-gray-800 shadow-sm mt-8">
            @include('layouts.includes.footer')
        </footer>

        {{-- Flowbite --}}
        <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    </body>
</html>
