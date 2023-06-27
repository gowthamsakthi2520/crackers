@extends('backend.layouts.master')
@section('content')

<!--start main content-->
<main class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="ps-3">
            <nav class="mb-0" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-sa-simple">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item">Catalog</li>
                    <li class="breadcrumb-item">Product List</li>
                    <li class="breadcrumb-item">Add Product</li>
                </ol>
            </nav>
        </div>

    </div>
    <!--end breadcrumb-->
    <form enctype="multipart/form-data" id="add_products">
        <!-- {{ route('products.store') }} -->

        <div class="row">

            <div class="col-12 col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-4">
                            <h5 class="mb-3">Product Title</h5>
                            <input type="text" name="product_name" id="product_name" class="form-control"
                                placeholder="write title here...." value="{{ old('product_name') }}">
                            <span class="text-danger product_name"></span>
                        </div>
                        <div class="mb-4">
                            <h5 class="mb-3">Product Description</h5>
                            <textarea class="form-control" name="product_description" id="product_description" cols="4"
                                rows="6"
                                placeholder="write a description here..">{{ old('product_description') }}</textarea>
                            <span class="text-danger product_description"></span>
                        </div>
                        <div class="mb-4">
                            <h5 class="mb-3">Display images</h5>
                            <input type="file" name="product_images[]" class="form-control" id="product_images"
                                accept=".jpg, .png, image/jpeg, image/png" multiple>
                            <span class="text-danger product_images"></span>
                        </div>
                        <div class="mb-4">
                            <h5 class="mb-3">Inventory</h5>

                            <div class="row g-3">
                                <div class="col-12 col-lg-3">
                                    <div
                                        class="nav flex-column nav-pills border rounded vertical-pills overflow-hidden">
                                        <button class="nav-link px-4 rounded-0 active" data-bs-toggle="pill"
                                            data-bs-target="#Pricing" type="button"><i
                                                class="bi bi-tag-fill me-2"></i>Pricing</button>
                                        <button class="nav-link px-4 rounded-0 text-center" data-bs-toggle="pill"
                                            data-bs-target="#Restock" type="button"><i
                                                class="bi bi-box-seam-fill me-2"></i> Add Box Quantity</button>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-9">
                                    <div class="tab-content">
                                        <div class="tab-pane fade active show" id="Pricing">
                                            <div class="row g-3">
                                                <div class="col-12 col-lg-6">
                                                    <h6 class="mb-2">Regular price</h6>
                                                    <input class="form-control" type="text" name="regular_price"
                                                        id="regular_price"
                                                        value="{{ old('regular_price') }}"
                                                        placeholder="₹₹₹">
                                                    <span class="text-danger regular_price"></span>
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    <h6 class="mb-2">Sale price</h6>
                                                    <input class="form-control" type="text" name="sale_price"
                                                        id="sale_price"
                                                        value="{{ old('sale_price') }}"
                                                        placeholder="₹₹₹">
                                                    <span class="text-danger sale_price"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="Restock">
                                            <h6 class="mb-3">Add to Stock</h6>
                                            <div class="row g-3">
                                                <div class="col-sm-7">
                                                    <input class="form-control" type="number" placeholder="Quantity"
                                                        value="{{ old('stock') }}" name="stock"
                                                        id="stock">
                                                    <span class="text-danger stock"></span>
                                                </div>
                                                <div class="col-sm">
                                                    <button class="btn btn-outline-primary"><i
                                                            class="bi bi-check2 me-2"></i>Confirm</button>
                                                </div>
                                            </div>
                                            <table class="mt-3">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 200px;"></th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-1000 fw-bold py-1">Product in stock now:</td>
                                                        <td class="text-700 fw-semi-bold py-1">₹2,059<button
                                                                class="btn p-0 ms-2" type="button"><i
                                                                    class="bi bi-arrow-clockwise"></i></button></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-1000 fw-bold py-1">Product in transit:</td>
                                                        <td class="text-700 fw-semi-bold py-1">3000</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-1000 fw-bold py-1">Last time restocked:</td>
                                                        <td class="text-700 fw-semi-bold py-1">25th March, 2020</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-1000 fw-bold py-1">Total stock over lifetime:
                                                        </td>
                                                        <td class="text-700 fw-semi-bold py-1">50,000</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>



                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <button type="submit" class="btn btn-primary px-4 publish_btn">Publish</button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="mb-3">Organize</h5>
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="AddCategory" class="form-label fw-bold">Category</label>
                                <select class="form-select" id="AddCategory" name="category">
                                    <option value="">Select Category</option>
                                    @foreach($category as $c)
                                        <option value="{{ $c->id }}"
                                            {{ old('category') == $c->id ? 'selected' : '' }}>
                                            {{ $c->name }}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger category"></span>
                            </div>
                            <div class="col-12">
                                <label for="Collection" class="form-label fw-bold">Collection</label>
                                <input type="text" class="form-control" id="Collection" name="collection"
                                    placeholder="Collection" value="{{ old('collection') }}">
                                <span class="text-danger collection"></span>
                            </div>
                            <div class="col-12">
                                <label for="Tags" class="form-label fw-bold">Tags</label>
                                <input type="text" class="form-control" id="Tags" name="tags" placeholder="Tags"
                                    value="{{ old('tags') }}" data-role="tagsinput">
                                <span class="text-danger tags"></span>
                            </div>
                            <!-- <div class="col-12">
                              <div class="d-flex align-items-center gap-2">
                                <a href="javascript:;" class="btn btn-sm btn-light border shadow-sm">Sky Shot<i class="bi bi-x"></i></a>
                                <a href="javascript:;" class="btn btn-sm btn-light border shadow-sm">1000 Wala <i class="bi bi-x"></i></a>
                                <a href="javascript:;" class="btn btn-sm btn-light border shadow-sm">Bijili Crackers <i class="bi bi-x"></i></a>
                              </div>
                            </div> -->
                        </div>
                        <!--end row-->
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h5 class="mb-3">Variants</h5>
                        <div class="row g-3">
                            <div class="col-12" id="inputFormRow">
                                <label for="Brand" class="form-label fw-bold">Brand</label>
                                <input type="text" class="form-control" id="Brand" name="brands[]" placeholder="Brand"
                                    value="{{ old('brands') }}">
                                <span class="text-danger brands"></span>
                            </div>
                            <div class="col-12">
                                <label for="SKU" class="form-label fw-bold">SKU</label>
                                <input type="text" class="form-control" id="SKU" name="sku[]" placeholder="SKU"
                                    value="{{ old('sku') }}">
                                <span class="text-danger sku"></span>
                            </div>
                            <div class="col-12">
                                <label for="PRICE" class="form-label fw-bold">Price</label>
                                <input type="number" class="form-control" id="PRICE" name="price[]" placeholder="Price"
                                    value="{{ old('price') }}">
                                <span class="text-danger price"></span>
                            </div>
                            <div class="AddrowVarient"></div>
                            <div class="col-12">
                                <div class="d-grid">
                                    <button type="button" class="btn btn-primary add_varient">Add Variants</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!--end row-->

    </form>
