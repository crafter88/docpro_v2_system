<!-- <link href="<?php echo base_url(); ?>/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"> -->
<link href="<?php echo base_url(); ?>/libs/metro/css/metro.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>/libs/metro/css/metro-icons.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>/libs/metro/css/metro-responsive.css" rel="stylesheet" type="text/css">
<style>
	.login-form {
		width: 25rem;
		height: 26.75rem;
		position: fixed;
		top: 30%;
		margin-top: 1rem;
		margin-bottom: 10rem;
		left: 50%;
		margin-left: -12.5rem;
		background-color: #ffffff;
		opacity: 0;
		-webkit-transform: scale(.8);
		transform: scale(.8);
	}
	#canvas{
		transition: opacity 0.075s !important;
		color: #E1E1E1 !important;
		background-color: #D8D8D8 !important;
	
	}
	.circle{
		z-index: 101;
		height: 120px;
		width: 120px;
		border-radius: 50%;
		overflow: hidden;
		background-repeat: no-repeat !important;
		background-position: center center;
		margin: 0 auto;
		display: table;
	    background: url('<?php echo base_url(); ?>/assets/img/200x200.png');
		background-position: center;
	}
	
	input[type=text], input[type=password]{
		background: #fff;
		border: 1px solid #d9d9d9;
		border-top: 1px solid #c0c0c0;
		font-size: 16px; 
		height: 44px;
		border-radius: 1px;
		padding: 0 8px;
	}
	
	#help{
		font-size: 13px;
		color: #427fed;
		cursor: pointer;
		float: right;
		text-align: right;
		padding: 5px 0;
	}
	
	#help:hover{
		text-decoration: underline;
	}
	h1{
		margin: 0 auto;
		display: table;
		color: #859685;
	}
</style>

<style type="text/css">
	.container{
		width: 1170px;
	}
</style>