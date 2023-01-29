<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Brand;
use App\Models\Product;
use App\Models\ProductImg;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class IndexController extends Controller
{
    public function index(){
    	$products = Product::orderBy('id','DESC')->get();
    	$brand = Brand::orderBy('name','ASC')->get();
        $hot_deals = Product::where('hot_deals',1)->orderBy('id','DESC')->limit(6)->get();

    	return view('frontend.index',compact('brand','products','hot_deals'));
    }

    public function ProductDetails($id,$slug){
		$product = Product::findOrFail($id);
        $brand = Brand::findOrFail($product['brand_id']);
        $productImg = ProductImg::where('product_id',$id)->get();

	 	return view('frontend.product.product_details',compact('product','brand','productImg'));
	}

	public function BrandProduct($brand_id, $slug){
		$products = Product::where('status',1)->where('brand_id',$brand_id)->orderBy('id','DESC')->paginate(3);
		$brand = Brand::orderBy('name','ASC')->get();
        $hot_deals = Product::where('hot_deals',1)->orderBy('id','DESC')->limit(6)->get();

		return view('frontend.index',compact('products','brand','hot_deals'));
	}

}
