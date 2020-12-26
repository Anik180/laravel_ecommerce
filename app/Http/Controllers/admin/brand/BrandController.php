<?php

namespace App\Http\Controllers\admin\brand;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class BrandController extends Controller
{
        public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
    	$brand=DB::table('brands')->get();
    	return view('admin.brand.index',compact('brand'));
    }
    public function store(Request $request)
    {
    	 $validatedData = $request->validate([
        'brand_name' => 'required|unique:brands|max:55',
    ]);
    	$data=array();
        $data['brand_name']=$request->brand_name; 
        $image=$request->file('brand_logo');
            if ($image) {
                $image_name= uniqid();
                $ext=strtolower($image->getClientOriginalExtension());
                $image_full_name=$image_name.'.'.$ext;
                $upload_path='public/media/brand/';
                $image_url=$upload_path.$image_full_name;
                $success=$image->move($upload_path,$image_full_name);
              
                $data['brand_logo']=$image_url;
                $brand=DB::table('brands')
                          ->insert($data);
                    $notification=array(
                     'messege'=>'Successfully Brand Inserted ',
                     'alert-type'=>'success'
                    );
                return Redirect()->back()->with($notification);                      
            }else{
              $brand=DB::table('brands')
                          ->insert($data);
                 $notification=array(
                     'messege'=>'Done!',
                     'alert-type'=>'success'
                      );
                return Redirect()->back()->with($notification); 
            }

    }
    public function delete($id)
    {
    	$data=DB::table('brands')->where('id',$id)->first();
    	$image=$data->brand_logo;
    	unlink($image);
    	 $brand=DB::table('brands')
    	                  ->where('id',$id)
                          ->delete();
                    $notification=array(
                     'messege'=>'Successfully Brand Deleted ',
                     'alert-type'=>'success'
                    );
                return Redirect()->back()->with($notification);

    }
    public function edit($id)
    {
    	$brand=DB::table('brands')->where('id',$id)->first();
    	return view('admin.brand.edit',compact('brand'));
    }
    public function update(Request $request,$id)
    {
         $validatedData = $request->validate([
        'brand_name' => 'required|max:55',
    ]);
    	 $oldlogo=$request->old_logo;
        $data=array();
        $data['brand_name']=$request->brand_name; 
        $image=$request->file('brand_logo');
            if ($image) {
                unlink($oldlogo);
                $image_name= uniqid();
                $ext=strtolower($image->getClientOriginalExtension());
                $image_full_name=$image_name.'.'.$ext;
                $upload_path='public/media/brand/';
                $image_url=$upload_path.$image_full_name;
                $success=$image->move($upload_path,$image_full_name);
                $data['brand_logo']=$image_url;
                $brand=DB::table('brands')->where('id',$id)->update($data);
                    $notification=array(
                     'messege'=>'Successfully Brand Updated ',
                     'alert-type'=>'success'
                    );
                return Redirect()->route('brands')->with($notification);                      
            }else{
              $brand=DB::table('brands')->where('id',$id)->update($data);
                 $notification=array(
                     'messege'=>'Update without image!',
                     'alert-type'=>'success'
                      );
                return Redirect()->route('brands')->with($notification); 
            }

    }
}
