<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class order_mod extends Controller
{
    function pending($order_id){
        $instance = DB::table('orders')
        ->where('order_id', $order_id)
        ->first();
        $action_id = strtoupper(substr(uniqid(), 7, 10) . date('my'));

        DB::table('histories')->insert([
            ['action_id' => $action_id, 'actions' => 'Set ' . $instance->customer_name 
            . ' order status from ' . $instance->status . ' to pending', 'created_at' => now() ],
        ]);


        DB::table('orders')
        ->where('order_id', $order_id)
        ->update(['status' => 'pending']);
        return back();
    }

    function done($order_id){
        $instance = DB::table('orders')
        ->where('order_id', $order_id)
        ->first();
        $action_id = strtoupper(substr(uniqid(), 7, 10) . date('my'));

        DB::table('histories')->insert([
            ['action_id' => $action_id, 'actions' => 'Set ' . $instance->customer_name 
            . ' order status from ' . $instance->status . ' to done', 'created_at' => now()  ],
        ]);

        DB::table('orders')
        ->where('order_id', $order_id)
        ->update(['status' => 'done']);
        return back();
    }

    function cancel($order_id){
        $instance = DB::table('orders')
        ->where('order_id', $order_id)
        ->first();
        $action_id = strtoupper(substr(uniqid(), 7, 10) . date('my'));

        DB::table('histories')->insert([
            ['action_id' => $action_id, 'actions' => 'Set ' . $instance->customer_name 
            . ' order status from ' . $instance->status . ' to cancelled', 'created_at' => now() ],
        ]);

        DB::table('orders')
        ->where('order_id', $order_id)
        ->update(['status' => 'cancelled']);
        
        return back();
    }

    function remove($order_id){
        $instance = DB::table('orders')
        ->where('order_id', $order_id)
        ->first();
        $action_id = strtoupper(substr(uniqid(), 7, 10) . date('my'));

        DB::table('histories')->insert([
            ['action_id' => $action_id, 'actions' => 'Removed ' . $instance->customer_name 
            . ' order from records', 'created_at' => now() ],
        ]);

        DB::table('orders')
        ->where('order_id',  $order_id)
        ->delete();

        return back();
    }

    function clear_hist(){
        DB::table('histories')->delete();
        return back();
    }


}
