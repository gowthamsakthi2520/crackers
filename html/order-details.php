<?php $title="Home page";
include './layouts/header.php'
?>


<section>
    <div class="container">
        <div class="row mb-5 mt-5">
            <div class="col-sm-4 mb-3">
                <div class="card home-cart-1 border-0 mb-3">
                    <div class="card-body home-cart">
                        <h5 class="card-title home-cart-title">Order ID : 17650</h5>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Upload Receipt</label>
                            <input class="form-control" type="file" id="formFile">
                            <button type="button" class="btn">
                            Submit
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card home-cart-1 border-0 ">
                    <div class="card-body">
                        <h5 class="card-title home-cart-title">Customer Details</h5>
                        <table class="table table-borderless cutomer-detail">
                            <tbody>
                                <tr>
                                    <td>Name</td>
                                    <td>:</td>
                                    <th scope="row">Vijay</th>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <th scope="row">vijay@mail.com</th>
                                </tr>
                                <tr>
                                    <td>Phone</td>
                                    <td>:</td>
                                    <th scope="row">9876543210</th>
                                </tr>
                                <tr>
                                    <td>Address</td>
                                    <td>:</td>
                                    <th scope="row">No. 631A, 2nd Floor, MKN Rd, Guindy, Chennai, Tamil Nadu 600032</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-sm-8 mb-3">
                <div class="card border-0 ">
                    <div class="card-body order-box order-details">
                        <h5 class="card-title home-cart-title">Order Details</h5>
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <th scope="row">Image</th>
                                    <th>Product Name</th>
                                    <th>Quantity</th>
                                    <th  class="text-right">Price</th>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="product-img">
                                            <img src="./assets/img/product.png" alt="">
                                        </div>
                                    </th>
                                    <td>10 CM ELECTRIC SPARKLER</td>
                                    <td>X 10</td>
                                    <td  class="text-right">₹680.00</td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="product-img">
                                            <img src="./assets/img/product.png" alt="">
                                        </div>
                                    </th>
                                    <td>KIT KAT </td>
                                    <td>X 25</td>
                                    <td  class="text-right">₹300.00</td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="product-img">
                                            <img src="./assets/img/product.png" alt="">
                                        </div>
                                    </th>
                                    <td>10 CM ELECTRIC SPARKLER</td>
                                    <td>X 10</td>
                                    <td  class="text-right">₹680.00</td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="product-img">
                                            <img src="./assets/img/product.png" alt="">
                                        </div>
                                    </th>
                                    <td>KIT KAT </td>
                                    <td>X 25</td>
                                    <td  class="text-right">₹300.00</td>
                                </tr>
                                <tr  class="table-danger order-total">
                                    <th scope="row" colspan="3">Total</th>  
                                    <th  class="text-right">₹3976.00</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<?php $title="Home page";
include './layouts/footer.php'
?>
</body>
</html>