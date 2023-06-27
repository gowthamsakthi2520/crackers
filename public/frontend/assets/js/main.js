

$(document).on("click",".checkout",function(e){
    $('.err').html('');
    e.preventDefault();
    var token=$('meta[name="csrf-token"]').attr('content');
    var path=$('meta[name="base_url"]').attr('content')+'/checkout';
    $.ajax({
        url:path,
        method:'POST',
        data:{_token:token, full_name:$('#name').val(),email:$('#email').val(),phone:$('#phone').val(),address:$('#address').val(),city:$('#city').val(),state:$('#state').val(),pincode:$('#pincode').val()},
        success:function(data){
            if(data.success== "successes"){
                $('.btn-close').click();
                $("#getCodeModal").modal('show');
               
            }
        },error: function (xhr) {
            $('.err').html('');
            $.each(xhr.responseJSON.errors, function(key,value) {
              $('.'+key).append('<div class="text-danger err">'+value+'</div');
          });
        },
    });

})


// Add products details




$(document).on("click",".product_list",function(){
    $('.product_show').html("");
    var token=$('meta[name="csrf-token"]').attr('content');
    var path=$('meta[name="base_url"]').attr('content')+'/productLists';
    var category_id=$(this).data('category_id');
    $.ajax({
        url:path,
        method:'GET',
        data:{_token:token, category_id:category_id},
        success:function(data){
            console.log(data.brands_list_dropdown);
            var product='';
            for(var i=0; i<data.products.length;i++){
              
                if(data.cart_count>0 && data.carts[data.products[i].id] !=undefined){
                   
                   var product_qty=data.carts[data.products[i].id].product_qty;
                }
                 else 
                    var product_qty=1;

               var image=data.products[i].product_images;
               var product_images=image.split(',');
            product+='<div class="col-md-4 col-6"><div class="product-section mb-4"> <div class="row"><div class="col-md-4 d-flex align-items-center justify-content-center"><div class="product-img">';
          
            product+='<img src="'+product_images[0]+'" alt=""></div></div><div class="col-md-8"><h5>'+data.products[i].product_name+'</h5> <div class="price"><h6 class="mb-0" id="price_list_view'+data.products[i].id+'">₹' + data.products[i].var_sale_price + ' </h6><h6><span>₹'+data.products[i].regular_price+'</span></h6> </div><div class="qty-container mt-3"><button class="qty-btn-minus btn-light qty-btn" data-type="decrement" data-id='+data.products[i].id+'  type="button">-</button><input type="text" name="qty" onkeypress="return isNumber(event)" value="'+product_qty+'" class="input-qty input-qty'+data.products[i].id+'"/><button class="qty-btn-plus btn-light qty-btn" data-type="increment" data-id='+data.products[i].id+' type="button">+</button></div></div><div class="offer-section"> 5 BOX</div>';
            
            product+='<div class="col-12 mt-2"><label>Select Brand</label><select class="form-select form-select-sm"><option>Select Brands </option>';
            for(var x=0; x<data.brands_list_dropdown.length;x++){
                for(var y=0; y<data.brands_list_dropdown[x].length;y++){
                    if(data.products[i].id == data.brands_list_dropdown[x][y].product_id)
                    product += '<option class="price_list_show"value="' + data.brands_list_dropdown[x][y].brand + '"  data-variant_price_pid=' +data.brands_list_dropdown[x][y].id+ '>' + data.brands_list_dropdown[x][y].brand + '</option>';
                }
            }
            product +='</select></div>';

            product+=' <div class="mt-3 text-center"><button class="btn btn-primary add_to_cart" data-product_id='+data.products[i].id+'>Add to cart</button></div></div></div></div>';
            };
            $('.product_show').html(product);

            if(data.success==true){
              window.location=redirect_url;
            }
        }
    });
})

//dropdown brand list open show in sale price change
$(document).on('change','select',function(){
    var select = $(this).find('option:selected');
    var variant_id=select.data('variant_price_pid');
    var token=$('meta[name="csrf-token"]').attr('content');
    var path=$('meta[name="base_url"]').attr('content')+'/productLists';
    $.ajax({
        url:path,
        method:'GET',
        data:{_token:token,variant_id:variant_id},
        success:function(data){{
            var product_id = data.brand_price_get.product_id;
            console.log(data.brand_price_get);
            $('#price_list_view'+product_id).html('₹. '+data.brand_price_get.price);
        }}
    });
    
});

$(document).on("click",".add_to_cart",function(){
    var product_id=$(this).data('product_id');
    var product_qty=$('.input-qty'+product_id).val();
    var token=$('meta[name="csrf-token"]').attr('content');
    var path=$('meta[name="base_url"]').attr('content')+'/add_to_cart';
    $.ajax({
        url:path,
        method:'POST',
        data:{_token:token, product_id:product_id,product_qty:product_qty},
        success:function(data){
            $('.render_cart').html(data.cart_table_render);
            $('.cart_count').html(data.cart_count);
            $('.checkout_render').html(data.checkout_render);
            $('.sub_amount').html(data.sub_amt);
            $('.offer_amount').html(data.offer_amt);
            $('.total_amount').html(data.offer_amt + data.sub_amt);
        }
    });
})



