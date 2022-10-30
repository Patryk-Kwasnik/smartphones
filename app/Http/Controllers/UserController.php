<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Auth;
use Carbon\Carbon;

class UserController extends Controller
{
    public function myOrders(){
        if(Auth::user()) {
            $orders = Order::where('user_id',Auth::id())->orderBy('id','DESC')->get();
            return view('frontend.user.order_view',compact('orders'));
        }else
            return Redirect()->route('login');
    }

    public function OrderDetails($order_id){
        if(Auth::user()) {
            $order = Order::where('id', $order_id)->where('user_id', Auth::id())->first();
            $orderItem = OrderItem::with('product')->where('order_id',$order_id)->orderBy('id','DESC')->get();

            return view('frontend.user.order_details', compact('order', 'orderItem'));
        }else
            return Redirect()->route('login');
    } // end mehtod
    // konto użytkownika
    public function UserLogout(){
        Auth::logout();
        return Redirect()->route('login');
    }

    public function UserProfile(){
        if(Auth::user()) {
            $id = Auth::user()->id;
            $user = User::find($id);
            return view('frontend.user.user_profile', compact('user'));
        }else{
            return Redirect()->route('login');
        }
    }
    public function UserProfileStore(Request $request){
        $data = User::find(Auth::user()->id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->save();

        $notification = array(
            'message' => 'Dane zostały zaktualizowane.',
            'alert-type' => 'success'
        );
        return redirect()->route('user.profile')->with($notification);
    }

    public function UserChangePassword(){
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('frontend.user.change_password',compact('user'));
    }

    public function UserPasswordUpdate(Request $request){
        $validateData = $request->validate([
            'oldpassword' => 'required',
            'password' => 'required|confirmed',
        ]);
        $hashedPassword = Auth::user()->password;
        if (Hash::check($request->oldpassword,$hashedPassword)) {
            $user = User::find(Auth::id());
            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();
            return redirect()->route('user.logout');
        }else{
            return redirect()->back();
        }
    }
}
