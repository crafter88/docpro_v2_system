<div id='sequence'>
	<ul class='seq-canvas'>
		<li class='seq-in'>
			<div class='row'>
				<div class='col-md-12 banner' style="z-index: 999;">
					<h3 style="margin-top: 8%; padding-bottom: 30px; font-size: 32px; text-align: center; color: #00009b; margin-left: auto; margin-right: auto;">Choose a Plan That's Right for Your Business</h3>
					<div class='col-md-4 col-md-offset-1' style="padding: 20px; background-color: #FFF; box-shadow: 0px 1rem 3rem 0px rgba(189, 195, 199, 0.6); border-color: rgba(189, 195, 199, 0.6); border-top: 5px solid #000; border-top-right-radius: 5px; border-top-left-radius: 5px; min-height: 400px; text-align: center; background-image: url('assets/img/tryit150.png'); background-repeat: no-repeat;">
						<h1 style='color: #2c3e50; text-align: center; font-weight: bold; font-size: 32px; margin: 0; padding-top: 15px;'>FREE Trial</h1>
						<p style='color: #737f8b; text-align: center; border-bottom: 1px solid #cbcbcb; padding-bottom: 20px; padding-top: 10px; margin-bottom: 20px;'>Record your accounting data from anywhere.</p>
						<p style='font-weight: bold; color: rgb(44, 62, 80); text-align: center;'>10 GB secure storage</p>
						<p style='font-weight: bold; color: rgb(44, 62, 80); text-align: center;'>Maximum of 5 users</p>
						<p style='font-weight: bold; color: rgb(44, 62, 80); text-align: center;'>Mobile access</p>
						<p style='font-weight: bold; color: rgb(44, 62, 80); text-align: center;'>Standard business support</p>
						<p style='font-weight: bold; color: rgb(44, 62, 80); text-align: center;'>Limited for 30 days</p>
						<button id='free-btn' type='button' class="btn btn-info btn-md" style='background-color: rgb(34, 167, 240); width: 100%; margin-top: 20px;'>SUBSCRIBE</button>
					</div>
					<div class='col-md-4 col-md-offset-1' style="padding: 20px; background-color: #FFF; box-shadow: 0px 1rem 3rem 0px rgba(189, 195, 199, 0.6); border-color: rgba(189, 195, 199, 0.6); border-top: 5px solid #000; border-top-right-radius: 5px; border-top-left-radius: 5px; min-height: 400px; background-image: url('assets/img/notavailable.png'); background-repeat: no-repeat; -webkit-filter: grayscale(100%); filter: grayscale(100%);">
						<h1 style='color: #2c3e50; text-align: center; font-weight: bold; font-size: 32px; margin: 0; padding-top: 15px;'>PREMIUM</h1>
						<p style='color: #737f8b; text-align: center; border-bottom: 1px solid #cbcbcb; padding-bottom: 20px; padding-top: 10px; margin-bottom: 20px;'>Record your accounting data from anywhere.</p>
						<p style='font-weight: bold; color: rgb(44, 62, 80); text-align: center;'>100 GB secure storage</p>
						<p style='font-weight: bold; color: rgb(44, 62, 80); text-align: center;'>Unlimited users</p>
						<p style='font-weight: bold; color: rgb(44, 62, 80); text-align: center;'>Mobile access</p>
						<p style='font-weight: bold; color: rgb(44, 62, 80); text-align: center;'>Standard business support</p>
						<p style='font-weight: bold; color: rgb(44, 62, 80); text-align: center;'>Limited for 1 year</p>
						<button type='button' class="btn btn-info btn-md" style='background-color: blue; width: 100%; margin-top: 20px;'>SUBSCRIBE</button>
					</div>
				</div>
			</div>
		</li>
		<li style="background: #F5F5F5;">
			<div class='row'>
				<div class='col-md-12'>
					<div class='col-md-6 col-md-offset-3' style="margin-top: 5%;">
						<h3 style="font-size: 32px; color: #00009b; margin-left: auto; margin-right: auto;"><button type='button' class='btn btn-danger btn-sm back' style='float: left;'>Back</button><span style="float: left; padding-left: 29%; font-size: 26px; font-weight: bold;"> Free Trial</span></h3>
					</div>
					<div class='col-md-6 col-md-offset-3' style="margin-bottom: 20px;">
						<span style="color: #666; padding-left: 37.7%; float: left;">Let's Get Started</span>
					</div>
					<div class='col-md-7 col-md-offset-3'>
						<form name='free_subscription' id="msform" action="<?php echo base_url(); ?>save/free" method="post" role="form">
							<div class='col-md-9' style='border: 1px solid; border-color: #e5e6e9 #dfe0e4 #d0d1d5; background-color: #FFF; text-align: center; padding: 20px 30px; border-top: 3px solid #000;'>
								<h2 style='font-size: 14px; color: #444; font-weight: 700; line-height: 30px; text-align: left; margin: 8px 0px;'>Company Information</h2>
								<table style='width: 100%;'>
									<tr>
										<td><span style='font-size: 12px; color: #666; font-weight: 700; line-height: 28px;'>Company or Individual Name</span></td>
									</tr>
									<tr>
										<td><input class='form-control v-required' type="text" name="co_name"></td>
									</tr>
									<tr>
										<td><span style='font-size: 12px; color: #666; font-weight: 700; line-height: 28px;'>Trade Name</span></td>
									</tr>
									<tr>
										<td><input class='form-control' type="text" name="co_trade_name"></td>
									</tr>
									<tr>
										<td><span style='font-size: 12px; color: #666; font-weight: 700; line-height: 28px;'>Business Address</span></td>
									</tr>
									<tr>
										<td style="padding-bottom: 8px;"><input class='form-control' type="text" name="co_ba_number" placeholder="Room / Floor / Building Number / Building Name"></td>
									</tr>
									<tr>
										<td style="padding-bottom: 8px;"><input class='form-control v-required' type="text" name="co_ba_street" placeholder='Street'></td>
									</tr>
									<tr>
										<td style="padding-bottom: 8px;"><input class='form-control' type="text" name="co_ba_brangay" placeholder="Barangay"></td>
									</tr>
									<tr>
										<td style="padding-bottom: 8px;"><input class='form-control v-required' type="text" name="co_ba_city" placeholder="City or Municipality"></td>
									</tr>
									<tr>
										<td style="padding-bottom: 8px;"><input class='form-control' type="text" name="co_ba_province" placeholder="Province"></td>
									</tr>
									<tr>
										<td style="padding-bottom: 8px;"><input class='form-control v-number v-format' f='[0-9]{4}' type="text" name="co_ba_zip" title='4 digit zip code' placeholder="ZIP Code"></td>
									</tr>
								</table>
								<h2 style='font-size: 14px; color: #444; font-weight: 700; line-height: 30px; text-align: left; margin: 8px 0px;'>Registrant Information</h2>
								<table style='width: 100%;'>
									<tr>
										<td><span style='font-size: 12px; color: #666; font-weight: 700; line-height: 28px;'>Name</span></td>
									</tr>
									<tr>
										<td><input class='form-control v-required v-format' f='^[a-zA-Z]+\s?\-?[a-zA-Z]*\,\s[a-zA-Z]+\s?\-?[a-zA-Z]*\,\s+[a-zA-Z]+\-?[a-zA-Z]*\.?$' type="text" name="re_name" placeholder="Family Name, Given Name, Middle Name" title='Family Name, Given Name, Middle Name'></td>
									</tr>
									<tr>
										<td><span style='font-size: 12px; color: #666; font-weight: 700; line-height: 28px;'>Contact Number</span></td>
									</tr>
									<tr>
										<td><input class='form-control v-required v-format' f='^([0-9]{3}\-[0-9]{3}\-[0-9]{4}|[0-9]{11})$' type="text" title='Landline (xxx-xxx-xxxx) OR Mobile (09xxxxxxxxx)' type="text" name="re_number"></td>
									</tr>
									<tr>
										<td><span style='font-size: 12px; color: #666; font-weight: 700; line-height: 28px;'>Email</span></td>
									</tr>
									<tr>
										<td style="padding-bottom: 8px;"><input class='form-control v-required v-format' f='@{1}' title="email contains '@'" type="text" name="re_email"></td>
									</tr>
								</table>
								<button type='button' class='btn btn-primary btn-block v-submit'>SUBMIT</button>
								<span style="font-size: 11px; line-height: 35px; color: #2c3e50;">By registering you agree to DocPro's Trial Terms of Service and Privacy Policy.</span>
							</div>
						</form>
						<div class='col-md-3' style='border: 1px solid; border-color: #e5e6e9 #dfe0e4 #d0d1d5; background-color: #FFF; text-align: center; padding: 10px 0px 20px 0px; box-shadow: 0 1px 3px rgba(0,0,0,.2);'>
							<div>
								<p style="font-weight: bold; line-height: 44px; background-color: #EDF5F8;">30 days trial</p>
								<p style="font-size: 11px;">10 GB secure storage</p>
								<p style="font-size: 11px;">Maximum of 5 users</p>
								<p style="font-size: 11px;">Mobile access</p>
								<p style="font-size: 11px;">Standard business support</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</li>
		<li></li>
	</ul>
</div>

<div id='l-submit' class="modal fade" tabindex="-1" role="dialog" style="z-index: 9999999999999999999999; background: rgba(251, 251, 251, 0.59);">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content" style="border-radius: 0; box-shadow: none; margin-top: 35%;">
      		<div class="modal-body">
	      		<div style="display: table; margin: 0 auto;">
	      			<img src="<?php echo base_url(); ?>assets/img/squares.gif" style='height: 60px; float: left;'>
	      			<p style="vertical-align: middle; display: table-cell; font-size: 41px; color: #000;">Processing your form</p>
	      		</div>
      		</div>
		</div>
  	</div>
</div>