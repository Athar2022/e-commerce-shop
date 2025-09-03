<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-6">Product Details</h1>

        <div class="mb-4">
            <p class="text-gray-700 text-sm font-bold mb-2">Name:</p>
            <p class="text-gray-900 text-lg">{{ $product->name }}</p>
        </div>

        <div class="mb-4">
            <p class="text-gray-700 text-sm font-bold mb-2">Description:</p>
            <p class="text-gray-900 text-lg">{{ $product->description }}</p>
        </div>

        <div class="mb-4">
            <p class="text-gray-700 text-sm font-bold mb-2">Price:</p>
            <p class="text-gray-900 text-lg">${{ number_format($product->price, 2 ) }}</p>
        </div>

        <div class="mb-4">
            <p class="text-gray-700 text-sm font-bold mb-2">Stock:</p>
            <p class="text-gray-900 text-lg">{{ $product->stock }}</p>
        </div>

        <div class="mb-6">
            <p class="text-gray-700 text-sm font-bold mb-2">Image:</p>
            @if ($product->image)
                <img src="{{ asset("storage/" . $product->image) }}" alt="{{ $product->name }}" class="w-48 h-48 object-cover rounded-lg shadow-md">
            @else
                <p class="text-gray-500">No Image Available</p>
            @endif
        </div>

        <div class="flex items-center justify-between">
            <a href="{{ route("products.index") }}" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                Back to Products
            </a>
            <a href="{{ route("products.edit", $product->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Edit Product
            </a>
        </div>
    </div>
</body>
</html>
