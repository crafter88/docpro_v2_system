<html lang='en'>
<head>
	<title>DOCPro Business Solutions</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>libs/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>libs/font-awesome/css/font-awesome.min.css">
	<link rel="icon" type="img/png" href="<?php echo base_url(); ?>assets/img/favicon.png">
	<style>
		@font-face
		{
			font-family: adam;
			src: url('assets/font/adamcgpro.otf');
			font-family: lato;
			src: url('assets/font/lato/Lato-Regular.ttf');
			/*font-family: latobold;
			src: url('assets/font/lato/Lato-Bold.ttf');
			font-family: latolight;
			src: url('assets/font/lato/Lato-Light.ttf');*/
		}
		body *
		{
			text-overflow: ellipsis;
		}
		body > .container
		{
			width: 100%;
		}
		form
		{
			margin: 0;
		}
		#top-bar.white
		{
			background-color: #FFF !important;
			box-shadow: 0 1px 3px 0 rgba(44,62,80,0.15);
		}
		#top-bar.dark
		{
			background-color: #000 !important;
		}
		#top-bar.dark #top-menu ul li a
		{
			border-left: 1px solid #2b2b2b;
		}
		#top-bar.dark #logo-title span:first-child
		{
			color: blue !important;
		}
		#top-bar.dark #logo-title span
		{
			color: #FFF !important;
		}
		#top-bar.white #top-menu ul li a,
		#top-bar.white p.bs
		{
			color: #000 !important;
		}
		#top-bar.white #top-menu ul li.active a{
			color: #00009b !important;
		}
		#top-menu
		{
			background-color: transparent;
			border: none;
			margin: 0;
			background-image: none;
			box-shadow: none;
		}
		#top-menu ul li a{
			padding: 15px 20px;
			font-size: 11px;
			color: #FFF;
		}
		#top-menu ul li.active a
		{
			color: blue;
			font-weight: 900;
			background-color: transparent;
		}
		#top-menu ul li:hover a{
			text-decoration: none;
		}
		#top-menu ul li{
			background-color: transparent;
		}
		#top-menu .container-fluid
		{
			padding: 0;
		}
		.navbar-toggle
		{
			border-radius: 2px;
			margin: 0;
		}
		#features h3
		{
			margin-bottom: 20px;
			font-weight: bold;
			color: #18819e;
		}
		#features h5
		{
			line-height: 21px;
			font-weight: bold;
			font-size: 12px;
			padding-left: 30px;
		}
		.bb1
		{
			height: 100px; 
			webkit-filter: grayscale(85%); 
			filter: grayscale(85%);
			transition: all 0.1s ease-in;
			cursor: hand;
			cursor: pointer;
		}
		.bb2
		{
			width: 300px; 
			webkit-filter: grayscale(85%); 
			filter: grayscale(85%);
			transition: all 0.1s ease-in;
			cursor: hand;
			cursor: pointer;
		}
		.bb1:hover
		{
			webkit-filter: grayscale(0%); 
			filter: grayscale(0%);
		}
		.bb2:hover
		{
			webkit-filter: grayscale(0%); 
			filter: grayscale(0%);
		}
		#a1 img
		{
			width: 90vw;
			margin: 0 auto;
			opacity: 0;
			transform: scale(0.8);
			transition: all 0.8s ease-in;
		}
		#a1 img.show
		{
			opacity: 1;
			transform: scale(1);
		}
		#a2 img
		{
			margin-left: -100;
			opacity: 0;
			transform: scale(0.5);
			transition: all 0.5s ease-in;
		}
		#a2 img.show
		{
			margin-left: 0;
			opacity: 1;
			transform: scale(1);
		}
		#a3 img
		{
			margin-right: 0;
			opacity: 0;
			transform: scale(0.5);
			transition: all 0.5s ease-in;
			float: right;
		}
		#a3 img.show
		{
			margin-right: 30px;
			opacity: 1;
			transform: scale(1);
		}
		.about #img1
		{
			-moz-transform: scaleX(-1);
	        -o-transform: scaleX(-1);
	        -webkit-transform: scaleX(-1);
	        transform: scaleX(-1);
	        filter: FlipH;
	        -ms-filter: "FlipH";
		}
		.about .competence
		{
			height: 290px;
		}
		.about .competence p
		{
			margin: 0;
			width: 100%;
			color: #FFF;
			background-color: #141414;
			padding: 17px 10px;
			position: absolute;
			bottom: 0;
			font-family: lato;
		}
		.hover-underline
		{
			position: relative;
			line-height: 1.125rem;
			display: inline-block;
			padding-bottom: 8px;
			cursor: hand;
			cursor: pointer;
			font-weight: bold;
			color: #000;
		}
		.hover-underline:before,
		.hover-underline:after
		{
			content: '';
			position: absolute;
			bottom: 0;
			width: 0;
			height: 0.1875rem;
			transition: width 0.2s cubic-bezier(0.4,0,1,1);
			background-color: #000;

		}
		.hover-underline:hover::before
		{
			width: 100%;
		}
		@media (max-width: 1200px) {
			  .navbar-header {
			      float: none;
			  }
			  .navbar-left,.navbar-right {
			      float: none !important;
			  }
			  .navbar-toggle {
			      display: block;
			  }
			  .navbar-collapse {
			      border-top: 1px solid transparent;
			      box-shadow: inset 0 1px 0 rgba(255,255,255,0.1);
			  }
			  .navbar-fixed-top {
			      top: 0;
			      border-width: 0 0 1px;
			  }
			  .navbar-collapse.collapse {
			      display: none!important;
			  }
			  .navbar-nav {
			      float: none!important;
			      margin-top: 7.5px;
			  }
			  .navbar-nav>li {
			      float: none;
			  }
			  .navbar-nav>li>a {
			      padding-top: 10px;
			      padding-bottom: 10px;
			  }
			  .collapse.in{
			      display:block !important;
			  }
		}
		@media (min-width: 48em) and (orientation: landscape)
		{
			.banner
			{
				min-height: 35rem;
			}
		}
		@keyframes caret{
			from{
				bottom: 80px;
				opacity: 1;
			}
			to{
				bottom: 30px;
				opacity: 0;
			}
		}
		.caret-animated
		{
			animation-name: caret;
			animation-duration: 2s;
			animation-iteration-count: infinite;
		}
		body
		{
			scroll-behavior: smooth;
		}
	</style>
	<style type="text/css">
		@keyframes rotate {
		    from {transform: rotate(0deg);}
		    to {transform: rotate(360deg);}
		}
		#loader
		{
			position: fixed;
			left: 0px;
			top: 0px;
			width: 100%;
			height: 100%;
			z-index: 99999999;
			background: #141414;
		}
		#loader-img
		{
			animation-name: rotate;
			animation-duration: 1s;
			animation-iteration-count: infinite;
			animation-timing-function: linear;
		}
		img[alt='www.000webhost.com']
		{
			display: none !important;
		}
	</style>
	<style type="text/css">
		#sequence
		{
			position: relative;
			width: 100%;
			max-width: 100%;
			min-height: 1200px;
			margin: 0 auto;
			padding: 0;
			overflow: hidden;
			overflow-y: auto;
		}
		#sequence .seq-canvas,
		#sequence .seq-canvas > *
		{
			position: relative;
			margin: 0;
			padding: 0;
			list-style: none;
		}
		#sequence .seq-canvas
		{
			position: absolute;
			height: 100%;
			width: 100%;
			white-space: nowrap;
		}
		#sequence .seq-canvas > *
		{
			display: inline-block;
			vertical-align: top;
			width: 100%;
			height: 100%;
			white-space: normal;
			text-align: center;
		}
		#sequence .seq-canvas > li:before
		{
			content: '';
			display: inline-block;
			vertical-align: middle;
			height: 100%;
		}
		#sequence li > *
		{
			display: inline-block;
			vertical-align: top;
			width: 100%;
		}
	</style>
	<style type="text/css">
		#top-bar.white #top-menu ul li:not(.active) a:hover
		{
			color: #FFF !important;
		}
	</style>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/modernizr.js"></script>
	<script type="text/javascript">
		$(window).load(function() {
		$('#loader').fadeOut('slow',function(){$(this).remove();});
	});
	</script>
