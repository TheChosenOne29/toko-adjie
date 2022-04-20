<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CartController extends Controller
{
    public function shop()
    {
        $products = Product::all();
        // dd($products);
        return view('shop')->withTitle('Toko Adjie | Shop')->with(['products' => $products]);
    }

    public function cart()
    {
        $userId = auth()->user()->id;
        $cartCollection = \Cart::session($userId)->getContent();
        // dd($cartCollection);
        return view('cart')->withTitle('Toko Adjie | Cart')->with(['cartCollection' => $cartCollection]);
    }

    public function add(Request $request)
    {
        $userId = auth()->user()->id;
        \Cart::session($userId)->add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'category' => $request->category,
            'desc' => $request->desc,
            'quantity' =>$request->quantity
        ]);

        return redirect()->route('cart.index')->with('success_msg', 'Item is added to cart!');
    }

    public function remove(Request $request)
    {
        $userId = auth()->user()->id;
        \Cart::session($userId)->remove($request->id);

        return redirect()->route('cart.index')->with('success_msg', 'Item is removed!');
    }

    public function update(Request $request)
    {
        $userId = auth()->user()->id;
        \Cart::session($userId)->update($request->id,[
            'quantity' => [
                'relative' => false,
                'value' => $request->quantity
            ]
        ]);

        return redirect()->route('cart.index')->with('success_msg', 'Cart is updated!');
    }

    public function clear(Request $request)
    {
        $userId = auth()->user()->id;
        \Cart::session($userId)->clear();

        return redirect()->route('cart.index')->with('success_msg', 'Cart is cleared!');
    }
}
