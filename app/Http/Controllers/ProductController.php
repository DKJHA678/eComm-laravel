<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Http\Request;
use App\Models\_products;
use Illuminate\Support\Facades\Hash;
use App\Models\Cart ;
use App\Models\Order ;
use Illuminate\Support\Facades\DB;
use Session;

class ProductController extends Controller
{
    function index(){
        //return"Welcome to Product Page";
        $data=_products::all();
        return view('product',['_products'=>$data]);

    }
    function detail($id)
    {
       $data=_products::find($id);
       return view('detail',['_Products'=>$data]);

    }
    function search(Request $req){
        $data=_products::where('name', 'like', '%'.$req->input('query').'%')->get();
        return view('search',['_Products'=>$data]);

    }
    function AddToCart(Request $req){
        if($req->session()->has('users'))
        {
           $cart= new Cart ;
           $cart->user_id=$req->session()->get('users')['id'];
           $cart->product_id=$req->product_id;
           $cart->save();
           return redirect('/');
        }
        else
        {
            return redirect('/login');
        }
    }
    static function cartItem()
    {
        $userId=Session::get('users')['id'];
        return Cart::where('user_id', $userId)->count();

    }
    function cartList()
    {
         $userId=Session::get('users')['id'];
       $data= DB::table('cart')
        ->join('_Products','cart.product_id','_Products.id')
        ->select('_Products.*','cart.id as cart_id')
        ->where('cart.user_id',$userId)
        ->get();
        return view('cartlist',['_Products'=>$data]);


    }
    function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('/cartlist');
    }
    function orderNow()
    {

        $userId=Session::get('users')['id'];
        $total= DB::table('cart')
         ->join('_Products','cart.product_id','_Products.id')
         ->select('_Products.*','cart.id as cart_id')
         ->where('cart.user_id',$userId)
         ->sum('_Products.prices');
         return view('ordernow',['total'=>$total]);
    }
    function orderPlace(Request $req)
    {
        $userId=Session::get('users')['id'];
        $allCart=Cart::where('user_id',$userId)->get();
        foreach($allCart as $cart)
        {
            $order= new Order;
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->address=$req->address;
            $order->status="pending";
            $order->payment_method=$req->payment;
            $order->payment_status="pending";
            $order->save();




        }
        Cart::where('user_id',$userId)->delete();
        return redirect('/');
        //return $req->input();

    }
    function myOrder()
    {
        $userId=Session::get('users')['id'];
     $orders= DB::table('orders')
         ->join('_Products','orders.product_id','_Products.id')
         ->where('orders.user_id',$userId)
         ->get();
         return view('myorder',['orders'=>$orders]);

    }
}
