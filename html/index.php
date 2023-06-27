    <?php $title="Home page";
    include './layouts/header.php'
    ?>

    <!-- Banner Start-->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./assets/img/banner-main.png" class="d-block w-100" alt="Banner">
            </div>
            <div class="carousel-item">
                <img src="./assets/img/banner-main.png" class="d-block w-100" alt="Banner">
            </div>
         </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
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
                                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Sparkler Iteams</button>
                                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Flower Pots</button>
                                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Chakkars </button>
                                <button class="nav-link" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Twinkling</button>
                                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Enjoy Pencial </button>
                                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">One Sound </button>
                            </div>
                        </nav>
                        <div class="tab-content p-3 " id="nav-tabContent">
                            <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="row">
                                    <div class="col-md-4 col-6">
                                        <div class="product-section mb-4">
                                            <div class="row">
                                                <div class="col-md-4 d-flex align-items-center justify-content-center">
                                                    <div class="product-img">
                                                        <img src="./assets/img/product.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <h5>10 CM ELECTRIC SPARKLER</h5>
                                                    <div class="price">
                                                        <h6 class="mb-0">₹55 <span>₹275.00</span></h6>
                                                    </div>
                                                    <div class="qty-container mt-3">
                                                        <button class="qty-btn-minus btn-light" type="button">-</button>
                                                        <input type="text" name="qty" value="0" class="input-qty"/>
                                                        <button class="qty-btn-plus btn-light" type="button">+</button>
                                                    </div>
                                                </div>
                                                <div class="offer-section">
                                                    5 BOX
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="product-section mb-4">
                                            <div class="row">
                                                <div class="col-md-4 d-flex align-items-center justify-content-center">
                                                    <div class="product-img">
                                                        <img src="./assets/img/product.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <h5>10 CM ELECTRIC SPARKLER</h5>
                                                    <div class="price">
                                                        <h6 class="mb-0">₹55 <span>₹275.00</span></h6>
                                                    </div>
                                                    <div class="qty-container mt-3">
                                                        <button class="qty-btn-minus btn-light" type="button">-</button>
                                                        <input type="text" name="qty" value="0" class="input-qty"/>
                                                        <button class="qty-btn-plus btn-light" type="button">+</button>
                                                    </div>
                                                </div>
                                                <div class="offer-section">
                                                    5 BOX
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="product-section mb-4">
                                            <div class="row">
                                                <div class="col-md-4 d-flex align-items-center justify-content-center">
                                                    <div class="product-img">
                                                        <img src="./assets/img/product.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <h5>10 CM ELECTRIC SPARKLER</h5>
                                                    <div class="price">
                                                        <h6 class="mb-0">₹55 <span>₹275.00</span></h6>
                                                    </div>
                                                    <div class="qty-container mt-3">
                                                        <button class="qty-btn-minus btn-light" type="button">-</button>
                                                        <input type="text" name="qty" value="0" class="input-qty"/>
                                                        <button class="qty-btn-plus btn-light" type="button">+</button>
                                                    </div>
                                                </div>
                                                <div class="offer-section">
                                                    5 BOX
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="product-section mb-4">
                                            <div class="row">
                                                <div class="col-md-4 d-flex align-items-center justify-content-center">
                                                    <div class="product-img">
                                                        <img src="./assets/img/product.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <h5>10 CM ELECTRIC SPARKLER</h5>
                                                    <div class="price">
                                                        <h6 class="mb-0">₹55 <span>₹275.00</span></h6>
                                                    </div>
                                                    <div class="qty-container mt-3">
                                                        <button class="qty-btn-minus btn-light" type="button">-</button>
                                                        <input type="text" name="qty" value="0" class="input-qty"/>
                                                        <button class="qty-btn-plus btn-light" type="button">+</button>
                                                    </div>
                                                </div>
                                                <div class="offer-section">
                                                    5 BOX
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="product-section mb-4">
                                            <div class="row">
                                                <div class="col-md-4 d-flex align-items-center justify-content-center">
                                                    <div class="product-img">
                                                        <img src="./assets/img/product.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <h5>10 CM ELECTRIC SPARKLER</h5>
                                                    <div class="price">
                                                        <h6 class="mb-0">₹55 <span>₹275.00</span></h6>
                                                    </div>
                                                    <div class="qty-container mt-3">
                                                        <button class="qty-btn-minus btn-light" type="button">-</button>
                                                        <input type="text" name="qty" value="0" class="input-qty"/>
                                                        <button class="qty-btn-plus btn-light" type="button">+</button>
                                                    </div>
                                                </div>
                                                <div class="offer-section">
                                                    5 BOX
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="product-section mb-4">
                                            <div class="row">
                                                <div class="col-md-4 d-flex align-items-center justify-content-center">
                                                    <div class="product-img">
                                                        <img src="./assets/img/product.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <h5>10 CM ELECTRIC SPARKLER</h5>
                                                    <div class="price">
                                                        <h6 class="mb-0">₹55 <span>₹275.00</span></h6>
                                                    </div>
                                                    <div class="qty-container mt-3">
                                                        <button class="qty-btn-minus btn-light" type="button">-</button>
                                                        <input type="text" name="qty" value="0" class="input-qty"/>
                                                        <button class="qty-btn-plus btn-light" type="button">+</button>
                                                    </div>
                                                </div>
                                                <div class="offer-section">
                                                    5 BOX
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="product-section mb-4">
                                            <div class="row">
                                                <div class="col-md-4 d-flex align-items-center justify-content-center">
                                                    <div class="product-img">
                                                        <img src="./assets/img/product.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <h5>10 CM ELECTRIC SPARKLER</h5>
                                                    <div class="price">
                                                        <h6 class="mb-0">₹55 <span>₹275.00</span></h6>
                                                    </div>
                                                    <div class="qty-container mt-3">
                                                        <button class="qty-btn-minus btn-light" type="button">-</button>
                                                        <input type="text" name="qty" value="0" class="input-qty"/>
                                                        <button class="qty-btn-plus btn-light" type="button">+</button>
                                                    </div>
                                                </div>
                                                <div class="offer-section">
                                                    5 BOX
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="product-section mb-4">
                                            <div class="row">
                                                <div class="col-md-4 d-flex align-items-center justify-content-center">
                                                    <div class="product-img">
                                                        <img src="./assets/img/product.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <h5>10 CM ELECTRIC SPARKLER</h5>
                                                    <div class="price">
                                                        <h6 class="mb-0">₹55 <span>₹275.00</span></h6>
                                                    </div>
                                                    <div class="qty-container mt-3">
                                                        <button class="qty-btn-minus btn-light" type="button">-</button>
                                                        <input type="text" name="qty" value="0" class="input-qty"/>
                                                        <button class="qty-btn-plus btn-light" type="button">+</button>
                                                    </div>
                                                </div>
                                                <div class="offer-section">
                                                    5 BOX
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="product-section mb-4">
                                            <div class="row">
                                                <div class="col-md-4 d-flex align-items-center justify-content-center">
                                                    <div class="product-img">
                                                        <img src="./assets/img/product.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <h5>10 CM ELECTRIC SPARKLER</h5>
                                                    <div class="price">
                                                        <h6 class="mb-0">₹55 <span>₹275.00</span></h6>
                                                    </div>
                                                    <div class="qty-container mt-3">
                                                        <button class="qty-btn-minus btn-light" type="button">-</button>
                                                        <input type="text" name="qty" value="0" class="input-qty"/>
                                                        <button class="qty-btn-plus btn-light" type="button">+</button>
                                                    </div>
                                                </div>
                                                <div class="offer-section">
                                                    5 BOX
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="product-section mb-4">
                                            <div class="row">
                                                <div class="col-md-4 d-flex align-items-center justify-content-center">
                                                    <div class="product-img">
                                                        <img src="./assets/img/product.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <h5>10 CM ELECTRIC SPARKLER</h5>
                                                    <div class="price">
                                                        <h6 class="mb-0">₹55 <span>₹275.00</span></h6>
                                                    </div>
                                                    <div class="qty-container mt-3">
                                                        <button class="qty-btn-minus btn-light" type="button">-</button>
                                                        <input type="text" name="qty" value="0" class="input-qty"/>
                                                        <button class="qty-btn-plus btn-light" type="button">+</button>
                                                    </div>
                                                </div>
                                                <div class="offer-section">
                                                    5 BOX
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="product-section mb-4">
                                            <div class="row">
                                                <div class="col-md-4 d-flex align-items-center justify-content-center">
                                                    <div class="product-img">
                                                        <img src="./assets/img/product.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <h5>10 CM ELECTRIC SPARKLER</h5>
                                                    <div class="price">
                                                        <h6 class="mb-0">₹55 <span>₹275.00</span></h6>
                                                    </div>
                                                    <div class="qty-container mt-3">
                                                        <button class="qty-btn-minus btn-light" type="button">-</button>
                                                        <input type="text" name="qty" value="0" class="input-qty"/>
                                                        <button class="qty-btn-plus btn-light" type="button">+</button>
                                                    </div>
                                                </div>
                                                <div class="offer-section">
                                                    5 BOX
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="product-section mb-4">
                                            <div class="row">
                                                <div class="col-md-4 d-flex align-items-center justify-content-center">
                                                    <div class="product-img">
                                                        <img src="./assets/img/product.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <h5>10 CM ELECTRIC SPARKLER</h5>
                                                    <div class="price">
                                                        <h6 class="mb-0">₹55 <span>₹275.00</span></h6>
                                                    </div>
                                                    <div class="qty-container mt-3">
                                                        <button class="qty-btn-minus btn-light" type="button">-</button>
                                                        <input type="text" name="qty" value="0" class="input-qty"/>
                                                        <button class="qty-btn-plus btn-light" type="button">+</button>
                                                    </div>
                                                </div>
                                                <div class="offer-section">
                                                    5 BOX
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <div class="row">
                                    <div class="col-md-4 col-6">
                                        <div class="product-section mb-4">
                                            <div class="row">
                                                <div class="col-md-4 d-flex align-items-center justify-content-center">
                                                    <div class="product-img">
                                                        <img src="./assets/img/product.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <h5>10 CM ELECTRIC SPARKLER</h5>
                                                    <div class="price">
                                                        <h6 class="mb-0">₹55 <span>₹275.00</span></h6>
                                                    </div>
                                                    <div class="qty-container mt-3">
                                                        <button class="qty-btn-minus btn-light" type="button">-</button>
                                                        <input type="text" name="qty" value="0" class="input-qty"/>
                                                        <button class="qty-btn-plus btn-light" type="button">+</button>
                                                    </div>
                                                </div>
                                                <div class="offer-section">
                                                    5 BOX
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="product-section mb-4">
                                            <div class="row">
                                                <div class="col-md-4 d-flex align-items-center justify-content-center">
                                                    <div class="product-img">
                                                        <img src="./assets/img/product.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <h5>10 CM ELECTRIC SPARKLER</h5>
                                                    <div class="price">
                                                        <h6 class="mb-0">₹55 <span>₹275.00</span></h6>
                                                    </div>
                                                    <div class="qty-container mt-3">
                                                        <button class="qty-btn-minus btn-light" type="button">-</button>
                                                        <input type="text" name="qty" value="0" class="input-qty"/>
                                                        <button class="qty-btn-plus btn-light" type="button">+</button>
                                                    </div>
                                                </div>
                                                <div class="offer-section">
                                                    5 BOX
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="product-section mb-4">
                                            <div class="row">
                                                <div class="col-md-4 d-flex align-items-center justify-content-center">
                                                    <div class="product-img">
                                                        <img src="./assets/img/product.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <h5>10 CM ELECTRIC SPARKLER</h5>
                                                    <div class="price">
                                                        <h6 class="mb-0">₹55 <span>₹275.00</span></h6>
                                                    </div>
                                                    <div class="qty-container mt-3">
                                                        <button class="qty-btn-minus btn-light" type="button">-</button>
                                                        <input type="text" name="qty" value="0" class="input-qty"/>
                                                        <button class="qty-btn-plus btn-light" type="button">+</button>
                                                    </div>
                                                </div>
                                                <div class="offer-section">
                                                    5 BOX
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="product-section mb-4">
                                            <div class="row">
                                                <div class="col-md-4 d-flex align-items-center justify-content-center">
                                                    <div class="product-img">
                                                        <img src="./assets/img/product.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <h5>10 CM ELECTRIC SPARKLER</h5>
                                                    <div class="price">
                                                        <h6 class="mb-0">₹55 <span>₹275.00</span></h6>
                                                    </div>
                                                    <div class="qty-container mt-3">
                                                        <button class="qty-btn-minus btn-light" type="button">-</button>
                                                        <input type="text" name="qty" value="0" class="input-qty"/>
                                                        <button class="qty-btn-plus btn-light" type="button">+</button>
                                                    </div>
                                                </div>
                                                <div class="offer-section">
                                                    5 BOX
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="product-section mb-4">
                                            <div class="row">
                                                <div class="col-md-4 d-flex align-items-center justify-content-center">
                                                    <div class="product-img">
                                                        <img src="./assets/img/product.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <h5>10 CM ELECTRIC SPARKLER</h5>
                                                    <div class="price">
                                                        <h6 class="mb-0">₹55 <span>₹275.00</span></h6>
                                                    </div>
                                                    <div class="qty-container mt-3">
                                                        <button class="qty-btn-minus btn-light" type="button">-</button>
                                                        <input type="text" name="qty" value="0" class="input-qty"/>
                                                        <button class="qty-btn-plus btn-light" type="button">+</button>
                                                    </div>
                                                </div>
                                                <div class="offer-section">
                                                    5 BOX
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="product-section mb-4">
                                            <div class="row">
                                                <div class="col-md-4 d-flex align-items-center justify-content-center">
                                                    <div class="product-img">
                                                        <img src="./assets/img/product.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <h5>10 CM ELECTRIC SPARKLER</h5>
                                                    <div class="price">
                                                        <h6 class="mb-0">₹55 <span>₹275.00</span></h6>
                                                    </div>
                                                    <div class="qty-container mt-3">
                                                        <button class="qty-btn-minus btn-light" type="button">-</button>
                                                        <input type="text" name="qty" value="0" class="input-qty"/>
                                                        <button class="qty-btn-plus btn-light" type="button">+</button>
                                                    </div>
                                                </div>
                                                <div class="offer-section">
                                                    5 BOX
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="product-section mb-4">
                                            <div class="row">
                                                <div class="col-md-4 d-flex align-items-center justify-content-center">
                                                    <div class="product-img">
                                                        <img src="./assets/img/product.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <h5>10 CM ELECTRIC SPARKLER</h5>
                                                    <div class="price">
                                                        <h6 class="mb-0">₹55 <span>₹275.00</span></h6>
                                                    </div>
                                                    <div class="qty-container mt-3">
                                                        <button class="qty-btn-minus btn-light" type="button">-</button>
                                                        <input type="text" name="qty" value="0" class="input-qty"/>
                                                        <button class="qty-btn-plus btn-light" type="button">+</button>
                                                    </div>
                                                </div>
                                                <div class="offer-section">
                                                    5 BOX
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="product-section mb-4">
                                            <div class="row">
                                                <div class="col-md-4 d-flex align-items-center justify-content-center">
                                                    <div class="product-img">
                                                        <img src="./assets/img/product.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <h5>10 CM ELECTRIC SPARKLER</h5>
                                                    <div class="price">
                                                        <h6 class="mb-0">₹55 <span>₹275.00</span></h6>
                                                    </div>
                                                    <div class="qty-container mt-3">
                                                        <button class="qty-btn-minus btn-light" type="button">-</button>
                                                        <input type="text" name="qty" value="0" class="input-qty"/>
                                                        <button class="qty-btn-plus btn-light" type="button">+</button>
                                                    </div>
                                                </div>
                                                <div class="offer-section">
                                                    5 BOX
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="product-section mb-4">
                                            <div class="row">
                                                <div class="col-md-4 d-flex align-items-center justify-content-center">
                                                    <div class="product-img">
                                                        <img src="./assets/img/product.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <h5>10 CM ELECTRIC SPARKLER</h5>
                                                    <div class="price">
                                                        <h6 class="mb-0">₹55 <span>₹275.00</span></h6>
                                                    </div>
                                                    <div class="qty-container mt-3">
                                                        <button class="qty-btn-minus btn-light" type="button">-</button>
                                                        <input type="text" name="qty" value="0" class="input-qty"/>
                                                        <button class="qty-btn-plus btn-light" type="button">+</button>
                                                    </div>
                                                </div>
                                                <div class="offer-section">
                                                    5 BOX
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="product-section mb-4">
                                            <div class="row">
                                                <div class="col-md-4 d-flex align-items-center justify-content-center">
                                                    <div class="product-img">
                                                        <img src="./assets/img/product.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <h5>10 CM ELECTRIC SPARKLER</h5>
                                                    <div class="price">
                                                        <h6 class="mb-0">₹55 <span>₹275.00</span></h6>
                                                    </div>
                                                    <div class="qty-container mt-3">
                                                        <button class="qty-btn-minus btn-light" type="button">-</button>
                                                        <input type="text" name="qty" value="0" class="input-qty"/>
                                                        <button class="qty-btn-plus btn-light" type="button">+</button>
                                                    </div>
                                                </div>
                                                <div class="offer-section">
                                                    5 BOX
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="product-section mb-4">
                                            <div class="row">
                                                <div class="col-md-4 d-flex align-items-center justify-content-center">
                                                    <div class="product-img">
                                                        <img src="./assets/img/product.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <h5>10 CM ELECTRIC SPARKLER</h5>
                                                    <div class="price">
                                                        <h6 class="mb-0">₹55 <span>₹275.00</span></h6>
                                                    </div>
                                                    <div class="qty-container mt-3">
                                                        <button class="qty-btn-minus btn-light" type="button">-</button>
                                                        <input type="text" name="qty" value="0" class="input-qty"/>
                                                        <button class="qty-btn-plus btn-light" type="button">+</button>
                                                    </div>
                                                </div>
                                                <div class="offer-section">
                                                    5 BOX
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="product-section mb-4">
                                            <div class="row">
                                                <div class="col-md-4 d-flex align-items-center justify-content-center">
                                                    <div class="product-img">
                                                        <img src="./assets/img/product.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <h5>10 CM ELECTRIC SPARKLER</h5>
                                                    <div class="price">
                                                        <h6 class="mb-0">₹55 <span>₹275.00</span></h6>
                                                    </div>
                                                    <div class="qty-container mt-3">
                                                        <button class="qty-btn-minus btn-light" type="button">-</button>
                                                        <input type="text" name="qty" value="0" class="input-qty"/>
                                                        <button class="qty-btn-plus btn-light" type="button">+</button>
                                                    </div>
                                                </div>
                                                <div class="offer-section">
                                                    5 BOX
                                                </div>
                                            </div>
                                        </div>
                                    </div>   
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <div class="row">
                                    <div class="col-md-4 col-6">
                                        <div class="product-section mb-4">
                                            <div class="row">
                                                <div class="col-md-4 d-flex align-items-center justify-content-center">
                                                    <div class="product-img">
                                                        <img src="./assets/img/product.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <h5>10 CM ELECTRIC SPARKLER</h5>
                                                    <div class="price">
                                                        <h6 class="mb-0">₹55 <span>₹275.00</span></h6>
                                                    </div>
                                                    <div class="qty-container mt-3">
                                                        <button class="qty-btn-minus btn-light" type="button">-</button>
                                                        <input type="text" name="qty" value="0" class="input-qty"/>
                                                        <button class="qty-btn-plus btn-light" type="button">+</button>
                                                    </div>
                                                </div>
                                                <div class="offer-section">
                                                    5 BOX
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="product-section mb-4">
                                            <div class="row">
                                                <div class="col-md-4 d-flex align-items-center justify-content-center">
                                                    <div class="product-img">
                                                        <img src="./assets/img/product.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <h5>10 CM ELECTRIC SPARKLER</h5>
                                                    <div class="price">
                                                        <h6 class="mb-0">₹55 <span>₹275.00</span></h6>
                                                    </div>
                                                    <div class="qty-container mt-3">
                                                        <button class="qty-btn-minus btn-light" type="button">-</button>
                                                        <input type="text" name="qty" value="0" class="input-qty"/>
                                                        <button class="qty-btn-plus btn-light" type="button">+</button>
                                                    </div>
                                                </div>
                                                <div class="offer-section">
                                                    5 BOX
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="product-section mb-4">
                                            <div class="row">
                                                <div class="col-md-4 d-flex align-items-center justify-content-center">
                                                    <div class="product-img">
                                                        <img src="./assets/img/product.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <h5>10 CM ELECTRIC SPARKLER</h5>
                                                    <div class="price">
                                                        <h6 class="mb-0">₹55 <span>₹275.00</span></h6>
                                                    </div>
                                                    <div class="qty-container mt-3">
                                                        <button class="qty-btn-minus btn-light" type="button">-</button>
                                                        <input type="text" name="qty" value="0" class="input-qty"/>
                                                        <button class="qty-btn-plus btn-light" type="button">+</button>
                                                    </div>
                                                </div>
                                                <div class="offer-section">
                                                    5 BOX
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="product-section mb-4">
                                            <div class="row">
                                                <div class="col-md-4 d-flex align-items-center justify-content-center">
                                                    <div class="product-img">
                                                        <img src="./assets/img/product.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <h5>10 CM ELECTRIC SPARKLER</h5>
                                                    <div class="price">
                                                        <h6 class="mb-0">₹55 <span>₹275.00</span></h6>
                                                    </div>
                                                    <div class="qty-container mt-3">
                                                        <button class="qty-btn-minus btn-light" type="button">-</button>
                                                        <input type="text" name="qty" value="0" class="input-qty"/>
                                                        <button class="qty-btn-plus btn-light" type="button">+</button>
                                                    </div>
                                                </div>
                                                <div class="offer-section">
                                                    5 BOX
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="product-section mb-4">
                                            <div class="row">
                                                <div class="col-md-4 d-flex align-items-center justify-content-center">
                                                    <div class="product-img">
                                                        <img src="./assets/img/product.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <h5>10 CM ELECTRIC SPARKLER</h5>
                                                    <div class="price">
                                                        <h6 class="mb-0">₹55 <span>₹275.00</span></h6>
                                                    </div>
                                                    <div class="qty-container mt-3">
                                                        <button class="qty-btn-minus btn-light" type="button">-</button>
                                                        <input type="text" name="qty" value="0" class="input-qty"/>
                                                        <button class="qty-btn-plus btn-light" type="button">+</button>
                                                    </div>
                                                </div>
                                                <div class="offer-section">
                                                    5 BOX
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="product-section mb-4">
                                            <div class="row">
                                                <div class="col-md-4 d-flex align-items-center justify-content-center">
                                                    <div class="product-img">
                                                        <img src="./assets/img/product.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <h5>10 CM ELECTRIC SPARKLER</h5>
                                                    <div class="price">
                                                        <h6 class="mb-0">₹55 <span>₹275.00</span></h6>
                                                    </div>
                                                    <div class="qty-container mt-3">
                                                        <button class="qty-btn-minus btn-light" type="button">-</button>
                                                        <input type="text" name="qty" value="0" class="input-qty"/>
                                                        <button class="qty-btn-plus btn-light" type="button">+</button>
                                                    </div>
                                                </div>
                                                <div class="offer-section">
                                                    5 BOX
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="product-section mb-4">
                                            <div class="row">
                                                <div class="col-md-4 d-flex align-items-center justify-content-center">
                                                    <div class="product-img">
                                                        <img src="./assets/img/product.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <h5>10 CM ELECTRIC SPARKLER</h5>
                                                    <div class="price">
                                                        <h6 class="mb-0">₹55 <span>₹275.00</span></h6>
                                                    </div>
                                                    <div class="qty-container mt-3">
                                                        <button class="qty-btn-minus btn-light" type="button">-</button>
                                                        <input type="text" name="qty" value="0" class="input-qty"/>
                                                        <button class="qty-btn-plus btn-light" type="button">+</button>
                                                    </div>
                                                </div>
                                                <div class="offer-section">
                                                    5 BOX
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="product-section mb-4">
                                            <div class="row">
                                                <div class="col-md-4 d-flex align-items-center justify-content-center">
                                                    <div class="product-img">
                                                        <img src="./assets/img/product.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <h5>10 CM ELECTRIC SPARKLER</h5>
                                                    <div class="price">
                                                        <h6 class="mb-0">₹55 <span>₹275.00</span></h6>
                                                    </div>
                                                    <div class="qty-container mt-3">
                                                        <button class="qty-btn-minus btn-light" type="button">-</button>
                                                        <input type="text" name="qty" value="0" class="input-qty"/>
                                                        <button class="qty-btn-plus btn-light" type="button">+</button>
                                                    </div>
                                                </div>
                                                <div class="offer-section">
                                                    5 BOX
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="product-section mb-4">
                                            <div class="row">
                                                <div class="col-md-4 d-flex align-items-center justify-content-center">
                                                    <div class="product-img">
                                                        <img src="./assets/img/product.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <h5>10 CM ELECTRIC SPARKLER</h5>
                                                    <div class="price">
                                                        <h6 class="mb-0">₹55 <span>₹275.00</span></h6>
                                                    </div>
                                                    <div class="qty-container mt-3">
                                                        <button class="qty-btn-minus btn-light" type="button">-</button>
                                                        <input type="text" name="qty" value="0" class="input-qty"/>
                                                        <button class="qty-btn-plus btn-light" type="button">+</button>
                                                    </div>
                                                </div>
                                                <div class="offer-section">
                                                    5 BOX
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="product-section mb-4">
                                            <div class="row">
                                                <div class="col-md-4 d-flex align-items-center justify-content-center">
                                                    <div class="product-img">
                                                        <img src="./assets/img/product.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <h5>10 CM ELECTRIC SPARKLER</h5>
                                                    <div class="price">
                                                        <h6 class="mb-0">₹55 <span>₹275.00</span></h6>
                                                    </div>
                                                    <div class="qty-container mt-3">
                                                        <button class="qty-btn-minus btn-light" type="button">-</button>
                                                        <input type="text" name="qty" value="0" class="input-qty"/>
                                                        <button class="qty-btn-plus btn-light" type="button">+</button>
                                                    </div>
                                                </div>
                                                <div class="offer-section">
                                                    5 BOX
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="product-section mb-4">
                                            <div class="row">
                                                <div class="col-md-4 d-flex align-items-center justify-content-center">
                                                    <div class="product-img">
                                                        <img src="./assets/img/product.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <h5>10 CM ELECTRIC SPARKLER</h5>
                                                    <div class="price">
                                                        <h6 class="mb-0">₹55 <span>₹275.00</span></h6>
                                                    </div>
                                                    <div class="qty-container mt-3">
                                                        <button class="qty-btn-minus btn-light" type="button">-</button>
                                                        <input type="text" name="qty" value="0" class="input-qty"/>
                                                        <button class="qty-btn-plus btn-light" type="button">+</button>
                                                    </div>
                                                </div>
                                                <div class="offer-section">
                                                    5 BOX
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="product-section mb-4">
                                            <div class="row">
                                                <div class="col-md-4 d-flex align-items-center justify-content-center">
                                                    <div class="product-img">
                                                        <img src="./assets/img/product.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <h5>10 CM ELECTRIC SPARKLER</h5>
                                                    <div class="price">
                                                        <h6 class="mb-0">₹55 <span>₹275.00</span></h6>
                                                    </div>
                                                    <div class="qty-container mt-3">
                                                        <button class="qty-btn-minus btn-light" type="button">-</button>
                                                        <input type="text" name="qty" value="0" class="input-qty"/>
                                                        <button class="qty-btn-plus btn-light" type="button">+</button>
                                                    </div>
                                                </div>
                                                <div class="offer-section">
                                                    5 BOX
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product Category Tab End -->

                <!-- Product Cart Start -->
                <div class="col-md-3">
                    <div class="home-cart mb-3">
                        <div class="home-cart-title">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                            </svg>
                            Cart (4)
                        </div>
                        <div class="home-cart-list d-flex align-items-center">
                            <div class="cart-number">
                                <span>5</span>
                            </div>
                            <div class="cart-details">
                                <h6 class="mb-0">KIT KAT (10 PCS)</h6>
                                <p class="mb-0 price">₹55</p>
                            </div>
                        </div>
                        <div class="home-cart-list d-flex align-items-center">
                            <div class="cart-number">
                                <span>5</span>
                            </div>
                            <div class="cart-details">
                                <h6 class="mb-0">KIT KAT (10 PCS)</h6>
                                <p class="mb-0 price">₹55</p>
                            </div>
                        </div>
                        <div class="home-cart-list d-flex align-items-center">
                            <div class="cart-number">
                                <span>5</span>
                            </div>
                            <div class="cart-details">
                                <h6 class="mb-0">KIT KAT (10 PCS)</h6>
                                <p class="mb-0 price">₹55</p>
                            </div>
                        </div>
                        <div class="home-cart-list d-flex align-items-center">
                            <div class="cart-number">
                                <span>5</span>
                            </div>
                            <div class="cart-details">
                                <h6 class="mb-0">KIT KAT (10 PCS)</h6>
                                <p class="mb-0 price">₹55</p>
                            </div>
                        </div>
                        <div class="home-cart-list d-flex align-items-center">
                            <div class="cart-number">
                                <span>5</span>
                            </div>
                            <div class="cart-details">
                                <h6 class="mb-0">KIT KAT (10 PCS)</h6>
                                <p class="mb-0 price">₹55</p>
                            </div>
                        </div>
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
                                    <td class="text-right price">₹255.00</td>
                                </tr>
                                <tr>
                                    <th>Offers</th>
                                    <td class="text-right price">₹50.00 </td>
                                </tr>
                                <tr>
                                    <th>Total </th>
                                    <td class="text-right price">₹205.00 </td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#orderDetails">
                            Place Order
                        </button>
                    </div>
                    <!-- Product Cart Start -->
                </div>
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
                                        <tr  class="col-md-6">
                                            <th>Account Name</th>
                                            <td>:</td>
                                            <td>Cracker</td>
                                        </tr>
                                        <tr  class="col-md-6">
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
                        <div class="col-md-6 mb-4">
                            <div class="card order-box">
                                <div class="home-cart-title">
                                    Product Details
                                </div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Product</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col" class="text-right price">Price</th>
                                        </tr>
                                        <tr>
                                            <td scope="col">Product1</td>
                                            <td scope="col" class="price">4</td>
                                            <td scope="col" class="text-right price">₹300.00</td>
                                        </tr>
                                        <tr>
                                            <td scope="col">Product2</td>
                                            <td scope="col" class="price">6</td>
                                            <td scope="col" class="text-right price">₹800.00</td>
                                        </tr>
                                        <tr>
                                            <td scope="col">Product3</td>
                                            <td scope="col" class="price">4</td>
                                            <td scope="col" class="text-right price">₹231.00</td>
                                        </tr>
                                        <tr>
                                            <td scope="row" colspan="2" >SubTotal</td>
                                            <td class="text-right price">₹7543.00</td>
                                        </tr>
                                        <tr >
                                            <td scope="row" colspan="2" >Offer</td>
                                            <td class="text-right price">₹-43.00</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr  class="table-danger">
                                            <th scope="row" colspan="2" >Total</th>
                                            <th class="text-right price">₹6543.00</th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card order-box">
                                <form class="row g-3 needs-validation" novalidate>
                                    <div class="home-cart-title">
                                    Customer Details
                                    </div>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" id="validationCustom01" placeholder="Full Name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="tel" class="form-control" id="exampleInputEmail1" placeholder="Phone" aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" id="validationCustom03" placeholder="Address" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="validationCustom03" placeholder="City" required>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-select" id="validationCustom04" placeholder="State"  required>
                                            <option selected disabled value="">State</option>
                                            <option>Kerala</option>
                                            <option>Tamil Nadu</option>
                                            <option>Andhra Pradesh</option>
                                            <option>Karnataka</option>
                                            <option>Maharastra</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="validationCustom05" placeholder="Pincode"  required>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-danger" type="submit">Submit</button>
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
                    <p>Dear Customer If Your Package Got Drenched In Rain Or Already Opened By Someone, Please Contact Ganesh Ka Traders From There Itself, This Should Be Transport Responsibility, If You Call From There Transport Payment Will Be Detect And New Order Will Be Placed Behalf You.</p>
                </div>
                <div class="col-md-6" style>
                    <h4>Payment Confirmation :</h4>
                    <p>Dear Customer If Your Done Your Payment Kindly Take The Screen Shots And Send To The Below Whats App Number With Order Your Number Ph No:6585654056. Our Team Will Contact You. We Assured Your Payment. We Will Contact You.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Payment Section End -->

    <section class="normal">
        <div class="container pt-5 pb-5">
            <h5>Purchase 2000 to 8000(One Box Content) In tamilnadu upto <span>300km</span> Delivery charge <span>Just 250 to 300 Rupees Only.</span><br>
            Purchase 2000 to 8000(One Box Content) In tamilnadu upto <span>350km to 550Km</span> Delivery charge <span>Just 300 to 350 Rupees Only.</span></h5>
        </div>
    </section>

    <?php $title="Home page";
    include './layouts/footer.php'
    ?>
    
    <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
    <script>
        var buttonPlus  = $(".qty-btn-plus");
        var buttonMinus = $(".qty-btn-minus");

        var incrementPlus = buttonPlus.click(function() {
        var $n = $(this)
        .parent(".qty-container")
        .find(".input-qty");
        $n.val(Number($n.val())+1 );
        });

        var incrementMinus = buttonMinus.click(function() {
        var $n = $(this)
        .parent(".qty-container")
        .find(".input-qty");
        var amount = Number($n.val());
        if (amount > 0) {
            $n.val(amount-1);
        }
        });
    </script>

</body>
</html>