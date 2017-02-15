<!DOCTYPE html>
<html>
	<head>
		<title>DOCPro Business Solutions</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.ico" />
		
		<!-- Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>

		<!-- ADMIN LTE -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>libs/admin_lte/dist/css/AdminLTE.min.css">
		<!-- METRO Libs -->
		<link href="<?php echo base_url(); ?>libs/metro/css/metro.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>libs/metro/css/metro-icons.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>libs/metro/css/metro-responsive.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>libs/metro/css/metro-schemes.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>libs/metro/css/docs.css" rel="stylesheet">
		
		<!-- CSS Libs -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>libs/flat/bower_components/bootstrap/dist/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>libs/flat/bower_components/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>libs/flat/bower_components/animate.css/animate.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>libs/flat/bower_components/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>libs/flat/bower_components/checkbox3/dist/checkbox3.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>libs/flat/bower_components/datatables/media/css/dataTables.bootstrap.min.css">

		<!-- Bootsrap Switch -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>libs/bootstrap-switch/css/bootstrap3/bootstrap-switch.min.css">

		<!-- Angular Select -->
		<link href="<?php echo base_url(); ?>libs/angular_select/select2.min.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>libs/angular_select/selectize.default.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>libs/angular_select/select.min.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>libs/selectize/css/normalize.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>libs/selectize/css/selectize.css" rel="stylesheet">

		<!-- CSS App -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>libs/flat/css/style.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>libs/flat/css/themes/flat-blue.css">
		
		<link href='<?php echo base_url(); ?>libs/hint.min.css' rel='stylesheet' type='text/css'>
		<link href='<?php echo base_url(); ?>libs/hover.css' rel='stylesheet' type='text/css'>

		<!-- PIVOT CSS -->
		<link href='<?php echo base_url(); ?>libs/pivotTable/pivot.css' rel='stylesheet' type='text/css'>

		<!-- UPLOAD FORM -->
		<link href="<?php echo base_url(); ?>libs/mini-upload-form/assets/css/style.css" rel="stylesheet" />

		<?php if(isset($head_css)){ $this->load->view($head_css); } ?>

		<link href="<?php echo base_url(); ?>assets/css/mobile-style.css" rel="stylesheet">

		<!-- Styles of Puerto Responsive Flat Buttons -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>libs/angular_select/select.min.css">
		
		<link href="<?php echo base_url(); ?>assets/css/modals.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>assets/css/master_layout.css" rel="stylesheet">

		<link type="text/css" rel='stylesheet' href="<?php echo base_url(); ?>libs/material-button/index.css" />

		<!-- CUSTOM CSS -->
		<link href='<?php echo base_url(); ?>assets/css/blank.css' rel='stylesheet' type='text/css'>
		<link href='<?php echo base_url(); ?>assets/css/navbar-sidebar.css' rel='stylesheet' type='text/css'>
		<link href='<?php echo base_url(); ?>assets/css/custom-button.css' rel='stylesheet' type='text/css'>
		<link href='<?php echo base_url(); ?>assets/css/custom-button-setup.css' rel='stylesheet' type='text/css'>
		<link href='<?php echo base_url(); ?>assets/css/loader.css' rel='stylesheet' type='text/css'>
		<link href='<?php echo base_url(); ?>assets/css/custom-datatable.css' rel='stylesheet' type='text/css'>
		<link href='<?php echo base_url(); ?>assets/css/custom-theme.css' rel='stylesheet' type='text/css'>
		<link href='<?php echo base_url(); ?>assets/css/custom-color.css' rel='stylesheet' type='text/css'>
		<link href='<?php echo base_url(); ?>assets/css/background_img.css' rel='stylesheet' type='text/css'>

		<!-- Setup CSS -->
		<link href='<?php echo base_url(); ?>assets/css/company_setup/master_layout.css' rel='stylesheet' type='text/css'>
		<link href='<?php echo base_url(); ?>assets/css/company_setup/welcome.css' rel='stylesheet' type='text/css'>
		<link href='<?php echo base_url(); ?>assets/css/alert.css' rel='stylesheet' type='text/css'>
		<link href='<?php echo base_url(); ?>assets/css/v_validation.css' rel='stylesheet' type='text/css'>
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
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
		<!-- <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/modernizr.js"></script> -->
		<script type="text/javascript">
			$(window).load(function() {
			$('#loader').fadeOut('slow',function(){$(this).remove();});
		});
		</script>
		<script>var window_location = window.location.origin</script>
	</head>
	<body class='flat-blue'>
<!-- CONTENT -->
		<div id='loader' style='text-align: center; display: table;'>
			<div style='display: table-cell; vertical-align: middle;'>
				<p><img src="<?php echo base_url(); ?>assets/img/s_a_l.png" style='height: 18vh'></p>
				<p style='color: #FFF;'>DOCPRO Business Solutions</p>
				<p id='loader-img'><img src="<?php echo base_url(); ?>assets/img/roll.png" style='height: 3vh'></p>
			</div>
		</div>

		<?php if(isset($content)) $this->load->view($content); ?>

