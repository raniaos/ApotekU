<!DOCTYPE html>
<html lang="en">
<head>
	<title>@yield('title')</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{asset('assets/images/icons/favicon.png')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/iconic/css/material-design-iconic-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/linearicons-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/slick/slick.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/MagnificPopup/magnific-popup.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/perfect-scrollbar/perfect-scrollbar.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/main.css')}}">
<!--===============================================================================================-->

<!-- Css Styles -->
<link rel="stylesheet" href="{{asset('assets/css2/elegant-icons.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('assets/css2/nice-select.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('assets/css2/owl.carousel.min.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('assets/css2/slicknav.min.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('assets/css2/style.css')}}" type="text/css">
</head>
<body class="animsition">

	<!-- Header -->
	<header class="@yield('header-class')">
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<!-- Topbar -->
			<div class="top-bar">
				<div class="content-topbar flex-sb-m h-full container">
					<div class="left-top-bar">
						Free shipping for standard order over $100
					</div>

					<div class="right-top-bar flex-w h-full">
						<a href="#" class="flex-c-m trans-04 p-lr-25">
							Help & FAQs
						</a>

						<a href="#" class="flex-c-m trans-04 p-lr-25">
							My Account
						</a>

						<a href="#" class="flex-c-m trans-04 p-lr-25">
							EN
						</a>

						<a href="#" class="flex-c-m trans-04 p-lr-25">
							USD
						</a>
					</div>
				</div>
			</div>

			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop container">
					
					<!-- Logo desktop -->		
					<a href="#" class="logo">
						<img src="{{asset('assets/images/icons/logo-01.png')}}" alt="IMG-LOGO">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li class="@yield('home-active')">
								<a href="{{ url('/') }}">Home</a>
							</li>
							<!-- <li class="@yield('medicine-active')">
								@auth
									@if(Auth::user()->is_admin)
										<a href="{{ url('medicines-admin') }}">Medicines</a>
									@else
										<a href="{{ url('medicines') }}">Medicines</a>
									@endif
								@else
									<a href="{{ url('medicines') }}">Medicines</a>
								@endauth
							</li>

							@auth
								@if(Auth::user()->is_admin)
									<li class="@yield('category-active')">
										<a href="{{url('categories')}}">Categories</a>
									</li>
								@endif
							@endauth -->
							<li class="@yield('medicine-active')">
								@can('edit-delete-permission')
									<a href="{{ url('medicines-admin') }}">Medicines</a>
								@else
									<a href="{{ url('medicines') }}">Medicines</a>
								@endcan
							</li>

							@can('edit-delete-permission')
								<li class="@yield('category-active')">
									<a href="{{url('categories')}}">Categories</a>
								</li>
							@endcan

							<li class="@yield('report-active')">
								<a href="#">Reports</a>
								<ul class="sub-menu">
									<li><a href="{{ url('transactions') }}">Transactions</a></li>
									<li><a href="{{url('reports/bestselling')}}">Best Selling Medicines</a></li>
									<li><a href="{{url('reports/bestpurchasing')}}">Best Purchasing Customers</a></li>
								</ul>
							</li>

							<li class="@yield('about-active')">
								<a href="about.html">About</a>
							</li>
						</ul>
					</div>	

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
							<i class="zmdi zmdi-search"></i>
						</div>

						<?php $total=0; ?>
						@if(session('cart'))
							<?php $total = session('totalCart'); ?>
						@endif

						@guest
							<a href="{{ route('login') }}" class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
								<i class="zmdi zmdi-shopping-cart"></i>
							</a>
							<a href="{{ route('login') }}" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" data-notify="0">
								<i class="zmdi zmdi-favorite-outline"></i>
							</a>
						@endguest
						
						@auth
							@can('only-customer')
								<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="{{ $total }}" id="cartTotal">
									<i class="zmdi zmdi-shopping-cart"></i>
								</div>
								<a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" data-notify="0">
									<i class="zmdi zmdi-favorite-outline"></i>
								</a>
							@endcan
						@endauth

						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11">
							<ul class="main-menu">
								<li style="padding:0 !important; margin:0 !important;">
									@guest
										<a href="{{ route('login') }}" class="dis-block p-0" style="font-size: 26px">
											<i class="zmdi zmdi-account-circle"></i>
										</a>
									@endguest
									@auth
										<i class="zmdi zmdi-account-circle"></i>
										<ul class="sub-menu" style="left: -150px; margin-top:10px;">
											<li><a href="#">Edit Account</a></li>
											<li><a href="#">My Orders</a></li>
											<li><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
											<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
												@csrf
											</form>
										</ul>
									@endauth
								</li>
							</ul>
						</div>
					</div>
				</nav>
			</div>	
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
				<a href="index.html"><img src="{{asset('assets/images/icons/logo-01.png')}}" alt="IMG-LOGO"></a>
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m m-r-15">
				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
					<i class="zmdi zmdi-search"></i>
				</div>
	
				@guest
					<a href="{{ route('login') }}" class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
						<i class="zmdi zmdi-shopping-cart"></i>
					</a>
				@endguest
				
				@auth
					@can('add-cart')
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="0">
							<i class="zmdi zmdi-shopping-cart"></i>
						</div>
					@endcan
				@endauth

				<a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
					<i class="zmdi zmdi-favorite-outline"></i>
				</a>

				
				@guest
					<a href="{{ route('login') }}"><i class="zmdi zmdi-account-circle"></i></a>
				@else
					<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-10 p-r-11">
						<ul class="main-menu">
							@guest
								<a href="{{ route('login') }}" class="dis-block p-0" style="font-size: 26px">
									<i class="zmdi zmdi-account-circle"></i>
								</a>
							@endguest
							@auth
								<i class="zmdi zmdi-account-circle"></i>
								<ul class="sub-menu" style="left: -150px; margin-top:10px;">
									<li><a href="#">Edit Account</a></li>
									<li><a href="#">My Orders</a></li>
									<li><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
									<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
										@csrf
									</form>
								</ul>
							@endauth
							<li style="padding:0 !important; margin:0 !important;">
								<i class="zmdi zmdi-account-circle"></i>
								<ul class="sub-menu" style="left: -150px; margin-top:10px;">
									<li><a href="#">Edit Account</a></li>
									<li><a href="#">My Orders</a></li>
									<li><a href="#">Logout</a></li>
								</ul>
							</li>
						</ul>
					</div>
				@endguest
			</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">
			<ul class="topbar-mobile">
				<li>
					<div class="left-top-bar">
						Free shipping for standard order over $100
					</div>
				</li>

				<li>
					<div class="right-top-bar flex-w h-full">
						<a href="#" class="flex-c-m p-lr-10 trans-04">
							Help & FAQs
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							My Account
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							EN
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							USD
						</a>
					</div>
				</li>
			</ul>

			<ul class="main-menu-m">
				<li>
					<a href="index.html">Home</a>
				</li>

				<li>
					<a href="product.html">Shop</a>
				</li>

				<li>
					<a href="shoping-cart.html" class="label1 rs1" data-label1="hot">Features</a>
				</li>

				<li>
					<a href="blog.html">Blog</a>
				</li>

				<li>
					<a href="about.html">About</a>
				</li>

				<li>
					<a href="contact.html">Contact</a>
				</li>
			</ul>
		</div>

		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="{{asset('assets/images/icons/icon-close2.png')}}" alt="CLOSE">
				</button>

				<form class="wrap-search-header flex-w p-l-15" action="product.html">
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input class="plh3" type="text" name="search" placeholder="Search...">
				</form>
			</div>
		</div>
	</header>

	<!-- Cart -->
	<div class="wrap-header-cart js-panel-cart">
		<div class="s-full js-hide-cart"></div>
		<div class="header-cart flex-col-l p-l-65 p-r-25">
			<div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					Your Cart
				</span>

				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>
			
			<div class="header-cart-content flex-w js-pscroll">
				<ul class="header-cart-wrapitem w-full">
					<?php
                        $totalPrice=0;
                    ?>
                    @if(session('cart'))
                    
                    @foreach(session('cart') as $id=>$m)
                    <?php
                        $totalPrice+=$m['quantity']*$m['price'];
                    ?>
					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="{{asset('assets/images/medicines/'.$m['photo'])}}" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								{{ $m['name'] }}
							</a>

							<span class="header-cart-item-info">
								{{ $m['quantity'] }} x Rp{{ number_format($m['price'],0,',','.') }},-
							</span>
						</div>
					</li>
					@endforeach
                    @endif

				</ul>
				
				<div class="w-full">
					<div class="header-cart-total w-full p-tb-40">
						Total: Rp{{ number_format($totalPrice,0,',','.') }},-
					</div>

					<div class="header-cart-buttons flex-w w-full">
						<a href="{{ url('cart') }}" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
							View Cart
						</a>

						<a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
							Check Out
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	@yield('content')

	<!-- Footer -->
	<footer class="bg3 p-t-75 p-b-32">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Categories
					</h4>

					<ul>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Women
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Men
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Shoes
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Watches
							</a>
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Help
					</h4>

					<ul>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Track Order
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Returns 
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Shipping
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								FAQs
							</a>
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						GET IN TOUCH
					</h4>

					<p class="stext-107 cl7 size-201">
						Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1) 96 716 6879
					</p>

					<div class="p-t-27">
						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-instagram"></i>
						</a>

						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-pinterest-p"></i>
						</a>
					</div>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Newsletter
					</h4>

					<form>
						<div class="wrap-input1 w-full p-b-4">
							<input class="input1 bg-none plh1 stext-107 cl7" type="text" name="email" placeholder="email@example.com">
							<div class="focus-input1 trans-04"></div>
						</div>

						<div class="p-t-18">
							<button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">
								Subscribe
							</button>
						</div>
					</form>
				</div>
			</div>

			<div class="p-t-40">
				<div class="flex-c-m flex-w p-b-18">
					<a href="#" class="m-all-1">
						<img src="{{asset('assets/images/icons/icon-pay-01.png')}}" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="{{asset('assets/images/icons/icon-pay-02.png')}}" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="{{asset('assets/images/icons/icon-pay-03.png')}}" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="{{asset('assets/images/icons/icon-pay-04.png')}}" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="{{asset('assets/images/icons/icon-pay-05.png')}}" alt="ICON-PAY">
					</a>
				</div>

				<p class="stext-107 cl6 txt-center">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>. 
