<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function AddToCart(Request $request, $id){

    	$product = Product::findOrFail($id);

    		Cart::add([
    			'id' => $id, 
    			'name' => $request->product_name, 
    			'qty' => $request->quantity, 
    			'price' => $product->selling_price,
    			'weight' => 1, 
    			'options' => [
    				'image' => $product->product_thumbnail,
    			],
    		]);

    		return response()->json(['success' => 'Pomyślnie dodano produkt do koszyka']);
    }

     // Mini Cart Section
     public function AddMiniCart(){

    	$carts = Cart::content();
    	$cartQty = Cart::count();
    	$cartTotal = Cart::total();

    	return response()->json(array(
    		'carts' => $carts,
    		'cartQty' => $cartQty,
    		'cartTotal' => round((float)$cartTotal),

    	));
    } 
	/// kasowanie z koszyka
    public function RemoveMiniCart($rowId){
    	Cart::remove($rowId);
    	return response()->json(['success' => 'Produkt został usunięty z koszyka.']);
    }
	// przekierowanie do podgladu koszyka
	public function MyCart(){
    	return view('frontend.cart.cart_view');
    }
	//pobranie listy produktów do głównego koszyka
    public function GetCartProduct(){
        $carts = Cart::content();
    	$cartQty = Cart::count();
    	$cartTotal = Cart::total();

    	return response()->json(array(
    		'carts' => $carts,
    		'cartQty' => $cartQty,
    		'cartTotal' => round($cartTotal),
    	));
    }
	// kasowanie główny koszyk
	public function RemoveCartProduct($rowId){
        Cart::remove($rowId);
        return response()->json(['success' => 'Produkt został usunięty z koszyka.']);
    }
}
