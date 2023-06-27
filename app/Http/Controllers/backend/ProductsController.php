<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Category;
use App\Models\ProductVariant;
use DB;
use File;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            return view('backend.products.index');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage())->withInput();
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
            $category = Category::where('status', 'active')->get();
            return view('backend.products.add', compact('category'));
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage())->withInput();
        }
    }
    public function product_lists(Request $request)
    {
        try {

            $category = Products::select('*');
            $categorycount = Products::select('*');

            if (isset($request->searchdata) && $request->searchdata != '') {
                $category->where('name', 'like', '%' . $request->searchdata . '%')->orWhere('price', 'like', '%' . $request->searchdata . '%')->orWhere('category', 'like', '%' . $request->searchdata . '%')->orWhere('date', 'like', '%' . $request->searchdata . '%');
                $categorycount->where('name', 'like', '%' . $request->searchdata . '%')->orWhere('price', 'like', '%' . $request->searchdata . '%')->orWhere('category', 'like', '%' . $request->searchdata . '%')->orWhere('date', 'like', '%' . $request->searchdata . '%');
            }

            $totalcount = $categorycount->get();
            $totalcount = count($totalcount);

            $allemp = $category->orderBy('id', 'desc')->take($request->length)->skip($request->start)->get();

            $arr = array();
            $i = $request->start + 1;
            foreach ($allemp as $val) {

                $var['id'] = $val->id;
                $var['product_name'] = (isset($val->product_name)) ? $val->product_name : '';
                $var['product_img'] = (isset($val->product_images)) ? explode(',', $val->product_images) : '';
                $var['sale_price'] = (isset($val->sale_price)) ? $val->sale_price : '';
                $var['category'] = (isset($val->category_name->name)) ? $val->category_name->name : '';
                $var['date'] = (isset($val->created_at)) ? $val->created_at->todatestring() : '';

                $var['index'] = $i++;
                array_push($arr, $var);
            }

            $data['draw'] = $request->draw;
            $data['recordsTotal'] = $totalcount;
            $data['recordsFiltered'] = $totalcount;
            $data['data'] = $arr;

            return json_encode($data);

        } catch (\Exception $e) {
            // return back()->with('error',$e->getMessage())->withInput();
        }
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validate = $request->validate([
            'product_name' => 'required',
            'product_description' => 'required',
            'product_images' => 'required',
            'regular_price' => 'required',
            'sale_price' => 'required',
            'stock' => 'required',
            'category' => 'required',
            'collection' => '',
            'tags' => 'required',
        ]);

        $request->validate([
            'brands' => 'required',
            'sku' => 'required',
            'price'=>'required'
        ]);


        try {
            DB::beginTransaction();
            $files = [];

            if ($request->hasfile('product_images')) {

                foreach ($request->file('product_images') as $file) {

                    $name = time() . rand(1, 50) . '.' . $file->extension();

                    $file->move(public_path('product_images'), $name);
                    $files[] = 'product_images/' . $name;

                }

            }
            $validate['product_images'] = implode(',', $files);



            $product = Products::create($validate);
            $brands = $request->brands;
            $sku = $request->sku;

            for ($i = 0; $i < count($request->brands); $i++) {
                ProductVariant::create(['product_id' => $product->id, 'brand' => $brands[$i], 'sku' => $sku[$i],'price'=>$request->price[$i]]);
            }

            DB::commit();
            $msg = "Product added successfully";
            return redirect()->route('products.index')->with(['success' => $msg]);
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage())->withInput();
        }

    }

    /**s
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {

            $category = Category::where('status', 'active')->get();
            $product = Products::where('id', $id)->first();
            return view('backend.products.view', compact('category', 'product'));
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage())->withInput();
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try {
            $product_update = Products::find($id);
            $product_variants = $product_update->product_variants;

            $category = Category::where('status', 'active')->get();
            $product = Products::where('id', $id)->first();

            $product_varient_count = ProductVariant::where('product_id', $product->id)->count();

            return view('backend.products.edit', compact('category', 'product', 'product_variants'));
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage())->withInput();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate = $request->validate([
            'product_name' => 'required',
            'product_description' => 'required',
            'regular_price' => 'required',
            'sale_price' => 'required',
            'stock' => 'required',
            'category' => 'required',
            'collection' => '',
            'tags' => 'required',
        ]);
        $request->validate([
            'brands' => 'required',
            'sku' => 'required',
            'price'=>'required'
        ]);

        $product_update = Products::find($id);
        $product_id = Products::where('id', $id)->first();
        $varient_id = ProductVariant::where('product_id', $id)->get();


        try {
            DB::beginTransaction();
            $files = [];
            if ($request->hasfile('product_images')) {
                foreach ($request->file('product_images') as $file) {
                    $name = time() . rand(1, 50) . '.' . $file->extension();

                    $file->move(public_path('product_images'), $name);
                    $files[] = 'product_images/' . $name;
                }
                $validate['product_images'] = implode(',', $files);
                //previous images delete
                $image = $product_update->product_images;
                $remove = ltrim($image, 'product_images/');

                if (File::exists(public_path('product_images/' . $remove))) {
                    File::delete(public_path('product_images/' . $remove));
                }
            }

            $product_var_count = ProductVariant::where('product_id', $id)->count();
            $product_variant_del_id = ProductVariant::where('product_id', $id)->get();
            for ($i = 0; $i < count($request->brands); $i++) {

                if ($product_var_count == count($request->brands)) {
                    ProductVariant::where('id', $request->product_var_id[$i])->update(['brand' => $request->brands[$i], 'sku' => $request->sku[$i],'price'=>$request->price[$i]]);
                } else if ($product_var_count < count($request->brands)) {

                    if ($product_var_count > $i) {

                        ProductVariant::where('id', $request->product_var_id[$i])->update([
                            'brand' => $request->brands[$i],
                            'sku' => $request->sku[$i]
                        ]);
                    } else {

                        ProductVariant::create([
                            'product_id' => $id,
                            'brand' => $request->brands[$i],
                            'sku' => $request->sku[$i]
                        ]);
                    }
                } else {

                    for($x=0; $x < count($product_variant_del_id);$x++){
                        if($product_var_count > count($request->brands)){
                            if(count($request->brands) > $x){
                                ProductVariant::where('id',$request->product_var_id[$x])->update([
                                    'brand'=>$request->brands[$x],
                                    'sku'=>$request->sku[$x]
                                ]);
                            }
                            else{
                                ProductVariant::whereNotIn('id',$request->product_var_id)->where('product_id',$id)->delete();
                            }
                        }
                    }
                }
            }
            DB::commit();
            $msg = "Product updated successfully";
            return redirect()->route('products.index')->with(['success' => $msg]);
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage())->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        try {
            $childRecords = Products::where('id', $id)->count();
            if ($childRecords > 0) {
                $product = Products::find($id);
                $productVariant = ProductVariant::where('product_id', $id);
                $product->delete();
                $productVariant->delete();
                $msg = "Product deleted successfully";
                return response()->json(['status' => true, 'msg' => 'success'], 200);
            } else {
                return response()->json(['status' => false, 'msg' => ''], 200);
            }
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage())->withInput();
        }

    }
}