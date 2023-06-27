<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Str;
use Session;
use App\Models\Order;
use App\Models\Order_details;

class CheckoutController extends Controller
{
    public function checkout(Request $request)
    {
        $validate = $request->validate([
            'email' => 'required|email',
            'full_name' => 'required',
            'phone' => 'required|integer|digits:10',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'pincode' => 'required|integer'
        ]);
        try {

            $carts = Session::get('cart', []);
            $cart_count = count($carts);
            $sub_amt = 0;
            $offer_amt = 0;

            foreach ($carts as $cart) {
                $sub_amt += $cart['price'] * $cart['product_qty'];
            }


            $orderid = Str::upper('ORD-' . Str::random(6));
            $validate['order_id'] = $orderid;
            $validate['total_amount'] = $sub_amt + $offer_amt;
            $validate['payment_status'] = "unpaid";
            $validate['payment_type'] = "cod";
            $validate['sub_total'] = $sub_amt;
            $validate['discount'] = 0.00;
            $validate['deliver_charge'] = 0.00;
            $validate['offer'] = $offer_amt;
            $order = Order::create($validate);

            $carts = Session::get('cart', []);
            $order_details = array();
            foreach ($carts as $c) {
                $result = (object) [
                    'product_name' => $c['product_name'],
                    'product_id' => $c['product_id'],
                    'quantity' => $c['product_qty'],
                    'price' => $c['price']
                ];
                array_push($order_details, $result);
            }
            $orderdetails = json_encode($order_details);
            $order_details = new Order_details;
            $order_details->order_id = $order->id;
            $order_details->order_details = $orderdetails;
            $order_details->save();
            Session::forget('cart', []);
            $msg="successes";
            return response()->json(['success'=>$msg]);
            // return redirect()->route('welcome');



        } catch (\Exception | \Throwable $e) {
            return response()->json(['errors' => $e->getMessage()]);
        }
    }
}