</head>
<body>
	<div id='loader' style='text-align: center; display: table;'>
		<div style='display: table-cell; vertical-align: middle;'>
			<p><img src="<?php echo base_url(); ?>assets/img/s_a_l.png" style='height: 25vh'></p>
			<p style='color: #FFF;'>DOCPRO Business Solutions</p>
			<p id='loader-img'><img src="<?php echo base_url(); ?>assets/img/roll.png" style='height: 4vh'></p>
		</div>
	</div>
	<div class='container'>
		<div id='top-bar' class='row dark' style='top: 0; width: 100%; background-color: rgba(0, 0, 0, 0.29); position: fixed; z-index: 9999;'>
			<div class='col-md-2'>
				<img src="<?php echo base_url(); ?>assets/img/s_a_l.png" style='height: 48px; float: left;'>
				<p id='logo-title' style="vertical-align: middle; font-family: 'Times New Roman', Georgia, Serif; font-size: 26px; font-weight: bolder; margin: 0; letter-spacing: 2px;">
						<span style='color: #00189c;'>DOC</span><span style='color: #000;'>PRO<span>
					</p>
					<p class='bs' style='margin: 0; font-size: 10px; line-height: 0; color: #FFF;'>BUSINESS SOLUTIONS</p>
			</div>
			<div class='col-md-10'>
				<nav id='top-menu' class="navbar navbar-default">
				  <div class="container-fluid">
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" title='Show Menu'>
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				    </div>

    				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style='padding-right: 0;'>
     					<ul class="nav navbar-nav">
     						<li class="active"><a class='down' data-target='home' href="http://localhost:81#home">HOME</a></li>
     						<li><a class='down' data-target='about' href="http://localhost:81#about">ABOUT</a></li>
     						<li><a class='down' data-target='contact' href="http://localhost:81#contact">CONTACT</a></li>
        					<li><a target='_blank' href="http://cacac.com.ph/">CLEMENTE, AQUINO AND COMPANY</a></li>
        					
        					
        					
      					</ul>

      					<ul class="nav navbar-nav navbar-right">
      						<li><a href="<?php echo base_url(); ?>">ACCOUNTING SYSTEM</a></li>
      						<li><a href="<?php echo base_url(); ?>subscribe">SUBSCRIBE</a></li>
						   	<li><a href="<?php echo base_url(); ?>login">LOGIN</a></li>
					  	</ul>
    				</div>
				</nav>
			</div>
		</div>
		<?php if(isset($content)){ $this->load->view($content); } ?>
		<div class='row' style="background-image: url('assets/img/img-plate.png'); padding: 0; margin: 0; padding-bottom: 30px; width: 100%;"">
			<div class='col-md-6' style='padding-top: 35px;'>
				<div class='col-md-6' style='padding: 0;'>
					<a href="<?php echo base_url(); ?>#about"><img src="<?php echo base_url(); ?>assets/img/s_a_l.png" style='height: 93px; margin-top: 10px; float: left; margin-left: 50px;'></a>
					<div style='padding-top: 30px;'>
						<p style="font-family: 'Times New Roman', Georgia, Serif; font-size: 24px; font-weight: bolder; margin: 0; letter-spacing: 2px;">
							<span style='color: #00189c;'>DOC</span><span style='color: #000'>PRO<span>
						</p>
						<p style='margin: 0; font-size: 11px; line-height: 0;'>BUSINESS SOLUTIONS</p>
					</div>
				</div>
				<div class='col-md-6' style='padding: 0;'>
					<a href="http://cacac.com.ph" target='_blank'><img src="<?php echo base_url(); ?>assets/img/cac.png" style='height: 35px; float: left; margin-top: 32px;'></a>
				</div>
			</div>
			<div class='col-md-6'>
				<div class='col-md-4'>
					<h1 style='font-family: adam; font-size: 20px; margin-bottom: 28px;'>SOCIAL MEDIA</h1>
					<div>
						<p style='color: #757575;'>
							<a href='#'>
								<span style='float: left;'><i class='fa fa-facebook-official' style='font-size: 20px;'></i></span>
								<span style='padding-left: 10px; font-weight: bold; font-size: 12px;'>FACEBOOK</span>
							</a>
						</p>
						<p style='color: #757575;'>
							<a href='#'>
								<span style='float: left;'><i class='fa fa-twitter' style='font-size: 20px;'></i></span>
								<span style='padding-left: 10px; font-weight: bold; font-size: 12px;'>TWITTER</span>
							</a>
						</p>
						<p style='color: #757575;'>
							<a href='#'>
								<span style='float: left;'><i class='fa fa-google-plus-official' style='font-size: 20px;'></i></span>
								<span style='padding-left: 10px; font-weight: bold; font-size: 12px;'>GOOGLE PLUS</span>
							</a>
						</p>
					</div>
				</div>
				<div class='col-md-8'>
					<h1 style='font-family: adam; font-size: 20px; margin-bottom: 28px;'>CONTACT INFORMATION</h1>
					<p style='color: #757575;'>
							<span style='font-weight: bold; font-size: 12px;'>Room 404 GP Arcade Building Mabini Street, Baguio City</span>
					</p>
					<p style='color: #757575;'>
						<span style='font-weight: bold; font-size: 12px;'>09123456789</span>
					</p>
					<p style='color: #757575; margin-top: 20px;'>
						<span style='font-weight: bold; font-size: 12px;'>Email Us: docpro01docpro@gmail.com</span>
					</p>
				</div>
			</div>
		</div>
		<div id='copyright' class='row' style='background-color: #d8d8d8; position: fixed; bottom: 0; width: 102%; display: none;'>
			<div class='col-md-6'>
				<p style='font-size: 12px; margin: 0; padding: 5px;'>&copy; DOCPRO Business Solutions 2017</p>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="<?php echo base_url(); ?>libs/jquery-2.0.0.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>libs/bootstrap/js/bootstrap.min_1.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>libs/sequence/imagesloaded.pkgd.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>libs/sequence/hammer.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>libs/sequence/sequence.min.js"></script>
	<script type='text/javascript' src='<?php echo base_url(); ?>assets/js/validation.js'></script>
	<script type='text/javascript' src='<?php echo base_url(); ?>assets/js/v_validation.js'></script>
	<script>
		$(window).scroll(function() {
		   	if($(window).scrollTop() + 800 > $(document).height()) {
		       	$('#copyright').css('display', 'block');
		   	}else{
		   		$('#copyright').css('display', 'none');
		   	}
		});
	</script>
	<?php if(isset($footer_js)){ $this->load->view($footer_js); } ?>
</body>
</html>