<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderItemController extends Controller
{
    public function Cart()
    {
        return;
    }
    public function addToCart($id)
    {
        $product = Order::find($id);

        if (!$product) {

            abort(404);
        }

        $cart = session()->get('order');
        if (!$cart) {

            $cart = [
                $id => [
                    "name" => $product->name,
                    "quantity" => 1,
                    "price" => $product->price,
                    "details" => $product->details,
                    "photo" => $product->image,

                ]
            ];

            session()->put('cart', $cart);

            return redirect()->back()->with('Product added');
        }

        if (isset($cart[$id])) {

            $cart[$id]['quantity']++;

            session()->put('cart', $cart);

            return redirect()->back()->with('Product added');
        }

        $cart[$id] = [
            "name" => $product->name,
            "quantity" => 1,
            "price" => $product->price,
            "details" => $product->details,
            "photo" => $product->image,
        ];

        session()->put('cart', $cart);

        return redirect()->back()->with('Product added');
    }
}
