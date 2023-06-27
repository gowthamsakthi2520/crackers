
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Stacked form</h2>
  <form action="{{ route('orders.store') }}" method="POST" enctype="multipart/form-data">
  @csrf

<div class="row">
    <div class="col-md-12">
    @if (Session::get('error'))
         <div class="alert alert-danger">
            <ul>
                <li>{{ Session::get('error') }}</li>
            </ul>
        </div>
    @endif	
    @if (Session::get('success'))
         <div class="alert alert-success">
            <ul>
                <li>{{ Session::get('success') }}</li>
            </ul>
        </div>
    @endif	

    <div class="mb-3 mt-3">
      <label for="e	order_idmail">order_id:</label>
      <input type="text" class="form-control" id="	order_id" placeholder="Enter order_id" name="order_id" value="{{ old('order_id') }}"/>
      @error('order_id')<div id="ulrn" class="text-danger" >orderid id is required</div>@enderror
    </div>
    <div class="mb-3 mt-3">
      <label for="product_name">product_name:</label>
      <input type="text" class="form-control" id="product_name" placeholder="Enter product_name" name="product_name"  value="{{ old('product_name') }}"/>
      @error('product_name')<div id="ulra" class="text-danger" >order_details  is required</div>@enderror
    </div>
    <div class="mb-3 mt-3">
      <label for="quantity">quantity:</label>
      <input type="text" class="form-control" id="quantity" placeholder="Enter quantity" name="quantity"  value="{{ old('quantity') }}"/>
      @error('quantity')<div id="ulrv" class="text-danger" >order_details  is required</div>@enderror
    </div>
    <!-- <div class="mb-3 mt-3">
      <label for="amount">amount:</label>
      <input type="text" class="form-control" id="quantity" placeholder="Enter amount" name="amount"  value="{{ old('amount') }}"/>
      @error('amount')<div id="ulrvv" class="text-danger" >amount  is required</div>@enderror
    </div> -->

    <div class="mb-3 mt-3">
      <label for="status">status:</label>
      <input type="text" class="form-control" id="status" placeholder="Enter status" name="status"  value="{{ old('status') }}">
      @error('status')<div id="ulrb" class="text-danger" >status id is required</div>@enderror
    </div>
    <div class="mb-3 mt-3">
      <label for="full_name">	full_name:</label>
      <input type="text" class="form-control" id="full_name" placeholder="Enter full_name" name="full_name"  value="{{ old('full_name') }}">
      @error('full_name')<div id="ulrc" class="text-danger" >full_name  is required</div>@enderror
    </div>
    <div class="mb-3 mt-3">
      <label for="email">email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email"  value="{{ old('email') }}">
      @error('email')<div id="ulrd" class="text-danger" >email id is required</div>@enderror
    </div>
    <div class="mb-3 mt-3">
      <label for="phone">phone:</label>
      <input type="text" class="form-control" id="phone" placeholder="Enter phone" name="phone"  value="{{ old('phone') }}">
      @error('phone')<div id="ulre" class="text-danger" >phone  is required</div>@enderror
    </div>
    <div class="mb-3 mt-3">
      <label for="address">address:</label>
      <input type="text" class="form-control" id="address" placeholder="Enter address" name="address"  value="{{ old('address') }}">
      @error('address')<div id="ulrf" class="text-danger" >address  is required</div>@enderror
    </div>
    <div class="mb-3 mt-3">
      <label for="city">city:</label>
      <input type="text" class="form-control" id="city" placeholder="Enter city" name="city"  value="{{ old('city') }}">
      @error('city')<div id="ulrg" class="text-danger" >city  is required</div>@enderror
    </div>
    <div class="mb-3 mt-3">
      <label for="state">state:</label>
      <input type="text" class="form-control" id="state" placeholder="Enter state" name="state"  value="{{ old('state') }}">
      @error('state')<div id="ulrh" class="text-danger" >state  is required</div>@enderror
    </div>
    <div class="mb-3 mt-3">
      <label for="pincode">pincode:</label>
      <input type="text" class="form-control" id="pincode" placeholder="Enter pincode" name="pincode"  value="{{ old('pincode') }}">
      @error('pincode')<div id="ulrp" class="text-danger" >pincode  is required</div>@enderror
    </div>
    <div class="mb-3 mt-3">
      <label for="total_amount">total_amount:</label>
      <input type="text" class="form-control" id="total_amount" placeholder="Enter total_amount" name="total_amount"  value="{{ old('total_amount') }}">
      @error('total_amount')<div id="ulrm" class="text-danger" >total_amount  is required</div>@enderror
    </div>
    <div class="mb-3 mt-3">
      <label for="payment_status">payment_status:</label>
      <input type="text" class="form-control" id="payment_status" placeholder="Enter payment_status" name="payment_status"  value="{{ old('payment_status') }}">
      @error('payment_status')<div id="ulro" class="text-danger" >payment_status is required</div>@enderror
    </div>

    <div class="mb-3 mt-3">
      <label for="payment_type">payment_type:</label>
      <input type="text" class="form-control" id="payment_type" placeholder="Enter payment_type" name="payment_type"  value="{{ old('payment_type') }}">
      @error('payment_type')<div id="ulri" class="text-danger" >payment_type  is required</div>@enderror
    </div>

    <div class="mb-3 mt-3">
      <label for="sub_total">sub_total:</label>
      <input type="text" class="form-control" id="sub_total" placeholder="Enter sub_total" name="sub_total"  value="{{ old('sub_total') }}">
      @error('sub_total')<div id="ulru" class="text-danger" >sub_total  is required</div>@enderror
    </div>
    <div class="mb-3 mt-3">
      <label for="discount">discount:</label>
      <input type="text" class="form-control" id="discount" placeholder="Enter discount" name="discount"  value="{{ old('discount') }}">
      @error('discount')<div id="ulry" class="text-danger" >discount  is required</div>@enderror
    </div>

    <div class="mb-3 mt-3">
      <label for="deliver_charge">deliver_charge:</label>
      <input type="text" class="form-control" id="deliver_charge" placeholder="Enter deliver_charge" name="deliver_charge"  value="{{ old('deliver_charge') }}">
      @error('deliver_charge')<div id="ulrt" class="text-danger" >deliver_charge  is required</div>@enderror
    </div>

    <div class="mb-3 mt-3">
      <label for="offer">offer:</label>
      <input type="text" class="form-control" id="offer" placeholder="Enter offer" name="offer"  value="{{ old('offer') }}">
      @error('offer')<div id="ulrr" class="text-danger" >offer  is required</div>@enderror
    </div>
    <div class="mb-3 mt-3">
      <label for="tax">tax:</label>
      <input type="text" class="form-control" id="tax" placeholder="Enter tax" name="tax"  value="{{ old('tax') }}">
      @error('tax')<div id="ulre" class="text-danger" >tax  is required</div>@enderror
    </div>


    <button type="submit" class="btn btn-primary ">Submit</button>

  </form>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="{{asset('assets/js/form.js')}}"> </script>
</body>
</html>
