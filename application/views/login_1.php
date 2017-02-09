<?php include 'fragments/head.php';?>
<?php include 'fragments/css.php';?>
<?php include 'fragments/js.php';?>
<style>
	.login-form {
		width: 25rem;
		height: 26.75rem;
		position: fixed;
		top: 30%;
		margin-top: -9.375rem;
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
<script>
	$(function(){
		var form = $(".login-form");
		form.css({
			opacity: 1,
			"-webkit-transform": "scale(1)",
			"transform": "scale(1)",
			"-webkit-transition": ".5s",
			"transition": ".5s"
		});
	});
</script>
</head>
	<body class="bg-darkTeal" style='background-color: #FFF !important;'>
		<div class="login-form padding20 block-shadow" style='box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3); background-color: #F7F7F7;'>
			<form action="<?php echo base_url(); ?>login" role="form" method='post'>
				<!--<canvas id="canvas" class="circle" width="96" height="96"></canvas>-->
				<center><img src='<?php echo base_url(); ?>/assets/img/250x250.png' width='45%'/></center>
				<!--<h1 style='color: green'>DOC<span style='color: #000;'>Pro</span></h1>-->
				<hr class="thin"/>
				<br/>
				<?php echo isset($auth_msg) ? "<span class='label label-danger' style='margin-bottom: 20px; background-color: maroon;'>Incorrect username/password</span>" : '' ?>
				<br/>
				<div class="input-control text full-size" data-role="input">
					<input type="text" name="username" id="user_login" placeholder='Username' required>
					<button class="button helper-button clear"><span class="mif-cross"></span></button>
				</div>
				<br/>
				<br/>
				<div class="input-control password full-size" data-role="input">
					<input type="password" name="password" id="user_password" placeholder='Password' required>
					<button class="button helper-button reveal"><span class="mif-looks"></span></button>
				</div>
				<br/>
				<br/>
				<div class="form-actions">
					<button type="submit" class="button primary" style='width: 100%; background-color: #283891'>Login</button>
				</div>
				<a id='help' href='#'>Need help?</a>
			</form>
		</div>
		<!-- hit.ua -->
		<a  target='_blank'>
			<script language="javascript" type="text/javascript"><!--
			Cd=document;Cr="&"+Math.random();Cp="&s=1";
			Cd.cookie="b=b";if(Cd.cookie)Cp+="&c=1";
			Cp+="&t="+(new Date()).getTimezoneOffset();
			if(self!=top)Cp+="&f=1";
			//--></script>
			<script language="javascript1.1" type="text/javascript"><!--
			if(navigator.javaEnabled())Cp+="&j=1";
			//--></script>
			<script language="javascript1.2" type="text/javascript"><!--
			if(typeof(screen)!='undefined')Cp+="&w="+screen.width+"&h="+
			screen.height+"&d="+(screen.colorDepth?screen.colorDepth:screen.pixelDepth);
			//--></script>
		<!-- / hit.ua -->
	</body>
</html>