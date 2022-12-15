<?php

namespace App\Http\Controllers;

use App\Models\Chef;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

use App\Models\User;
use App\Models\Food;
use App\Models\Order;
use App\Models\reservation;
use BaconQrCode\Renderer\Path\Move;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\Http\Middleware\CheckForAnyScope;

class AdminController extends Controller
{
    public function users()
    {
        $data=user::all();
     return view("Admin.users", compact("data"));
    }

    public function deleteusers($id)
    {
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function foodmenu()
    {
        $data=food::all();
     return view("Admin.foodmenu", compact("data"));
    }

    public function addfood(Request $request)
    {
        $data=new food;
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move("foodimage", $imagename);
        $data->image=$imagename;

        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;
        $data->save();
        return redirect()->back();
    }
 
    public function deletefoodmenu($id)
    {
        $data=food::find($id);
        $data->delete();
        return redirect()->back();
    
    }
    public function updatefoodmenu($id)

    {
         $data=food::find($id);
        return view("Admin.updatefoodmenu", compact("data"));
    }

    public function updatedfoodmenu(Request $request, $id)

    {
         $data=food::find($id);
         $image=$request->image;
         $imagename=time().'.'.$image->getClientOriginalExtension();
         $request->image->move("foodimage", $imagename);
        $data->image=$imagename;
        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;
        $data->save();
        return redirect()->back();
       
    }

    public function reservation(Request $request)

    {
        $data=new reservation;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->guest=$request->guest;
        $data->date=$request->date;
        $data->time=$request->time;
        $data->message=$request->message;
        $data->save();
        return redirect()->back();
       
    }
    public function adminreservation()

    {
        if(Auth::id())
        {
            $data=reservation::all();
            return view("Admin.adminreservation", compact("data"));
        }
        else
        {
         return redirect("login");
        }
    }

    public function adminchef()

    {
        $data=Chef::all();
        return view("Admin.adminchef", compact("data"));
    }


    public function addchef(Request $request)

    { 
       $data=new Chef;
       $image=$request->image;
       $imagename=time().".".$image->getClientOriginalExtension();
       $request->image->move("chefimage", $imagename);
       $data->image=$imagename;
       $data->name=$request->name;
       $data->title=$request->title;
       $data->save();
       return redirect()->back();
    }
    public function deletechef($id)

    {
        $data=Chef::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function updatechefview($id)

    {
        $data=Chef::find($id);
       return view("Admin.updatechefview", compact("data"));
      
    }

    public function updatechef(Request $request, $id)
    {
        $data=Chef::find($id);
        $image=$request->image;
        $imagename=time().".".$image->getClientOriginalExtension();
        $request->image->move("chefimage", $imagename);
        $data->image=$imagename;
        $data->name=$request->name;
        $data->title=$request->title;
        $data->save();
        return redirect()->back();
    }
    public function order()
    {
        $data=Order::all();
        return view("Admin.adminorder", compact("data"));
    }
    public function search(Request $request)
    {
        $search=$request->search;
        $data=Order::where("name", "Like", "%".$search."%")->orWhere("foodname", "Like", "%".$search."%")->get();
        return view("Admin.adminorder", compact("data"));
     
    }
}
