<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use DB;
use Session;
use Image;


class ProductController extends Controller
{
    public function addProduct()
    {
    	return view('admin.product_add');
    }

     public function saveProduct(Request $request)
    {

    	$image    = $request->file('image');
            $fileEx   = $image->getClientOriginalExtension();
            $fileName = date('Ymdhis.') . $fileEx;
            Image::make($image)
                ->resize(1200, 675)
                ->save(public_path('uploads/') . $fileName);

        $request->validate([
            'title'=>'required',
            'price'=>'required',
            'sub_title'=>'required',
        ]);
    	$product = new Product();
    	$product->title = $request->title;
        $product->price = $request->price;
    	$product->sub_title = $request->sub_title;
        $product->desc = $request->desc;
    	$product->image = $fileName;
    	$product->product_slug = $this->slug_generator($request->title);
    	$product->save();

        Session::flash('msg','Product Save Success!');

        return back();
    }

    public function edit($id)
    {
        $product = Product::find($id);
     return view('admin.product_edit', compact('product'));
    }

    public function updateProduct(Request $request, $id)
    {
        $product = Product::find($request->id);

        if ($request->file('image')) {
            $image    = $request->file('image');
            $fileName = rand(0, 999999999) . '_' . date('Ymdhis') . '_' . rand(99999, 999999999) . '.' . $image->getClientOriginalExtension();
            if ($image->isValid()) {
                if ($image->getMimeType() == "image/png" || $image->getMimeType() == "image/jpeg" || $image->getMimeType() == "image/jpg") {
                    Image::make($image)
                ->resize(1200, 675)
                ->save(public_path('uploads/') . $fileName);
                    unlink(public_path('uploads/' . $product->image));

                    $product->update([
                        'image' => $fileName
                    ]);
                } else {
                    Session::flash('msg','Product Image Danger!');
                    return redirect()->back();
                }
            }
        }

    	$product->update([
            $product->title = $request->title,
            $product->price = $request->price,
            $product->sub_title = $request->sub_title,
            $product->desc = $request->desc,
            $product->product_slug = $this->slug_generator($request->title),
        ]);

        Session::flash('msg','Slider Update Success!');
        return back();
    }

    public function manageProduct()
    {
       $product = Product::orderBy('id','DESC')->get();
    	return view('admin.product_list', compact('product'));
    }
  

    public function productStatus($id, $status)
    {
        $product = Slider::find($id);
        $product->status = $status;
        $product->save();

        return response()->json(['message' => 'Success']);

    }

         public function delete($id)
    {
        $product = Product::find($id);
        $product->status = 1;

        $product->delete();

        Session::flash('msg','Product Delete Success!');

        return back();

    }

     public function productActive($id)
    {
        $product = Product::find($id);
        $product->status = 1;
        $product->save();

        Session::flash('msg','Product Active Success!');

        return back();

    }

    public function productInactive($id)
    {
        $product = Product::find($id);
        $product->status = 0;
        $product->save();

        Session::flash('umsg','Product Inactive Success!');

        return back();

    }

    public function slug_generator($string)
    {
        $string = str_replace(' ', '-', $string);
        $string = preg_replace('/[^A-Za-z0-9-]+/', '', $string);
        return strtolower(preg_replace('/-+/', '-', $string));
    }
}
