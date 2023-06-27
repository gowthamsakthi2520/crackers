<?php

namespace App\Http\Controllers\frontend;

use App\Models\ProductVariant;
use DB;
use view;
use Auth;
use File;
use Validator;
use Carbon\Carbon;
use App\Mail\ContactMail;
use App\Mail\ContactUsAdmin;

use App\Models\ContactUs;
use App\Models\Banner;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

use Illuminate\Mail\Mailable;
use App\Models\ActivityPackage;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Response;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Products;

use Session;
use App\Models\Category;
class FrontendController extends BaseController
{

   use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


   private function removecart() {
	
	$carts = Session::get('cart',[]);  
		foreach($carts as $key=>$cart){  
			$productvariant=Products::where('id',$carts[$key]['product_id'])->first();
			if(isset($productvariant)){
				if($productvariant->status=="inactive"){
					unset($carts[$key]);
					Session::put('cart',$carts);  
				}
			}else{
					unset($carts[$key]);
					Session::put('cart',$carts);  
			}			  
		}
}
	public function signout(Request $request) {
	  Auth::logout();
	  return redirect('/');
	}

    public function welcome()
    {
		// Session::forget('cart',[]);
		// dd(Session::get('cart',[]));
		$this->removecart();
		$banners=Banner::where('status','active')->get();
		$categories=Category::orderBy('id','desc')->where('status','active')->get();
		$carts=Session::get('cart',[]);
		$cart_count=count($carts);
		$sub_amt=0;
		$offer_amt=0;

		foreach($carts as $cart){
			$sub_amt+=$cart['price'] * $cart['product_qty'];
		}
		

		if(count($categories) >0){
			$category=$categories[0];
			$products=Products::orderBy('id','desc')->where('category',$category->id)->where('status','active')->get();
		}else{
			$products=[];
		}
		//brand dropdown list create
		$brand_list_dropdown=[];
		foreach($products as $product){
			$brand_list_dropdown[]=ProductVariant::where('product_id',$product->id)->get();

		}
        //  dd($brand_list_dropdown);
        return view('welcome',['products'=>$products,'categories'=>$categories,'carts'=>$carts,'sub_amt'=>$sub_amt,'offer_amt'=>$offer_amt,'cart_count'=>$cart_count,'banners'=>$banners,'brand_list_dropdown'=>$brand_list_dropdown]);
    }

    public function about()
    {
        return view('about');
    }

	public function product_lists(Request $request){
		$carts=Session::get('cart',[]);
		$cart_count=count($carts);
		$products=Products::where('category',$request->category_id)->get();
         
		//sale price view
        foreach($products as $product){
			$product_var_sale_price=ProductVariant::where('product_id',$product->id)->orderBy('id','desc')->first();
			$product->var_sale_price=$product_var_sale_price->price;
		}

		//brand name view in dropdown
		$brands_list_dropdown=[];
         foreach($products as $product){
			$brands_list_dropdown[]=ProductVariant::where('product_id',$product->id)->get();

		 }
		 //request -> product_id get the brand click get the price
		 $brand_price_get=ProductVariant::where('id',$request->variant_id)->first();
        // dd($brand_price_get);

		return response()->json(['products'=>$products,'carts'=>$carts,'cart_count'=>$cart_count,'brands_list_dropdown'=>$brands_list_dropdown,'brand_price_get'=>$brand_price_get]);

	}

    public function pricelist()
    {
        return view('price-list');
    }

    public function orderdetails()
    {
        return view('order-details');
    }

    public function contact()
    {
		$this->removecart();
        return view('contact');
    }

