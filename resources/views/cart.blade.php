@extends('layouts.indexLayout.index_design')

@section('content')

    <div class="col-md-9 col-lg-9">
        <h4 class="p-title mt-30"><b>CART</b></h4>
        <div class="row-fluid">
            <div class="shopping-cart">

                <div class="column-labels">
                    <label class="products-image">Image</label>
                    <label class="products-details">Product</label>
                    <label class="products-price">Price</label>
                    <label class="products-quantity">Quantity</label>
                    <label class="products-removal">Remove</label>
                    <label class="products-line-price">Total</label>
                </div>

                <div class="products">
                    <div class="products-image">
                        <img src="assets/img/pomegranate_1.jpg">
                    </div>
                    <div class="products-details">
                        <div class="products-title">Pomegranate</div>
                        <p class="products-description"></p>
                    </div>
                    <div class="products-price">100.00</div>
                    <div class="products-quantity">
                        <input type="number" value="1" min="1">
                    </div>
                    <div class="products-removal">
                        <button class="remove-products">
                            Remove
                        </button>
                    </div>
                    <div class="products-line-price">100.00</div>
                </div>

                <div class="products">
                    <div class="products-image">
                        <img src="assets/img/mango_3.jpg">
                    </div>
                    <div class="products-details">
                        <div class="products-title">Mango</div>
                        <p class="products-description"></p>
                    </div>
                    <div class="products-price">300.00</div>
                    <div class="products-quantity">
                        <input type="number" value="1" min="1">
                    </div>
                    <div class="products-removal">
                        <button class="remove-products">
                            Remove
                        </button>
                    </div>
                    <div class="products-line-price">300.00</div>
                </div>

                <div class="totals">
                    <div class="totals-item">
                        <label>Subtotal</label>
                        <div class="totals-value" id="cart-subtotal">400.00</div>
                    </div>
                    <div class="totals-item">
                        <label>VAT (15%)</label>
                        <div class="totals-value" id="cart-tax">15.00</div>
                    </div>
                    <div class="totals-item">
                        <label>Shipping</label>
                        <div class="totals-value" id="cart-shipping">50.00</div>
                    </div>
                    <div class="totals-item totals-item-total">
                        <label>Grand Total</label>
                        <div class="totals-value" id="cart-total">710.00</div>
                    </div>
                </div>

                <button class="checkout">Checkout</button>


            </div>
        </div>
    </div>
@endsection
