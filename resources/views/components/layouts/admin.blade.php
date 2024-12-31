<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Mysoftcare</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @filamentStyles

</head>

<body class="h-screen overflow-hidden" x-data="{
    isCollapsed: $persist(false),
    isHovered: false,
}">
    <div class="flex h-full w-full overflow-hidden">
        {{-- @include('components.layouts.sidebar') --}}
        <x-layouts.side-bar />
        <div class="flex flex-1 flex-col overflow-y-auto">

            @include('components.layouts.top-navbar')
            <!-- Page Heading -->
            @if (isset($header))
                <header>
                    <div class="max-w-7xl mx-auto  py-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif
            <main class="py-12 mb-32">
                <div {{ $attributes->merge(['class' => 'px-4 sm:px-6  max-w-9xl mx-auto']) }}>

                    {{ $slot }}
                </div>
            </main>
        </div>
        <div class="fixed inset-0 hidden bg-black bg-opacity-50" id="sidebarBackdrop"></div>
    </div>

    @livewire('notifications')
    @filamentScripts

    <script>
        window.addEventListener('print', event => window.open(event.detail));
    </script>
</body>

</html>
