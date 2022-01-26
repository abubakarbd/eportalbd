<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Work;
use DB;
use Session;

class registrationController extends Controller
{
    public function registration()
    {
    	return view('website.registration');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'contact_numbar'=>'required',
        ]);
        if ($request->file('images1')) {
          $images1    = $request->file('images1');
          $fileName1 = time() . '1.' . $request->file('images1')->extension();
          $filePath1 = public_path() . '/uploads/files/';
          $images1->move($filePath1, $fileName1);
        }
        if ($request->file('images2')) {
          $images2    = $request->file('images2');
          $fileName2 = time() . '2.' . $request->file('images2')->extension();
          $filePath2 = public_path() . '/uploads/files/';
          $images2->move($filePath2, $fileName2);
        }
        if ($request->file('images3')) {
          $images3    = $request->file('images3');
          $fileName3 = time() . '3.' . $request->file('images3')->extension();
          $filePath3 = public_path() . '/uploads/files/';
          $images3->move($filePath3, $fileName3);
        }
        if ($request->file('images4')) {
          $images4    = $request->file('images4');
          $fileName4 = time() . '4.' . $request->file('images4')->extension();
          $filePath4 = public_path() . '/uploads/files/';
          $images4->move($filePath4, $fileName4);
        }
        if ($request->file('images5')) {
          $images5    = $request->file('images5');
          $fileName5 = time() . '5.' . $request->file('images5')->extension();
          $filePath5 = public_path() . '/uploads/files/';
          $images5->move($filePath5, $fileName5);
        }
        if ($request->file('images6')) {
          $images6    = $request->file('images6');
          $fileName6 = time() . '6.' . $request->file('images6')->extension();
          $filePath6 = public_path() . '/uploads/files/';
          $images6->move($filePath6, $fileName6);
        }
        if ($request->file('images7')) {
          $images7    = $request->file('images7');
          $fileName7 = time() . '7.' . $request->file('images7')->extension();
          $filePath7 = public_path() . '/uploads/files/';
          $images7->move($filePath7, $fileName7);
        }
        if ($request->file('images8')) {
          $images8    = $request->file('images8');
          $fileName8 = time() . '8.' . $request->file('images8')->extension();
          $filePath8 = public_path() . '/uploads/files/';
          $images8->move($filePath8, $fileName8);
        }
        if ($request->file('images9')) {
          $images9    = $request->file('images9');
          $fileName9 = time() . '9.' . $request->file('images9')->extension();
          $filePath9 = public_path() . '/uploads/files/';
          $images9->move($filePath9, $fileName9);
        }
        if ($request->file('images10')) {
          $images10    = $request->file('images10');
          $fileName10 = time() . '.' . $request->file('images10')->extension();
          $filePath10 = public_path() . '/uploads/files/';
          $images10->move($filePath10, $fileName10);
        }

        $work = new Work();
       $work->name = $request->name;
       $work->company_name = $request->company_name;
       $work->company_address = $request->company_address;
       $work->name_of_owner = $request->name_of_owner;
       $work->trade_license_no = $request->trade_license_no;
       $work->trade_license_issue_date = $request->trade_license_issue_date;
       $work->national_id = $request->national_id;
       $work->tin_certificate = $request->tin_certificate;
       $work->bank_account_numbar = $request->bank_account_numbar;
       $work->contract = $request->contract;
       $work->bank_account_name = $request->bank_account_name;
       $work->bank_branch_name = $request->bank_branch_name;
       $work->bank_name = $request->bank_name;
       $work->gmail = $request->gmail;
       $work->gmail_password = $request->gmail_password;
       $work->contact_numbar = $request->contact_numbar;
       $work->note = $request->note;
       if ($request->file('images1')) {
         $work->images1 = $fileName1;
       }
       if ($request->file('images2')) {
         $work->images2 = $fileName2;
       }
       if ($request->file('images3')) {
         $work->images3 = $fileName3;
       }
       if ($request->file('images4')) {
         $work->images4 = $fileName4;
       }
       if ($request->file('images5')) {
         $work->images5 = $fileName5;
       }
       if ($request->file('images6')) {
         $work->images6 = $fileName6;
       }
       if ($request->file('images7')) {
         $work->images7 = $fileName7;
       }
       if ($request->file('images8')) {
         $work->images8 = $fileName8;
       }
       if ($request->file('images9')) {
         $work->images9 = $fileName9;
       }
       if ($request->file('images10')) {
         $work->images10 = $fileName10;
       }

       $work->save();
       Session::flash('msg','Work File send Success!');
       return back();
    }
}
