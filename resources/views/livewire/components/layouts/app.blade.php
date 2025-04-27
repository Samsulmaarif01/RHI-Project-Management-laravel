
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Livewire App')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex h-screen overflow-hidden bg-background">

    <!-- Sidebar -->
    <aside class="w-64 bg-gray-800 text-white" x-data="{ isOpen: false }">
        @livewire('sidebar', ['isSidebarOpen' => isOpen])
    </aside>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col overflow-hidden">
        <!-- Navbar -->
        @livewire('navbar')

        <!-- Page Content -->
        <main class="flex-1 overflow-y-auto p-4 md:p-6">
            @yield('content')
        </main>
    </div>

</body>
</html>