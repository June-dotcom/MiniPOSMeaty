<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\orders;
use App\history;
use DB;
class submit extends Controller
{
    function main(Request $req){
        $product_price_tmp =  DB::table('products')->where('product_id', $req->product_id)->pluck('price')->first();
        $est_bill_tmp = (int) $product_price_tmp * (int) $req->order_qty;

        
        $order = new orders;
        $order_id = strtoupper(substr(uniqid(), 7, 10) . date('my'));
        $order->order_id = $order_id;
        $order->product_name = $req->product_name;
        $order->customer_name = $req->cust_name;
        $order->qty = $req->order_qty;
        $order->bill = $est_bill_tmp;
        $order->status = 'pending';
        
        $history = new history;
        $action_id = strtoupper(substr(uniqid(), 7, 10) . date('my'));
        $history->action_id = $action_id;
        $action_tmp = $req->cust_name . ' ordered ' . $req->order_qty . ' x '
         . $req->product_name;
        $history->actions = $action_tmp;

        $order->save();
        $history->save();
        
        return redirect('/home');

    }
}
