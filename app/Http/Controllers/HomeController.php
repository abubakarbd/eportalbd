<?php

namespace App\Http\Controllers;
use App\User;
use App\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function Password()
    {
        return view('admin.password');
    }
    public function setting()
    {
      $setting = Setting::first();
      return view('admin.setting',compact('setting'));
    }

    public function settingUpdate(Request $request)
    {
      if ($request->file('fabicon')) {
        $images1    = $request->file('fabicon');
        $fileName1 = time() . '1.' . $request->file('fabicon')->extension();
        $filePath1 = public_path() . '/uploads/';
        $images1->move($filePath1, $fileName1);
      }
      if ($request->file('logo')) {
        $images2    = $request->file('logo');
        $fileName2 = time() . '2.' . $request->file('logo')->extension();
        $filePath2 = public_path() . '/uploads/';
        $images2->move($filePath2, $fileName2);
      }
      if ($request->file('banar')) {
        $images3    = $request->file('banar');
        $fileName3 = time() . '3.' . $request->file('banar')->extension();
        $filePath3 = public_path() . '/uploads/';
        $images3->move($filePath3, $fileName3);
      }

      $setting = Setting::find($request->id);
      $setting->comppany_name = $request->comppany_name;
      $setting->sms_sender_id = $request->sms_sender_id;
      $setting->api_key = $request->api_key;
      $setting->sms1 = $request->sms1;
      $setting->sms2 = $request->sms2;
      $setting->sms3 = $request->sms3;
      if ($request->file('fabicon')) {
        $setting->fabicon = $fileName1;
      }
      if ($request->file('logo')) {
        $setting->logo = $fileName2;
      }
      if ($request->file('banar')) {
        $setting->banar = $fileName3;
      }

      $setting->save();
      Session::flash('msg','Setting Update Success!');
      return back();
    }

    public function savePassword(Request $request)
    {
        $user = User::find($request->id);
        if ($request->email == $user->email) {

            $request->validate([
            'password'=>'required|min:8'
        ]);

        $user = User::find($request->id);
        $user->password = Hash::make($request['password']);
        $user->save();

        Session::flash('msg','Password Change Success!');
        return back();

        }else{
            Session::flash('umsg','Password Change Not Success!');
            return back();
        }

    }


}
