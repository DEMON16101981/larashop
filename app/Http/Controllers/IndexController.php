<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;

class IndexController extends Controller
{
    public function __invoke()
    {
        $categories = Category::get();
        $products = Product::get();

        $orderId = session('orderId');
        if (!is_null($orderId)) {
            $order = Order::findOrFail($orderId);
        }
       
        return view('index', compact('products', 'categories', 'order'));
    }
    
}
