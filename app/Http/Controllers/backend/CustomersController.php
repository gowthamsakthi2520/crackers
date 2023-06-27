<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Order_details;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {  
            $order = Order::orderBy('id','desc')->paginate(5);
           return view('backend.customer.index', compact('order'));
       } catch (\Exception $e) {
           return back()->with('error',$e->getMessage())->withInput();
       }
       
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
   
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function customer_lists(Request $request)
    {
        try {
		
			$category = Order::select('*');
			$categorycount = Order::select('*');

			if(isset($request->searchdata) && $request->searchdata != '')
			{
				$category->where('order_id', 'like', '%'.$request->searchdata.'%')->orWhere('full_name', 'like', '%'.$request->searchdata.'%')->orWhere('total_amount', 'like', '%'.$request->searchdata.'%')->orWhere('email', 'like', '%'.$request->searchdata.'%')->orWhere('city', 'like', '%'.$request->searchdata.'%');
				$categorycount->where('order_id', 'like', '%'.$request->searchdata.'%')->orWhere('full_name', 'like', '%'.$request->searchdata.'%')->orWhere('total_amount', 'like', '%'.$request->searchdata.'%')->orWhere('email', 'like', '%'.$request->searchdata.'%')->orWhere('city', 'like', '%'.$request->searchdata.'%');
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
                $var['email'] = (isset($val->email)) ? $val->email:'';
                $var['city'] = (isset($val->city)) ? $val->city:'';

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


    public function show(Request $request,$id)
    {
        try { 
            $order=Order::where('id',$id)->first();
            $orderDetails=Order_details::where('order_id',$id)->first();
    
            $productDetails=json_decode($orderDetails->order_details);
       
          
            return view('backend.customer.customer-details',compact('order','orderDetails','productDetails'));
        } catch (\Exception $e) {
            return back()->with('error',$e->getMessage())->withInput();
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
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
}
