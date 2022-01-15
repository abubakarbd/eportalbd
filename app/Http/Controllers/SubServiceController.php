<?php

namespace App\Http\Controllers;

use App\Service;
use App\SubService;
use Illuminate\Http\Request;
use DB;
use Session;
use Image;

class SubServiceController extends Controller
{
        public function addSubService()
    {

    	$service = Service::where('status', 1)->get();
    	return view('admin.sub_service_add', compact('service'));
    }

     public function saveSubService(Request $request)
    {

    	$image    = $request->file('image');
            $fileEx   = $image->getClientOriginalExtension();
            $fileName = date('Ymdhis.') . $fileEx;
            Image::make($image)
                ->resize(1200, 675)
                ->save(public_path('uploads/') . $fileName);

        $request->validate([
            'title'=>'required',
            'sub_title'=>'required',
        ]);
    	$subService = new SubService();
    	$subService->service_id = $request->service_id;
    	$subService->title = $request->title;
    	$subService->sub_title = $request->sub_title;
    	$subService->image = $fileName;
    	$subService->sub_service_slug = $this->slug_generator($request->title);
    	$subService->save();

        Session::flash('msg','Sub Service Save Success!');

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

    public function manageSubService()
    {
       $data = SubService::with('Service')->get();
    	return view('admin.sub_service_list', compact('data'));
    }


    public function serviceStatus($id, $status)
    {
        $service = Service::find($id);
        $service->status = $status;
        $service->save();

        return response()->json(['message' => 'Success']);

    }

    public function delete($id)
    {
        $subService = SubService::find($id);
        $subService->status = 1;

        $subService->delete();

        Session::flash('msg','Sub Service Delete Success!');

        return back();

    }

    public function subServiceActive($id)
    {
        $subService = SubService::find($id);
        $subService->status = 1;
        $subService->save();

        Session::flash('msg','Sub Service Active Success!');

        return back();

    }

    public function subServiceInactive($id)
    {
        $subService = SubService::find($id);
        $subService->status = 0;
        $subService->save();

        Session::flash('umsg','Sub Service Inactive Success!');

        return back();

    }
    public function slug_generator($string)
    {
        $string = str_replace(' ', '-', $string);
        $string = preg_replace('/[^A-Za-z0-9-]+/', '', $string);
        return strtolower(preg_replace('/-+/', '-', $string));
    }
}
