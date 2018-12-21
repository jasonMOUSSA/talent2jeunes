<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

        <title>Taent2Jeunes</title>

        <!-- Bootstrap Core CSS -->

        <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">

        <!-- Custom CSS -->
		<link rel="stylesheet" href="<?php echo base_url('assets/css/patros.css') ?>" >
        <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>" >
      
	<title>Talent2Jeunes</title>
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
					<a class="navbar-brand" href="index.php"><font color="#FFF">Talent2Jeiunes</font> <!-- <img src="images/logo.png" alt="company logo"/>--></a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right custom-menu">
						<li><a href="<?php echo site_url('welcome/index');?>">Home</a></li>
						<!--<li><a href="about.php#services">Services</a></li>
						<li><a href="about.php#meet-team">Team</a></li>-->
						<li><a href="index.php#portfolio1">Portofolio</a></li>
						<!--<li><a href="about.html#contact">Contact</a></li>-->
						<li class=""><a href="<?php echo site_url('welcome/blog');?>">Blog</a></li>
						<li><a href="<?php echo site_url('welcome/single');?>">Single</a></li>
						<li class='="active"'><a href="<?php echo site_url('welcome/about');?>">About</a></li>
					</ul>
				</div>
			</div>
		</nav>
        <!-- about -->
    
     	<div class="about" id="about">
		<div class="container">
			<div class="w3-welcome-heading">
				<h3>About Us</h3>
			</div>
			<div class="w3-about-grids">
				<div class="col-md-6 w3-about-left">
					 <div class="jumbotron">
	     	            <h3><span class="color-elements">Talent2jeunes</span></h3>
                        est un Blog pour tout ces jeunes qui vivent la créativité comme un art de vivre. Et puisqu'être créatif c'est d'abord être curieux et faire des liens entre les idées, vous y trouverez tout ce qu'il faut pour faire bouillonner votre esprit! Culture générale, innovation, insolite, citations créatives, livres, art...
                        Pour ne rien manquer des publications, abonnez-vous à la newsletter et suivez-moi sur les réseaux sociaux ;) <br><br><br>
						</p>
                    </div>
				</div>
				<div class="col-md-6 w3-about-right">
					<div class="about-img-grids">
						<div class="col-md-7 about-img">
							<img src="<?php echo base_url('assets/images/4.jpg') ?>" alt=" " />
						</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
     </div>   
	

		<section id="services">
			<div class="orangeback">
				<div class="container">
					<div class="text-center homeport2"><h2>Services</h2></div>
					<div class="row">
						<div class="col-md-12 homeservices1">
							<div class="col-md-3 portfolio-item">
								<div class="text-center">
									<a href="javascript:void(0);">
									<span class="fa-stack fa-lg">
									  <i class="fa fa-circle fa-stack-2x"></i>
									  <i class="fa fa-line-chart fa-stack-1x"></i>
									</span>
									</a>
									<h3><a href="#">Marques</a></h3>
									<p>nous vous aidons à promouvoire votre marque de fabique,
									 en vous faisant connaitre au monde </p>
								</div>
							</div>
							<div class="col-md-3 portfolio-item">
								<div class="text-center">
									<a href="javascript:void(0);">
									<span class="fa-stack fa-lg">
									  <i class="fa fa-circle fa-stack-2x"></i>
									  <i class="fa fa-users fa-stack-1x"></i>
									</span>
									</a>
									<h3><a href="#">Histoires</a></h3>
									<p>Nous disposons d'un blog qui vous aide
									 à partager vos histoires au monde entier.</p>
								</div>
							</div>
							<div class="col-md-3 portfolio-item">
								<div class="text-center">
									<a href="javascript:void(0);">
									<span class="fa-stack fa-lg">
									  <i class="fa fa-circle fa-stack-2x"></i>
									  <i class="fa fa-code fa-stack-1x"></i>
									</span>
									</a>
									<h3><a href="#">Conseils</a></h3>
									<p>Nous vous fournissons des conseils pour vos projets 
									et nous vous aidons à vendre votre marque .</p>
								</div>
							</div>
							<div class="col-md-3 portfolio-item">
								<div class="text-center">
									<a href="javascript:void(0);">
									<span class="fa-stack fa-lg">
									  <i class="fa fa-circle fa-stack-2x"></i>
									  <i class="fa fa-cogs fa-stack-1x"></i>
									</span>
									</a>
									<h3><a href="#">PARTAGE TES IDEES</a></h3>
									<p>Partage au monde ta facon de concevoir les choses.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="meet-team">
			<div class="container">
				<div class="text-center">
				<h2>Team Members</h2>
				<center><img class="img-responsive displayed" src="<?php echo base_url('assets/images/short.png') ?>" alt="about">
				</div>
				<div class="row teamspace">
					<div class="col-xs-12 col-sm-6 col-md-3">
						<div class="team-member">
							<div class="team-img">
								<img class="img-responsive" src="<?php echo base_url('assets/images/avatar.png"') ?> alt="">
							</div>
							<div class="team-info">
								<h3>Jason MOUSSA</h3>
								<span>Founder</span>
							</div>
							<p>developer engineer</p>
							<ul class="social-icons">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3">
						<div class="team-member">
							<div class="team-img">
								<img class="img-responsive" src="<?php echo base_url('assets/images/person1.jpg') ?>" alt="">
							</div>
							<div class="team-info">
								<h3>Malys AMADI</h3>
								<span>Project Manager</span>
							</div>
							<p>DataBase Administration</p>
							<ul class="social-icons">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3">
						<div class="team-member">
							<div class="team-img">
								<img class="img-responsive" src="<?php echo base_url('assets/images/person1.jpg') ?>" alt="">
							</div>
							<div class="team-info">
								<h3>Dave KYUNGU</h3>
								<span>Designer</span>
							</div>
							<p>Soft engineer</p>
							<ul class="social-icons">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
        </center>
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

		<!-- team 
	<div class="team" id="team">
	   <div class="agile_dot_info two">
		<div class="container">
			<h3 class="w3l_header w3_agileits_header two"> <span>Our</span> Core Team</h3>
			<div class="agileits_team_grids">
				<div class="col-md-4 agileits_team_grid">
					<div class="agileits_team_grid_figure">
						<img src="images/team1.jpg" alt=" " class="img-responsive" />
					</div>
					<h4>Jane Nguyen</h4>
					<p>General Manager</p>
					<p>+21 345 287 4556</p>
					<div class="social-icon">
						<a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a> 
						<a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a>
						<a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a> 
						<a href="#" class="social-button dribbble"><i class="fa fa-dribbble"></i></a> 
					</div>
				</div>
				<div class="col-md-4 agileits_team_grid">
					<div class="agileits_team_grid_figure">
						<img src="images/team2.jpg" alt=" " class="img-responsive" />
					</div>
					<h4>James Doe</h4>
					<p>Finance Executive</p>
					<p>+21 345 287 4556</p>
					<div class="social-icon">
						<a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a> 
						<a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a>
						<a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a> 
						<a href="#" class="social-button dribbble"><i class="fa fa-dribbble"></i></a> 
					</div>
				</div>
				<div class="col-md-4 agileits_team_grid">
					<div class="agileits_team_grid_figure">
						<img src="images/team3.jpg" alt=" " class="img-responsive" />
					</div>
					<h4>Laura Carl</h4>
					<p>Management</p>
					<p>+21 345 287 4556</p>
					<div class="social-icon">
						<a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a> 
						<a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a>
						<a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a> 
						<a href="#" class="social-button dribbble"><i class="fa fa-dribbble"></i></a> 
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
//team -->
</body>
</html>
