<?php

namespace App\Http\Controllers\Admin\subcategory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class SubcategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
    	$category=DB::table('categories')->get();
    	$subcat=DB::table('subcategories')
    	       ->join('categories','subcategories.category_id','categories.id')
    	       ->select('subcategories.*','categories.category_name')
    	       ->get();
    	return view('admin.subcategory.index',compact('category','subcat'));
    }
    public function store(Request $request)
    {
         $validatedData = $request->validate([
        'category_id' => 'required',
        'subcategory_name' => 'required',
    ]);
    	$data=array();
    	$data['category_id']=$request->category_id;
    	$data['subcategory_name']=$request->subcategory_name;
    	DB::table('subcategories')->insert($data);
    	$notification=array(
        'messege'=>'Successfully Added',
        'alert-type'=>'success'
                  );
     	return Redirect()->back()->with($notification);
    }
    public function delete($id)
    {
       DB::table('subcategories')->where('id',$id)->delete();
       $notification=array(
        'messege'=>'Successfully Delete',
        'alert-type'=>'success'
                  );
     	return Redirect()->back()->with($notification);

    }
    public function edit($id)
    {
        $subcat=DB::table('subcategories')->where('id',$id)->first();
        $category=DB::table('categories')->get();
        return view('admin.subcategory.edit',compact('subcat','category'));
    }
    public function update(Request $request,$id)
    {
    	$data=array();
    	$data['category_id']=$request->category_id;
    	$data['subcategory_name']=$request->subcategory_name;
    	DB::table('subcategories')->where('id',$id)->update($data);
    	 $notification=array(
        'messege'=>'Successfully Update',
        'alert-type'=>'success'
                  );
     	return Redirect()->route('subcategories')->with($notification);
    }
}
