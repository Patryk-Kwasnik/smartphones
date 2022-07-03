<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Product;
use App\Models\ProductImg;

use Image;
use Carbon\Carbon;

class ProductController extends Controller
{
    //widok dodawania
    public function AddProductView(){
        $brands = Brand::latest()->get();
        return view('admin.product.product_add',compact('brands'));
    }
    //zapis
    public function SaveProduct(Request $request){
        $image = $request->file('product_thumbnail');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->resize(917,1000)->save('upload/products/thumbnail/'.$name_gen);
    	$save_url = 'upload/products/thumbnail/'.$name_gen;

        $product_id = Product::insertGetId([
      	'brand_id' => $request->brand_id,     
      	'name' => $request->name,
      	'slug' =>  strtolower(str_replace(' ', '-', $request->name)),
      	'product_code' => $request->product_code,
   //   	'product_count' => $request->product_count,
    //  	'product_tags' => $request->product_tags,
      //	'product_size' => $request->product_size,
      	'product_color' => $request->product_color,
      	'selling_price' => $request->selling_price,
    //  	'discount_price' => $request->discount_price,
      	'desc' => $request->desc,
      	'hot_deals' => $request->hot_deals,
      	'featured' => $request->featured,
      	'product_thumbnail' => $save_url,
      	'status' => 1,
      	'created_at' => Carbon::now(),   	 
      ]);

      $images = $request->file('multi_img');
      if($images){
        foreach ($images as $img) {
            $make_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
            Image::make($img)->resize(917,1000)->save('upload/products/images/'.$make_name);
            $uploadPath = 'upload/products/images/'.$make_name;

            MultiImg::insert([
                'product_id' => $product_id,
                'name' => $uploadPath,
                'created_at' => Carbon::now(), 
            ]);
        }
    }
            $notification = array(
                'message' => 'Produkt dodany pomyślnie',
                'alert-type' => 'success'
            );
            return redirect()->route('view-products')->with($notification);
	}
    //widok produktów
    public function ProductsView(){
		$products = Product::latest()->get();
		return view('admin.product.product_view',compact('products'));
	}
//widok edycji
    public function EditProduct($id){

        $productImgs = ProductImg::where('product_id',$id)->get();

		$brands = Brand::latest()->get();
		$products = Product::findOrFail($id);
		return view('admin.product.product_edit',compact('brands','products','productImgs'));

	}
// update
    public function UpdateProduct(Request $request){

        $product_id = $request->id;
     
        Product::findOrFail($product_id)->update([
            'brand_id' => $request->brand_id,     
            'name' => $request->name,
            'slug' =>  strtolower(str_replace(' ', '-', $request->name)),
            'product_code' => $request->product_code,
     //   	'product_count' => $request->product_count,
      //  	'product_tags' => $request->product_tags,
        //	'product_size' => $request->product_size,
            'product_color' => $request->product_color,
            'selling_price' => $request->selling_price,
      //  	'discount_price' => $request->discount_price,
            'desc' => $request->desc,
            'hot_deals' => $request->hot_deals,
            'featured' => $request->featured,
         //   'product_thumbnail' => $save_url,
            'status' => 1,
            'created_at' => Carbon::now(),   	 
        ]);

        $notification = array(
			'message' => 'Dane zaktualizowane pomyslnie',
			'alert-type' => 'info'
		);
        return redirect()->back()->with($notification);  
    }

    public function MultiImageUpdate(Request $request){
		$imgs = $request->multi_img;

		foreach ($imgs as $id => $img) {
	    $imgDel = ProductImg::findOrFail($id);
	    unlink($imgDel->name);

    	$make_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
    	Image::make($img)->resize(917,1000)->save('upload/products/images/'.$make_name);
    	$uploadPath = 'upload/products/images/'.$make_name;

    	ProductImg::where('id',$id)->update([
    		'name' => $uploadPath,
    		'updated_at' => Carbon::now(),
    	]);
	     }
       $notification = array(
			'message' => 'Zdjęcia zostały zaktualizowane pomyślnie',
			'alert-type' => 'info'
		);
		return redirect()->back()->with($notification);
	} 
    
//główne zdjecie
    public function ThumbnailImageUpdate(Request $request){
        $product_id = $request->id;
        $oldImage = $request->old_img;
        unlink($oldImage);

        $image = $request->file('product_thumbnail');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(917,1000)->save('upload/products/thumbnail/'.$name_gen);
        $save_url = 'upload/products/thumbnail/'.$name_gen;

        Product::findOrFail($product_id)->update([
            'product_thumbnail' => $save_url,
            'updated_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Główne zdjęcie zostało zaktualizowane',
            'alert-type' => 'info'
        );

        return redirect()->back()->with($notification);
    }
    public function MultiImageDelete($id){
        $oldimg = ProductImg::findOrFail($id);
        unlink($oldimg->name);
        ProductImg::findOrFail($id)->delete();

        $notification = array(
           'message' => 'Product Image Deleted Successfully',
           'alert-type' => 'success'
       );
       return redirect()->back()->with($notification);
    }
    // usuniecie ze zdjeciami
    public function ProductDelete($id){
        $product = Product::findOrFail($id);
        unlink($product->product_thambnail);
        Product::findOrFail($id)->delete();

        $images = MultiImg::where('product_id',$id)->get();
        foreach ($images as $img) {
            unlink($img->name);
            ProductImg::where('product_id',$id)->delete();
        }

        $notification = array(
           'message' => 'Produkt usunięty pomyślnie',
           'alert-type' => 'success'
       );

       return redirect()->back()->with($notification);

    }
}
