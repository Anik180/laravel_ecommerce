<?php

namespace App\Http\Controllers\admin\newslaters;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class NewaLaterController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function index()
    {
      $subs=DB::table('newslaters')->get();
      return view('admin.other.newslatter',compact('subs'));
    }
    public function delete($id)
    {
    	DB::table('newslaters')->where('id',$id)->delete();
        $notification=array(
        'messege'=>'Successfully Delete',
        'alert-type'=>'success'
                  );
     	return Redirect()->back()->with($notification);
    }
}
