<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Http\Request;
use App\Models\_products;
use Illuminate\Support\Facades\Hash;
use App\Models\Cart ;
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
}