<!-- END CONTENT -->

		<!-- METRO Libs -->
		<script src='<?php echo base_url(); ?>libs/js/jquery.min.js'></script>
		<script src="<?php echo base_url(); ?>libs/metro/js/metro.js"></script>
		<script src="<?php echo base_url(); ?>libs/metro/js/docs.js"></script>
		<script src="<?php echo base_url(); ?>libs/metro/js/ga.js"></script>
		
		<!-- Javascript Libs -->
		<script type="text/javascript" src="<?php echo base_url(); ?>libs/flat/bower_components/jquery/dist/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>libs/flat/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>libs/flat/bower_components/Chart.js/Chart.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>libs/flat/bower_components/bootstrap-switch/dist/js/bootstrap-switch.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>libs/flat/bower_components/matchHeight/jquery.matchHeight-min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>libs/flat/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>libs/flat/bower_components/datatables/media/js/dataTables.bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>libs/flat/bower_components/select2/dist/js/select2.full.min.js"></script>
		<!-- Javascript -->
		<script type="text/javascript" src="<?php echo base_url(); ?>libs/flat/js/app.js"></script>
		
		<!-- Slimscroll -->
		<script src="<?php echo base_url(); ?>libs/admin_lte/plugins/slimScroll/jquery.slimscroll.min.js"></script>
		<!-- FastClick -->
		<script src="<?php echo base_url(); ?>libs/admin_lte/plugins/fastclick/fastclick.min.js"></script>
		<!-- AdminLTE App -->
		<script src="<?php echo base_url(); ?>libs/admin_lte/dist/js/app.min.js"></script>
		
		<!-- DATE JS -->
		<script src="<?php echo base_url(); ?>libs/datejs/date.js"></script>
		
		<!-- SELECTIZE -->
		<script type='text/javascript' src='<?php echo base_url(); ?>libs/selectize/js/standalone/selectize.min.js'></script>
		<script type='text/javascript' src='<?php echo base_url(); ?>libs/selectize/js/selectize.min.js'></script>
		
		<script type='text/javascript' src='<?php echo base_url(); ?>assets/js/validation.js'></script>
		<script type='text/javascript' src='<?php echo base_url(); ?>assets/js/num_to_words.js'></script>
		<script type='text/javascript' src='<?php echo base_url(); ?>assets/js/master_layout.js'></script>

		<!-- BOOTSTRAP MATERIAL -->
		<script type="text/javascript" src="<?php echo base_url(); ?>libs/bootstrap_material/js/material.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>libs/bootstrap_material/js/ripples.min.js"></script>

		<script type="text/javascript" src="<?php echo base_url(); ?>libs/material-button/index.js"></script>

		<!-- UPLOAD FORM -->
		<script src="<?php echo base_url(); ?>libs/mini-upload-form/assets/js/jquery.knob.js"></script>
		<script src="<?php echo base_url(); ?>libs/mini-upload-form/assets/js/jquery.ui.widget.js"></script>
		<script src="<?php echo base_url(); ?>libs/mini-upload-form/assets/js/jquery.iframe-transport.js"></script>
		<script src="<?php echo base_url(); ?>libs/mini-upload-form/assets/js/jquery.fileupload.js"></script>
		<script src="<?php echo base_url(); ?>libs/mini-upload-form/assets/js/script.js"></script>
		<script src="<?php echo base_url(); ?>libs/docpro_validation.js" type="text/javascript"></script>

		<!-- SEQUENCE JS -->
		<script src="<?php echo base_url(); ?>/libs/wizard-master/js/jquery.bootstrap.wizard.js"></script>
		<script src="<?php echo base_url(); ?>/libs/wizard-master/js/prettify.js"></script>
		<script src="<?php echo base_url(); ?>/libs/notify/bootstrap-notify.min.js"></script>

		<script src="<?php echo base_url(); ?>/libs/sequence/scripts/imagesloaded.pkgd.min.js"></script>
		<script src="<?php echo base_url(); ?>/libs/sequence/scripts/hammer.min.js"></script>
		<script src="<?php echo base_url(); ?>/libs/sequence/scripts/sequence.min.js"></script>

		<!-- Bootsrap Switch -->
		<script src="<?php echo base_url(); ?>libs/bootstrap-switch/js/bootstrap-switch.min.js"></script>

		<!-- CUSTOM -->
		<script src="<?php echo base_url(); ?>/assets/js/table_option.js"></script>
		<script src="<?php echo base_url(); ?>/assets/js/v_validation.js"></script>

		<script type="text/javascript">
			var init_tooltip = function(){
				$('.side-menu a').mouseover(function(){
					var _this = $(this);
					setTimeout(function() {
						_this.attr('title', _this.attr('custom-title'));
					}, 50);
				});

				$('.title').mouseover(function(){
					var _this = $(this);
					setTimeout(function() {
						_this.attr('title', _this.attr('custom-title'));
					}, 50);
				});

				$('#back-button').mouseover(function(){
					var _this = $(this);
					setTimeout(function() {
						_this.attr('title', _this.attr('custom-title'));
						_this.find('i').attr('title', _this.attr('custom-title'));
					}, 50);
				});

				$('#coa-setup').mouseover(function(){
					var _this = $(this);
					setTimeout(function() {
						_this.attr('title', _this.attr('custom-title'));
						_this.find('i').attr('title', _this.attr('custom-title'));
					}, 50);
				});
				$('#coa-setup').find('i').mouseover(function(){
					var _this = $(this);
					setTimeout(function() {
						_this.attr('title', _this.attr('custom-title'));
						_this.find('i').attr('title', _this.attr('custom-title'));
					}, 50);
				});
			}
			$(document).ready(function(){
				$.material.init();
				init_tooltip();
			});
		</script>

		<?php if(isset($footer_js)){ $this->load->view($footer_js); } ?>
	</body>
</html>