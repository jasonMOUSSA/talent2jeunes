<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Talent2jeunes</title>
		<!-- Bootstrap Core CSS -->
		<link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
		<!-- Custom Fonts -->
		<link href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">
		<!-- Custom CSS -->
		<link rel="stylesheet" href=" <?php echo base_url('assets/css/patros.css') ?>" >
		
	</head>
	<body data-spy="scroll">
		<!-- Navigation -->
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php"><font color="white" size="">Talent2Jeunes</font></a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right custom-menu">
						<li class="active"><a href="<?php echo site_url();?>">Home</a></li>
						<!--<li><a href="#services">Services</a></li>-->
						<!--<li><a href="#meet-team">Team</a></li>-->
						<li><a href="#portfolio1">Portofolio</a></li>
						<!--<li><a href="#contact">Contact</a></li>-->
						<li><a href="<?php echo site_url('welcome/blog');?>">Blog</a></li>
						<li><a href="<?php echo site_url('welcome/single');?>">Single</a></li>
						<li><a href="<?php echo site_url('welcome/about');?>">About</a></li>
					</ul>
				</div>
			</div>
		</nav>

		<!-- Header Carousel -->
		<header id="home" class="carousel slide">
			<ul class="cb-slideshow">
				<li><span>image1</span>
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<div class="text-center"><h3>JEUNE EXPRIME TOI</h3></div>
							</div>
						</div>
						<h4>Talent2jeunes – Fait connaitre ta pensée</h4>
					</div>
				</li>
				<li><span>image2</span>
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<div class="text-center"><h3>FAIT CONNAITRE TA MARQUE</h3></div>
							</div>
						</div>
						<h4>Montre au monde entier ce que tu sais faire</h4>
					</div>
				</li>
				<li><span>image3</span>
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<div class="text-center"><h3>PARTAGE TON HISTOIRE</h3></div>
							</div>
						</div>
						<h4>Histoire Touchante</h4>
					</div>
				</li>
				<li><span>Image 04</span>
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<div class="text-center"><h3>LE MONDE NOUS APPARTIENT</h3></div>
							</div>
						</div>
						<h4>Le monde appartient aux hommes qui pense trop et combattent pour son évolution.</h4>
					</div>
				</li>

			  	<li><span>Image 05</span>
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<div class="text-center"><h3>LE SUCCES EST A VOTRE PORTEE</h3></div>
							</div>
						</div>
						<h4>Une des clés du succès est la confiance en soi. Une des clés de la confiance en soi est la préparation.</h4>
					</div>
				</li>
				<li><span>Image 06</span>
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<div class="text-center"><h3>INSPIRATION</h3></div>
							</div>
						</div>
						<h4>Lorem Ipsum is simply dummy text of typesetting industry.</h4>
					</div>
				</li>
			</ul>
			<div class="intro-scroller">
				<a class="inner-link" href="#bloghome">
					<div class="mouse-icon" style="opacity: 1;">
						<div class="wheel"></div>
					</div>
				</a> 
			</div>          
		</header>

		<section id="bloghome">
			<div class="container">
				<div class="text-center"><h2>Postes Recents</h2>
					<img class="img-responsive displayed" src="<?php echo base_url('assets/images/short.png')?> " alt="about">
				</div>
				<div class="row">
					<div class="col-md-12 homeport1">
						<div class="col-md-4 col-sm-12 col-xs-12 portfolio-item">
							<figure class="effect-oscar">
								<img src="<?php echo base_url('assets/images/blog1.jpg') ?>" alt="img09" class="img-responsive" />
								<figcaption>
									<h2>Talent2Jeunes</h2>
									<a href="#">View more</a>
								</figcaption>           
							</figure>
							<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet.</p>
							<div class="text-center"><a class="btn btn-primary btn-noborder-radius hvr-bounce-to-bottom">Lire Plus</a></div>
						</div>
						<div class="col-md-4 col-sm-12 col-xs-12 portfolio-item">
							<figure class="effect-oscar">
								<img src="<?php echo base_url('assets/images/blog2.jpg') ?>" alt="img09" class="img-responsive"/>
								<figcaption>
									<h2>Talent2Jeunes</h2>
									<a href="#">View more</a>
								</figcaption>           
							</figure>
							<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet.</p>
							<div class="text-center"><a class="btn btn-primary btn-noborder-radius hvr-bounce-to-bottom">Lire Plus</a></div>
						</div>
						<div class="col-md-4 col-sm-12 col-xs-12 portfolio-item">
							<figure class="effect-oscar">
								<img src="<?php echo base_url('assets/images/blog3.jpg') ?>" alt="img09" class="img-responsive"/>
								<figcaption>
									<h2>Talent2Jeunes</h2>
									<a href="#">View more</a>
								</figcaption>           
							</figure>
							<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet.</p>
							<div class="text-center"><a class="btn btn-primary btn-noborder-radius hvr-bounce-to-bottom">Lire Plus</a></div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="portfolio1">
		<div class="container">
		<div class="row">
			<div class="text-center">
			<h2>Portfolio</h2>
			<img class="img-responsive displayed" src="<?php echo base_url('assets/images/short.png') ?>" alt="about">
			</div>

			<ul class="filter nav nav-pills">
			  <li data-value="all" ><a class="active" href="#">All</a></li>
			  <li data-value="development"><a href="#">Culture</a></li>
			  <li data-value="webdesign"><a href="#">Tendance</a></li>
			  <li data-value="mobileapps"><a href="#">Paysages</a></li>
			</ul>
 
			<ul class="port2">
			  <li data-type="development" data-id="id-1" class="port3">
				<a href="#" id="development1"><img src="<?php echo base_url('assets/images/port1.jpg') ?> " alt=""></a></li>
			  <li data-type="webdesign" data-id="id-2" class="port3">
				<a href="#" id="webdesign1"><img src="<?php echo base_url('assets/images/port2.jpg') ?> " alt=""></a>
			  </li>
			  <li data-type="mobileapps" data-id="id-3" class="port3">
				<a href="#" id="mobileapps1"><img src="<?php echo base_url('assets/images/port3.jpg') ?>" alt=""></a>
			  </li>
				<li data-type="development" data-id="id-4" class="port3">
				<a href="#" id="development2"><img src="<?php echo base_url('assets/images/port4.jpg') ?>" alt=""></a>
			  </li>
			  <li data-type="webdesign" data-id="id-5" class="port3">
				<a href="#" id="webdesign2"><img src="<?php echo base_url('assets/images/port5.jpg') ?>" alt=""></a>
			  </li>
			  <li data-type="mobileapps" data-id="id-6" class="port3">
				<a href="#" id="mobileapps2"><img src="<?php echo base_url('assets/images/port6.jpg') ?>" alt=""></a>
			  </li>
			</ul>
		  </div> 
		</div>
		</section>
		<section id="contact">
			<div class="container"> 
				<div class="row">
					<div class="col-md-12">
						<div class="col-lg-12">
							<div class="text-center color-elements">
							<h2>Contact Us</h2>
							</div>
						</div>
						<div class="col-lg-6 col-md-8">
							<form class="inline" id="contactForm" method="post" >
								<div class="row">
									<div class="col-sm-6 height-contact-element">
										<div class="form-group">
											<input type="text" name="first_name" class="form-control custom-labels" id="name" placeholder="FULL NAME" required data-validation-required-message="Please write your name!"/>
											<p class="help-block text-danger"></p>
										</div>
									</div>
									<div class="col-sm-6 height-contact-element">
										<div class="form-group">
											<input type="email" name="email" class="form-control custom-labels" id="email" placeholder="EMAIL" required data-validation-required-message="Please write your email!"/>
											<p class="help-block text-danger"></p>
										</div>
									</div>
									<div class="col-sm-12 height-contact-element">
										<div class="form-group">
											<input type="text" name="message" class="form-control custom-labels" id="message" placeholder="WHAT'S ON YOUR MIND" required data-validation-required-message="Please write a message!"/>
										</div>
									</div>
									<div class="col-sm-3 col-xs-6 height-contact-element">
										<div class="form-group">
											<input type="submit" class="btn btn-md btn-custom btn-noborder-radius" value="Send It"/>
										</div>
									</div>
									<div class="col-sm-3 col-xs-6 height-contact-element">
										<div class="form-group">
											<button type="button" class="btn btn-md btn-noborder-radius btn-custom" name="reset">RESET
											</button>
										</div>
									</div>
									<div class="col-sm-3 col-xs-6 height-contact-element">
										<div class="form-group">
											<div id="response_holder"></div>
										</div>
									</div>
									<div class="col-sm-12 contact-msg">
									<div id="success"></div>
									</div>
								</div>
							</form>
						</div>
						<div class="col-lg-5 col-md-3 col-lg-offset-1 col-md-offset-1">
							<div class="row">
								<div class="col-md-12 height-contact-element">
									<div class="form-group">
										<i class="fa fa-2x fa-map-marker"></i>
										<span class="text">RDC, Lubumbashi</span>
									</div>
								</div>
								<div class="col-md-12 height-contact-element">
									<div class="form-group">
										<i class="fa fa-2x fa-phone"></i>
										<span class="text">+243 97 38 13 082</span>
									 </div>
								 </div>
								<div class="col-md-12 height-contact-element">    
									<div class="form-group">
										<i class="fa fa-2x fa-envelope"></i>
										<span class="text"><a href="jasonmoussa006@gmail.com">jasonmoussa006@gmail.com</a></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
        
		<section id="follow-us">
			<div class="container"> 
				<div class="text-center height-contact-element">
					<h2>FOLLOW US</h2>
				</div>
				<img class="img-responsive displayed" src="<?php echo base_url('assets/images/short.png') ?>" alt="short" />
				<div class="text-center height-contact-element">
					<ul class="list-unstyled list-inline list-social-icons">
						<li class="active"><a href="#"><i class="fa fa-facebook social-icons"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter social-icons"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus social-icons"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin social-icons"></i></a></li>
					</ul>
				</div>
				
			</div>
			
		</section>

		<footer id="footer">
			<div class="container">
				<div class="row myfooter">
					<div class="col-sm-6"><div class="pull-left">
					© Copyright Talent2Jeunes 2018
				</div>
			</div>
			
		</footer>

		<!-- jQuery -->
		<script src="<?php echo base_url('assets/js/jquery.js') ?>"></script>
		<!-- Bootstrap Core JavaScript -->
		<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>

		<!-- Google Map -->
		<script src="//maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=true&amp;libraries=places"></script>

		<!-- Portfolio -->
		<script src="<? echo base_url('assets/js/jquery.quicksand.js') ?>"></script>	    
	

		<!--Jquery Smooth Scrolling-->
		<script>
			$(document).ready(function(){
				$('.custom-menu a[href^="#"], .intro-scroller .inner-link').on('click',function (e) {
					e.preventDefault();

					var target = this.hash;
					var $target = $(target);

					$('html, body').stop().animate({
						'scrollTop': $target.offset().top
					}, 900, 'swing', function () {
						window.location.hash = target;
					});
				});

				$('a.page-scroll').bind('click', function(event) {
					var $anchor = $(this);
					$('html, body').stop().animate({
						scrollTop: $($anchor.attr('href')).offset().top
					}, 1500, 'easeInOutExpo');
					event.preventDefault();
				});

			   $(".nav a").on("click", function(){
					 $(".nav").find(".active").removeClass("active");
					$(this).parent().addClass("active");
				});

				$('body').append('<div id="toTop" class="btn btn-primary color1"><span class="glyphicon glyphicon-chevron-up"></span></div>');
					$(window).scroll(function () {
						if ($(this).scrollTop() != 0) {
							$('#toTop').fadeIn();
						} else {
							$('#toTop').fadeOut();
						}
					}); 
				$('#toTop').click(function(){
					$("html, body").animate({ scrollTop: 0 }, 700);
					return false;
				});

			});

		</script>

		<script>
		function gallery(){};

		var $itemsHolder = $('ul.port2');
		var $itemsClone = $itemsHolder.clone(); 
		var $filterClass = "";
		$('ul.filter li').click(function(e) {
		e.preventDefault();
		$filterClass = $(this).attr('data-value');
			if($filterClass == 'all'){ var $filters = $itemsClone.find('li'); }
			else { var $filters = $itemsClone.find('li[data-type='+ $filterClass +']'); }
			$itemsHolder.quicksand(
			  $filters,
			  { duration: 1000 },
			  gallery
			  );
		});

		$(document).ready(gallery);
		</script>

		<script type="text/javascript">
	$(document).ready(function(){
		inicializemap()

		$('#contactForm').on('submit', function(e){
			e.preventDefault();
			e.stopPropagation();

			// get values from FORM
			var name = $("#name").val();
			var email = $("#email").val();
			var message = $("#message").val();
			var goodToGo = false;
			var messgaeError = 'Request can not be send';
			var pattern = new RegExp(/^(('[\w-\s]+')|([\w-]+(?:\.[\w-]+)*)|('[\w-\s]+')([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);


			 if (name && name.length > 0 && $.trim(name) !='' && message && message.length > 0 && $.trim(message) !='' && email && email.length > 0 && $.trim(email) !='') {
				  if (pattern.test(email)) {
					 goodToGo = true;
				  } else {
					 messgaeError = 'Please check your email address';
					 goodToGo = false; 
				  }
			 } else {
			   messgaeError = 'You must fill all the form fields to proceed!';
			   goodToGo = false;
			 }

			 
			if (goodToGo) {
			   $.ajax({
				 data: $('#contactForm').serialize(),
				 beforeSend: function() {
				   $('#success').html('<div class="col-md-12 text-center"><img src="images/spinner1.gif" alt="spinner" /></div>');
				 },
				 success:function(response){
				   if (response==1) {
					 $('#success').html('<div class="col-md-12 text-center">Your email was sent successfully</div>');
					 window.location.reload();
				   } else {
					 $('#success').html('<div class="col-md-12 text-center">E-mail was not sent. Please try again!</div>');
				   }
				 },
				 error:function(e){
				   $('#success').html('<div class="col-md-12 text-center">We could not fetch the data from the server. Please try again!</div>');
				 },
				 complete: function(done){
				   console.log('Finished');
				 },
				 type: 'POST',
				 url: 'js/send_email.php', 
			   });
			   return true;
			} else {
			   $('#success').html('<div class="col-md-12 text-center">'+messgaeError+'</div>');
			   return false;
			}
			return false;
		});
	});
</script>
</body>
</html>




