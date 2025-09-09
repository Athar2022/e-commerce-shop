<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel - {{ config('app.name', 'Laravel') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <nav class="bg-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <div class="flex-shrink-0 flex items-center">
                        <a href="{{ route('admin.dashboard') }}" class="font-bold text-xl text-indigo-600">Admin Panel</a>
                    </div>
                    <div class="hidden sm:ml-6 sm:flex">
                        <a href="{{ route('admin.dashboard') }}" class="px-3 py-2 rounded-md text-sm font-medium text-gray-900 hover:bg-gray-200">Dashboard</a>
                        <a href="{{ route('admin.products') }}" class="px-3 py-2 rounded-md text-sm font-medium text-gray-900 hover:bg-gray-200">Products</a>
                        <a href="{{ route('admin.categories') }}" class="px-3 py-2 rounded-md text-sm font-medium text-gray-900 hover:bg-gray-200">Categories</a>
                    </div>
                </div>
                <div class="flex items-center">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-gray-700 hover:text-indigo-600 px-3 py-2 rounded-md text-sm font-medium">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <main class="py-10">
        @yield('content')
    </main>
</body>
</html>