		// Contact Us Form 
	public function contactsave(Request $request)
    {

		date_default_timezone_set('Asia/Calcutta');

		$validator = $this->validate($request,[
			'first_name'=>'required|min:2|max:255',
			'last_name'=>'required|min:3|max:225',
			'email'=>'required|email|min:3|max:225',
			'phone_contact'=>'required|min:10|max:15',
			'city'=>'required|min:3|max:255',
			'statename'=>'required|min:3|max:50'
		]);

		DB::beginTransaction();

		try{

			$first_name = !empty($request->first_name)? $request->first_name :'';
			$last_name = !empty($request->last_name)? $request->last_name :'';
			$email = !empty($request->email)? $request->email :'';
			$phone_contact = !empty($request->phone_contact)? $request->phone_contact :'';
			$city = !empty($request->city)? $request->city :'';
			$statename = !empty($request->statename)? $request->statename :'';
			$message_contact = !empty($request->message_contact)? $request->message_contact :'';

		$regcunt = ContactUs::where('first_name',$first_name)->where('email',$email)->where('last_name',$last_name)->where('phone',$phone_contact)->where('city',$city)->where('statename',$statename)->count();
			if (!empty($regcunt) && $regcunt >0) {
				$msg =  'Mail has been sent successfully';
			} else {

				$regdata = new ContactUs();
				$regdata->created_at = now();
				$regdata->first_name = $first_name;
				$regdata->last_name = $last_name;
				$regdata->email = $email;
				$regdata->phone = $phone_contact;
				$regdata->city = $city;
				$regdata->statename = $statename;
				$regdata->message = $message_contact;
				$regdata->save();

				$data = [
					'first_name' => $first_name,
					'last_name' => $last_name,
					'email' => $email,
					'phone' => $phone_contact,
					'city' => $city,
					'statename' => $statename,
					'message' => $message_contact
				];
				$msg = 'Mail has been sent successfully!';

				Mail::to($email)->send(new ContactMail($data));


				$regto = env('ADMIN_EMAILID');
				Mail::to($regto)->send(new ContactUsAdmin($data));
			}

			DB::commit();
			return redirect()->back()->with(['success' => $msg]);

		}
		 catch (\Exception | \Throwable $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    
public function add_to_cart(Request $request){
	
			$product=Products::find($request->product_id);

			 $aNewCartData = array(
				'product_id' => $request->product_id,
				'product_qty' => $request->product_qty,
				'product_name' => $product->product_name,
				'price' => $product->sale_price,
				'status' => 'active'
			);
	  
			$aCartData = Session::get('cart',[]); //session declare and get 
			

			if(!empty($aCartData[$request->product_id])){
				$aCartData[$request->product_id]['product_qty']=$request->product_qty;
			} else {
				$aCartData[$request->product_id] = $aNewCartData;
				
			}
	
			 Session::put('cart',$aCartData);  // session  set values
			
			$carts=Session::get('cart',[]);
			// dd($carts);

           
			$cart_count=count($carts);
			$sub_amt=0;
			$offer_amt=0;

			foreach($carts as $cart){
				$sub_amt+=$cart['price'] * $cart['product_qty'];
			}
		
			$cart_table_render=view('cart.cart_list',['carts'=>$carts,'cart_count'=>$cart_count])->render();
			$checkout_render=view('checkout.product_table',['carts'=>$carts,'offer_amt'=>$offer_amt,'sub_amt'=>$sub_amt])->render();
			// $response['cart_table_render']=$cart_table_render;
	
		   
	
		   return response()->json(['cart_table_render'=>$cart_table_render,'sub_amt'=>$sub_amt,'offer_amt'=>$offer_amt,'checkout_render'=>$checkout_render]);
}

public function checkout(Request $request){
	$validate=Validator::make($request->all(), [
		'email'=>'required|email',
		'name'=>'requried',
		'phone'=>'required|integer',
		'address'=>'required',
		'city'=>'required',
		'state'=>'required',
		'pincode'=>'required'
	]);
try{

	if ($validate->fails()) {
		return response()->json(["error"=>$validate->errors()]);
	}
}
catch (\Exception | \Throwable $e) {
	
	return response()->json(["error"=>$validate->errors()]);
}
	//return json(['validate'=>$validate]);
}
}