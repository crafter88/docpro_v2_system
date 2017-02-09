<div id='setup-banner' style="background-color: #1d55cc; border-bottom: 1px solid #ddd; margin: 0; width: 100%; padding: 10px; height: 58px; font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; ">
	<span style="font-weight: bold; font-size: 18px; color: #FFF;"><img src='<?php echo base_url(); ?>assets/img/250x250.png' id='banner-logo' style='height: 37px; margin-right: 15px;' /> DocPro Accounting System</span>
	<a href="<?php echo base_url(); ?>free" style="float: right; color: #FFF; margin-top: 10px; margin-right: 50px; text-decoration: none;"><i class="fa fa-chevron-circle-up"></i>&nbsp; Sign up</a>
</div>

	  <!-- section menu mobile -->
  
  <section class="menu-media" style="display: none;">
  
    <div class="menu-content">
    
      <div class="logo">DOCPro System</div>
      
      <div class="icon"><a href="#"><img src="<?php echo base_url(); ?>libs/onepage/HTML/img/icons/menu-media.png"/></a></div>
    
    </div>
   
  </section>
  
    <ul class="menu-click" style="display: none;">
        <a href="<?php echo base_url(); ?>"><li>Home</li></a>
        <a href="<?php echo base_url(); ?>"><li>Subscription</li></a>
        <a href="<?php echo base_url(); ?>"><li>About</li></a>
        <a href="<?php echo base_url(); ?>"><li>Gallery</li></a>
        <a href="<?php echo base_url(); ?>"><li>Contact</li></a>
        <a href="<?php echo base_url(); ?>login"><li>Sign in</li></a>
    </ul>
   
   
  <!-- section menu -->

  <section class="menu" style="display: none;">

    <div class="menu-content">
    
    <div class="logo">DOCPro System</div>
    
      <ul id="menu">
        <li><a href="<?php echo base_url(); ?>">Home</a></li>
        <li><a href="<?php echo base_url(); ?>">Subscription</a></li>
        <li><a href="<?php echo base_url(); ?>">Features</a></li>
        <li><a href="<?php echo base_url(); ?>">Gallery</a></li>
        <li><a href="<?php echo base_url(); ?>">Contact</a></li>
        <li class='active'><a href="<?php echo base_url(); ?>login">Sign in</a></li>
      </ul>
    </div>
  
  </section>



	<div class='container' style='background-color: #fcfcfc; margin: 0; width: 100%; height: 0;'>
		<div class="login-form padding20 block-shadow" style='box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3); background-color: #F7F7F7; position: relative;'>
			<form action="<?php echo base_url(); ?>login" role="form" method='post'>
				<span class='label label-info label-xs' style="display: none;">CTRL+A To Login</span>
				<!--<canvas id="canvas" class="circle" width="96" height="96"></canvas>-->
				<center><img src='<?php echo base_url(); ?>/assets/img/250x250.png' width='45%'/></center>
				<!--<h1 style='color: green'>DOC<span style='color: #000;'>Pro</span></h1>-->
				<hr class="thin"/>
					<?php echo isset($auth_msg) ? "<span class='label label-danger' style='margin-bottom: 20px; background-color: maroon;'>Incorrect username/password</span>" : '' ?>
				<span style="font-size: 11px; color: transparent;">Username: docproadmin</span>
				<div class="input-control text full-size" data-role="input">
					<input type="text" name="username" id="user_login" placeholder='Username' required>
					<button class="button helper-button clear"><span class="mif-cross"></span></button>
				</div>
				<span style="font-size: 11px; color: transparent;">Password: cadocpro012016</span>
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
		<a  target='_blank'></a>
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
	</div>