<?php

namespace App\Http\Controllers;

 
use Illuminate\Http\Request;
use App\Models\Product;

use App\Models\User;

use App\Models\Cart;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function home()
    {
        $product = Product::all();
        //var_dump($product);die();
    return view('home.index', compact('product'));
        
    }

    public function login_home()
    {
        $product = Product::all();

        $user = Auth::user();

        $userid = $user->id;

        $count = Cart::where('user_id',$userid)->count();

        return view('home.index', compact('product', 'count'));
    }

    public function product_details($id)
    {

        $data = Product::find($id);
        return view('home.product_details', compact('data'));
    }
    
    public function add_cart($id)
    {
        $product_id = $id; 

        $user = Auth::user();

        $user_id = $user->id;

        $data = new Cart; 

        $data->user_id = $user_id;

        $data->product_id = $user_id;

        $data->save(); 

        toastr()->addSuccess('Product Added to the cartSuccessfully ');

        return redirect()->back(); 
         
    }

}
