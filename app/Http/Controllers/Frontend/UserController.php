<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{


    function index(){

        $orders = Order::where('user_id' , Auth::id())->get();
        return view('frontend.orders.index' , compact('orders'));

    }

    function view($id){

        $orders = Order::where('id' , $id)->where('user_id' , Auth::id())->first();
        return view('frontend.orders.view' , compact('orders'));

    }

}