Downloaded from <a href="https://themeslab.org/" target="_blank">Themeslab</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

				</p>
			</div>
		</div>
	</footer>


	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

<!--===============================================================================================-->	
	<script src="{{asset('assets/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('assets/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('assets/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('assets/vendor/select2/select2.min.js')}}"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="{{asset('assets/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('assets/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('assets/vendor/slick/slick.min.js')}}"></script>
	<script src="{{asset('assets/js/slick-custom.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('assets/vendor/parallax100/parallax100.js')}}"></script>
	<script>
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="{{asset('assets/vendor/MagnificPopup/jquery.magnific-popup.min.js')}}"></script>
	<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
	</script>
<!--===============================================================================================-->
	<script src="{{asset('assets/vendor/isotope/isotope.pkgd.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('assets/vendor/sweetalert/sweetalert.min.js')}}"></script>
	<script>
		$('.js-addwish-b2').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function(){
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').on('click', function(){
			var medicineName = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			var id = $(this).parent().parent().parent().parent().find('.idmedicine').val();
			var qty = $(this).parent().parent().parent().parent().find('.qtyMedicine').val();
			console.log(id);
			console.log(qty);
			var token_name = $('input[name="_token"]').val();
			$.ajax({
				type: 'POST',
				url: '{{ route("medicines.addToCart") }}',
				data: { "_token": token_name, 'id':id, 'qty':qty},
				success: function(data){
					if (data.status == 'ok'){
						swal(medicineName, "is added to cart !", "success");
						$total = data.totalCart;
						$("div.js-show-cart").attr('data-notify', $total);
					}
				}
			});
		});

		// $('.js-addcart-detail').each(function(){
		// 	var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
		// 	$(this).on('click', function(){
		// 		swal(nameProduct, "is added to cart !", "success");
		// 	});
		// });
	
	</script>
<!--===============================================================================================-->
	<script src="{{asset('assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
<!--===============================================================================================-->
	@yield('javascript-extra')
	<script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>