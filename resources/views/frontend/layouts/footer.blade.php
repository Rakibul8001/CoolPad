<!-- Start Footer Area -->
<footer class="footer">
	<!-- Footer Top -->
	<div class="footer-top section ">
		<div class="container ">
			<div class="row">
				<div class="col-md-4 col-12">
					<!-- Single Widget -->
					<div class="single-footer about">
						<div class="logo footer-logo">
							<a href="{{route('home')}}"><img src="{{asset('frontend/img/logo_footer.png')}}"
									alt="footer-logo"></a>
						</div>
						@php
						$settings=DB::table('settings')->get();
						@endphp
						<p class="text">@foreach($settings as $data) {{$data->short_des}} @endforeach</p>
					</div>
					<!-- End Single Widget -->
				</div>
				<div class="col-md-2 col-12">
					<!-- Single Widget -->
					<div class="single-footer links">
						<h4>Information</h4>
						<ul>
							<li><a href="{{route('about-us')}}">About Us</a></li>
							<li><a href="#">CoolPad Community</a></li>
							<li><a href="{{ route('service-point') }}">Service Partner</a></li>
							<li><a href="{{route('contact')}}">Contact Us</a></li>
						</ul>
					</div>
					<!-- End Single Widget -->
				</div>
				<div class="col-md-2 col-12">
					<!-- Single Widget -->
					<div class="single-footer links">
						<h4>Support</h4>
						<ul>
							<li><a href="#">Customer Care</a></li>
							<li><a href="{{ route('faq') }}">FAQ</a></li>
							<li><a href="#">Shipping</a></li>
							<li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
						</ul>
					</div>
					<!-- End Single Widget -->
				</div>
				<div class=" col-md-2 col-12">
					<!-- Single Widget -->
					<div class="single-footer links">
						<h4>My Account</h4>
						<ul>
							<li><a href="{{route('user-profile')}}">Account Details</a></li>
							<li><a href="{{route('user.order.index')}}">Orders</a></li>
							<li><a href="{{route('user.address.index')}}">Address</a></li>
							<li><a href="{{route('user.wishlist.index')}}">Wishlist</a></li>
						</ul>
					</div>
					<!-- End Single Widget -->
				</div>
				<div class="col-md-2 col-12">
					<!-- Single Widget -->
					<div class="single-footer social">
						<h4>Follow Us</h4>
						<!-- Single Widget -->
						<div class="contact">
							<ul>
								<li>@foreach($settings as $data) {{$data->address}} @endforeach</li>
								<li>@foreach($settings as $data) {{$data->email}} @endforeach</li>
								<li>@foreach($settings as $data) {{$data->phone}} @endforeach</li>
							</ul>
						</div>
						<div class="Footer-social">
							<span class="author">
								<a href="https://www.facebook.com/CoolpadBD"><i class="fa fa-facebook"></i> </a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="https://www.youtube.com/channel/UCrELeAAaA1GmQH-pcrnAjMQ"><i
										class="fa fa-youtube-play"></i></a>
								<a href="#"><i class="fa fa-instagram"></i></a>


							</span>
						</div>
						<!-- End Single Widget -->

					</div>
					<!-- End Single Widget -->
				</div>
			</div>
		</div>
	</div>
	<!-- End Footer Top -->
	<div class="copyright">
		<div class="container">
			<div class="inner">
				<div class="row">
					<div class="col-lg-6 col-12">
						<div class="left">
							<p>Copyright © {{date('Y')}} <a href="#" target="_blank">CoolPad</a> - All Rights Reserved.
							</p>
						</div>
					</div>
					<div class="col-lg-6 col-12">
						<div class="right">
							<img src="{{asset('backend/img/payments.png')}}" alt="#">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- /End Footer Area -->
<!-- Mega-menu JS -->
<script src="{{asset('frontend/js/base.js')}}"></script>
<!-- product list page JS -->
<script src="{{asset('frontend/js/list.js')}}"></script>

