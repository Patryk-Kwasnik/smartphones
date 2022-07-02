<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use Image;
class BrandController extends Controller
{
    //grid
    public function BrandView(){
        $brands = Brand::latest()->get();
        return view('admin.brand.brand_view',compact('brands'));
    }
    //dodawanie
    public function BrandStore(Request $request){
        $request->validate([
            'name' => 'required'
        ],[
            'name.required' => 'To pole jest wymagane'
        ]);
        //upload zdjecia       
        $image = $request->file('image');
        $url = '';
        if($image){
            $name = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(300,300)->save('upload/brand/'.$name);
            $url = 'upload/brand/'.$name;
        }

        Brand::insert([
            'name' => $request->name,
            'slug' => strtolower(str_replace(' ','-',$request->name)),
            'image' => $url,
        ]);

        $notification = array(
            'message' => 'Wpis został pomyślnie dodany',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    //edycja
    public function BrandEdit($id){
        $brand = Brand::findOrFail($id);
        return view('admin.brand.brand_edit',compact('brand'));
    }
    //update
    public function BrandUpdate(Request $request){
        $id = $request->id;
        $old_img = $request->old_image;
        //przesłano img
        if($request->file('image')){
            //upload zdjecia       
            $image = $request->file('image');
            $url = '';
            if($image){
                $name = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(300,300)->save('upload/brand/'.$name);
                $url = 'upload/brand/'.$name;
            }

            Brand::findOrFail($id)->update([
                'name' => $request->name,
                'slug' => strtolower(str_replace(' ','-',$request->name)),
                'image' => $url,
            ]);

            $notification = array(
                'message' => 'Wpis został pomyślnie zaktualizowany',
                'alert-type' => 'info'
            );
            return redirect()->route('all.brand')->with($notification);
        }else{
            Brand::findOrFail($id)->update([
                'name' => $request->name,
                'slug' => strtolower(str_replace(' ','-',$request->name))
            ]);

            $notification = array(
                'message' => 'Wpis został pomyślnie zaktualizowany',
                'alert-type' => 'info'
            );
            return redirect()->route('all.brand')->with($notification);
        }
    }
    public function BrandDelete($id){
        $brand = Brand::findOrFail($id);
        $img = $brand->image;
        if($img)
            unlink($img);

        $brand->delete();
        $notification = array(
            'message' => 'Wpis został pomyślnie usunięty',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
    }
}
