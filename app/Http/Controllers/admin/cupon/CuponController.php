<?php

namespace App\Http\Controllers\admin\cupon;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class CuponController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
    	$cupon=DB::table('cupons')->get();
    	return view('admin.cupon.index',compact('cupon'));
    }
    public function store(Request $request)
    {
    	 $validatedData = $request->validate([
        'cupon' => 'required',
        'discount' => 'required',
    ]);
    	$data=array();
    	$data['cupon']=$request->cupon;
    	$data['discount']=$request->discount;
    	DB::table('cupons')->insert($data);
    	$notification=array(
        'messege'=>'Successfully Added',
        'alert-type'=>'success'
                  );
     	return Redirect()->back()->with($notification);
    }
    public function delete($id)
    {
    	DB::table('cupons')->where('id',$id)->delete();
    	 $notification=array(
        'messege'=>'Successfully Delete',
        'alert-type'=>'success'
                  );
     	return Redirect()->back()->with($notification);

    }
    public function edit($id)
    {
    	$edit=DB::table('cupons')->where('id',$id)->first();
    	return view('admin.cupon.edit',compact('edit'));
    }
    public function update(Request $request,$id)
    {
    	 $validatedData = $request->validate([
        'cupon' => 'required',
        'discount' => 'required',
    ]);
    	$data=array();
    	$data['cupon']=$request->cupon;
    	$data['discount']=$request->discount;
    	DB::table('cupons')->where('id',$id)->update($data);
    	$notification=array(
        'messege'=>'Successfully Update',
        'alert-type'=>'success'
                  );
     	return Redirect()->route('cupons')->with($notification);
    }
}
