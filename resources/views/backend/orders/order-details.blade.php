@extends('backend.layouts.master')

@section('content')

<main class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
      <div class="ps-3">
        <nav class="mb-0" aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-sa-simple">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item">Orders</li>
            <li class="breadcrumb-item">Order Details</li>
          </ol>
        </nav>
      </div>
    </div>
    <!--end breadcrumb-->

    <div class="card">
      <div class="card-body">
        <div class="d-flex flex-lg-row flex-column align-items-start align-items-lg-center justify-content-between gap-3">
          <div class="flex-grow-1">
            <h4 class="fw-bold pt-2">Order Details</h4>
            <!-- <p class="mb-0">Customer ID : <a href="javascript:;">6589743</a></p> -->
          </div>
          <div class="overflow-auto">
            <div class="btn-group position-static">
              <div class="btn-group position-static">
                <button type="button" class="btn btn-outline-primary px-4">
                  <i class="bi bi-printer-fill me-2"></i>Print
                </button>
              </div>
              <div class="btn-group position-static">
                <button type="button" class="btn btn-outline-primary px-4">
                  <i class="bi bi-arrow-clockwise me-2"></i>Refund
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                  <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
                </ul>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="row">
      <div class="col-12 col-lg-6 d-flex my-4">
        <div class="w-100">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title mb-4 fw-bold">Summary</h4>
              <div>
            
                <div class="d-flex justify-content-between">
                  <p class="fw-semi-bold">Discount :</p>
                  <p class="text-danger fw-semi-bold">{{$order->discount}}</p>
                </div>
                <div class="d-flex justify-content-between">
                  <p class="fw-semi-bold">Tax :</p>
                  <p class="fw-semi-bold">{{$order->tax}}</p>
                </div>
                <div class="d-flex justify-content-between">
                  <p class="fw-semi-bold">Subtotal :</p>
                  <p class="fw-semi-bold">{{$order->sub_total}}</p>
                </div>
                <div class="d-flex justify-content-between">
                  <p class="fw-semi-bold">Shipping Cost :</p>
                  <p class="fw-semi-bold">{{$order->deliver_charge}}</p>
                </div>
              </div>
              <div class="d-flex justify-content-between border-top pt-4">
                <h5 class="mb-0 fw-bold">Total :</h5>
                <h5 class="mb-0 fw-bold">{{$order->total_amount}}</h5>
              </div>
            </div>
          </div>

        </div>
      </div>

      <div class="col-lg-6 my-4">

        <div class="card">
          <div class="card-body">
            <form action="{{route('update_orderstatus',$id)}}" method="POST">
              @csrf
            <h4 class="card-title mb-4 fw-bold">Order Status</h4>
            <label class="form-label">Payment status</label>
            <select class="form-select mb-4" name="payment_status">
            <option value="Processing" <?php echo ($order->payment_status == "Processing") ? 'selected' : ''; ?>>Processing</option>
            <option value="Done" <?php echo ($order->payment_status == "Done") ? 'selected' : ''; ?>>Done</option>
            <option value="Pending" <?php echo ($order->payment_status == "Pending") ? 'selected' : ''; ?>>Pending</option>
              <!-- <option value="Done">Done</option>
              <option value="Pending">Pending</option> -->
            </select>
            <label class="form-label">Payment Type</label>
            <select class="form-select" name="payment_type">
              <option value="cod"  <?php echo ($order->	payment_type == "cod") ? 'selected' : ''; ?>>cod</option>
              <option value="card" <?php echo ($order->	payment_type == "card") ? 'selected' : ''; ?>>card</option>
              <option value="paypal" <?php echo ($order->	payment_type == "paypal") ? 'selected' : ''; ?>>paypal</option>
            </select>
            <button type="submit" class="btn btn-primary mt-3">Update</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    </div><!--end row-->

    <h5 class="fw-bold my-4">Product Details</h5>
    <div class="card">
      <div class="card-body">
        <div class="row g-3 row-cols-1 row-cols-lg-4">
         
        <table class="table table-bordered">
    <thead>
      <tr>
      <th>Product Name</th>
        <th>Quantity</th>
        <th>Amount</th>
        <th>Total Amount</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($productDetails as $values)
      <tr>
        <td>{{$values->product_name}}</td>
        <td>{{$values->quantity}}</td>
        <td>{{$values->price}}</td>
        <td>{{$values->quantity * $values->price}}
      @endforeach
    </tbody>
  </table>
         
        </div>
      </div>

    </div><!--end row-->


    <h5 class="fw-bold my-4">Billing Details</h5>
    <div class="card">
      <div class="card-body">
        <div class="row g-3 row-cols-1 row-cols-lg-4">
          <div class="col">
            <div class="d-flex align-items-start gap-3 border p-3 rounded">
              <div class="detail-icon fs-5">
                <i class="bi bi-person-circle"></i>
              </div>
              <div class="detail-info">
                <p class="fw-bold mb-1">Customer Name</p>
                <a href="javascript:;" class="mb-0">{{$order->full_name}}</a>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="d-flex align-items-start gap-3 border p-3 rounded">
              <div class="detail-icon fs-5">
                <i class="bi bi-envelope-fill"></i>
              </div>
              <div class="detail-info">
                <h6 class="fw-bold mb-1">Email</h6>
                <a href="javascript:;" class="mb-0">{{$order->email}}</a>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="d-flex align-items-start gap-3 border p-3 rounded">
              <div class="detail-icon fs-5">
                <i class="bi bi-telephone-fill"></i>
              </div>
              <div class="detail-info">
                <h6 class="fw-bold mb-1">Phone</h6>
                <a href="javascript:;" class="mb-0">{{$order->phone}}</a>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="d-flex align-items-start gap-3 border p-3 rounded">
              <div class="detail-icon fs-5">
                <i class="bi bi-calendar-check-fill"></i>
              </div>
              <div class="detail-info">
                <h6 class="fw-bold mb-1">Shipping Date</h6>
                <p class="mb-0">{{$order->created_at}}</p>
              </div>
            </div>
          </div>

      
          <div class="col">
            <div class="d-flex align-items-start gap-3 border p-3 rounded">
              <div class="detail-icon fs-5">
                <i class="bi bi-house-door-fill"></i>
              </div>
              <div class="detail-info">
                <h6 class="fw-bold mb-1">Address 1</h6>
                <p class="mb-0">{{$order->address}}</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="d-flex align-items-start gap-3 border p-3 rounded">
              <div class="detail-icon fs-5">
                <i class="bi bi-house-fill"></i>
              </div>
              <div class="detail-info">
                <h6 class="fw-bold mb-1">Shipping Address</h6>
                <p class="mb-0">{{$order->address}}</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div><!--end row-->

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
            <input class="form-control form-control-lg ps-5 border border-3 border-primary" type="search" placeholder="Search">
            <span class="material-symbols-outlined position-absolute ms-3 translate-middle-y start-0 top-50">search</span>
          </div>
          <button type="button" class="btn-close d-xl-none" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="search-list">
            <p class="mb-1">Html Templates</p>
            <div class="list-group">
              <a href="javascript:;" class="list-group-item list-group-item-action active align-items-center d-flex gap-2"><i class="bi bi-filetype-html fs-5"></i>Best Html Templates</a>
              <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i class="bi bi-award fs-5"></i>Html5 Templates</a>
              <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i class="bi bi-box2-heart fs-5"></i>Responsive Html5 Templates</a>
              <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i class="bi bi-camera-video fs-5"></i>eCommerce Html Templates</a>
            </div>
            <p class="mb-1 mt-3">Web Designe Company</p>
            <div class="list-group">
              <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i class="bi bi-chat-right-text fs-5"></i>Best Html Templates</a>
              <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i class="bi bi-cloud-arrow-down fs-5"></i>Html5 Templates</a>
              <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i class="bi bi-columns-gap fs-5"></i>Responsive Html5 Templates</a>
              <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i class="bi bi-collection-play fs-5"></i>eCommerce Html Templates</a>
            </div>
            <p class="mb-1 mt-3">Software Development</p>
            <div class="list-group">
              <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i class="bi bi-cup-hot fs-5"></i>Best Html Templates</a>
              <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i class="bi bi-droplet fs-5"></i>Html5 Templates</a>
              <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i class="bi bi-exclamation-triangle fs-5"></i>Responsive Html5 Templates</a>
              <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i class="bi bi-eye fs-5"></i>eCommerce Html Templates</a>
            </div>
            <p class="mb-1 mt-3">Online Shoping Portals</p>
            <div class="list-group">
              <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i class="bi bi-facebook fs-5"></i>Best Html Templates</a>
              <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i class="bi bi-flower2 fs-5"></i>Html5 Templates</a>
              <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i class="bi bi-geo-alt fs-5"></i>Responsive Html5 Templates</a>
              <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i class="bi bi-github fs-5"></i>eCommerce Html Templates</a>
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
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="DarkTheme" value="option2" checked="">
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