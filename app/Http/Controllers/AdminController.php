<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    
    public function products()
    {
        $products = Product::with('category')->get();
        return view('admin.products', compact('products'));
    }
    
    public function categories()
    {
        $categories = Category::withCount('products')->get();
        return view('admin.categories', compact('categories'));
    }
}