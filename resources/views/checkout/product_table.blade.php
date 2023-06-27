<table class="table">
    <thead>
        <tr>
            <th scope="col">Product</th>
            <th scope="col">Quantity</th>
            <th scope="col" class="text-right price">Price</th>
        </tr>
        @if(!empty($carts))
                @foreach($carts as $cart)
            <tr>
                <td scope="col">{{$cart['product_name']}}</td>
                <td scope="col" class="price">{{$cart['product_qty']}}</td>
                <td scope="col" class="text-right price">₹<span>{{$cart['price']}}</span></td>
            </tr>
            @endforeach
        @endif

        
        <tr>
            <td scope="row" colspan="2" >SubTotal</td>
            <td class="text-right price">₹<span>{{$sub_amt}}</span></td>
        </tr>
        <tr >
            <td scope="row" colspan="2" >Offer</td>
            <td class="text-right price">₹<span>{{$offer_amt}}</span></td>
        </tr>
    </thead>
    <tbody>
        <tr  class="table-danger">
            <th scope="row" colspan="2" >Total</th>
            <th class="text-right price">₹<span>{{$offer_amt + $sub_amt}}</span></th>
        </tr>
    </tbody>
</table>