<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class order_manage extends Controller
{
    function main(){
        $order_list = DB::table('orders')
        ->get();
        $filter = "All orders";
        return view('home')->with('order_list', $order_list)->with('filter', $filter);
    }

    function pending(){
        $order_list = DB::table('orders')
        ->orderBy('created_at', 'desc')
        ->where('status', 'pending')

        ->get();
        $filter = "Pending orders";
        return view('home')->with('order_list', $order_list)->with('filter', $filter);
    }

    function done(){
        $order_list = DB::table('orders')
        ->where('status', 'done')

        ->get();
        $filter = "Completed orders";
        return view('home')->with('order_list', $order_list)->with('filter', $filter);
    }

    function cancelled(){
        $order_list = DB::table('orders')
        ->where('status', 'cancelled')
        ->get();
        $filter = "Cancelled orders";
        return view('home')->with('order_list', $order_list)->with('filter', $filter);
    }
}
