<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try{
          return view('backend.category.index');
        } catch (\Exception $e) {
			return back()->with('error',$e->getMessage())->withInput();
		}
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.category.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate=$request->validate([
            'name'=>'required',
            'description'=>'required',
        ]);
        $validate['slug']=Str::slug($request->input('name'));
        $slug_count=Category::where('slug',$validate['slug'])->count();
        
            if($slug_count>0){
                $validate['slug'] =time().'-'.$validate['slug'];
            }

        try{
            Category::create($validate);
            $msg="Category added successfully";
            return redirect()->route('category.index')->with(['success'=>$msg]);
        } catch (\Exception $e) {
            return back()->with('error',$e->getMessage())->withInput();
         }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }
    public function category_lists(Request $request)
    {
        try {
		
			$category = Category::select('*');
			$categorycount = Category::select('*');

			if(isset($request->searchdata) && $request->searchdata != '')
			{
				$category->where('name', 'like', '%'.$request->searchdata.'%')->orWhere('status', 'like', '%'.$request->searchdata.'%');
				$categorycount->where('name', 'like', '%'.$request->searchdata.'%')->orWhere('status', 'like', '%'.$request->searchdata.'%');
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
				$var['name'] = (isset($val->name)) ? $val->name:'';
				$var['status'] = (isset($val->status)) ? $val->status:'';

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
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try {
        $category=Category::find($id);
        return view('backend.category.edit',compact('category'));
        }catch (\Exception $e) {
			return back()->with('error',$e->getMessage())->withInput();
		}
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate=$request->validate([
            'name'=>'required',
            'description'=>'required',
        ]);
        try{
            $category=Category::find($id);
            $category->update($validate);
            $msg="Category updated successfully";
            return redirect()->route('category.index')->with(['success'=>$msg]);
        } catch (\Exception $e) {
            return back()->with('error',$e->getMessage())->withInput();
         }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try{
            $childRecords = Category::where('id',$id)->count();
			if ($childRecords>0) {
				$childRecords = Category::where('id',$id)->delete();
				return response()->json(['status' => true ,'msg' => 'success'], 200);
			} else {
				return response()->json(['status' => false ,'msg' => ''], 200);
			}
        }catch (\Exception $e) {
            return back()->with('error',$e->getMessage())->withInput();
         }
    }


    public function statusupdate(Request $request){
        try{  
        $category = Category::find($request->id);
        $status=$category->status;
        
        if($category->status == 'active'){
            $msg='inactive';
        }
        else{
            $msg='active';
        }
        $values=array('status'=>$msg);
        $category->update($values);
        return response()->json(['status'=>true,'msg'=>$msg],200);


        }catch (\Exception $e) {
            return back()->with('error',$e->getMessage())->withInput();
        }
    }
}
