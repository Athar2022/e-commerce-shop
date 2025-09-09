@extends('layouts.admin')

@section('content')
<div class="container mx-auto px-4">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Products Management</h1>
        <a href="#" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Add New Product</a>
    </div>
    
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Category</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($products as $product)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $product->name }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $product->category->name }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">${{ number_format($product->price, 2) }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        @can('update', $product)
                        <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</a>
                        @endcan
                        @can('delete', $product)
                        <a href="#" class="text-red-600 hover:text-red-900">Delete</a>
                        @endcan
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection