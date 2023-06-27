@extends('layouts.frontend.app')

@section('content')

<!-- Banner Start-->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        @foreach($banners as $key=>$banner)
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$key}}"
            class="{{$key == 0 ? 'active' : ''}}" aria-current="{{$key == 0 ?'true':''}}"
            aria-label="Slide {{$key+1}}"></button>
        @endforeach


    </div>
    <div class="carousel-inner">
        @foreach($banners as $key=>$banner)

        <div class="carousel-item {{$key==0?'active':''}}">
            <img src="{{ asset($banner->image) }}" class="d-block w-100" alt="Banner">
        </div>
        @endforeach

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- Banner End-->


<section class="mt-5 mb-5">
    <div class="container">
        <div class="row">
            <!-- Product Category Tab Start -->
            <div class="col-md-9">
                <div class="product-list mb-3">
                    <nav>
                        <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                            @foreach($categories as $key=>$category)
                            <button class="nav-link {{$key==0 ? 'active' :''}} product_list" id="nav-home-tab"
                                data-bs-toggle="tab" data-category_id="{{$category->id}}"
                                data-bs-target="#{{$category->slug}}" type="button" role="tab" aria-controls="nav-home"
                                aria-selected="true">{{$category->name}}</button>
                            @endforeach
                            <!-- <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Flower Pots</button>
                                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Chakkars </button>
                                <button class="nav-link" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Twinkling</button>
                                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Enjoy Pencial </button>
                                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">One Sound </button> -->
                        </div>
                    </nav>
                    <div class="tab-content p-3 " id="nav-tabContent">
                        <div class="tab-pane fade active show" id="nav-home" role="tabpanel"
                            aria-labelledby="nav-home-tab">
                            <div class="row product_show">
                                @foreach($products as $product)
                                @php
                                if(!empty($carts[$product->id]))
                                $product_qty=$carts[$product->id]['product_qty'];
                                else
                                $product_qty=1;
                                @endphp

                                <div class="col-md-4 col-6">
                                    <div class="product-section mb-4">
                                        <div class="row">
                                            <div class="col-md-4 d-flex align-items-center justify-content-center">
                                                <div class="product-img">
                                                    @php
                                                    $img=explode(',',$product->product_images);
                                                    @endphp
                                                    <img src="{{ asset($img[0]) }}" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h5>{{$product->product_name}}</h5>
                                                <div class="price">
                                                    <h6 class="mb-0" id="price_list_view{{$product->id}}">₹{{$product->sale_price}}
                                                        <span>₹{{$product->regular_price}}</span></h6>
                                                </div>
                                                <div class="qty-container mt-3">
                                                    <button class="qty-btn-minus btn-light qty-btn"
                                                        data-type="decrement" data-id="{{$product->id}}"
                                                        type="button">-</button>
                                                    <input type="text" name="qty" value="{{$product_qty}}"
                                                        class="input-qty input-qty{{$product->id}}"
                                                        onkeypress="return isNumber(event)" />

                                                    <button class="qty-btn-plus btn-light qty-btn" data-type="increment"
                                                        data-id="{{$product->id}}" type="button">+</button>
                                                </div>
                                                <div class="col-12 mt-2"><label class="form-label">Select
                                                        Brand</label><select class="form-select form-select-sm">
                                                        <option>Select Brands </option>
                                                        @php $product_id=$product->id; @endphp
                                                    @for($x = 0; $x < count($brand_list_dropdown); $x++)
                                                        @for($y=0; $y < count($brand_list_dropdown[$x]); $y++)
                                                            @if($product_id == $brand_list_dropdown[$x][$y]['product_id'])
                                                            <option class=""  data-variant_price_pid="{{$brand_list_dropdown[$x][$y]['id']}}" value="{{$brand_list_dropdown[$x][$y]['brand']}}">{{$brand_list_dropdown[$x][$y]['brand']}}</option>
                                                            @endif
                                                        
                                                    @endfor
                                                    @endfor
                                                    </select></div>
                                                    

                                                <div class="mt-3">
                                                    <button class="btn btn-primary add_to_cart"
                                                        data-product_id="{{$product->id}}">Add to cart</button>
                                                </div>
                                            </div>
                                            <div class="offer-section">
                                                5 BOX
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <!-- Product Category Tab End -->

            @include('cart.cart')

        </div>
    </div>
</section>

<!-- Place Order Modal Start-->
<div class="modal fade" id="orderDetails" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 mb-4">
                        <div class="card home-cart ">
                            <div class="home-cart-title">
                                Bank Details
                            </div>

                            <table class="table borderless">

                                <tbody>
                                    <tr class="col-md-6">
                                        <th>Account Name</th>
                                        <td>:</td>
                                        <td>Cracker</td>
                                    </tr>
                                    <tr class="col-md-6">
                                        <th>Account Number</th>
                                        <td>:</td>
                                        <td>1100332113765682</td>
                                    </tr>
                                    <tr>
                                        <th>Bank</th>
                                        <td>:</td>
                                        <td>HDFC</td>
                                    </tr>
                                    <tr>
                                        <th>Branch Name</th>
                                        <td>:</td>
                                        <td>K. K. Nagar</td>
                                    </tr>
                                    <tr>
                                        <th>IFSC Code</th>
                                        <td>:</td>
                                        <td>HDFC1034</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    @include('checkout.checkout')


                    <div class="col-md-6">
                        <div class="card order-box">
                            <form class="row g-3" id="checkout">
                                <div class="home-cart-title">
                                    Customer Details
                                </div>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" id="name" placeholder="Full Name">
                                    <span class="text-danger full_name"></span>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="email" placeholder="Email"
                                        aria-describedby="emailHelp">
                                    <span class="text-danger email"></span>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="phone" placeholder="Phone"
                                        aria-describedby="emailHelp">
                                    <span class="text-danger phone"></span>
                                </div>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" id="address" placeholder="Address">
                                    <span class="text-danger address"></span>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="city" placeholder="City">
                                    <span class="text-danger city"></span>
                                </div>
                                <div class="col-md-6">
                                    <select class="form-select" id="state" placeholder="State">
                                        <option selected disabled value="">State</option>
                                        <option>Kerala</option>
                                        <option>Tamil Nadu</option>
                                        <option>Andhra Pradesh</option>
                                        <option>Karnataka</option>
                                        <option>Maharastra</option>
                                    </select>
                                    <span class="text-danger state"></span>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="pincode" placeholder="Pincode">
                                    <span class="text-danger pincode"></span>
                                </div>
                                <div class="col-12">
                                    <button type="button" class="btn btn-danger checkout">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Place Order Modal End-->

<!-- Place Order success Modal start-->

<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="getCodeModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true" style="display:none;">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h3 class="text-center text-primary">Thank You For Order</h3>
            </div>
        </div>
    </div>
</div>

<!-- Place Order  success Modal end-->





<!-- Confirmation Contact Start -->
<section class="who-we-are">
    <div class="container">
        <div class="row text-center">
            <h2>We Are Always Here To Help You !</h2>
            <div class="col-md-4">
                <div class="who-we-section">
                    <h3>Order Confirmation</h3>
                    <p class="mb-0">7545268678,<br>7401423939</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="who-we-section">
                    <h3>Dispatch Confirmation</h3>
                    <p class="mb-0">8015252650, <br>7584586789</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="who-we-section">
                    <h3>Payment Confirmation</h3>
                    <p class="mb-0">75300 34370</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Confirmation Contact End -->

<!-- Payment Section Start -->
<section class="bg-light payment-home">
    <div class="container">
        <div class="row  pt-5 pb-5">
            <div class="col-md-6">
                <h4>Note :</h4>
                <p>Dear Customer If Your Package Got Drenched In Rain Or Already Opened By Someone, Please Contact
                    Ganesh Ka Traders From There Itself, This Should Be Transport Responsibility, If You Call From There
                    Transport Payment Will Be Detect And New Order Will Be Placed Behalf You.</p>
            </div>
            <div class="col-md-6" style>
                <h4>Payment Confirmation :</h4>
                <p>Dear Customer If Your Done Your Payment Kindly Take The Screen Shots And Send To The Below Whats App
                    Number With Order Your Number Ph No:6585654056. Our Team Will Contact You. We Assured Your Payment.
                    We Will Contact You.</p>
            </div>
        </div>
    </div>
</section>
<!-- Payment Section End -->

<section class="normal">
    <div class="container pt-5 pb-5">
        <h5>Purchase 2000 to 8000(One Box Content) In tamilnadu upto <span>300km</span> Delivery charge <span>Just 250
                to 300 Rupees Only.</span><br>
            Purchase 2000 to 8000(One Box Content) In tamilnadu upto <span>350km to 550Km</span> Delivery charge
            <span>Just 300 to 350 Rupees Only.</span></h5>
    </div>
</section>


@endsection
