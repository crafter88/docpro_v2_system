<!DOCTYPE html>
<html>
	<head>
	    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 

    	<title>DOCPro Business Solutions</title>

    	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>libs/flat/bower_components/font-awesome/css/font-awesome.min.css">
		
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>libs/onepage/HTML/css/reset.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>libs/onepage/HTML/css/style.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>libs/onepage/HTML/css/style-responsive.css" />

		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

		<link href='//fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
		<link href='//fonts.googleapis.com/css?family=Nunito:400,700,300' rel='stylesheet' type='text/css'>

		<link href="<?php echo base_url(); ?>libs/subscription/css/style.css" rel="stylesheet" type="text/css" media="all"/>

		<script src="<?php echo base_url(); ?>libs/subscription/js/modernizr.js"></script> 	

		<?php if(isset($header_css)) $this->load->view($header_css); ?>
	</head>

	<body>
		<?php 
			if(isset($content)){
				$this->load->view($content); 
			} 
		?>


		<script src="<?php echo base_url(); ?>libs/onepage/HTML/js/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>libs/onepage/HTML/js/jquery.parallax.js"></script> 
		<script src="<?php echo base_url(); ?>libs/onepage/HTML/js/jquery.nicescroll.js"></script> 
		<script src="<?php echo base_url(); ?>libs/onepage/HTML/js/jquery.sticky.js"></script> 
		<script src="<?php echo base_url(); ?>libs/onepage/HTML/js/script.js"></script> 


		<script src="<?php echo base_url(); ?>libs/subscription/js/jquery-2.1.4.js"></script>
		<script src="<?php echo base_url(); ?>libs/subscription/js/velocity.min.js"></script>
		<script src="<?php echo base_url(); ?>libs/subscription/js/main.js"></script> 
		<script type='text/javascript' src='<?php echo base_url(); ?>assets/js/validation.js'></script>

		<?php if(isset($footer_js)) $this->load->view($footer_js); ?>
	</body>
</html>