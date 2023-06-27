                    @if(!empty($carts))
                         @foreach($carts as $cart)
                            <div class="home-cart-list d-flex align-items-center">
                                <div class="cart-number">
                                    <span>{{$cart['product_qty']}}</span>
                                </div>
                                <div class="cart-details">
                                    <h6 class="mb-0">{{$cart['product_name']}}</h6>
                                    <p class="mb-0 price">₹<span>{{$cart['price']}}</span></p>
                                </div>
                            </div>
                        @endforeach
                        @else
                        <div class="home-cart-list d-flex align-items-center">
                            <div class="cart-details">
                                <h6 class="mb-0">No Item found</h6>
                            </div>
                        </div>
                    @endif