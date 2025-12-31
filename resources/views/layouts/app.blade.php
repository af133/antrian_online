<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Sistem Antrean' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="bg-slate-50 antialiased">
    <div class="flex flex-col lg:flex-row min-h-screen">
        @include('components.sidebar')
        <div class="flex-1 flex flex-col min-w-0 h-screen overflow-hidden">
            <main class="flex-1 overflow-y-auto overflow-x-hidden p-4 lg:p-8">
                <div class="max-w-6xl mx-auto">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>
</body>
</html>
