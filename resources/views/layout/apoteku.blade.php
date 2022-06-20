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
						Free shipping for all orders in Indonesia
					</div>
				</div>
			</div>

			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop container">
					
					<!-- Logo desktop -->		
					<a href="{{url('/')}}" class="logo">
						<img style="max-width:60%;" src="{{asset('assets/images/icons/logo-01.png')}}" alt="IMG-LOGO">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li class="@yield('home-active')">
								<a href="{{ url('/') }}">Home</a>
							</li>

							<li class="@yield('medicine-active')">
								<a href="{{ url('medicines') }}">Medicines</a>
							</li>

							@auth
								@can('only-admin')
									<li class="@yield('category-active')">
										<a href="{{url('categories')}}">Categories</a>
									</li>
								@endcan
							@endauth

							@auth
								@can('only-admin')
									<li class="@yield('user-active')">
										<a href="{{url('users')}}">Users</a>
									</li>
								@endcan
							@endauth

							@auth
								@can('only-admin')
									<li class="@yield('report-active')">
										<a href="#">Reports</a>
										<ul class="sub-menu" style=" z-index: 999;">
											<li><a href="{{ url('transactions') }}">Transactions</a></li>
											<li><a href="{{url('reports/bestselling')}}">Best Selling Medicines</a></li>
											<li><a href="{{url('reports/bestpurchasing')}}">Best Purchasing Customers</a></li>
										</ul>
									</li>
								@endcan
							@endauth

							<li class="@yield('about-active')">
								<a href="{{url('about')}}">About</a>
							</li>
						</ul>
					</div>	

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">

						<?php $total=0; ?>
						@if(session('cart'))
							<?php $total = session('totalCart'); ?>
						@endif
						
						@auth
							@can('only-customer')
								<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="{{ $total }}" id="cartTotal">
									<i class="zmdi zmdi-shopping-cart"></i>
								</div>
							@endcan
						@else
							<a href="{{ route('login') }}" class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
								<i class="zmdi zmdi-shopping-cart"></i>
							</a>
						@endauth

						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11">
							<ul class="main-menu">
								<li style="padding:0 !important; margin:0 !important;">
									@auth
										<i class="zmdi zmdi-account-circle"></i>
										<ul class="sub-menu" style="left: -150px; margin-top:10px; z-index: 999;">
											<li><a href="{{ url('users/'.Auth::user()->id).'/edit' }}">Edit Account</a></li>
											@can('only-customer')
												<li><a href="{{ url('transactions') }}">My Orders</a></li>
											@endcan
											<li><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
											<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
												@csrf
											</form>
										</ul>
									@else
										<a href="{{ route('login') }}" class="dis-block p-0" style="font-size: 26px">
											<i class="zmdi zmdi-account-circle"></i>
										</a>
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

				@auth
					@can('only-customer')
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="{{ $total }}" id="cartTotal">
							<i class="zmdi zmdi-shopping-cart"></i>
						</div>
					@endcan
				@else
					<a href="{{ route('login') }}" class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
						<i class="zmdi zmdi-shopping-cart"></i>
					</a>
				@endauth

				<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11">
					<ul class="main-menu">
						<li style="padding:0 !important; margin:0 !important;">
							@auth
								<i class="zmdi zmdi-account-circle"></i>
								<ul class="sub-menu" style="left: -150px; margin-top:10px; z-index: 999;">
									<li><a href="{{ url('users/'.Auth::user()->id).'/edit' }}">Edit Account</a></li>
									@can('only-customer')
										<li><a href="{{ url('transactions') }}">My Orders</a></li>
									@endcan
									<li><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
									<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
										@csrf
									</form>
								</ul>
							@else
								<a href="{{ route('login') }}" class="dis-block p-0" style="font-size: 26px">
									<i class="zmdi zmdi-account-circle"></i>
								</a>
							@endauth
						</li>
					</ul>
				</div>
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
						Free shipping for all orders in Indonesia
					</div>
				</li>
			</ul>

			<ul class="main-menu-m">
				<li class="@yield('home-active')">
					<a href="{{ url('/') }}">Home</a>
				</li>

				<li class="@yield('medicine-active')">
					<a href="{{ url('medicines') }}">Medicines</a>
				</li>

				@auth
					@can('only-admin')
						<li class="@yield('category-active')">
							<a href="{{url('categories')}}">Categories</a>
						</li>
					@endcan
				@endauth

				@auth
					@can('only-admin')
						<li class="@yield('user-active')">
							<a href="{{url('users')}}">Users</a>
						</li>
					@endcan
				@endauth

				@auth
					@can('only-admin')
						<li class="@yield('report-active')">
							<a href="#">Reports</a>
							<ul class="sub-menu" style=" z-index: 999;">
								<li><a href="{{ url('transactions') }}">Transactions</a></li>
								<li><a href="{{url('reports/bestselling')}}">Best Selling Medicines</a></li>
								<li><a href="{{url('reports/bestpurchasing')}}">Best Purchasing Customers</a></li>
							</ul>
						</li>
					@endcan
				@endauth

				<li class="@yield('about-active')">
					<a href="{{url('about')}}">About</a>
				</li>
			</ul>
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
			
			<div class="header-cart-content flex-w js-pscroll" id="cartBar">
				<ul class="header-cart-wrapitem w-full" id="ulCartBar">
					<?php
                        $totalPrice=0;
                    ?>
                    @if(session('cart'))
						@foreach(session('cart') as $id=>$m)
						<?php
							$totalPrice+=$m['quantity']*$m['price'];
						?>
						<li class="header-cart-item flex-w flex-t p-b-6 p-t-6 bor20">
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
					<div class="header-cart-total w-full p-tb-40" id="totalCartBar" total="{{ $totalPrice }}">
						Total: Rp{{ number_format($totalPrice,0,',','.') }},-
					</div>

					<div class="header-cart-buttons flex-w w-full">
						<a href="{{ url('cart') }}" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
							View Cart
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="content-medicine">
		@yield('content')
	</div>

	<!-- Footer -->
	<footer class="bg3 p-t-75 p-b-32">
		<div class="container">
			<div class="row" style="justify-content: space-evenly;">
				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Menu
					</h4>

					<ul>
						<li class="p-b-10">
							<a href="{{url('/')}}" class="stext-107 cl7 hov-cl1 trans-04">
								Home
							</a>
						</li>

						<li class="p-b-10">
							<a href="{{url('medicines')}}" class="stext-107 cl7 hov-cl1 trans-04">
								Medicines
							</a>
						</li>

						<li class="p-b-10">
							<a href="{{url('about')}}" class="stext-107 cl7 hov-cl1 trans-04">
								About
							</a>
						</li>
					</ul>
				</div>


				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						GET IN TOUCH
					</h4>

					<p class="stext-107 cl7 size-201">
						Any questions? Let Us Know! Call us on +01234567 or email us on apoteku@mail.com
					</p>
				</div>
			</div>

				<p class="stext-107 cl6 txt-center">
					Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Apotek U</p>
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

		$(document).on('click', '.js-addcart-detail', function(){
			var location = $(this).attr("location");

			var medicineName = "";
			var id = 0;
			var qty = 0;
			if (location == "detail"){
				medicineName = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
				id = $(this).parent().parent().parent().parent().find('.idmedicine').val();
				qty = $(this).parent().parent().parent().parent().find('.qtyMedicine').val();
			}
			else {
				medicineName = $(this).attr("generic");
				id = $(this).attr("id");
				qty = 1;
			}

			console.log(qty);
			var token_name = $('input[name="_token"]').val();

			if (token_name == undefined) {
				window.location.href = "{{ route('login')}}";
			} else {
				$.ajax({
					type: 'POST',
					url: '{{ route("medicines.addToCart") }}',
					data: { "_token": token_name, 'id':id, 'qty':qty},
					success: function(data){
						if (data.status == 'ok'){
							swal(medicineName, "is added to cart !", "success");
							var total = data.totalCart;
							var name = data.name;
							var price = data.price;
							var photo = data.photo;
							$("div.js-show-cart").attr('data-notify', total);
							var tot = parseInt($('#totalCartBar').attr('total'));
							totalPrice = tot + qty * price;
							$('#totalCartBar').attr('total', totalPrice);
							$('#totalCartBar').html('Total: Rp'+totalPrice.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".")+",-");
							var carttt = data.cart;
							$('#ulCartBar').html("");
							$.each(carttt, function(id, isiArray) {
								var p = isiArray['photo'];
								var text = `<li class="header-cart-item flex-w flex-t p-b-6 p-t-6 bor20"><div class="header-cart-item-img">
								<img src="{{asset('assets/images/medicines/`+ p +`')}}" alt="IMG"></div><div class="header-cart-item-txt p-t-8"><a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">`+isiArray['name']+`</a><span class="header-cart-item-info">`+isiArray['quantity']+` x Rp`+ isiArray['price'].toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".")+`,-</span></div></li>`;
								$("#ulCartBar").append(text);
							});
						} 
					}
				});
			}
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