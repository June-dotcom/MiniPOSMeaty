@foreach($order_list as $order)
<div class="col col-lg-6 col-md-12 col-sm-12">

    <div class="card mb-3 border-0">
        <div class="card-header  border-0 text-light" style="background-color: #ec4646;">{{$order->customer_name}}</div>
        <div class="card-body text-dark">
            <p class="card-text">Inclusions: {{$order->qty}} x {{$order->product_name}} <br>
            Bill: {{$order->bill}}<br>
            Date created: {{$order->created_at}}<br>
            Status:  {{$order->status}}<br>
           </p>
        </div>
        <div class="card-footer border-0 text-light" style="background-color: #ec4646;">
            <a href="/remove/{{$order->order_id}}/" class="card-link text-light ">Remove</a>
            <a href="/pending/{{$order->order_id}}/" class="card-link text-light">Pending</a>
            <a href="/done/{{$order->order_id}}/" class="card-link text-light">Done</a>
            <a href="/cancel/{{$order->order_id}}/" class="card-link text-light">Cancel</a>

        </div>
    </div>
</div>
@endforeach