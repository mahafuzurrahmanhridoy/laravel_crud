<?php

namespace App\Http\Controllers;

use App\Models\OrderList;
use App\Models\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrdersController extends Controller
{
    public function store(Request $request)
    {

        try {
            DB::beginTransaction();
            $order = auth()->user()->orders()->create([
                'full_name' => $request->full_name,
                'shipping_address' => $request->shipping_address,
                'contact_number' => $request->contact_number
            ]);

            foreach ($request->products as $item) {

                $cartProduct = auth()->user()->cartProducts()->where('id', $item['cart_product_id'])->first();
                $product = $cartProduct->product;
                $color = $cartProduct->color;
                $orderProduct = [
                    'order_id' => $order->id,
                    'product_id' => $product->id,
                    'product_title' => $product->title,
                    'color_name' => $color?->name,
                    'color_id' => $color?->id,
                    'qty' => $item['qty'],
                    'unit_price' => $product->price
                ];
                // dd($orderProduct);
                OrderList::create($orderProduct);
            }
            auth()->user()->cartProducts()->delete();
            DB::commit();
            return redirect()->route('orders.confirmed');
        } catch (\Exception $e) {
            DB::rollBack();
            return ($e->getMessage());
        }
    }
    public function confirmed()
    {
        return view('order-confirmed');
    }
}
