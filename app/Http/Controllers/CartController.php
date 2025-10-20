<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart()
    {
        // In production, use Auth::id() instead of 1
        $cartItems = CartItem::where('user_id', 1)
            ->with('plant')
            ->get();

        $subtotal = $cartItems->sum(function ($item) {
            return $item->quantity * $item->plant->price;
        });

        // Optional: a fixed handling fee or “terrarium packaging” cost
        $fee = 15000; // 15k for secure plant packaging
        $totalPrice = $subtotal + $fee;

        return view('cart', [
            'cartItems'  => $cartItems,
            'subtotal'   => $subtotal,
            'fee'        => $fee,
            'totalPrice' => $totalPrice,
        ]);
    }
}
