<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use DB;
use Session;
use Image;

class ServiceController extends Controller
{
       public function addService()
    {
    	return view('admin.service_add');
    }

     public function saveService(Request $request)
    {

    	$image    = $request->file('image');
            $fileEx   = $image->getClientOriginalExtension();
            $fileName = date('Ymdhis.') . $fileEx;
           // $image->move(public_path('uploads/slider/'), $fileName);
            Image::make($image)
                ->resize(57, 57)
                ->save(public_path('uploads/') . $fileName);

        $request->validate([
            'title'=>'required',
        ]);
    	$service = new Service();
    	$service->title = $request->title;
    	$service->image = $fileName;
    	$service->service_slug = $this->slug_generator($request->title);
    	$service->save();

        Session::flash('msg','Service Save Success!');

        return back();
    }

    public function edit($id)
    {
        $service = Service::find($id);
     return view('admin.service_edit', compact('service'));
    }

    public function updateService(Request $request, $id)
    {
        $service = Service::find($request->id);

        if ($request->file('image')) {
            $image    = $request->file('image');
            $fileName = rand(0, 999999999) . '_' . date('Ymdhis') . '_' . rand(99999, 999999999) . '.' . $image->getClientOriginalExtension();
            if ($image->isValid()) {
                if ($image->getMimeType() == "image/png" || $image->getMimeType() == "image/jpeg" || $image->getMimeType() == "image/jpg") {
                    Image::make($image)
                ->resize(57, 57)
                ->save(public_path('uploads/') . $fileName);
                    unlink(public_path('uploads/' . $service->image));

                    $service->update([
                        'image' => $fileName
                    ]);
                } else {
                    Session::flash('msg','Service Image Danger!');
                    return redirect()->back();
                }
            }
        }

    	$service->update([
            $service->title = $request->title,
	    	$service->service_slug = $this->slug_generator($request->title),
        ]);

        Session::flash('msg','Service Update Success!');
        return back();
    }

    public function manageService()
    {
       $service = Service::orderBy('id','DESC')->get();
    	return view('admin.service_list', compact('service'));
    }
  

    public function serviceStatus($id, $status)
    {
        $service = Service::find($id);
        return $service;
        $service->status = $status;
        $service->save();

        return response()->json(['message' => 'Success']);

    }

         public function delete($id)
    {
        $service = Service::find($id);
        $service->status = 1;

        $service->delete();

        Session::flash('msg','Service Delete Success!');

        return back();

    }

         public function serviceActive($id)
    {
        $service = Service::find($id);
        $service->status = 1;
        $service->save();

        Session::flash('msg','Service Active Success!');

        return back();

    }

    public function serviceInactive($id)
    {
        $service = Service::find($id);
        $service->status = 0;
        $service->save();

        Session::flash('umsg','Service Inactive Success!');

        return back();

    }

    public function slug_generator($string)
    {
        $string = str_replace(' ', '-', $string);
        $string = preg_replace('/[^A-Za-z0-9-]+/', '', $string);
        return strtolower(preg_replace('/-+/', '-', $string));
    }
}
