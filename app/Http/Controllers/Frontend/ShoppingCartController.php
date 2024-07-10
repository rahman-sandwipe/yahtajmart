<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Models\Country\Division;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Frontends\ShoppingCart;

class ShoppingCartController extends Controller
{
    public function addToCart($id){
        if(auth()->user()){
            // Add To Cart
            $data = [
                // 'user_id' => auth()->user()->id,
                'user_id' => Auth::guard('web')->user()->id,
                'product_id' => $id,
            ];
            ShoppingCart::updateOrCreate($data);
            $notification = array(
                'message' => 'Product added to the cart successfully',
                'alert-type' => 'success'
            );
            return back()->with($notification);
        }else{
            // redirect auth
            return redirect(route('user.login'));
        }
    }

    public function productCart()
    {
        if(auth()->user()){
            return view('frontends.pages.products.cart');
        }else{
            // redirect auth
            return redirect(route('user.login'));
        }
    }

    public function incrementQty($id){
        $cart = ShoppingCart::whereId($id)->first();
        $cart->quantity += 1;
        $cart->save();

        session()->flash('success', 'Product quantity updated !!!');
    }

    public function decrementQty($id){
        $cart = ShoppingCart::whereId($id)->first();
        if($cart->quantity > 1){
            $cart->quantity -= 1;
            $cart->save();
                        session()->flash('success', 'Product quantity updated !!!');
        }else{
            session()->flash('info','You cannot have less than 1 quantity');
        }
    }



    public function checkoutShipping()
    {
        $divisions=Division::where(['status'=>'public'])->latest()->get();
        return view('frontends.pages.products.checkout-shipping', compact('divisions'));
    }
}
