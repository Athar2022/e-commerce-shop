<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-6">Products</h1>

        @if (session("success" ))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                <span class="block sm:inline">{{ session("success") }}</span>
            </div>
        @endif

        <div class="flex justify-end mb-4">
            <a href="{{ route("products.create") }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Add New Product
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b text-left">ID</th>
                        <th class="py-2 px-4 border-b text-left">Name</th>
                        <th class="py-2 px-4 border-b text-left">Description</th>
                        <th class="py-2 px-4 border-b text-left">Price</th>
                        <th class="py-2 px-4 border-b text-left">Image</th>
                        <th class="py-2 px-4 border-b text-left">Stock</th>
                        <th class="py-2 px-4 border-b text-left">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $product->id }}</td>
                        <td class="py-2 px-4 border-b">{{ $product->name }}</td>
                        <td class="py-2 px-4 border-b">{{ Str::limit($product->description, 50) }}</td>
                        <td class="py-2 px-4 border-b">${{ number_format($product->price, 2) }}</td>
                        <td class="py-2 px-4 border-b">
                            @if ($product->image)
                                <img src="{{ asset("storage/" . $product->image) }}" class="w-16 h-16 object-cover rounded-md">
                            @else
                                <span class="text-gray-500">No Image</span>
                            @endif
                        </td>
                        <td class="py-2 px-4 border-b">{{ $product->stock }}</td>
                        <td class="py-2 px-4 border-b">
                            <div class="flex space-x-2">
                                <a href="{{ route("products.show", $product->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded text-xs">
                                    Show
                                </a>
                                <a href="{{ route("products.edit", $product->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-3 rounded text-xs">
                                    Edit
                                </a>
                                <form action="{{ route("products.destroy", $product->id) }}" method="POST" onsubmit="return confirm("Are you sure?");">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded text-xs">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
