<?php include('./assets/inc/head.php'); ?>
<?php include('./assets/inc/navigation.php'); ?>
<!-- banner -->
	<div class="carousel slide" data-ride="carousel" id="carousel-1" style="margin-bottom: 72px;">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active"><img class="w-100 d-block bannerimg" src="./assets/img/1 banner.jpg" alt="Slide Image"></div>
            <div class="carousel-item"><img class="w-100 d-block bannerimg" src="./assets/img/4 banner.jpg" alt="Slide Image"></div>
            <div class="carousel-item"><img class="w-100 d-block bannerimg" src="./assets/img/3 banner .jpg" alt="Slide Image"></div>
            <div class="carousel-item"><img class="w-100 d-block bannerimg" src="./assets/img/2 banner .jpg" alt="Slide Image"></div>
        </div>
        <div>
			<a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><i class="fa fa-chevron-left" style="color:#ed1b24; font-weight:900; font-size:32px; margin-left:15%;"></i><span class="sr-only">Previous</span></a>
			<a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><i class="fa fa-chevron-right" style="color:#ed1b24; font-weight:900; font-size:32px; margin-right:15%;"></i><span class="sr-only">Next</span></a>
		</div>
        <ol class="carousel-indicators">
            <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-1" data-slide-to="1" class=""></li>
            <li data-target="#carousel-1" data-slide-to="2" class=""></li>
            <li data-target="#carousel-1" data-slide-to="3" class=""></li>
        </ol>
    </div>
<!-- about section -->
	<div style="margin-bottom: 72px;padding-top: 18px;padding-bottom: 18px;">
        <div class="container">
            <div class="row">
                <div class="col-md-8"><img class="img-fluid" src="./assets/img/about2.png"></div>
                <div class="col-md-4 text-center">
                    <h1 style="font-size: 32px; margin-top: 84px; font-family: 'Poppins', sans-serif; font-weight:bold;">Welcome To&nbsp;<span style="color: #ed1b24;">New Shanti Hotel</span></h1>
					<img src="./assets/img/heading_bottom.png" style="margin-bottom: 20px; height: 18px;">
                    <p class="text-left" style="font-family:Lato, san-serif; font-size: 15px;line-height: 1.4;font-weight: 400;letter-spacing: normal;color: #858a99;"><br>Lorem Ipsum is simply dummy text of the text printing and typesetting industry. Lorem and Ipsum has been the industry's standard when dummy text ever since the 1500s, when an the unknown &nbsp;unknown printer&nbsp;ever since the of 1500s, when the unknown printer&nbsp;took galley.<br /><a href="about.php" style="color: #ed1b24; font-size:21px; line-height:1.8;">Read More &gt;&gt;</a><br><br></p>
                </div>
            </div>
        </div>
    </div>
<!-- banquet section -->
	<div style="background-color:rgb(241,247,252); padding-top:50px; padding-bottom:62px; margin-bottom:72px;">
		<div>
			<div class="container text-center">
				<div class="row">
					<div class="col-md-12">
						<h1 style="color: #ed1b24; font-size: 32px; font-family: 'Poppins', sans-serif; font-weight:bold;">Banquet Hall</h1>
						<img src="./assets/img/heading_bottom.png" style="margin-bottom: 45px; height:20px; width:250px;"></div>
				</div>
			</div>
		</div>
		<div class="owl-carousel owl-theme banquetOwl">
			<div class="item"><img src="./assets/img/Untitled-4.jpg" alt="" /></div>
			<div class="item"><img src="./assets/img/Untitled-3.jpg" alt="" /></div>
			<div class="item"><img src="./assets/img/Untitled-2.jpg" alt="" /></div>
		</div>
    </div>
