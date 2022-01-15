<?php

namespace App\Http\Controllers;

use App\Notice;
use Illuminate\Http\Request;
use DB;
use Session;

class NoticeController extends Controller
{
        public function addNotice()
    {
    	return view('admin.notice_add');
    }

    public function saveNotice(Request $request)
    {
        $request->validate([
            'title'=>'required|unique:notices,title',
            'notice'=>'required',
        ]);
    	$notice = new Notice();
    	$notice->title = $request->title;
    	$notice->notice = $request->notice;
    	$notice->notice_slug = $this->slug_generator($request->title);
    	$notice->save();

        Session::flash('msg','Notice Save Success!');

        return back();
    }

    public function edit($id)
    {
        $notice = Notice::find($id);
     return view('admin.notice_edit', compact('notice'));
    }

    public function updateNotice(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'notice'=>'required',
        ]);
    	$notice = Notice::find($request->id);
    	$notice->title = $request->title;
    	$notice->notice = $request->notice;
    	$notice->notice_slug = $this->slug_generator($request->title);
    	$notice->save();

        Session::flash('msg','Notice Update Success!');
        return back();
    }

    public function manageNotice()
    {
       $notice = Notice::orderBy('id','DESC')->get();
    	return view('admin.notice_list', compact('notice'));
    }
  

    public function noticeStatus($id, $status)
    {
        $notice = Notice::find($id);
        $notice->status = $status;
        $notice->save();

        return response()->json(['message' => 'Success']);

    }

         public function delete($id)
    {
        $notice = Notice::find($id);
        $notice->status = 1;
        $notice->delete();

        Session::flash('msg','Notice Delete Success!');

        return back();

    }

     public function noticeActive($id)
    {
        $notice = Notice::find($id);
        $notice->status = 1;
        $notice->save();

        Session::flash('msg','Notice Active Success!');

        return back();

    }

    public function noticeInactive($id)
    {
        $notice = Notice::find($id);
        $notice->status = 0;
        $notice->save();

        Session::flash('umsg','Notice Inactive Success!');

        return back();

    }

    public function slug_generator($string)
    {
        $string = str_replace(' ', '-', $string);
        $string = preg_replace('/[^A-Za-z0-9-]+/', '', $string);
        return strtolower(preg_replace('/-+/', '-', $string));
    }
}
