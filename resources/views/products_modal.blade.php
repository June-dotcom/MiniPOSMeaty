<!-- Button trigger modal -->
<button type="button" class="btn btn-danger card-footer border-0  text-center" data-toggle="modal"
    data-target="#{{ $product->product_id }}Modal">
    Add order
</button>


<!-- Modal -->
<div class="modal fade" id="{{ $product->product_id }}Modal" tabindex="-1" role="dialog"
    aria-labelledby="{{ $product->product_id }}ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger ">
                <div class="text-center h4 text-light w-100" id="{{ $product->product_id }}ModalLabel">Order
                    {{ $product->product_name }}</div>

            </div>
            <div class="modal-body">
                <form action="/submit-order" method="POST">
                    @csrf

                    <div class="form-group row">
                    <input type="text" name="product_id" class="form-control w-70"
                            value="{{ $product->product_id }}" hidden>
                        <input type="text" name="product_name" class="form-control w-70"
                            value="{{ $product->product_name }}" hidden>

                        <label class=" col col-sm-4 col-lg-4 col-form-label" required autofocus>Customer name</label>
                        <div class="col-sm-12 col-lg-8">
                            <input type="text" name="cust_name" class="form-control w-70" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class=" col col-sm-4 col-lg-4 col-form-label">Order quantity</label>
                        <div class="col-sm-12 col-lg-8">
                            <input type="number" name="order_qty" value="1" class="form-control w-70">
                        </div>
                    </div>
                    <button type="button" class="btn btn-secondary " data-dismiss="modal">Cancel</button>

                    <button type="submit" class="btn btn-danger float-right">Submit</button>
                </form>
            </div>

        </div>
    </div>
</div>
