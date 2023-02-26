
@php
    $product_list = DB::table('products')->get();
@endphp
@foreach($product_list as $product)

<div class="col col-lg-4 col-md-12 mt-2 mb-3 col-sm-12">
    <div class="card mb-0 border-0 bg-danger">
        <div class="card-header  border-0 text-light" style="background-color: #ec4646;">{{$product->product_name}}<span class="float-right"> &#8369; {{$product->price}}</span></div>
        <div class="card-body text-dark"
            style="background-image: url('images/{{$product->product_image}}');  background-size:  cover;   background-repeat: no-repeat;
height: 240px;">
        </div>
       @include('products_modal')
    </div>
</div>
@endforeach


