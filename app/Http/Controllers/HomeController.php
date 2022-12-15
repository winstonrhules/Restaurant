<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Chef;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\ViewServiceProvider;
use App\Models\Food;
use App\Models\Order;
use PhpParser\Node\Stmt\Foreach_;

class HomeController extends Controller
{
    public function index()
    {
      if(Auth::id()){
        return redirect("redirect");
      }
      else
      {
        $data=food::all();
        $data2=Chef::all();
        return view("home", compact("data", "data2"));
      }
    
    }
    public function redirect()
    {
      $data=food::all();
      $data2=Chef::all();
       $usertype=Auth::user()->usertype;

       if($usertype=="1"){
        return view("Admin.homeadmin");
       }
       else
       {
         $user_id=Auth::id();
         $count=Cart::where("user_id", $user_id)->count();
         return view("home", compact("data", "data2", "count"));
       }
    }
    public function addcart(Request $request, $id)
    {
     if(Auth::id())
     {
       $user_id=Auth::id();
        $food_id=$id;
        $quantity=$request->quantity;

        $cart=new Cart;
        $cart->user_id=$user_id;
        $cart->food_id=$food_id;
        $cart->quantity=$quantity;
        $cart->save();
       return redirect()->back();
     }
     else
     {
      return redirect("/login");
     }
    }
    public function showcart(Request $request, $id)
    {
      if(Auth::id()==$id)
      {
      $count=Cart::where("user_id",$id)->count();
      $data=Cart::where("user_id", $id)->join("food", "carts.food_id", "=", "food.id")->get();
      $data2=Cart::select("*")->where("user_id", "=", $id);
      return view("showcart",compact("count", "data", "data2"));
      }
      else{
        return redirect()->back();
      }
     
    }

    public function remove($id)
    {
     $data=Cart::find($id);
     $data->delete();
     return redirect()->back();
    }

    public function confirmorder(Request $request)
    {
      foreach($request->foodname as $key=>$foodname)
      {
         $data=new Order;
         $data->foodname=$foodname;
         $data->price=$request->price[$key];
         $data->quantity=$request->quantity[$key];
         $data->name=$request->name;
         $data->contact=$request->contact;
         $data->address=$request->address;
         $data->save();
      }
    
      return redirect()->back();
    }
}
