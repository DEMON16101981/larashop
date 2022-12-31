<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class BasketAddController extends Controller
{
    public function __invoke($producId)
    {
        $categories = Category::get();
        $products = Product::get();
        $orderId = session('orderId');

        if(is_null($orderId)){
            $order = Order::create()->id;
            session(['orderId' => $order->id]);
        }else{
             $order = Order::find($orderId);
        }
        $order->products()->attach($producId);
       
       return redirect()->route('index', compact('order', 'categories', 'products'));
    }
}
