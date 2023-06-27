<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use File;


class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        try {
            return view('backend.banner.index');
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
            return view('backend.banner.add');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage())->withInput();
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'image' => 'required'
        ]);

        try {

            $files = [];
            if ($request->hasfile('image')) {
                foreach ($request->file('image') as $file) {
                    $name = time() . rand(1, 50) . '.' . $file->extension();

                    $file->move(public_path('banner_images'), $name);
                    $files[] = 'banner_images/' . $name;
                }

            }
            $validate['image'] = implode(',', $files);
            $banner = Banner::create($validate);
            $msg = "Banner added successfully";
            return redirect()->route('banner.index')->with(['success' => $msg]);

        } catch (\Exception $e) {
            return back()->with('error'->$e->getMessage())->withInput();

        }


    }

    public function banner_lists(Request $request)
    {
        try {

            $category = Banner::select('*');
            $categorycount = Banner::select('*');

            if (isset($request->searchdata) && $request->searchdata != '') {
                $category->where('image', 'like', '%' . $request->searchdata . '%');
                $categorycount->where('image', 'like', '%' . $request->searchdata . '%');
            }

            $totalcount = $categorycount->get();
            $totalcount = count($totalcount);

            $allemp = $category->orderBy('id', 'desc')
                ->take($request->length)->skip($request->start)->get();

            $arr = array();
            $i = $request->start + 1;
            foreach ($allemp as $val) {
                $img = explode(',', $val->image);
                $url = url('/');

                $var['id'] = $val->id;
                $var['url'] = url('/');
                $var['image'] = (isset($val->image)) ? $img : '';
                $var['status'] = (isset($val->status)) ? $val->status : '';

                $var['index'] = $i++;
                array_push($arr, $var);
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
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try {
            $banner = Banner::find($id);
            return view('backend.banner.edit', compact('banner'));
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage())->withInput();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $banner_id = Banner::find($id);

            $files = [];
            if ($request->hasFile('image')) {
                foreach ($request->file('image') as $img) {
                    $fileName = time() . rand(1, 50) . '.' . $img->extension();
                    $img->move(public_path('banner_images'), $fileName);
                    $files[] = 'banner_images/' . $fileName;
                }
                $img_array = implode(',', $files);

                // delete 

                $image = explode(',', $banner_id->image);

                foreach ($image as $i) {
                    $remove = ltrim($i, 'banner_images/');
                    if (File::exists(public_path('banner_images/' . $remove))) {
                        File::delete(public_path('banner_images/' . $remove));
                    }
                }
                $banner_id->update(['image' => $img_array]);
                $msg = "Banner updated successfully";
                return redirect()->route('banner.index')->with(['success' => $msg]);


            }
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
            $banner_id = Banner::find($id);
            if (!empty($banner_id)) {

                $image = explode(',', $banner_id->image);
                foreach ($image as $i) {
                    $remove = ltrim($i, 'banner_images/');
                    if (File::exists(public_path('banner_images/' . $remove))) {
                        File::delete(public_path('banner_images/' . $remove));
                    }
                }
                $banner_id->delete();
                $msg = "Banner Deleted successfully";
                return response()->json(['status' => true, 'msg' => 'success'], 200);


            }

        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage())->withInput();
        }

    }

    //  banner status function
    public function bannerstatus(Request $request)
    {

       try{
          
        $banner = Banner::find($request->id);

        if ($banner->status == "active") {
            $msg = "inactive";
        } else {
            $msg = "active";
        }
        $values = array('status' => $msg );
        $banner->update($values);
        return response()->json(['status' => true, 'msg' =>$msg], 200);
       }
       catch(\Exception $e){
        return back()->with('error', $e->getMessage())->withInput();
       }

    }


}

