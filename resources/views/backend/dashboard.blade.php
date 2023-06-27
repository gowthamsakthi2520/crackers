@extends('backend.layouts.master')
@section('content')

 <!--start main content-->
 <main class="page-content">

<div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-xl-4 row-cols-xxl-4">
  <div class="col">
    <div class="card radius-10 border-0 border-start border-primary border-4">
      <div class="card-body">
        <div class="d-flex align-items-center">
          <div class="">
            <p class="mb-1">Total Orders</p>
            <h4 class="mb-0 text-primary">{{\App\Models\Order::count()}}</h4>
          </div>
          <div class="ms-auto widget-icon bg-primary text-white">
            <i class="bi bi-basket2-fill"></i>
          </div>
        </div>
        <div class="progress mt-3" style="height: 4.5px;">
          <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>
    </div>
   </div>
   <div class="col">
    <div class="card radius-10 border-0 border-start border-success border-4">
      <div class="card-body">
        <div class="d-flex align-items-center">
          <div class="">
            <p class="mb-1">Total Revenue</p>
            <h4 class="mb-0 text-success">₹<span>{{\App\Models\Order::sum('total_amount')}}</span></h4>
          </div>
          <div class="ms-auto widget-icon bg-success text-white">
          ₹
          </div>
        </div>
        <div class="progress mt-3" style="height: 4.5px;">
          <div class="progress-bar bg-success" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>
    </div>
   </div>
   <div class="col">
    <div class="card radius-10 border-0 border-start border-danger border-4">
      <div class="card-body">
        <div class="d-flex align-items-center">
          <div class="">
            <p class="mb-1">Total Products</p>
            <h4 class="mb-0 text-danger">{{\App\Models\Products::count()}}</h4>
          </div>
          <div class="ms-auto widget-icon bg-danger text-white">
            <i class="bi bi-graph-down-arrow"></i>
          </div>
        </div>
        <div class="progress mt-3" style="height: 4.5px;">
          <div class="progress-bar bg-danger" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>
    </div>
   </div>
   <div class="col">
    <div class="card radius-10 border-0 border-start border-warning border-4">
      <div class="card-body">
        <div class="d-flex align-items-center">
          <div class="">
            <p class="mb-1">New Users</p>
            <h4 class="mb-0 text-warning">{{\App\Models\Order::count()}}</h4>
          </div>
          <div class="ms-auto widget-icon bg-warning text-dark">
            <i class="bi bi-people-fill"></i>
          </div>
        </div>
        <div class="progress mt-3" style="height: 4.5px;">
          <div class="progress-bar bg-warning" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
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