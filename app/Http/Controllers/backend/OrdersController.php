<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Order_details;
class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   try {  
         $order = Order::orderBy('id','desc')->paginate(5);
        return view('backend.orders.index', compact('order'));
    } catch (\Exception $e) {
        return back()->with('error',$e->getMessage())->withInput();
    }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
    //     try {  
             
    //        return view('backend.orders.create');
    //    } catch (\Exception $e) {
    //        return back()->with('error',$e->getMessage())->withInput();
    //    }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
 { 
    $validate = $request->validate([
        'order_id' => 'required',
        'product_name' => 'required',
        'quantity' => 'required',
        'status' => 'required'
       
                ]);

                $product = array(
                    (object) [ 
                      'product_name' => $request->product_name,
                      'quantity' => $request->quantity
    
                    ]
                );
          
                $order_details=array();
                for ($i=0; $i<2; $i++) {
                 $result=   (object) [ 
                        'product_name' => $request->product_name,
                        'quantity' => $request->quantity,
                       
      
                    ];
                    array_push($order_details,$result);
                  }
                 
                    $validate['order_details'] =  json_encode($order_details) ;
                  
             
                

                $validated = $request->validate([
                
                    'full_name' => 'required',
                    'email' => 'required',
                    'phone' => 'required',
                    'address' => 'required',
                    'city' => 'required',
                    'state' => 'required',
                    'pincode' => 'required',
                    'total_amount' => 'required',
                    'payment_status' => 'required',
                    'payment_type' => 'required',
                    'sub_total' => 'required',
                    'discount' => 'required',
                    'deliver_charge' => 'required',
                    'offer' => 'required',
                    'tax' => 'required'
                    
                            ]);
                           
        
               
               $ord_details= Order_details::create($validate);
                $validated['order_id'] =$ord_details->id;
                Order::create($validated);
               
        return redirect()->route('orders.index');
       
 }

    public function order_lists(Request $request)
    {
        try {
		
			$category = Order::select('*');
			$categorycount = Order::select('*');

			if(isset($request->searchdata) && $request->searchdata != '')
			{
				$category->where('order_id', 'like', '%'.$request->searchdata.'%')->orWhere('full_name', 'like', '%'.$request->searchdata.'%')->orWhere('total_amount', 'like', '%'.$request->searchdata.'%')->orWhere('payment_status', 'like', '%'.$request->searchdata.'%');
				$categorycount->where('order_id', 'like', '%'.$request->searchdata.'%')->orWhere('full_name', 'like', '%'.$request->searchdata.'%')->orWhere('total_amount', 'like', '%'.$request->searchdata.'%')->orWhere('payment_status', 'like', '%'.$request->searchdata.'%');
			}

			$totalcount = $categorycount->get();
			$totalcount = count($totalcount);

			$allemp = $category->orderBy('id', 'desc')
					->take($request->length)->skip($request->start)->get();

			$arr = array();
			$i = $request->start+1;
			foreach($allemp as $val)
			{
				$var['id'] = $val->id;
                $var['order_id'] = (isset($val->order_id)) ? $val->order_id:'';
				$var['full_name'] = (isset($val->full_name)) ? $val->full_name:'';
				$var['total_amount'] = (isset($val->total_amount)) ? $val->total_amount:'';
                $var['payment_status'] = (isset($val->payment_status)) ? $val->payment_status:'';
                $var['date'] = (isset($val->created_at)) ? $val->created_at->todatestring():'';

				$var['index'] = $i++;
				array_push($arr,$var);
			}

			$data['draw'] = $request->draw;
			$data['recordsTotal'] = $totalcount;
			$data['recordsFiltered'] = $totalcount;
			$data['data'] = $arr;

			return json_encode($data);

		} catch (\Exception $e) {
			return back()->with('error',$e->getMessage())->withInput();
		}
    }
    /**
     * Display the specified resource.
     */
    public function show(Request $request, $id)
    {
      try { 
        $order=Order::where('id',$id)->first();
        $orderDetails=Order_details::where('order_id',$id)->first();

       $productDetails=json_decode($orderDetails->order_details);
   
      
        return view('backend.orders.order-details',compact('order','orderDetails','productDetails','id'));
    } catch (\Exception $e) {
        return back()->with('error',$e->getMessage())->withInput();
    }
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {

    //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
   
        
        try {
			$childRecords = Order::where('id',$id)->count();
            $childRecords1 = Order_details::where('order_id',$id)->count();
			if ($childRecords>0 && $childRecords1>0) {
				$childRecords = Order::where('id',$id)->delete(); 
                $childRecords1 = Order_details::where('order_id',$id)->delete(); 
				return response()->json(['status' => true ,'msg' => 'success'], 200);
			} else {
				return response()->json(['status' => false ,'msg' => ''], 200);
			}

		} catch (\Exception | \Throwable $e) {
			return response()->json(['error' => $e->getMessage()], 500);
		}
    }


    public function update_orderstatus(Request $request,$id){
        try{
            $order=Order::find($id);
            $order->update(['payment_status'=>$request->payment_status,'payment_type'=>$request->payment_type]);
            return redirect()->back()->with(['success' => "Order status updated"]);
        } catch (\Exception | \Throwable $e) {
			return response()->json(['error' => $e->getMessage()], 500);
		}
    }
}
