<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Cart;
class AddcartController extends Controller
{
   public function addcart($id)
   {
   	 $product=DB::table('products')->where('id',$id)->first();

   	 $data=array();
   	 if ($product->discount_price == NULL) {
   	 	$data['id']=$product->id;
   	 	$data['name']=$product->product_name;
   	 	$data['qty']=1;
   	 	$data['price']=$product->selling_price;
   	 	$data['weight']=1;
   	 	$data['options']['image']=$product->image_one;
   	 	Cart::add($data);
   	 	return \Response()->json(['success' => 'Successfully Added on your Cart']); 
   	 }else{
   	 	$data['id']=$product->id;
   	 	$data['name']=$product->product_name;
   	 	$data['qty']=1;
   	 	$data['price']=$product->discount_price;
   	 	$data['weight']=1;
   	 	$data['options']['image']=$product->image_one;
   	 	
   	 	Cart::add($data);
   	 	return \Response()->json(['success' => 'Successfully Added on your Cart']); 
   	 }
   }
}
