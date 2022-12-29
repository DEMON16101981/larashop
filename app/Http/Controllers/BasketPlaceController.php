<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasketPlaceController extends Controller
{
    public function __invoke()
    {
        return view('order');
    }
}
