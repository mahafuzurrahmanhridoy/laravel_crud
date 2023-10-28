<?php

namespace App\Http\Controllers;

use App\Models\CartProduct;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        return view('cart');
    }

    public function store(Request $request)
    {
        // dd(auth()->id());
        // dd($request->all());

        $qty = $request->qty;
        $productId = $request->product_id;
        $colorId = $request->color_id;
        $cartProduct = auth()->user()->cartProducts()->where('product_id', $productId)->where('color_id', $colorId)->first();


        if ($cartProduct) {
            $qty += $cartProduct->qty;
            // dd($qty);
            $cartProduct->update(['qty' => $qty]);
        } else {
            auth()->user()->cartProducts()->create(
                [
                    'product_id' => $productId,
                    'qty' => $qty,
                    'color_id' => $colorId
                ]
            );
        }
        return redirect()->back()->withStatus('Product added into the cart');
        // dd($cartProduct);
        // return redirect()->route('product.details')->withStatus('Product added into the cart');
        // dd('created');
    }

    public function deleteItem($id)
    {
        try {
            auth()->user()->cartProducts()->where('id', $id)->delete($id);

            return response()->json([
                'success' => true,
                'message' => 'Item removed from cart'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => true,
                'message' => $e->getMessage()
            ]);
        }
    }
}