</main>
<!--end main content-->


<!--start overlay-->
<div class="overlay btn-toggle-menu"></div>
<!--end overlay-->

<!-- Search Modal -->
<div class="modal" id="exampleModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header gap-2">
                <div class="position-relative popup-search w-100">
                    <input class="form-control form-control-lg ps-5 border border-3 border-primary" type="search"
                        placeholder="Search">
                    <span
                        class="material-symbols-outlined position-absolute ms-3 translate-middle-y start-0 top-50">search</span>
                </div>
                <button type="button" class="btn-close d-xl-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="search-list">
                    <p class="mb-1">Html Templates</p>
                    <div class="list-group">
                        <a href="javascript:;"
                            class="list-group-item list-group-item-action active align-items-center d-flex gap-2"><i
                                class="bi bi-filetype-html fs-5"></i>Best Html Templates</a>
                        <a href="javascript:;"
                            class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i
                                class="bi bi-award fs-5"></i>Html5 Templates</a>
                        <a href="javascript:;"
                            class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i
                                class="bi bi-box2-heart fs-5"></i>Responsive Html5 Templates</a>
                        <a href="javascript:;"
                            class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i
                                class="bi bi-camera-video fs-5"></i>eCommerce Html Templates</a>
                    </div>
                    <p class="mb-1 mt-3">Web Designe Company</p>
                    <div class="list-group">
                        <a href="javascript:;"
                            class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i
                                class="bi bi-chat-right-text fs-5"></i>Best Html Templates</a>
                        <a href="javascript:;"
                            class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i
                                class="bi bi-cloud-arrow-down fs-5"></i>Html5 Templates</a>
                        <a href="javascript:;"
                            class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i
                                class="bi bi-columns-gap fs-5"></i>Responsive Html5 Templates</a>
                        <a href="javascript:;"
                            class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i
                                class="bi bi-collection-play fs-5"></i>eCommerce Html Templates</a>
                    </div>
                    <p class="mb-1 mt-3">Software Development</p>
                    <div class="list-group">
                        <a href="javascript:;"
                            class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i
                                class="bi bi-cup-hot fs-5"></i>Best Html Templates</a>
                        <a href="javascript:;"
                            class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i
                                class="bi bi-droplet fs-5"></i>Html5 Templates</a>
                        <a href="javascript:;"
                            class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i
                                class="bi bi-exclamation-triangle fs-5"></i>Responsive Html5 Templates</a>
                        <a href="javascript:;"
                            class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i
                                class="bi bi-eye fs-5"></i>eCommerce Html Templates</a>
                    </div>
                    <p class="mb-1 mt-3">Online Shoping Portals</p>
                    <div class="list-group">
                        <a href="javascript:;"
                            class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i
                                class="bi bi-facebook fs-5"></i>Best Html Templates</a>
                        <a href="javascript:;"
                            class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i
                                class="bi bi-flower2 fs-5"></i>Html5 Templates</a>
                        <a href="javascript:;"
                            class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i
                                class="bi bi-geo-alt fs-5"></i>Responsive Html5 Templates</a>
                        <a href="javascript:;"
                            class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i
                                class="bi bi-github fs-5"></i>eCommerce Html Templates</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--start theme customization-->
