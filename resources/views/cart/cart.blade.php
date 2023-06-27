       <!-- Product Cart Start -->

       <div class="col-md-3">
                    <div class="home-cart mb-3">
                        <div class="home-cart-title">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                            </svg>
                            Cart ({{$cart_count}})
                        </div>
                        <span class="render_cart">
                            @include('cart.cart_list')
                        </span>
                    </div>
                    <div class="home-cart mb-3 text-center p-3">
                        <h6 class="mb-0">Pls Order Minimum</h6>
                        <h4 class="mb-0 price">Rs.3000 Rupees</h4>
                    </div>
                    <div class="home-cart p-3">
                        <table data-toggle="table">
                            <tbody class="mb-4">
                                <tr>
                                    <th>Subtotal</th>
                                    <td class="text-right price">₹<span class="sub_amount">{{$sub_amt}}</span></td>
                                </tr>
                                <tr>
                                    <th>Offers</th>
                                    <td class="text-right price">₹<span class="offer_amount">{{$offer_amt}}</span> </td>
                                </tr>
                                <tr>
                                    <th>Total </th>
                                    <td class="text-right price">₹<span class="total_amount">{{$sub_amt +$offer_amt}} </span></td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#orderDetails">
                            Place Order
                        </button>
                    </div>
                    <!-- Product Cart Start -->

                </div>


