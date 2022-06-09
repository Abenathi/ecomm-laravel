<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\cart;
use Session;
use Illuminate\Support\Facades\DB;
use App\Models\Order;

class productController extends Controller
{
    //
    function index()
    {
        $data= product::all();

        return view('product', ['products'=>$data]);
    }
    function detail($id)
    {
      $data =product::find($id);
      return view('detail',['product'=>$data]);
    }
    function addToCart(Request $req)
    {
      if($req->session()->has('user'))
      {
        $cart = new cart;
        $cart->user_id=$req->session()->get('user')['id'];
        $cart->product_id=$req->product_id;
        $cart->save();
        return redirect('/');
      }
      else
      {
        return redirect('/login');
      }
      
    }
    function cartItem()
    {
      $userId=Session::get('user')['id'];
      return cart::where('user_id', $userId)->count(); 
    }
    function cartList()
    {
          $userId=Session::get('user')['id'];
          $products=DB::table('cart')
          ->join('products', 'cart.product_id','=', 'products.id')
          ->where('cart.user_id',$userId)
          ->select('products.*', 'cart.id as cart_id')
          ->get();

          return view('cartlist',['products'=>$products]);
    }
    function removeCart($id)
    {
      Cart::destroy($id);
      return Redirect("/cartlist");
    }
    function orderNow()
    {
        $userId=Session::get('user')['id'];
        $total =$products=DB::table('cart')
        ->join('products', 'cart.product_id','=', 'products.id')
        ->where('cart.user_id',$userId)
        ->select('products.*', 'cart.id as cart_id')
        ->sum('products.price');
        return view('ordernow',['total'=>$total]);
    }
    function orderPlace(Request $req)
    {
        $userId=Session::get('user')['id'];
         $allCart= cart::where('user_id', $userId)->get();
         foreach($allCart as $cart)
         {
           $order = new Order();
           $order->product_id=$cart['product_id'];
           $order->user_id=$cart['user_id'];
           $order->status='pending';
           $order->payment_method=$req->payment;
           $order->payment_status='pending';
           $order->address=$req->address;
           $order->save();
           cart::where('user_id',$userId)->delete();
         }
        return redirect('/');
    }

}
