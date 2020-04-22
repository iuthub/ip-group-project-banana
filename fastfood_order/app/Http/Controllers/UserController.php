<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use Auth;
use App\Order;
class UserController extends Controller
{
    public function index(){
    	$orders = Auth::user()->orders;
    	$orders->transform(function($order, $key){
    		$order->cart = unserialize($order->cart);
    		return $order;
    	});
    	return view('user.profile', ['orders' => $orders]);
    }

    public function admin(){
    	$orders = Order::all();
    	$orders->transform(function($order, $key){
    		$order->cart = unserialize($order->cart);
    		return $order;
    	});
    	return view('user.admin', ['orders' => $orders]);

    }

    public function dismiss(){
    	Session::forget('cart');
    	return redirect('/products');
    }

    public function delete($id){
    	$order = Order::find($id);

    	$order->delete();

    	return redirect()->back();
    }
}
