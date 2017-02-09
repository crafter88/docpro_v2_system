<!DOCTYPE>
<html>
	<head>
		<meta charset='UTF-8'>
		<title>DOCPRO Business Solution</title>
		<link href="<?php echo base_url(); ?>libs/moderna/css/bootstrap.min.css" rel='stylesheet' type='text/css'>
		<link href="<?php echo base_url(); ?>libs/moderna/css/fancybox/jquery.fancybox.css" rel='stylesheet' type='text/css'>
		<link href="<?php echo base_url(); ?>libs/moderna/css/jcarousel.css" rel='stylesheet' type='text/css'>
		<link href="<?php echo base_url(); ?>libs/moderna/css/flexslider.css" rel='stylesheet' type='text/css'>
		<link href="<?php echo base_url(); ?>libs/moderna/css/style.css" rel='stylesheet' type='text/css'>
		<link href="<?php echo base_url(); ?>libs/moderna/skins/default.css" rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>libs/checkbox/style.css">
	
		
		<style>
			input:disabled{
				background-color: #E8E8E8;
			}
		</style>

		<?php if(isset($head_css)){ $this->load->view($head_css); } ?>
	</head>
	
	<body>
		<div id="wrapper">
			<header>
				<div class="navbar navbar-default navbar-static-top">
					<div class="container">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="home.php"><span>Doc</span>Pro</a>
						</div>
						<div class="navbar-collapse collapse ">
							<ul class="nav navbar-nav">
								<li <?php if($active_nav === 'home') echo "class='active'"; ?>><a href="<?php echo base_url(); ?>">Home</a></li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Features <b class=" icon-angle-down"></b></a>
									<ul class="dropdown-menu">
										<li><a href="#">Feature 1</a></li>
										<li><a href="#">Feature 2</a></li>
										<li><a href="#">Feature 3</a></li>
									</ul>
								</li>
								<li <?php if($active_nav === 'subscribe') echo "class='active'"; ?>>
									<a href="<?php echo base_url(); ?>subscribe">Subscribe</a>
								</li>
								<li <?php if($active_nav === 'about') echo "class='active'"; ?>>
									<!-- <a href="<?php echo base_url(); ?>about">About Us</a> -->
									<a href="#">About Us</a>
								</li>
								<li <?php if($active_nav === 'contact') echo "class='active'"; ?>>
									<a href="<?php echo base_url(); ?>contact">Contact Us</a>
								</li>
								<li <?php if($active_nav === 'login') echo "class='active'"; ?>>
									<a href="<?php echo base_url(); ?>login">Login</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</header>
			<?php $this->load->view($content); ?>
			<footer>
				<div class="container">
					<div class="row">
						<div class="col-lg-3">
							<div class="widget">
								<h5 class="widgetheading">Get in touch with us</h5>
								<address>
								<strong>DocPro Business Solutions Inc</strong><br>
								 We have creative solutions for your business<br>
								</address>
								<p>
									<i class="icon-phone"></i> (074) 4232164 or  (074) 4249387 <br>
									<i class="icon-envelope-alt"></i> DocPro@sample.com
								</p>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="widget">
								<h5 class="widgetheading">Allied Firms</h5>
								<ul class="link-list">
									<li><a href="#">Clemente Aquino & Co.</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 pull-right">
							<div class="widget">
								<h5 class="widgetheading">About Us</h5>
								<!-- <ul class="link-list">
									<li><a href="#">one...</a></li>
									<li><a href="#">two...</a></li>
									<li><a href="#">three...</a></li>
								</ul> -->
							</div>
						</div>
					</div>
				</div>
				<div id="sub-footer">
					<div class="container">
						<div class="row">
							<div class="col-lg-6">
								<div class="copyright">
									<p>
										<span>&copy; DOCPRO 2016 All right reserved. </span>
									</p>
								</div>
							</div>
							<div class="col-lg-6">
								<ul class="social-network">
									<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
									<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>
		<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

		<script src="<?php echo base_url(); ?>libs/moderna/js/jquery.js"></script>
		<script src="<?php echo base_url(); ?>libs/moderna/js/jquery.easing.1.3.js"></script>
		<script src="<?php echo base_url(); ?>libs/moderna/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url(); ?>libs/moderna/js/jquery.fancybox.pack.js"></script>
		<script src="<?php echo base_url(); ?>libs/moderna/js/jquery.fancybox-media.js"></script>
		<script src="<?php echo base_url(); ?>libs/moderna/js/google-code-prettify/prettify.js"></script>
		<script src="<?php echo base_url(); ?>libs/moderna/js/portfolio/jquery.quicksand.js"></script>
		<script src="<?php echo base_url(); ?>libs/moderna/js/portfolio/setting.js"></script>
		<script src="<?php echo base_url(); ?>libs/moderna/js/jquery.flexslider.js"></script>
		<script src="<?php echo base_url(); ?>libs/moderna/js/animate.js"></script>
		<script src="<?php echo base_url(); ?>libs/moderna/js/custom.js"></script>
		<script type='text/javascript' src='<?php echo base_url(); ?>assets/js/validation.js'></script>
		<!-- <script src="<?php echo base_url(); ?>libs/moderna/js/form.js"></script> -->

		<!-- 	<script>
			document.onkeydown = checkKey;
			function checkKey(e) {
			    e = e || window.event;
				
				if (e.keyCode == '37') {
			      $('input[name=previous]:visible').trigger('click');
			    }
			    else if (e.keyCode == '39') {
			       $('input[name=next]:visible').trigger('click');
			    }
			}
		</script> -->

		<?php if(isset($footer_js)){ $this->load->view($footer_js); } ?>
	</body>
</html>