<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>403 Forbidden</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-md text-center">
            <h1 class="text-4xl font-bold text-red-600 mb-4">403 Forbidden</h1>
            <p class="text-gray-700 mb-6">You don't have permission to access this page.</p>
            <a href="{{ url()->previous() }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Go Back</a>
            <a href="/" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600 ml-2">Home</a>
        </div>
    </div>
</body>
</html>