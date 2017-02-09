<div id='setup-banner'>
	<span style="font-weight: bold; font-size: 18px; color: #FFF;"><img src='<?php echo base_url(); ?>assets/img/250x250.png' id='banner-logo'/> DocPro Accounting System</span>
	<a href="<?php echo base_url(); ?>setup/account/logout" style="float: right; color: #FFF; margin-top: 10px; margin-right: 15px; text-decoration: none;"><i class='fa fa-power-off'></i> Logout</a>
</div>
<div class='logo' style="margin: 0 auto; margin-top: -52px; width: 150px; box-shadow: 0 2px 1px 1px #e8e8e8; display: none;">
	<img src="<?php base_url() ?>assets/img/logo_setup.png" style='width: 150px;'>
</div>
<div class='container'>
	<div class='row'>
		<div class='col-md-12' style="margin-top: 10%; text-align: center;">
			<div class='col-md-6 col-md-offset-3 alert-default' style="background-color: #3f51b5; color: #FFF; padding: 10px; box-shadow: 0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12);">
				<h4 style="font-weight: bold; margin-bottom: 15px; font-size: 22px;">How do you like to setup your account</h4>
				<div class='col-md-12'>
					<div class='col-md-6'>
						<label style="font-size: 16px;"><input class='setup_type' type="checkbox" value='default' name="setup_type" style="margin: 0;"> Default</label>
						<p>Chart of accounts and taxes will be set on default</p>
					</div>
					<div class='col-md-6'>
						<label style="font-size: 16px;"><input class='setup_type' type="checkbox" value='customize' name="setup_type" style="margin: 0;"> Customize</label>
						<p>You can customize your chart of accounts and taxes</p>
					</div>
				</div>
			</div>
			<p id='alert-setup' style="color: red; display: none;"><i class='fa fa-warning'></i>&nbsp; Please select setup type</p>
			<div class='col-md-12'>
				<button id='continue-setup-btn' class='btn btn-primary btn-lg btn-raised ripple-effect' style="margin-top: 30px; background-color: #000 !important; text-transform: none; box-shadow: 0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12);">Proceed</button>
			</div>
		</div>
	</div>
</div>