<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Order;
use App\Models\OrderItem;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;

class OrderController extends Controller
{
    public function addOrder(Request $request){
        $total_amount = round(Cart::total());
        $order_id = Order::insertGetId([
            'user_id' => Auth::id(),
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'post_code' => $request->post_code,
            'city' => $request->city,
		    'street' => $request->street,
		    'nr' => $request->number,
            'amount' => $total_amount,
            'nr_order' => '', //todo maxid
            'status' => 'Nowe',
            'created_at' => Carbon::now(),
        ]);
        // nr zamowienia
        Order::where('id',$order_id)->update(['nr_order' => 'Z/'.$order_id]);

        // items order
        $products = Cart::content();
        foreach ($products as $product) {
            OrderItem::insert([
                'order_id' => $order_id,
                'product_id' => $product->id,
                'color' => $product->options->color,
              //  'size' => $product->options->size,
                'count' => $product->qty,
                'price' => $product->price,
                'created_at' => Carbon::now(),
            ]);
        }
        $notification = array(
            'message' => 'Zamówienie zostało złożone pomyślnie',
            'alert-type' => 'success'
        );

        return redirect()->route('index')->with($notification);
    }
    //admin view orders
    public function OrdersView(){
        $orders = Order::orderBy('id','DESC')->get();

        return view('admin.orders.orders_view',compact('orders'));
    }
    public function orderDetails($order_id){
        $order = Order::with('user')->where('id',$order_id)->first();
        $orderItem = OrderItem::with('product')->where('order_id',$order_id)->orderBy('id','DESC')->get();

        return view('admin.orders.order_details',compact('order','orderItem'));
    }
    public function statusChange()
    {
        $status = $_POST['status'];
        $id_order = $_POST['id_order'];

        Order::whereId($id_order)->update(['status' => $status]);
        $notification = array(
            'message' => 'Status zamówienia został zaktualizowany',
            'alert-type' => 'success'
        );
        return redirect()->route("orders/details/'$id_order'")->with($notification);
    }
}
