<div class='row'>
	<div class='col-md-12' style='padding-top: 15vh; background-image: url(assets/img/img-plate.png); background-size: cover; padding-bottom: 130px;'>
		<div class='col-md-4 col-md-offset-4' style='border: 1px solid; border-color: #e5e6e9 #dfe0e4 #d0d1d5; background-color: #FFF; text-align: center;'>
			<div>
				<img src="<?php echo base_url(); ?>assets/img/s_a_l.png" style='height: 100px; background-color: #DDD; border-radius: 100%; padding: 20px 15px; margin: 15px;'>
			</div>
			<?php 
				echo isset($auth_msg) ? "<span class='label label-danger' style='margin-bottom: 20px; background-color: maroon;'>Incorrect username/password</span>" : '' 
			?>
			<form action="<?php echo base_url(); ?>postlogin" role="form" method='POST'>
				<table class='table'>
					<tr>
						<td style='border: 0; padding-bottom: 0;'><h4 style='text-align: center;'>Sign In to Your Account</h4></td>
					</tr>
					<tr>
						<td style='border: 0; padding-bottom: 0;'><label style='font-size: 12px;'>Username</label></td>
					</tr>
					<tr>
						<td style='border: none; padding-top: 0;'><input type="text" name="username" id="user_login" class='form-control' style='border-radius: 0;' required></td>
					</tr>
					<tr>
						<td style='border: none; padding-bottom: 0;'><label style='font-size: 12px;'>Password</label></td>
					</tr>
					<tr>
						<td style='border: none; padding-top: 0;'><input type="password" name="password" id="user_password" class='form-control' style='border-radius: 0;' required></td>
					</tr>
					<tr>
						<td style='border: none; padding-top: 10px;'><button class='btn btn-primary' type='submit' style='border-radius: 0; width: 100%;'>Login</button></td>
					</tr>
					<tr>
						<td style='border: none; padding-top: 10px;'><a href="#" style='font-size: 12px;'>Forgot Password?</a></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</div>