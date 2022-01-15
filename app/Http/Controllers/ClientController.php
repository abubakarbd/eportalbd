<?php

namespace App\Http\Controllers;
use App\Client;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Service;

class ClientController extends Controller
{
    public function clientAdd()
    {
      $service = Service::where('status', 1)->get();
      return view('admin.client_add', compact('service'));
    }
    public function manageClient()
    {
       $client = Client::orderBy('id','DESC')->get();
    	return view('admin.client', compact('client'));
    }

    public function saveClient(Request $request)
    {
        $request->validate([
            'service'=>'required',
            'name'=>'required|min:3',
            'mobile'=>'required|min:11|max:12|unique:clients',
        ]);
    	$client = new Client();
    	$client->name = $request->name;
    	$client->mobile = $request->mobile;
    	$client->service = $request->service;
    	$client->name_slug = $this->slug_generator($request->name);
    	$client->save();

      Session::flash('msg','Client Create Success!');
      return back();
    }

     public function clientActive($id)
    {
        $client = Client::find($id);
        $client->status = 1;
        $client->save();

        Session::flash('msg','Client Active Success!');

        return back();

    }

    public function clientInactive($id)
    {
        $client = Client::find($id);
        $client->status = 0;
        $client->save();

        Session::flash('umsg','Client Inactive Success!');

        return back();

    }

    public function delete($id)
    {
        $client = Client::find($id);
        $client->status = 1;
        $client->delete();

        Session::flash('umsg','Client Delete Success!');

        return back();

    }


    public function slug_generator($string)
    {
        $string = str_replace(' ', '-', $string);
        $string = preg_replace('/[^A-Za-z0-9-]+/', '', $string);
        return strtolower(preg_replace('/-+/', '-', $string));
    }

}
