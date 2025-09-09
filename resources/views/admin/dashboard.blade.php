@extends('layouts.admin')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-6">Admin Dashboard</h1>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-lg shadow">
            <h2 class="text-lg font-semibold mb-2">Products</h2>
            <p class="text-3xl font-bold">{{ App\Models\Product::count() }}</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow">
            <h2 class="text-lg font-semibold mb-2">Categories</h2>
            <p class="text-3xl font-bold">{{ App\Models\Category::count() }}</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow">
            <h2 class="text-lg font-semibold mb-2">Users</h2>
            <p class="text-3xl font-bold">{{ App\Models\User::count() }}</p>
        </div>
    </div>
</div>
@endsection