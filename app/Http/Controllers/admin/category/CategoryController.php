<?php

namespace App\Http\Controllers\admin\category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Admin\Category;
use DB;
class CategoryController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
    	$category=Category::all();
    	return view('admin.category.index',compact('category'));
    }
    public function store(Request $request)
    {
    	  $validatedData = $request->validate([
        'category_name' => 'required|unique:categories|max:55',
    ]);
    	$data=array();
    	$data['category_name']=$request->category_name;
    	DB::table('categories')->insert($data);
    	$notification=array(
        'messege'=>'Successfully Added',
        'alert-type'=>'success'
                  );
     	return Redirect()->back()->with($notification);
    }
    public function delete($id)
    {
    	DB::table('categories')->where('id',$id)->delete();
    	$notification=array(
          'messege'=>'Successfully Delete',
          'alert-type'=>'success'
                  );
     	  return Redirect()->back()->with($notification);

    }
    public function edit($id)
    {
    	$edit=DB::table('categories')->where('id',$id)->first();
    	return view('admin.category.edit_category',compact('edit'));
    }
    public function update(Request $request,$id)
    {
         $validatedData = $request->validate([
        'category_name' => 'required|max:55',
    ]);
    	$data=array();
    	$data['category_name']=$request->category_name;
    	$update=DB::table('categories')->where('id',$id)->update($data);
    	if($update){
    	$notification=array(
        'messege'=>'Successfully Update',
        'alert-type'=>'success'
                  );
     	return Redirect()->route('categories')->with($notification);
     }else{
         $notification=array(
        'messege'=>'Nothing Update',
        'alert-type'=>'error'
                  );
     	return Redirect()->back()->with($notification);

     }
    }
}
