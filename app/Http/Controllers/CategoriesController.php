<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function __invoke()
    {
        $categories = Category::get();
        $orderId = session('orderId');
        if (!is_null($orderId)) {
            $order = Order::findOrFail($orderId);
        }
        return view('categories', compact('categories', 'order'));
    }
}
