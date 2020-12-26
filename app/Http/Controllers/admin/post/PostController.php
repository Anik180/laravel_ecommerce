<?php

namespace App\Http\Controllers\admin\post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Image;
class PostController extends Controller
{
      public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function categoryindex()
    {
        $category=DB::table('post_categories')->get();
    	return view('admin.post.category',compact('category'));
    }
    public function storecategory(Request $request)
    {
    	 $validatedData = $request->validate([
        'category_name_en' => 'required|unique:post_categories|max:55',
        'category_name_bn' => 'required|unique:post_categories|max:55',
    ]);
    	$data=array();
    	$data['category_name_en']=$request->category_name_en;
    	$data['category_name_bn']=$request->category_name_bn;
    	DB::table('post_categories')->insert($data);
    	$notification=array(
        'messege'=>'Successfully Added',
        'alert-type'=>'success'
                  );
     	return Redirect()->back()->with($notification);

    }
    public function categoryedit($id)
    {
    	$edit=DB::table('post_categories')->where('id',$id)->first();
    	return view('admin.post.edit_category',compact('edit'));
    }
    public function categoryupdate(Request $request,$id)

{
	  	 $validatedData = $request->validate([
        'category_name_en' => 'required|max:55',
        'category_name_bn' => 'required|max:55',
    ]);
    	$data=array();
    	$data['category_name_en']=$request->category_name_en;
    	$data['category_name_bn']=$request->category_name_bn;
    	$update=DB::table('post_categories')->where('id',$id)->update($data);
    	if($update){
    	$notification=array(
        'messege'=>'Successfully Update',
        'alert-type'=>'success'
                  );
     	return Redirect()->route('post.category')->with($notification);
     }else{
         $notification=array(
        'messege'=>'Nothing Update',
        'alert-type'=>'error'
                  );
     	return Redirect()->back()->with($notification);

     }
}
public function categorydelete($id)
{
	  	DB::table('post_categories')->where('id',$id)->delete();
    	$notification=array(
          'messege'=>'Successfully Delete',
          'alert-type'=>'success'
                  );
     	  return Redirect()->back()->with($notification);
}
public function index()
{
	    $post=DB::table('post_categories')->get();
    	return view('admin.post.add_post',compact('post'));
}
  public function store(Request $request)
    {
    	$data=array();
    	$data['post_title_en']=$request->post_title_en;
    	$data['post_title_bn']=$request->post_title_bn;
    	$data['category_id']=$request->category_id;
    	$data['details_en']=$request->details_en;
    	$data['details_bn']=$request->details_bn;

    	$post_image=$request->file('post_image');
    	if ($post_image) {
    		    $image_one_name= hexdec(uniqid()).'.'.$post_image->getClientOriginalExtension();
                Image::make($post_image)->resize(400,240)->save('public/media/post/'.$image_one_name);
                $data['post_image']='public/media/post/'.$image_one_name;
                DB::table('posts')->insert($data);
                $notification=array(
                     'messege'=>'Successfully Post Inserted ',
                     'alert-type'=>'success'
                    );
                return Redirect()->back()->with($notification);

    	}else{
    		 $data['post_image']='';
              DB::table('posts')->insert($data);
               $notification=array(
                     'messege'=>'Successfully Post Inserted ',
                     'alert-type'=>'success'
                    );
                return Redirect()->back()->with($notification);	
    	}
    }
    public function allpost()
    {
      $post=DB::table('posts')->join('post_categories','posts.category_id','post_categories.id')
            ->select('posts.*','post_categories.category_name_en')->get();
      return view('admin.post.all_post',compact('post'));      
    }
        public function destroy($id)
    {
      $post=DB::table('posts')->where('id',$id)->first();
      $image=$post->post_image;
      unlink($image);
      DB::table('posts')->where('id',$id)->delete();
      $notification=array(
                     'messege'=>'Successfully Post Deleted ',
                     'alert-type'=>'success'
                    );
                return Redirect()->back()->with($notification);
    }

    public function edit($id)
    {
      $post=DB::table('posts')->where('id',$id)->first();
      return view('admin.post.edit',compact('post'));
    }

    public function update(Request $request,$id)
    {
      $oldimage=$request->old_image;
      $data=array();
      $data['post_title_en']=$request->post_title_en;
      $data['post_title_bn']=$request->post_title_bn;
      $data['category_id']=$request->category_id;
      $data['details_en']=$request->details_en;
      $data['details_bn']=$request->details_bn;
      $post_image=$request->file('post_image');
       if ($post_image) {
            unlink($oldimage);
            $image_one_name= hexdec(uniqid()).'.'.$post_image->getClientOriginalExtension();
                Image::make($post_image)->resize(400,240)->save('public/media/post/'.$image_one_name);
                $data['post_image']='public/media/post/'.$image_one_name;
                DB::table('posts')->where('id',$id)->update($data);
                $notification=array(
                     'messege'=>'Successfully Post Update ',
                     'alert-type'=>'success'
                    );
                return Redirect()->route('all.blogpost')->with($notification);

       }else{
           $data['post_image']=$oldimage;
               DB::table('posts')->where('id',$id)->update($data);
               $notification=array(
                     'messege'=>'Successfully Post Update ',
                     'alert-type'=>'success'
                    );
                return Redirect()->route('all.post')->with($notification);  
      }
    }
}
