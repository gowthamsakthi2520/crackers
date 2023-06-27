<!DOCTYPE html>
<html lang="eng">
<head>
	<!-- Required meta tags -->
	<meta charset="UTF-8">
	<meta name="base_url" content="{{url('/')}}" />
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="{{ asset('frontend/assets/css/all.min.css') }}">
	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap-icons.css') }}">
	<!-- Style CSS -->
	<link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
	<!-- Responsive CSS -->

	<link href="{{asset('backend/noty/css/noty.css')}}" rel="stylesheet" />
	<!-- Title CSS -->
	<title>CRACKERS</title>
	<!-- Favicon Link -->
	<link rel="icon" type="image/png" href="{{ asset('frontend/assets/img/favicon.png') }}">  
	<meta name="robots" content="noindex">
</head>
<body>

<!-- PreLoader Start -->
	<!-- <div class="loader-content">
		<div class="d-table">
			<div class="d-table-cell">
				<div class="sk-folding-cube">
					<div class="sk-cube1 sk-cube"></div>
					<div class="sk-cube2 sk-cube"></div>
					<div class="sk-cube4 sk-cube"></div>
					<div class="sk-cube3 sk-cube"></div>
				</div>
			</div>
		</div>
	</div> -->
	<!-- PreLoader End -->

	<!-- Header Area Start -->
	<div class="header-area">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-7">
					<div class="header-left">
						<div class="logo-main">
							<a href="{{ asset('') }}" class="logo">
								<img src="{{ asset('frontend/assets/img/crackers-logo.png') }}" class="main-logo" alt="logo">
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-5">
					<div class="header-right">
						<div class="whatsapp-section d-flex align-items-center justify-content-end">
							<a href="" class="whatsapp">
								<img src="{{ asset('frontend/assets/img/whatsapp.png') }}" class="" alt="whatsapp" width="50">
								<div class="whatsapp-details">
									<h6>Order Confirmation :</h6>
									<p class="mb-0"><a href="">7401439306, 9562705897, 6267181200</a></p>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Header Area End -->

	<!-- Navbar Area Start -->
	<nav class="navbar navbar-expand-lg">
	<div class="container d-flex">
		<a class="navbar-brand desktop-none" href="#">
			<img src="{{ asset('frontend/assets/img/crackers-logo.png') }}" class="main-logo" alt="logo">
		</a>
		<a class="navbar-toggler d-content" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
			<img src="{{ asset('frontend/assets/img/icon/menu.png') }}" class="" width="30" alt="menu">
		</a>
		<div class="collapse navbar-collapse" id="navbarScroll">
			<ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 300px;">
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="{{ asset('') }}">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ route('about') }}">About Us</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Retail Brand Price</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Whole Sale Price</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Gift Box</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Family Pack</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ route('contact') }}">Contact us</a>
				</li>
				<!-- <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					Link
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
						<li><a class="dropdown-item" href="#">Action</a></li>
						<li><a class="dropdown-item" href="#">Another action</a></li>
						<li><hr class="dropdown-divider"></li>
						<li><a class="dropdown-item" href="#">Something else here</a></li>
					</ul>
				</li> -->
			</ul>
		</div>
	</div>
	</nav>
	<!-- Navbar Area End -->

<!-- Footer Area End -->
<script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>

<!-- Back top Button -->
<div class="top-btn">
	<i class="icofont-scroll-bubble-up"></i>
</div>


@yield('content')


 <!-- Footer Area Start -->
 <footer class="footer-area">
<div class="delivery-footer">
	<div class="container text-center">
		<h6>We Delivered Tamilnadu, Kerala, Andhra Pradesh, Karnataka and Maharastra</h6>
	</div>
</div>

<div class="container mt-4">
	<div class="row">

		<div class="col-lg-2 col-sm-6 col-6">
			<div class="footer-widget">
				<h3>INFORMATION</h3>
				<hr>
				<ul>
					<li>
						<a href="{{ asset('') }}">Home</a>
					</li>         
					<li>
						<a href="{{ route('about') }}">About Us</a>
					</li>
					<li>
						<a href="{{ route('pricelist') }}">Pricelist </a>
					</li>
					<li>
						<a href="{{ route('contact') }}">Contact</a>
					</li>
				</ul>
			</div>
		</div>

		<div class="col-lg-3 col-sm-6 col-6">
			<div class="footer-widget">
				<h3>POLICY INFO</h3>
				<hr>
				<ul>
					<li>
						<a href="#">FAQ</a>
					</li>         
					<li>
						<a href="#">Privacy Policy</a>
					</li>
					<li>
						<a href="#">Terms Of  Use</a>
					</li>
				</ul>
				
			</div>
		</div>

		<div class="col-lg-2 col-sm-6 col-6">
			<div class="footer-widget">
				<h3 class="d-hidden">OFFERS</h3>
				<hr>
				<ul>
					<li>
						<a href="{{ route('pricelist') }}">Price List</a>
					</li>         
					<li>
						<a href="#">Whole Sale</a>
					</li>
					<li>
						<a href="#">Brands</a>
					</li>
					<li>
						<a href="{{ route('contact') }}">Contact</a>
					</li>
				</ul>
				
			</div>
		</div>

		<div class="col-lg-3 col-sm-6 col-6">
			<div class="footer-widget">
				<h3>FOR ENQUIRY</h3>
				<hr>
				<ul>       
					<li class="mb-2">
						<h6 class="mb-0">Customer Support</h6>
						<a href="#">+91-9750566600</a>
					</li>
					<li class="mb-2">
						<h6 class="mb-0">Sivakasi Despatch</h6>
						<a href="#">+91-6542449196</a>
					</li>
				</ul>
			</div>
		</div>

		<div class="col-lg-2 col-sm-6 col-6">
			<div class="footer-widget">
				<h3>SOCIAL MEDIA</h3>
				<hr>
				<div class="footer-social">
					<a href="#" target="_blank">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
							<path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
						</svg>
					</a>
					<a href="#" target="_blank">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
							<path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
						</svg>
					</a>
					<a href="#" target="_blank">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
							<path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
						</svg>
					</a>
					<a href="#" target="_blank">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
							<path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
						</svg>
					</a>
				</div>
			</div>
		</div>
		
	</div>
</div>
<div class="copyright-area">
	<div class="container text-center align-items-center justify-content-between">
		<p>© {{ date('Y') }} GANESH KA TRADERS. All rights reserved </p>
		
	</div>
</div>

<div class="lines">
	<div class="line"></div>
	<div class="line"></div>
	<div class="line"></div>
</div>
</footer>

<!-- jQuery first, then Bootstrap JS -->
<script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{asset('backend/noty/js/noty.min.js')}}"></script>
<script src="{{ asset('backend/js/custom.js') }}"></script>



<script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>

@include('message')
<script>
$(document).on("click",".qty-btn",function(){
	var product_id=$(this).data('id');
	console.log("hi");
	var product_qty=$('.input-qty'+product_id).val();
if($(this).data('type') =="increment"){
	console.log(product_id);
	$('.input-qty'+product_id).val(Number(product_qty)+1);
	$('.input-qty-hidden'+product_id).val(Number(product_qty)+1);
}else{
	
	if(Number(product_qty) <=1){
		return false;
	}
	$('.input-qty'+product_id).val(Number(product_qty)-1);
	$('.input-qty-hidden'+product_id).val(Number(product_qty)-1);
}
})

function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
</script>


<!-- Custom JS -->
<script src="{{ asset('frontend/assets/js/main.js') }}"></script>
@yield('scripts')

</body>
</html>
