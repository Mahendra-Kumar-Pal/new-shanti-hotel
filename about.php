<?php include('./assets/inc/head.php'); ?>
<?php include('./assets/inc/navigation.php'); ?>
<!-- Header Image -->
	<div style="background-image:url('./assets/img/testimonial8a.jpg'); height:300px;" id="aheader">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 text-center" style="color:#fff; padding-top:116px;">
					<h1 style="font-family: 'Poppins', sans-serif; font-size:36px; color:#f71a24;">About Our Hotel</h1>
				</div>
			</div>
		</div>
	</div>
<!-- Our History Section -->
	<div style="padding:0 15px;">
	<div class="container" style="margin-bottom:72px; margin-top:-55px; padding:20px; background:rgb(241 247 252); box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.4); border-radius: 4px;">
		<div class="row">
			<div class="col-lg-12" style="margin-left:0; margin-right:0;">
				<div style="border:1px solid #ddd;">
					<img id="abos3r1c1img" class="w-100" src="./assets/img/history.jfif" alt="" style="opacity:0.9; " />
				</div>
			</div>
			<div class="col-lg-12" style="margin:auto;">
				<div style="border:1px solid #ddd; padding:0 15px; background:#fff;">
					<h2 style="color: #f71a24; font-size: 34px; font-family: 'Poppins', sans-serif; margin:20px 0 15px; font-weight:bold;">Our History</h2>
					<p style="font-family:Lato, san-serif; font-size: 15px;line-height: 1.4; font-weight: 400;letter-spacing: normal;color: #858a99;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries. typesetting to make a type specimen book to make a type specimen book type and scrambled it to make a type specimen.</p>
				</div>
			</div>
		</div>
	</div>
	</div>
<!-- Countng Section -->
	<div class="container-fluid text-center" style="background:#000;color:#fff; position:absolute; padding-top:62px; height:300px;">
		<div class="row">
			<div class="col-xs-12" style="margin:auto;">
				<h2 style="margin-bottom:65px; font-family: 'Poppins', sans-serif;">Last month at New Shanti Hotel</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6" style="margin:auto;">
				<h2 class="count">200</h2>
				<p style=" font-family: 'Poppins', sans-serif;">Guests Stayed</p>
			</div>
			<div class="col-xs-6" style="margin:auto;">
				<h2 class="count">298</h2>
				<p style=" font-family: 'Poppins', sans-serif;">Meals Served</p>
			</div>
			<div class="col-xs-6" style="margin:auto;">
				<h2 class="count">75</h2>
				<p style=" font-family: 'Poppins', sans-serif;">Tours Booked</p>
			</div>
			<div class="col-xs-6" style="margin:auto;">
				<h2 class="count">10</h2>
				<p style=" font-family: 'Poppins', sans-serif;">Spa Treatments</p>
			</div>
		</div>
	</div>
	<div class="container-fluid" style="background:#000; margin-bottom:72px;">
		<div class="row">
			<div class="col-lg-12">
				<img class="img-fluid" src="./assets/img/contact.png" alt="" style="opacity:0.3; height:300px; background-size:;" />
			</div>
		</div>
	</div>
<!-- Banquet Section -->
	<div style="margin-bottom: 72px;padding-top: 18px;padding-bottom: 18px;">
        <div class="container">
            <div class="row">
                <div class="col-md-8"><img class="img-fluid" src="./assets/img/banquet1.jpg" style="opacity:0.9;"></div>
                <div class="col-md-4 text-center">
                    <h1 style="font-size: 34px; margin-top:99px; font-family: 'Poppins', sans-serif; color: #f71a24; font-weight:bold;">Banquet</h1>
					<img src="./assets/img/heading_bottom.png" style="margin-bottom: 20px; height: 18px;">
                    <p class="text-left" style="font-family:Lato, san-serif; font-size: 15px;line-height: 1.4;font-weight: 400;letter-spacing: normal;color: #858a99;"><br>Lorem Ipsum is simply dummy text of the text printing and typesetting industry. Lorem and Ipsum has been the industry's standard when dummy text ever since the 1500s, when an the unknown &nbsp;unknown printer&nbsp;ever since the of 1500s, when the unknown printer&nbsp;took galley.</p>
                </div>
            </div>
        </div>
    </div>
<!-- brand section -->
<div style="margin-bottom: 72px;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="owl-carousel owl-theme">
					<div class="item"><img src="./assets/img/paytm4.png" alt="" style="width:104px; height:50px;" /></div>
					<div class="item"><img src="./assets/img/paypal2.png" alt="" style="width:104px; height:50px;" /></div>
					<div class="item"><img src="./assets/img/oyo4.png" alt="" style="width:104px; height:50px;" /></div>
					<div class="item"><img src="./assets/img/bheem upi.jpg" alt="" style="width:104px; height:50px;" /></div>
					<div class="item"><img src="./assets/img/gpay.png" alt="" style="width:104px; height:50px;" /></div>
				</div>
			</div>
		</div>
	</div>
</div>	
<?php include('./assets/inc/footer.php'); ?>
	<!-- CountUp Javascript -->
	<script src="./assets/js/jquery.min.js"></script>
	<script src="./assets/js/jquery.countup.min.js"></script>
	<script src="./assets/js/jquery.waypoints.min.js"></script>
	<script>
		$('.count').countUp({
			delay: 10,
			time: 1000
		});
	</script>
    <script src="./assets/js/owl.carousel.js"></script>
	<script type="text/javascript">
		$('.owl-carousel').owlCarousel({
			loop:true,
			autoplay:true,
			autoplayTimeout:3000,
			autoplayHoverPause:true,
			<!-- margin:10, -->
			<!-- nav:true, -->
			responsive:{
				0:{
					items:3
				},
				600:{
					items:3
				},
				1000:{
					items:5
				}
			}
		})
	</script>
<?php include('./assets/inc/files.php'); ?>