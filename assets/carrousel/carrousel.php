<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Delicious Food Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<link rel="stylesheet" href="css/lightbox.css">  
<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
<link href="css/owl.theme.css" rel="stylesheet">
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<script>
$(document).ready(function() { 
	$("#owl-demo").owlCarousel({
 
		autoPlay: 3000, //Set AutoPlay to 3 seconds
		autoPlay:true,
		items : 4,
		itemsDesktop : [640,5],
		itemsDesktopSmall : [414,4]
 
	});
	
}); 
</script>

<body>
								<script>
										// You can also use "$(window).load(function() {"
										$(function () {
										// Slideshow 4
											$("#slider3").responsiveSlides({
												auto: true,
												pager: true,
												nav: true,
												speed: 500,
												namespace: "callbacks",
												before: function () {
													$('.events').append("<li>before event fired.</li>");
												},
												after: function () {
													$('.events').append("<li>after event fired.</li>");
												}
											 });				
										});
								</script>

	<!-- welcome -->
	<div class="welcome" id="welcome">
		<div class="container">
			<div class="w3-welcome-heading">
				<h2>Welcome</h2>
			</div>
			<div class="w3l-welcome-info">
				<div class="col-sm-6 welcome-grids">
					<div class="welcome-img">
						<img src="images/2.jpg" class="img-responsive zoom-img" alt="">
					</div>
				</div>
				<div class="col-sm-6 welcome-grids">
					<div class="welcome-img">
						<img src="images/3.jpg" class="img-responsive zoom-img" alt="">
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="w3l-welcome-text">
				<p>Nam libero tempore cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus omnis optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae </p>
			</div>
		</div>
	</div>

	<!-- services -->
	<div class="services" id="services">
		<div class="container">
			<div class="w3-welcome-heading">
				<h3>Our Services</h3>
			</div>
		</div>
		<div class="services-grids">
			<div id="owl-demo" class="owl-carousel owl-theme">
					<div class="item">
						<div class="services-grid-info">
							<img src="images/s1.jpg" alt="" />
							<div class="services-grid-caption"> 
								<i class="fa fa-cutlery" aria-hidden="true"></i>
								<h4>Justo congue</h4>
								<p>Fusce laoreet</p>
							</div>
						</div>	
					</div>
					<div class="item">
						<div class="services-grid-info">
							<img src="images/s2.jpg" alt="" />
							<div class="services-grid-caption"> 
								<i class="fa fa-cutlery" aria-hidden="true"></i>
								<h4>Nulla facilisi</h4>
								<p>Lorem ipsum</p>
							</div>
						</div>	
					</div>
					<div class="item">
						<div class="services-grid-info">
							<img src="images/s3.jpg" alt="" />
							<div class="services-grid-caption"> 
								<i class="fa fa-cutlery" aria-hidden="true"></i>
								<h4>Aenean sed</h4>
								<p>Nunc tincidunt</p>
							</div>
						</div>	
					</div>
					<div class="item">
						<div class="services-grid-info">
							<img src="images/s4.jpg" alt="" />
							<div class="services-grid-caption"> 
								<i class="fa fa-cutlery" aria-hidden="true"></i>
								<h4>Justo congue</h4>
								<p>Phasellus magna</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="services-grid-info">
							<img src="images/s5.jpg" alt="" />
							<div class="services-grid-caption"> 
								<i class="fa fa-cutlery" aria-hidden="true"></i>
								<h4>Justo congue</h4>
								<p>Fusce laoreet</p>
							</div>
						</div>	
					</div>
					<div class="item">
						<div class="services-grid-info">
							<img src="images/s6.jpg" alt="" />
							<div class="services-grid-caption"> 
								<i class="fa fa-cutlery" aria-hidden="true"></i>
								<h4>Nulla facilisi</h4>
								<p>Lorem ipsum</p>
							</div>
						</div>	
					</div>
					<div class="item">
						<div class="services-grid-info">
							<img src="images/s7.jpg" alt="" />
							<div class="services-grid-caption"> 
								<i class="fa fa-cutlery" aria-hidden="true"></i>
								<h4>Aenean sed</h4>
								<p>Nunc tincidunt</p>
							</div>
						</div>	
					</div>
					<div class="item">
						<div class="services-grid-info">
							<img src="images/s1.jpg" alt="" />
							<div class="services-grid-caption">
								<i class="fa fa-cutlery" aria-hidden="true"></i>
								<h4>Justo congue</h4>
								<p>Phasellus magna</p>
							</div>
						</div>
					</div>
			</div>
		</div>
	</div>
	<!-- //services -->
	<!--gallery-->
	<div class="gallery" id="specials">
		<div class="container">
			<div class="w3-welcome-heading">
				<h3>Today Specials</h3>
			</div>
			<div class="agileinfo-gallery">
				<div class="col-md-3 w3-agileits-gallery-grids">
					<a class="w3 wow zoomIn animated" data-wow-delay=".5s" href="images/g1.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
						<img src="images/g1.jpg" class="img-responsive zoom-img" alt=""/>
						<div class="agile-b-wrapper">
							<h5><span>$</span>12</h5>
						</div>
					</a>
				</div>
				<div class="col-md-3 w3-agileits-gallery-grids">
					<a class="wow zoomIn animated" data-wow-delay=".7s" href="images/g3.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
						<img src="images/g3.jpg" class="img-responsive zoom-img" alt=""/>
						<div class="agile-b-wrapper">
							<h5><span>$</span>20</h5>
						</div>
					</a>
				</div>
				<div class="col-md-6 w3-agileits-gallery-grids gallery-two wthree">
					<a class="wow zoomIn animated" data-wow-delay=".9s" href="images/g2.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen book It has survived not only five centuries, but also remaining essentially unchanged. ">
						<img src="images/g2.jpg" class="img-responsive zoom-img" alt=""/>
						<div class="agile-b-wrapper">
							<h5><span>$</span>09</h5>
						</div>
					</a>
				</div>
				<div class="col-md-3 w3-agileits-gallery-grids agileits-gallery-grids">
					<a class="wow zoomIn animated" data-wow-delay=".5s" href="images/g4.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
						<img src="images/g4.jpg" class="img-responsive zoom-img" alt=""/>
						<div class="agile-b-wrapper">
							<h5><span>$</span>15</h5>
						</div>
					</a>
				</div>
				<div class="col-md-3 w3-agileits-gallery-grids agileits-gallery-grids">
					<a class="wow zoomIn animated" data-wow-delay=".7s" href="images/g6.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
						<img src="images/g6.jpg" class="img-responsive zoom-img" alt=""/>
						<div class="agile-b-wrapper">
							<h5><span>$</span>10</h5>
						</div>
					</a>
				</div>
				<div class="col-md-6 w3-agileits-gallery-grids agileits-gallery-grids gallery-two">
					<a class="wow zoomIn animated" data-wow-delay=".9s" href="images/g5.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen book It has survived not only five centuries, but also essentially unchanged. ">
						<img src="images/g5.jpg" class="img-responsive zoom-img" alt=""/>
						<div class="agile-b-wrapper">
							<h5><span>$</span>25</h5>
						</div>
					</a>
				</div>	
				<div class="col-md-6 w3-agileits-gallery-grids gallery-two w3agile-two">
					<a class="wow zoomIn animated" data-wow-delay=".5s" href="images/g7.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen book It has survived not only five centuries, remaining essentially unchanged. ">
						<img src="images/g7.jpg" class="img-responsive zoom-img" alt=""/>
						<div class="agile-b-wrapper">
							<h5><span>$</span>16</h5>
						</div>
					</a>
				</div>	
				<div class="col-md-3 w3-agileits-gallery-grids">
					<a class="wow zoomIn animated" data-wow-delay=".7s" href="images/g8.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
						<img src="images/g8.jpg" class="img-responsive zoom-img" alt=""/>
						<div class="agile-b-wrapper">
							<h5><span>$</span>05</h5>
						</div>
					</a>
				</div>
				<div class="col-md-3 w3-agileits-gallery-grids">
					<a class="wow zoomIn animated" data-wow-delay=".9s" href="images/g9.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
						<img src="images/g9.jpg" class="img-responsive zoom-img" alt=""/>
						<div class="agile-b-wrapper">
							<h5><span>$</span>22</h5>
						</div>
					</a>
				</div>	
				<div class="clearfix"> </div>
				<script src="js/lightbox-plus-jquery.min.js"> </script>
			</div>	
		</div>	
	</div>	
	<!--//gallery-->
	<!-- team -->
	<div class="team jarallax" id="team">
		<div class="container">
			<div class="w3-welcome-heading team-heading">
				<h3>Our Chefs</h3>
			</div>
			<div class="agile_team_grids">
				<div class="col-md-3 agile_team_grid">
					<div class="view w3-agile-view">
						<img src="images/t1.jpg" alt=" " class="img-responsive" />
						<div class="w3lmask">
							<h5>quis nostrud</h5>
							<p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit.</p>
							<div class="social">
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-rss"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 agile_team_grid">
					<div class="view w3-agile-view">
						<img src="images/t2.jpg" alt=" " class="img-responsive" />
						<div class="w3lmask">
							<h5>quis nostrud</h5>
							<p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit.</p>
							<div class="social">
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-rss"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 agile_team_grid">
					<div class="view w3-agile-view">
						<img src="images/t3.jpg" alt=" " class="img-responsive" />
						<div class="w3lmask">
							<h5>quis nostrud</h5>
							<p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit.</p>
							<div class="social">
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-rss"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 agile_team_grid">
					<div class="view w3-agile-view">
						<img src="images/t4.jpg" alt=" " class="img-responsive" />
						<div class="w3lmask">
							<h5>quis nostrud</h5>
							<p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit.</p>
							<div class="social">
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-rss"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //team -->
	<!-- news -->
	<div class="news" id="news">
		<div class="container">
			<div class="w3-welcome-heading">
				<h3>News & Events</h3>
			</div>
			<div class="agile-news-grids">
				<div class="agile-news-grid">
					<div class="col-md-6 agile-news-left">
						<div class="col-md-6 news-left-img">
							<div class="news-left-text">
								<h5>Delicious Food</h5>
							</div>
						</div>
						<div class="col-md-6 news-grid-info-bottom">
							<div class="news-left-top-text">
								<a href="#" data-toggle="modal" data-target="#myModal">Cras efficitur nunc at erat ullamcorper blandit.</a>
							</div>
							<div class="date-grid">
								<div class="admin">
									<a href="#"><i class="fa fa-user" aria-hidden="true"></i> Admin</a>
								</div>
								<div class="time">
									<p><i class="fa fa-calendar" aria-hidden="true"></i> May 09,2016</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="news-grid-info-bottom-text">
								<p>Aliquam erat volutpat. Duis vulputate tempus laoreet. Integer viverra eleifend neque, eget dictum lectus. Quisque eu tempor dolor.</p>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-6 agile-news-left">
						<div class="col-md-6 news-left-img news-left-img1">
							<div class="news-left-text">
								<h5>Delicious Food</h5>
							</div>
						</div>
						<div class="col-md-6 news-grid-info-bottom">
							<div class="news-left-top-text">
								<a href="#" data-toggle="modal" data-target="#myModal">Cras efficitur nunc at erat ullamcorper blandit.</a>
							</div>
							<div class="date-grid">
								<div class="admin">
									<a href="#"><i class="fa fa-user" aria-hidden="true"></i> Admin</a>
								</div>
								<div class="time">
									<p><i class="fa fa-calendar" aria-hidden="true"></i> Aug 01,2016</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="news-grid-info-bottom-text">
								<p>Aliquam erat volutpat. Duis vulputate tempus laoreet. Integer viverra eleifend neque, eget dictum lectus. Quisque eu tempor dolor.</p>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="agile-news-grid">
					<div class="col-md-6 agile-news-left">
						<div class="col-md-6 news-left-img news-left-img2">
							<div class="news-left-text">
								<h5>Delicious Food</h5>
							</div>
						</div>
						<div class="col-md-6 news-grid-info-bottom">
							<div class="news-left-top-text">
								<a href="#" data-toggle="modal" data-target="#myModal">Cras efficitur nunc at erat ullamcorper blandit.</a>
							</div>
							<div class="date-grid">
								<div class="admin">
									<a href="#"><i class="fa fa-user" aria-hidden="true"></i> Admin</a>
								</div>
								<div class="time">
									<p><i class="fa fa-calendar" aria-hidden="true"></i> Sept 24,2016</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="news-grid-info-bottom-text">
								<p>Aliquam erat volutpat. Duis vulputate tempus laoreet. Integer viverra eleifend neque, eget dictum lectus. Quisque eu tempor dolor.</p>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-6 agile-news-left">
						<div class="col-md-6 news-left-img news-left-img3">
							<div class="news-left-text">
								<h5>Delicious Food</h5>
							</div>
						</div>
						<div class="col-md-6 news-grid-info-bottom">
							<div class="news-left-top-text">
								<a href="#" data-toggle="modal" data-target="#myModal">Cras efficitur nunc at erat ullamcorper blandit.</a>
							</div>
							<div class="date-grid">
								<div class="admin">
									<a href="#"><i class="fa fa-user" aria-hidden="true"></i> Admin</a>
								</div>
								<div class="time">
									<p><i class="fa fa-calendar" aria-hidden="true"></i> June 17,2016</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="news-grid-info-bottom-text">
								<p>Aliquam erat volutpat. Duis vulputate tempus laoreet. Integer viverra eleifend neque, eget dictum lectus. Quisque eu tempor dolor.</p>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div> 
			</div>
		</div>
	</div>
	<!-- //news -->
	<!-- testimonial -->
	<div class="testimonial jarallax">
		<div class="container">
			<div class="agileits-w3layouts-info">
				<div class="testimonial-grid">
					<div class="slider">
							<div class="callbacks_container">
								<ul class="rslides" id="slider4">
									<li>
										<div class="testimonial-top">
											<i class="fa fa-quote-right" aria-hidden="true"></i>
											<p>Donec feugiat tellus sem, laoreet iaculis orci lobortis vel. Sed sed luctus orci, at lacinia risus. Ut porttitor ante ac tincidunt elementum. Curabitur ex dolor, condimentum vitae nunc vel, pulvinar semper justo. Vestibulum et aliquet magna, maximus dapibus enim. Vestibulum ex lectus, posuere eu viverra at, mattis et enim. Nam efficitur sem et lectus fringilla, at pharetra nulla luctus. Nunc cursus, augue ac ultricies volutpat, neque erat congue justo, ac pretium tellus eros a neque. Integer ipsum sem, consectetur a mollis ac, cursus eu ipsum.</p>
											<h5>John Smith <span>- Founder</span></h5>
										</div>
									</li>
									<li>
										<div class="testimonial-top">
											<i class="fa fa-quote-right" aria-hidden="true"></i>
											<p>Pellentesque urna ex, ultricies a nunc at, pretium maximus nisi. Vestibulum non auctor diam. Mauris eget consectetur mauris. Aenean leo elit, accumsan vel elit vitae, mattis ultricies lacus. Cras consectetur justo lorem, sed dictum sapien eleifend at.Donec sed orci a dui aliquam tempor. Praesent in ipsum ut nunc porttitor lacinia.Donec eu sapien et arcu dictum rutrum.Ut laoreet vitae augue at accumsan. Nam pharetra sagittis purus et condimentum. Vestibulum cursus porttitor pretium.In egestas finibus rutrum. Nulla facilisi.</p>
											<h5>Divide Rule <span>- CEO</span></h5>
										</div>
									</li>
								</ul>
							</div>
							<script>
								// You can also use "$(window).load(function() {"
								$(function () {
								  // Slideshow 4
								  $("#slider4").responsiveSlides({
									auto: true,
									pager:false,
									nav:false,
									speed: 500,
									namespace: "callbacks",
									before: function () {
									  $('.events').append("<li>before event fired.</li>");
									},
									after: function () {
									  $('.events').append("<li>after event fired.</li>");
									}
								  });
							
								});
							 </script>
							<!--banner Slider starts Here-->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //testimonial -->
	<!-- contact -->
	<div class="contact" id="mail">
		<div class="container">
			<div class="w3-welcome-heading">
				<h3>Contact Us</h3>
			</div>
			<div class="agile-contact-grids">
				<div class="col-md-6 agile-contact-left">
					<div class="address-grid">
						<h4>Our Address</h4>
						<ul class="w3_address">
							<li><i class="fa fa-map-marker" aria-hidden="true"></i>1234k Avenue, 4th block, <span>New York City.</span></li>
							<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
							<li><i class="fa fa-mobile" aria-hidden="true"></i>+1234 567 567</li>
						</ul>
					</div>
					<div class="contact-form">
						<h4>Contact Form</h4>
						<form action="#" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="Name" required="">
								<label>Name</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="email" name="Email" required=""> 
								<label>Email</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="text" name="Subject" required="">
								<label>Subject</label>
								<span></span>
							</div>
							<div class="styled-input">
								<textarea name="Message" required=""></textarea>
								<label>Message</label>
								<span></span>
							</div>	 
							<input type="submit" value="SEND">
						</form>
					</div>
				</div>
				<div class="col-md-6 agile-contact-right">
					<div class="agileits-map">
						<h4>Our Location</h4>
					</div>
					<div class="map-grid">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387142.8400948023!2d-74.25819082602831!3d40.70583163923578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1470295981376" allowfullscreen></iframe>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //contact -->
	<!-- newsletter -->
	<div class="newsletter">
		<div class="container">
			<div class="col-md-6 newsletter-left">
				<h5>Subscribe to our email newsletter to receive updates</h5>
			</div>
			<div class="col-md-6 newsletter-right">
				<form action="#" method="post">
					<input type="email" placeholder="Subscribe" name="Subscribe" required="">
					<button class="btn1"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //newsletter -->
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="w3-agile-social-grids">
				<h4>We are social</h4>
				<div class="border"></div>
				<ul>
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-rss"></i></a></li>
					<li><a href="#"><i class="fa fa-vk"></i></a></li>
				</ul>
			</div>
			<div class="copyright">
				<p>© 2017 Delicious Food. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
			</div>
		</div>
	</div>
	<!-- //footer -->
	<script src="js/jarallax.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	<script src="js/responsiveslides.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- Tabs-JavaScript -->
	<script src="js/owl.carousel.js"></script>  
</body>	
</html>