<div class="offcanvas offcanvas-end" tabindex="-1" id="ThemeCustomizer" aria-labelledby="ThemeCustomizerLable">
    <div class="offcanvas-header border-bottom">
        <h5 class="offcanvas-title" id="ThemeCustomizerLable">Theme Customizer</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <h6 class="mb-0">Theme Variation</h6>
        <hr>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="LightTheme" value="option1">
            <label class="form-check-label" for="LightTheme">Light</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="DarkTheme" value="option2"
                checked="">
            <label class="form-check-label" for="DarkTheme">Dark</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="SemiDarkTheme" value="option3">
            <label class="form-check-label" for="SemiDarkTheme">Semi Dark</label>
        </div>
        <hr>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="MinimalTheme" value="option3">
            <label class="form-check-label" for="MinimalTheme">Minimal Theme</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="ShadowTheme" value="option4">
            <label class="form-check-label" for="ShadowTheme">Shadow Theme</label>
        </div>
    </div>
</div>
<!--end theme customization-->




@endsection

@section('scripts')
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

</script>
<script>
    $('#add_products').submit(function (e) {
        e.preventDefault();
        var form = $('#add_products')[0];
        var formData = new FormData(form);
        console.log(formData);
        var path = $('meta[name="base_url"]').attr('content') + '/products';
        $.ajax({
            url: "{{route('products.store')}}",
            type: 'POST',
            processData: false,
            contentType: false,
            data: formData,
            success: function (data) {
                window.location.reload();
                console.log('Added Successfully');
            },
            error: function (xhr) {

                $('.err').html('');
                $.each(xhr.responseJSON.errors, function (key, value) {
                    $('.' + key).append('<div class="text-danger err">' + value + '</div');
                });
            },
        });
    })

</script>


<script>
    $(document).on('click', '.add_varient', function () {
        var html = "";
        html += '<div class="row g-3" id="inputFormRow">';
        html += '<div class="col-12">';
        html += '<label for="Brand" class="form-label fw-bold">Brand</label>';
        html +=' <input type="text" class="form-control" id="Brand" name="brands[]" placeholder="Add Brand" value="">';
        html += '<span class="text-danger brands"></span>';
        html += '</div>';
        html += '<div class="col-12">';
        html += '<label for="SKU" class="form-label fw-bold">SKU</label>';
        html += ' <input type="text" class="form-control" id="SKU" name="sku[]" placeholder="Add SKU" value="">';
        html += '<span class="text-danger sku"></span>';
        html+='</div>';
        html += '<div class="col-12">';
        html += '<label for="PRICE" class="form-label fw-bold">PRICE</label>';
        html += ' <input type="number" class="form-control" id="PRICE" name="price[]" placeholder="Add Price" value="">';
        html += '<span class="text-danger price"></span>';
        html+='</div>';
        html += '<div class="col-12">';
        html += '<button type="button" class="btn btn-danger mt-2 " id="Remove_button_row" >Remove</button>';
        html += '</div>';
        html += '</div>';
        html += '</div>'
        $('.AddrowVarient').append(html);

    });

    // Remove Row

    $(document).on('click', '#Remove_button_row', function () {
        $(this).closest('#inputFormRow').remove();
    });

</script>

@endsection
