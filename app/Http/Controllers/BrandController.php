<?php

namespace App\Http\Controllers;
use App\Brand;
use Illuminate\Http\Request;
use DB;
use Session;
use Image;

class BrandController extends Controller
{
    public function addBrand()
    {
    	return view('admin.brand_add');
    }

    public function saveBrand(Request $request)
    {
        $image    = $request->file('image');
            $fileEx   = $image->getClientOriginalExtension();
            $fileName = date('Ymdhis.') . $fileEx;
           // $image->move(public_path('uploads/slider/'), $fileName);
            Image::make($image)
                ->resize(200, 150)
                ->save(public_path('uploads/') . $fileName);

        $request->validate([
            'brand_name'=>'required|unique:brands,brand_name'
        ]);
    	$brand = new Brand();
    	$brand->brand_name = $request->brand_name;
        $brand->image = $fileName;
    	$brand->brand_slug = $this->slug_generator($request->brand_name);
    	$brand->save();

        Session::flash('msg','Brand Save Success!');

        return back();

       // return back()->with('msg','Brand Save Success!');
        //Brand::create($request->all());

        // DB::table('brands')->insert([
        //     'brand_name'=>$request->brand_name
        // ]);
       // return redirect('brand/add-brand');
       // return redirect()->back();

    }

    public function edit($id)
    {
        $brand = Brand::find($id);
     return view('admin.brand_edit', compact('brand'));
    }

    public function updateBrand(Request $request)
    {
        $request->validate([
            'brand_name'=>'required'
        ]);
        $brand = Brand::find($request->id);
        $brand->brand_name = $request->brand_name;
        $brand->brand_slug = $this->slug_generator($request->brand_name);
        $brand->save();

        Session::flash('msg','Brand Update Success!');
        return back();
    }

    public function manageBrand()
    {
       $brand = Brand::orderBy('id','DESC')->get();
    	return view('admin.brand_list', compact('brand'));
    }
  

    public function brandStatus($id, $status)
    {
        $brand = Brand::find($id);
        $brand->status = $status;
        $brand->save();

        return response()->json(['message' => 'Success']);

    }

         public function delete($id)
    {
        $brand = Brand::find($id);
        $brand->status = 1;
        $brand->delete();

        Session::flash('msg','Brand Delete Success!');

        return back();

    }

    public function slug_generator($string)
    {
        $string = str_replace(' ', '-', $string);
        $string = preg_replace('/[^A-Za-z0-9-]+/', '', $string);
        return strtolower(preg_replace('/-+/', '-', $string));
    }


}
