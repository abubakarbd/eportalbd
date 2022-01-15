<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;
use DB;
use Session;
use Image;
use Exception;

class SliderController extends Controller
{
    public function addSlider()
    {
    	return view('admin.slider_add');
    }

     public function saveSlider(Request $request)
    {

    	$image    = $request->file('image');
            $fileEx   = $image->getClientOriginalExtension();
            $fileName = date('Ymdhis.') . $fileEx;
            Image::make($image)
                ->resize(500, 250)
                ->save(public_path('uploads/slider/') . $fileName);

        $request->validate([
            'title'=>'required',
            'sub_title'=>'required',
        ]);
    	$slider = new Slider();
    	$slider->title = $request->title;
    	$slider->sub_title = $request->sub_title;
    	$slider->image = $fileName;
    	$slider->slider_slug = $this->slug_generator($request->title);
    	$slider->save();

        Session::flash('msg','Slider Save Success!');

        return back();
    }

    public function edit($id)
    {
        $slider = Slider::find($id);
     return view('admin.slider_edit', compact('slider'));
    }

    public function updateSlider(Request $request, $id)
    {
        $slider = Slider::find($request->id);

        if ($request->file('image')) {
            $image    = $request->file('image');
            $fileName = rand(0, 999999999) . '_' . date('Ymdhis') . '_' . rand(99999, 999999999) . '.' . $image->getClientOriginalExtension();
            if ($image->isValid()) {
                if ($image->getMimeType() == "image/png" || $image->getMimeType() == "image/jpeg" || $image->getMimeType() == "image/jpg") {
                    Image::make($image)
                ->resize(500, 250)
                ->save(public_path('uploads/slider/') . $fileName);
                    unlink(public_path('uploads/slider/' . $slider->image));

                    $slider->update([
                        'image' => $fileName
                    ]);
                } else {
                    Session::flash('msg','Slider Image Danger!');
                    return redirect()->back();
                }
            }
        }

    	$slider->update([
            $slider->title = $request->title,
	    	$slider->sub_title = $request->sub_title,
	    	$slider->slider_slug = $this->slug_generator($request->title),
        ]);

        Session::flash('msg','Slider Update Success!');
        return back();
    }

    public function manageSlider()
    {
       $slider = Slider::orderBy('id','DESC')->get();
    	return view('admin.slider_list', compact('slider'));
    }
  

    public function sliderStatus($id, $status)
    {
        $slider = Slider::find($id);
        $slider->status = $status;
        $slider->save();

        return response()->json(['message' => 'Success']);

    }

         public function delete($id)
    {
        $slider = Slider::find($id);
        $slider->status = 1;

        $slider->delete();

        Session::flash('msg','Slider Delete Success!');

        return back();

    }

     public function sliderActive($id)
    {
        $slider = Slider::find($id);
        $slider->status = 1;
        $slider->save();

        Session::flash('msg','Slider Active Success!');

        return back();

    }

    public function sliderInactive($id)
    {
        $slider = Slider::find($id);
        $slider->status = 0;
        $slider->save();

        Session::flash('umsg','Slider Inactive Success!');

        return back();

    }

    public function slug_generator($string)
    {
        $string = str_replace(' ', '-', $string);
        $string = preg_replace('/[^A-Za-z0-9-]+/', '', $string);
        return strtolower(preg_replace('/-+/', '-', $string));
    }
}
