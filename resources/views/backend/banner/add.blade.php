@extends('backend.layouts.master')
@section('content')
    <main class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="ps-3">
            <nav class="mb-0" aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-sa-simple">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item">Banner</li>
            <li class="breadcrumb-item">Add Banner</li>
          </ol>
        </nav>
            </div>
        </div>
        <!--end breadcrumb-->

        </div><!--end row-->

        <div class="card">
            <div class="card-body">
                <form class="row g-3" action="{{route('banner.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="col-md-12">
                        <label for="inputName" class="form-label">Select a Banner</label>
                        <input id="image" type="file" class="form-control"name="image[]" accept=".jpg, .png, image/jpeg, image/png" >
                        @error('image')<span class="text-danger">{{$message}}</span>@enderror
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>

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
                    <button type="button" class="btn-close d-xl-none" data-bs-dismiss="modal"
                        aria-label="Close"></button>
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
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="SemiDarkTheme"
                    value="option3">
                <label class="form-check-label" for="SemiDarkTheme">Semi Dark</label>
            </div>
            <hr>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="MinimalTheme"
                    value="option3">
                <label class="form-check-label" for="MinimalTheme">Minimal Theme</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="ShadowTheme" value="option4">
                <label class="form-check-label" for="ShadowTheme">Shadow Theme</label>
            </div>

        </div>
    </div>

@endsection