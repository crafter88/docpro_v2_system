<div class='side-body'>
	<div class='container main p-panel'>
		<div class='col-md-12 p-banner'>
			<div class='col-md-4 logo'>
				<img src="<?php echo base_url();?>assets/img/250x250.png" title='Company Logo' width='168px' height='168px'>
				<div id='update-photo'>
					<a href="#">
						<i class='icon-camera'></i>
						Update Profile Picture
					</a>
				</div>
			</div>
			<span id='p-company-name'><?php 
				echo isset($this->session->userdata('user')->company_name) ? $this->session->userdata('user')->company_name : $this->session->userdata('user')->name;
			?></span>
			<button id='p-update-info' type="button">
				Update Info
			</button>
		</div>
		<div class='col-md-12 menu-container'>
			<div class='col-md-12 menu p-panel'>
				<div class="col-md-8 menu-content p-panel">
					<a class='active' href="#">Profile
						<span class='pointer-1'></span>
					</a>
					<a href="#">Mission
						<span class="pointer-2"></span>
					</a>
					<a href="#">Vision
						<span class="pointer-3"></span>
					</a>
				</div>
			</div>
		</div>
	</div>

	<div class="container content">
		<div class="col-md-4">
			<div class='col-md-12 content-panel company-details p-panel'>
				<div class='header'>
					<i class='icon-globe'></i>
					<span>Company Information</span>
				</div>
				<div class='body'>
					<table>
						<tr>
							<td><span class='info-label'>Name</span></td>
							<td><span><?php echo $this->session->userdata('user')->ch_cb_name; ?></span></td>
							<td>
								<span>
									<i class='icon-pencil'></i>
									Edit
								</span>
							</td>
						</tr>
						<tr>
							<td><span class='info-label'>Trade Name</span></td>
							<td><span><?php echo $this->session->userdata('user')->ch_cb_trade_name; ?></span></td>
							<td>
								<span>
									<i class='icon-pencil'></i>
									Edit
								</span>
							</td>
						</tr>
						<tr>
							<td><span class='info-label'>Address</span></td>
							<td><span><?php echo $this->session->userdata('user')->ch_cb_address; ?></span></td>
							<td>
								<span>
									<i class='icon-pencil'></i>
									Edit
								</span>
							</td>
						</tr>
						<tr>
							<td><span class='info-label'>TIN</span></td>
							<td><span><?php echo $this->session->userdata('user')->ch_cb_tin; ?></span></td>
							<td>
								<span>
									<i class='icon-pencil'></i>
									Edit
								</span>
							</td>
						</tr>
						<tr>
							<td><span class='info-label'>Tax Type</span></td>
							<td><span><?php echo strtoupper($this->session->userdata('user')->ch_cb_tax_type); ?></span></td>
							<td>
								<span>
									<i class='icon-pencil'></i>
									Edit
								</span>
							</td>
						</tr>
					</table>
				</div>
			</div>
			<div class='col-md-12 content-panel contact-details p-panel'>
				<div class='header'>
					<i class='icon-intro'></i>
					<span>Contact Details</span>
				</div>
				<div class='body'>
					<table>
						<tr>
							<td>
								<div class='mobile'>
									<i class='icon-phone'></i>
									<span><?php echo $this->session->userdata('user')->ch_cb_cno; ?></span>
								</div>
							</td>
							<td>
								<span>
									<i class='icon-pencil'></i>
									Edit
								</span>
							</td>
						</tr>
						<tr>
							<td>
								<div class="email">
									<i class='icon-email'></i>
									<span><?php echo $this->session->userdata('user')->ch_cb_email; ?></span>
								</div>
							</td>
							<td>
								<span>
									<i class='icon-pencil'></i>
									Edit
								</span>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>

		<div class='col-md-7 company-location p-panel'>
			<div class="col-md-12">
				<div class='location-title'>
					<span>Geographic Location</span>
					<span class='caret-loc'></span>
				</div>
				<div class='location-content' style="width: 767px; height: 415px;">
					<div style="position: absolute; height: 100%; width: 100%;">
						<div id="map" style="height: 400px; width: 740px;"></div>
					</div>
					
				</div>
			</div>
		</div>

		<div id='company-information' style="display: none;">
		<div style='width: 450px;'>
			<div style='height: 200px; float: left; width: 31%;'>
				<img src='<?php echo base_url(); ?>/assets/img/gp.png' style='position: absolute; height: 100%;'>
			</div>
			<table style="margin-top: 10%; float: right; width: 69%;">
				<tr>
					<td><label>Name: </label></td>
					<td style="padding-left: 10px;"><span><?php echo isset($this->session->userdata('user')->ch_cb_name) ? $this->session->userdata('user')->ch_cb_name : ''; ?></span></td>
				</tr>
				<tr>
					<td><label>Address: </label></td>
					<td style="padding-left: 10px;"><span><?php echo isset($this->session->userdata('user')->ch_cb_trade_name) ? $this->session->userdata('user')->ch_cb_address : ''; ?></span></td>
				</tr>
				<tr>
					<td><label>Contact Number: </label></td>
					<td style="padding-left: 10px;"><span><?php echo isset($this->session->userdata('user')->ch_cb_cno) ? $this->session->userdata('user')->ch_cb_cno : ''; ?></span></td>
				</tr>
				<tr>
					<td><label>Email: </label></td>
					<td style="padding-left: 10px;"><span><?php echo isset($this->session->userdata('user')->ch_cb_email) ? $this->session->userdata('user')->ch_cb_email : ''; ?></span></td>
				</tr>
			</table>
		</div>
	</div>

</div>

