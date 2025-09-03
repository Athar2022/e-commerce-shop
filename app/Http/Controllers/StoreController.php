<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
        protected function getProducts()
    {
        return [
            [
                'id'=>1, 'name'=>'قميص قطني', 'price'=>29.99, 'on_sale'=>true, 'description'=>'قميص مريح', 
            ],
            [
                'id'=>2, 'name'=>'بنطال جينز', 'price'=>49.99, 'on_sale'=>false, 'description'=>'جينز أنيق',
            ],
            [
                'id'=>3, 'name'=>'حذاء رياضي', 'price'=>89.99, 'on_sale'=>true, 'description'=>'مريح للركض',
            ],
        ];
    }

    public function index()
    {
        // يمكن إعادة استخدام view shop.index أو shop.products بحسب تنظيمك
        $products = $this->getProducts();
        return view('shop.products', compact('products'));
    }

    public function productDetails($id)
    {
        $products = $this->getProducts();
        $product = collect($products)->firstWhere('id',(int)$id) ?? $products[0];
        return view('shop.product-details', compact('product'));
    }

    public function cart()
    {
        $cart = [
            ['product_id'=>1, 'name'=>'قميص قطني','qty'=>2,'price'=>29.99],
        ];
        return view('shop.cart', compact('cart'));
    }

    public function about()
    {
        $title = "من نحن";
        $description = "نحن متجر إلكتروني نموذجي لتعلم Laravel.";
        $rawHtml = "<strong>نص قوي:</strong> نعتني بجودة المنتجات.";
        return view('shop.about-us', compact('title','description','rawHtml'));
    }

    public function contact()
    {
        return view('shop.contact');
    }
}