<!-- Jquery -->
<script src="{{asset('frontend/js/jquery.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery-migrate-3.0.0.js')}}"></script>
<script src="{{asset('frontend/js/jquery-ui.min.js')}}"></script>
<!-- Popper JS -->
<script src="{{asset('frontend/js/popper.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<!-- Color JS -->
<script src="{{asset('frontend/js/colors.js')}}"></script>
<!-- Slicknav JS -->
<script src="{{asset('frontend/js/slicknav.min.js')}}"></script>
<!-- Owl Carousel JS -->
<script src="{{asset('frontend/js/owl-carousel.js')}}"></script>
<!-- Magnific Popup JS -->
<script src="{{asset('frontend/js/magnific-popup.js')}}"></script>
<!-- Waypoints JS -->
<script src="{{asset('frontend/js/waypoints.min.js')}}"></script>
<!-- Countdown JS -->
<script src="{{asset('frontend/js/finalcountdown.min.js')}}"></script>
<!-- Nice Select JS -->
<script src="{{asset('frontend/js/nicesellect.js')}}"></script>
<!-- Flex Slider JS -->
<script src="{{asset('frontend/js/flex-slider.js')}}"></script>
<!-- ScrollUp JS -->
<script src="{{asset('frontend/js/scrollup.js')}}"></script>
<!-- Onepage Nav JS -->
<script src="{{asset('frontend/js/onepage-nav.min.js')}}"></script>
{{-- Isotope --}}
<script src="{{asset('frontend/js/isotope/isotope.pkgd.min.js')}}"></script>
<!-- Easing JS -->
<script src="{{asset('frontend/js/easing.js')}}"></script>

<!-- PopUp Helper -->
<script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>

<!-- wow animation page JS -->
<script src="{{asset('frontend/js/wow.min.js')}}"></script>

<!-- Active JS -->
<script src="{{asset('frontend/js/active.js')}}"></script>


{{-- Dependent dropdown service partner --}}


<script>
	$(document).ready(function () {
		  $('.select1').show();

    //Ajax Dependent start
    //First District is under Division
            $("#division_id").on('change', function(){
                let id = $(this).val();
                $("#district_id").empty();
                $("#district_id").append(`<option value="0" disabled selected>processing....</option>`);

                $.ajax({
                    type:"GET",
                    url:"district/"+id,
                    success: function(response){
                        var response = JSON.parse(response);
                        $("#district_id").empty();
                        $("#district_id").append(`<option value="0" disabled selected>Select District</option>`);

                        response.forEach(element =>{
                            $("#district_id").append(`<option value="${element['id']}">${element['name']}</option>`);
                        })
                    }
                });
            });

    // Location is under District
            $("#district_id").on('change', function(){
                let id = $(this).val();
				$("#location_id").append(`<option value="0" disabled selected>processing....</option>`);

                $.ajax({
                    type:"GET",
                    url:"location/"+id,
                    success: function(response){
                        var response = JSON.parse(response);
                        $("#location_id").empty();

                        response.forEach(element =>{

                            $("#location_id").append(`
							    <li class="sli" id="${element['id']}" >
									<div class="sdiv" > 
									<dl class="f-l"><dt>Address:</dt><dd class="address"> <p>${element['address']}</p> </dd></dl> 
									<dl class="f-r"> <dt>Hours:</dt> <dd> <p>${element['hours']}</p> </dd> </dl>
									<dl class="f-r warranty"> <dt>Service offered:</dt> <dd class="repair-pros"> CoolPad Products </dd> </dl> 
									</div> 
									<p><span class="title">Phone:</span>+8801716646467</p>  <p class="tip">Authorized collection point</p> 
							</li>
							`);
                        })
                    }
                });
            });
      //Ajax Dependent end

  });
</script>
{{--End Dependent dropdown service partner --}}

@stack('scripts')
<script>
	setTimeout(function(){
		  $('.alert').slideUp();
		},5000);
		$(function() {
		// ------------------------------------------------------- //
		// Multi Level dropdowns
		// ------------------------------------------------------ //
			$("ul.dropdown-menu [data-toggle='dropdown']").on("click", function(event) {
				event.preventDefault();
				event.stopPropagation();

				$(this).siblings().toggleClass("show");

				if (!$(this).next().hasClass('show')) {
				$(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
				}
				$(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
				$('.dropdown-submenu .show').removeClass("show");
				});

			});
		});
</script>

{{--  Dropdown Mega Menu Fade     --}}
<script>
	jQuery(document).ready(function(){
	$(".main-nav-iteml").hover(
		function() { $('.dropdown-menu', this).fadeIn("fast");
		},
		function() { $('.dropdown-menu', this).fadeOut("fast");
	});
});
</script>

<!-- start video popup -->
<script>
	$(document).ready(function() {
$('.popup').magnificPopup({
	type:'iframe',
	type: 'iframe',
    // other options
    iframe: {
        markup: '<div class="mfp-iframe-scaler">'+
                  '<div class="mfp-close"></div>'+
                  '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>'+
                '</div>',
        patterns: {
          youtube: {
            index: 'youtube.com/',
            id: 'v=',
            src: 'https://www.youtube.com/embed/%id%'
          },
        },
        srcAction: 'iframe_src',
      }
	});
});
</script>
<!-- end video popup -->

<!-- Amimation Activation -->
<script src="js/wow.min.js"></script>
<script>
	new WOW().init();
</script>
<!-- End Amimation Activation -->