<!-- accommodation section -->
	<div style="margin-bottom: 72px;">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-12">
                    <h1 style="color: #ed1b24; font-size: 32px; font-family: 'Poppins', sans-serif; font-weight:bold;">Accommodation</h1>
					<img src="./assets/img/heading_bottom.png" style="margin-bottom: 20px;color: #f09318; height:18px; width:340px;">
                    <p style="margin-bottom: 40px; letter-spacing: 0.5px; color: #858a99; font-size: 18px; font-weight: 400; font-family: 'Lato', san-serif;">Guest Room</p>
                    <div class="row" style="" id="acc-r2">
                        <div class="col-md-3 col-6">
							<button class="btn btn-default border rounded-0 border-light" type="button" style="background-color:#f71a24; color:#000;  padding: 10px 30px; letter-spacing:0.5px;font-family: 'Poppins', sans-serif;">ALL</button>
                        </div>
                        <div class="col-md-3 col-6">
							<button class="btn btn-default border rounded-0 border-light" type="button" style="background-color: #f71a24; color:#000;  padding: 10px 26px; letter-spacing:0.5px; font-family: 'Poppins', sans-serif;">ROYAL ROOM</button>
                        </div>
                        <div class="col-md-3 col-6">
							<button class="btn btn-default border rounded-0 border-light" type="button" style="background-color: #f71a24; color:#000; padding: 10px 28px; letter-spacing:0.5px; font-family: 'Poppins', sans-serif;">DELUX ROOM</button>
                        </div>
                        <div class="col-md-3 col-6">
							<button class="btn btn-default border rounded-0 border-light" type="button" style="background-color: #f71a24; color:#000; padding: 10px 30px; letter-spacing:0.5px; font-family: 'Poppins', sans-serif;">SUITE ROOM</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="photo-gallery" style="margin-bottom: 6px;">
        <div class="container" id="acc-con2">
            <div class="row photos">
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="./assets/img/1.jpg" data-lightbox="photos"><img class="img-fluid" src="./assets/img/1.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="./assets/img/3.jpg" data-lightbox="photos"><img class="img-fluid" src="./assets/img/3.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="./assets/img/4.jpg" data-lightbox="photos"><img class="img-fluid" src="./assets/img/4.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="./assets/img/5.jpeg" data-lightbox="photos"><img class="img-fluid" src="./assets/img/5.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="./assets/img/6.jpg" data-lightbox="photos"><img class="img-fluid" src="./assets/img/6.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="./assets/img/1.jpg" data-lightbox="photos"><img class="img-fluid" src="./assets/img/1.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="./assets/img/3.jpg" data-lightbox="photos"><img class="img-fluid" src="./assets/img/3.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="./assets/img/4.jpg" data-lightbox="photos"><img class="img-fluid" src="./assets/img/4.jpg"></a></div>
            </div>
        </div>
    </div>
<!-- facility section -->
	<div class="features-boxed" style="margin-bottom: 72px;background-color: #fff;">
        <div class="container">
            <div class="intro text-center">
                <h2 style="color: #f71a24; margin-bottom: 8px; font-size: 32px; font-family: 'Poppins', sans-serif;">Facilities</h2>
				<img src="./assets/img/heading_bottom.png" style="margin-bottom: 33px;height:20px; width:184px;">
                <p style="font-family:Lato, san-serif; font-size: 15px;line-height: 1.4;font-weight: 400;letter-spacing: normal;color: #858a99;">Nunc luctus in metus eget fringilla ut laoreet. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae.</p>
            </div>
            <div class="row features" style="background-image:url('./assets/img/facility1.jpg'); background-repeat:no-repeat;">
                <div class="col-lg-6 col-12 d-none">
                  <!-- <img src="./assets/img/facility1.jpg" class="img-fluid" alt="" style="height:445px;" /> -->
                </div>
                <div class="col-lg-3 col-6" style="" id="fac-c1r1c2">
                   <ul>
                   	<li style="margin-bottom:;">Free Parking</li>
                   	<li style="margin-bottom:;">Free WIFI</li>
                   	<li style="margin-bottom:;">Play Ground</li>
                   	<li style="margin-bottom:;">Credit Card Accepted</li>
                   	<li style="margin-bottom:;">Fitness Room</li>
                   	<li>Laundry Service</li>
                   </ul>
                </div>
                <div class="col-lg-3 col-6" style="" id="fac-c1r1c3">
                   <ul>
                   	<li><i class="fa fa-tree"></i></li>
                   	<li><i class="fa fa-wifi"></i></li>
                   	<li><i class="fa fa-map-marker"></i></li>
                   	<li><i class="fa fa-credit-card"></i></li>
                   	<li><i class="fa fa-dumbbell"></i></li>
                   	<li><i class="fa fa-tshirt"></i></li>
                   </ul>
                </div>
            </div>
        </div>
    </div>
<!-- testimonial section -->
	<div style="background-image:url('./assets/img/testimonial10.jpg'); background-repeat:no-repeat; background-size:cover; padding:62px 15px 36px; margin-bottom:72px;">
		<div class="owl-carousel owl-theme testimonialOwl">
			<div class="item text-center" style="width:500px;height:379px;background-color:#fff; color:#000;margin:auto;opacity:0.9; padding:50px 0;">
				<h1 style="color: #ed1b24; font-size: 32px; font-family: 'Poppins', sans-serif; font-weight:bold;">Testimonials</h1><img src="./assets/img/heading_bottom.png" style="width: 250px; margin:auto;">
				<p style="margin-right: 45px;margin-left: 45px; margin-top: 40px; margin-bottom: 30px; font-family:Lato, san-serif; font-size: 15px;line-height: 1.4;font-weight: 400;letter-spacing: normal;color: #858a99;">Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.<br></p>
				<img class="rounded-circle img-fluid" src="./assets/img/2.jpg" style="width: 50px;height: 50px; margin:auto;">
				<h5 style="color:#858a99; font-size:18px; font-family: auto;">Emily Clark</h5>
				<p style="color:#9fa2ab; font-size:14px; font-family: 'Font Awesome 5 Free';">Owner of Creative Ltd.</p>
			</div>
			<div class="item text-center" style="width:500px;height:379px;background-color:#fff; color:#000;margin:auto;opacity:0.9; padding:50px 0;">
				<h1 style="color: #ed1b24; font-size: 32px; font-family: 'Poppins', sans-serif; font-weight:bold;">Testimonials</h1><img src="./assets/img/heading_bottom.png" style="width: 250px; margin:auto;">
				<p style="margin-right: 45px;margin-left: 45px; margin-top: 40px; margin-bottom: 30px; font-family:Lato, san-serif; font-size: 15px;line-height: 1.4;font-weight: 400;letter-spacing: normal;color: #858a99;">Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.<br></p>
				<img class="rounded-circle img-fluid" src="./assets/img/2.jpg" style="width: 50px;height: 50px; margin:auto;">
				<h5 style="color:#858a99; font-size:18px; font-family: auto;">Emily Clark</h5>
				<p style="color:#9fa2ab; font-size:14px; font-family: 'Font Awesome 5 Free';">Owner of Creative Ltd.</p>
			</div>
		</div>
	</div>
	
	
	
	
	
<!-- brand section -->
<div style="margin-bottom: 72px;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="owl-carousel owl-theme brandOwl">
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
    <!-- Owl javascript -->
	<script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/owl.carousel.js"></script>
	<script type="text/javascript">
		$('.banquetOwl').owlCarousel({
			loop:true,
			autoplay:true,
			autoplayTimeout:3000,
			autoplayHoverPause:true,
			responsive:{
				0:{
					items:1
				},
				600:{
					items:3
				},
				1000:{
					items:3
				}
			}
		})
	</script>
	<script type="text/javascript">
		$('.testimonialOwl').owlCarousel({
			items:1,
			loop:true,
			autoplay:true,
			autoplayTimeout:3000,
			autoplayHoverPause:true
		})
	</script>
	<script type="text/javascript">
		$('.brandOwl').owlCarousel({
			loop:true,
			autoplay:true,
			autoplayTimeout:3000,
			autoplayHoverPause:true,
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