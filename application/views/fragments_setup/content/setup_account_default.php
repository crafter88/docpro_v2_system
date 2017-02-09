<!-- LOADER -->
<input id='c_id' type="hidden" name="c_id" value="<?php echo $user->cb_id; ?>">
<div id='loader' class="modal show" tabindex="-1" role="dialog" style="background-color: #FFF;">
  	<div class='col-md-12' style='text-align: center; margin-top: 10%;'>
		<h3>Loading</h3>
		<div id="fountainG">
			<div id="fountainG_1" class="fountainG"></div>
			<div id="fountainG_2" class="fountainG"></div>
			<div id="fountainG_3" class="fountainG"></div>
			<div id="fountainG_4" class="fountainG"></div>
			<div id="fountainG_5" class="fountainG"></div>
			<div id="fountainG_6" class="fountainG"></div>
			<div id="fountainG_7" class="fountainG"></div>
			<div id="fountainG_8" class="fountainG"></div>
		</div>
	</div>
</div>
<div id='setup-banner'>
	<span style="font-weight: bold; font-size: 18px; color: #FFF;"><img src='<?php echo base_url(); ?>assets/img/250x250.png' id='banner-logo'/> DocPro Accounting System</span>
	<a href="<?php echo base_url(); ?>setup/account/logout" style="float: right; color: #FFF; margin-top: 10px; margin-right: 15px; text-decoration: none;"><i class='fa fa-power-off'></i> Logout</a>
</div>
<div id='setup-logo' class='logo' style="display: none;">
	<img src="<?php echo base_url() ?>assets/img/logo_setup.png" style='width: 150px;'>
</div>
<div class='col-md-12'>
	<button id='b_setup_btn' class='btn btn-default btn-raised btn-xs' title='Go back to setup option' style="padding: 6px 12px;"><i class='fa fa-arrow-left' title='Go back to setup options'></i> Back</button>
</div>
<div class='container'>
	<div class='row'>
		<div class='col-md-12' style="text-align: center; padding: 0;">
			<div id='content' class="side-body padding-top" ng-app='myApp' ng-controller='myCtrl'>
				<div class='card' style="width: 80%; margin: 0 auto;">
					<div class='card-body' style="padding-top: 10px;">
						<div id='setup-nav' class='col-md-12'>
							<div id='setup-tab-1' class='setup-tab col-md-3 active' style="float: left;">
								<button type='button' class='btn btn-default btn-sm'>
									<img src="<?php echo base_url(); ?>assets/img/building.png" style='height: 37px; display: block; margin: 0 auto;'>
									Company
								</button>
							</div>
							<div id='setup-tab-2' class='setup-tab col-md-3' style="float: left;">
								<button type='button' class='btn btn-default btn-sm'>
									<img src="<?php echo base_url(); ?>assets/img/administration.png" style='height: 37px; display: block; margin: 0 auto;'>

									Administration
								</button>
							</div>
							<div id='setup-tab-3' class='setup-tab col-md-3' style="float: left;">
								<button class='btn btn-default btn-sm'>
									<img src="<?php echo base_url(); ?>assets/img/chart_of_accounts.png" style='height: 37px; display: block; margin: 0 auto;'>

									Chart of Accounts
								</button>
							</div>
							<div id='setup-tab-4' class='setup-tab col-md-3' style="float: left;">
								<button class='go_to_seq_4 btn btn-default btn-sm btn-raised ripple-effect btn-seq seq-selected' disabled>
									<img src="<?php echo base_url(); ?>assets/img/taxes-8.png" style='height: 37px; display: block; margin: 0 auto;'>
									Taxes
								</button>
							</div>
						</div>
						<div id='progress-bar' class="progress progress-striped" style="margin-top: 0;">
						  	<div class="progress-bar progress-bar-success" style="width: 25%; margin-top: 0;"></div>
						</div>
					</div>
				</div>
				<div class='card'>
					<div class='card-body' id='content-div'>
						<div class='row'>
							<div class='col-md-12' style="margin-top: 35px; padding: 0 3.7px;">
								<div id="sequence1">
									<ul class='seq-canvas'>
										<li id='setup-1' setup-title='Company Profile' class='setup-1'>
											<div class='content'> 
												<div class="row">
													<div class='col-xs-12' style="border-top: 1px solid #e8e8e8;background-color: #e9ebee;padding: 0 50px 30px 50px;">
														<h3 class='seq-heading'><span style="font-size: 25px;">P</span>ROFILE</h3>
														<div class='notice'><span><b>Note: </b>You must enter your TIN and specify your business tax type</span></div>
														<div class='col-md-12'>
															<table id='profile-table' class='table table-bordered table-sm' style="width: 150%;">
																<thead>
																	<th></th>
																	<th>Name</th>
																	<th>Trade Name</th>
																	<th>Address</th>
																	<th>Tax Type</th>
																	<th>TIN</th>
																	<th>Mobile number</th>
																	<th>Email</th>
																</thead>
															</table>
														</div>
													</div>
													<div class='col-xs-12' style="border-top: 1px solid #e8e8e8;background-color: #e9ebee;padding: 0 50px 30px 50px;">
														<h3 class='seq-heading' style="font-weight: bold;"><span style="font-size: 25px;">B</span>RANCHES</h3>
														<div class='col-md-12'>
															<button id='add-branch-btn' type='button' class='btn btn-info btn-xs btn-raised ripple-effect title' custom-title='Add Branch' style="float: left; margin-left: 10px; margin-top: 25px;">Add</button>
															<div class="input-group input-group-sm input-search">
															  <span class="input-group-addon"><i class='fa fa-search'></i></span>
															  <input id='s_branch' type="text" class="form-control" placeholder="Search Branch">
															</div>
															<table id='branch-table' class='table table-bordered table-sm' style="width: 150%;">
																<thead>
																	<th style='width: 45px;'></th>
																	<th>Name</th>
																	<th>Address</th>
																	<th>Tax Type</th>
																	<th>TIN</th>
																	<th>Contact Number</th>
																	<th>Email Address</th>
																</thead>
															</table>
														</div>
													</div>
												</div>
											</div>
										</li>		
										<li id='setup-2' setup-title='Administration' class='setup-1'>
											<div class='content'> 
												<div class="row">
													<div class='col-xs-12' style="border-top: 1px solid #e8e8e8;background-color: #e9ebee;padding: 0 50px 30px 50px;">
														<h3 class='seq-heading' style="font-weight: bold;"><span style="font-size: 25px;">U</span>SERS</h3>
														<div class='col-md-12'>
															<button id='add-user-btn' type='button' class='btn btn-info btn-xs btn-raised ripple-effect title' custom-title='Add User' style="float: left; margin-left: 10px; margin-top: 25px;">Add</button>
															<div class="input-group input-group-sm input-search">
															  <span class="input-group-addon"><i class='fa fa-search'></i></span>
															  <input id='s_user' type="text" class="form-control" placeholder="Search User">
															</div>
															<table id='users-table' class='table table-bordered' style="width: 150%;">
																<thead>
																	<th style="width: 45px;"></th>
																	<th>Sequence</th>
																	<th>Name</th>
																	<th>Address</th>
																	<th>Contact Number</th>
																	<th>Email Address</th>
																	<th>Branch</th>
																	<th>Username</th>
																	<th>Access Level</th>
																	<th>Validity Date</th>
																</thead>
															</table>
														</div>
													</div>
												</div>							
											</div>
										</li>
										<li id='setup-3' setup-title='Chart of Accounts' class='setup-2'>
											<div class='content' style='width: 98%;'> 
												<div class="row">
													<div class='col-md-12' style="border-top: 1px solid #E8E8E8; padding: 10px 0;padding: 0 50px 30px 50px;">
														<div class='row' style="margin-top: 36px;">
															<div id='coa-tab-1' class='coa-tab active'>
																<span class='coa-no'>1</span>
																<button type='button' class='btn btn-default btn-sm btn-flat ripple-effect btn-seq seq-selected set-1'>
																	<span>Elements</span>
																</button>
															</div>
															<div id='coa-tab-2' class='coa-tab'>
																<span class='coa-no'>2</span>
																<button type='button' class='btn btn-default btn-sm btn-flat ripple-effect btn-seq set-2'>
																	<span>Classification</span>
																</button>
															</div>
															<div id='coa-tab-3' class='coa-tab'>
																<span class='coa-no'>3</span>
																<button type='button' class='btn btn-default btn-sm btn-flat ripple-effect btn-seq set-3'>
																	<span>Line Items</span>
																</button>
															</div>
															<div id='coa-tab-4' class='coa-tab'>
																<span class='coa-no'>4</span>
																<button type='button' class='btn btn-default btn-sm btn-flat ripple-effect btn-seq set-4'>
																	<span>SubClassification</span>
																</button>
															</div>
															<div id='coa-tab-5' class='coa-tab' style="display: none;">
																<span class='coa-no'>5</span>
																<button type='button' class='btn btn-default btn-sm btn-flat ripple-effect btn-seq set-5'>
																	<span>Subsidiary Name</span>
																</button>
															</div>
														</div>
														<div style="min-width: 100px; float: left;">
															<ol id='coa-breadcrumb' class='breadcrumb'>
																<li><a href="#">...</a></li>
																<li><a href="#">...</a></li>
																<li><a href="#">...</a></li>
																<li><a href="#">...</a></li>
															</ol>
														</div>
													</div>
													<div class='col-md-12' style='min-height: 300px; margin-bottom: 10px; border-top: 1px solid #e8e8e8;background-color: #e9ebee;'>
														<div class='scrollable-div'>
															<div id='coa-seq'>
																<ul class='seq-canvas'>
																	<li>
																		<div class='col-md-12' style='margin-top: 25px; padding-left: 43px; padding-right: 48px;'>
																			<button id='add-lvl-1-btn' type='button' class='btn btn-info btn-xs btn-raised ripple-effect' style='float: left; z-index: 9999999; margin-left: 12px; margin-top: 25px;'>Add</button>
																			<div class="input-group input-group-sm input-search">
																			  <span class="input-group-addon"><i class='fa fa-search'></i></span>
																			  <input id='s_coa_1' type="text" class="form-control" placeholder="Search Element">
																			</div>
																			<table id='coa-lvl1' class='table table-bordered' style="width: 100%;">
																				<thead>
																					<th></th>
																					<th>Name</th>
																					<th></th>
																				</thead>
																			</table>
																		</div>
																	</li>
																	<li>
																		<div class='col-md-12' style='margin-top: 25px; padding-left: 43px; padding-right: 48px;'>
																			<div id='lvl-2-alert' class='col-md-12' style="margin-top: 10px; margin-left: 10px;">
																				<span class='alert alert-danger coa-alert'>Please select level 1</span>
																			</div>
																			<button id='add-lvl-2-btn' type='button' class='btn btn-info btn-xs btn-raised ripple-effect' style='float: left; z-index: 9999999; margin-top: 25px; margin-left: 12px;' disabled>Add</button>
																			<div class="input-group input-group-sm input-search">
																			  <span class="input-group-addon"><i class='fa fa-search'></i></span>
																			  <input id='s_coa_2' type="text" class="form-control" placeholder="Search Classification">
																			</div>
																			<table id='coa-lvl2' class='table table-bordered' style="width: 100%;">
																				<thead>
																					<th></th>
																					<th>Name</th>
																					<th></th>
																				</thead>
																			</table>
																		</div>
																	</li>
																	<li>
																		<div class='col-md-12' style='margin-top: 25px; padding-left: 43px; padding-right: 48px;'>
																			<div id='lvl-3-alert' class='col-md-12' style="margin-top: 10px; margin-left: 10px;">
																				<span class='alert alert-danger coa-alert'>Please select level 2</span>
																			</div>
																			<button id='add-lvl-3-btn' type='button' class='btn btn-info btn-xs btn-raised ripple-effect' style='float: left; z-index: 9999999; margin-top: 25px; margin-left: 12px;' disabled>Add</button>
																			<div class="input-group input-group-sm input-search">
																			  <span class="input-group-addon"><i class='fa fa-search'></i></span>
																			  <input id='s_coa_3' type="text" class="form-control" placeholder="Search Line Item">
																			</div>
																			<table id='coa-lvl3' class='table table-bordered' style="width: 100%;">
																				<thead>
																					<th></th>
																					<th>Name</th>
																					<th></th>
																				</thead>
																			</table>
																		</div>
																	</li>
																	<li>
																		<div class='col-md-12' style='margin-top: 25px; padding-left: 43px; padding-right: 48px;'>
																			<div id='lvl-4-alert' class='col-md-12' style="margin-top: 10px; margin-left: 10px;">
																				<span class='alert alert-danger coa-alert'>Please select level 3</span>
																			</div>
																			<button id='add-lvl-4-btn' type='button' class='btn btn-info btn-xs btn-raised ripple-effect' style='float: left; z-index: 9999999; margin-top: 25px; margin-left: 12px;' disabled>Add</button>
																			<div class="input-group input-group-sm input-search">
																			  <span class="input-group-addon"><i class='fa fa-search'></i></span>
																			  <input id='s_coa_4' type="text" class="form-control" placeholder="Search SubClassification">
																			</div>
																			<table id='coa-lvl4' class='table table-bordered' style="width: 100%;">
																				<thead>
																					<th></th>
																					<th>Name</th>
																					<th>BIR</th>
																					<th></th>
																				</thead>
																			</table>
																		</div>
																	</li>
																	<li style="display: none;">
																		<div class='col-md-12' style='margin-top: 25px; padding-left: 43px; padding-right: 48px;'>
																			<div id='lvl-5-alert' class='col-md-12' style="margin-top: 10px; margin-left: 10px;">
																				<span class='alert alert-danger coa-alert'>Please select level 4</span>
																			</div>
																			<button id='add-lvl-5-btn' type='button' class='btn btn-info btn-xs btn-raised ripple-effect' style='float: left; z-index: 9999999; margin-top: 25px; margin-left: 12px;' disabled>Add</button>
																			<div class="input-group input-group-sm input-search">
																			  <span class="input-group-addon"><i class='fa fa-search'></i></span>
																			  <input id='s_coa_5' type="text" class="form-control" placeholder="Search Subsidiary Name">
																			</div>
																			<table id='coa-lvl5' class='table table-bordered' style="width: 100%;">
																				<thead>
																					<th>Name</th>
																				</thead>
																			</table>
																		</div>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>														
										<li id='setup-4' setup-title='Taxes' class='setup-2'>
											<div class='content'> 
												<div class="row">
													<div class='col-md-12' style="border-top: 1px solid #E8E8E8; padding: 10px 0;padding: 0 50px 30px 50px;">
														<div class='row' style="margin-top: 36px;">
															<div id='tax-tab-1' class='tax-tab active'>
																<span class='tax-no'>1</span>
																<button type='button' class='btn btn-default btn-sm btn-flat ripple-effect btn-seq seq-selected set-1'>
																	<span>Tax Types</span>
																</button>
															</div>
															<div id='tax-tab-2' class='tax-tab'>
																<span class='tax-no'>2</span>
																<button type='button' class='btn btn-default btn-sm btn-flat ripple-effect btn-seq set-2'>
																	<span>Tax Details</span>
																</button>
															</div>
														</div>
														<div style="min-width: 100px; float: left;">
															<ol id='tax-breadcrumb' class='breadcrumb'>
																<li><a href="#">...</a></li>
																<li><a href="#">...</a></li>
															</ol>
														</div>
													</div>
													<div class='col-md-12' style='min-height: 300px; margin-bottom: 10px; border-top: 1px solid #e8e8e8;background-color: #e9ebee;'>
														<div class='scrollable-div'>
															<div id='tax-seq'>
																<ul class='seq-canvas'>
																	<li style="padding-right: 7px;">
																		<div class='col-md-12' style="margin-top: 25px; opacity: 1; padding-left: 43px; padding-right: 48px;">
																			<button id='add-tax-types-btn' type='button' class='btn btn-info btn-xs btn-raised ripple-effect' style='float: left; z-index: 9999999; margin-left: 12px; margin-top: 25px;'>Add</button>
																			<div class="input-group input-group-sm input-search">
																			  <span class="input-group-addon"><i class='fa fa-search'></i></span>
																			  <input id='s_tax_type' type="text" class="form-control" placeholder="Search Tax Type">
																			</div>
																			<table id='tax-types' class='table table-bordered' style="width: 100%;">
																				<thead>
																					<th></th>
																					<th>Seq</th>
																					<th>Code</th>
																					<th>Name</th>
																					<th>Short Name</th>
																					<th></th>
																				</thead>
																			</table>
																		</div>
																	</li>
																	<li>
																		<div class='col-md-12' style="margin-top: 25px; opacity: 1; padding-left: 43px; padding-right: 48px;">
																			<div id='tax-alert' class='col-md-12' style="margin-top: 10px; margin-left: 10px;">
																				<span class='alert alert-danger coa-alert'>Please select Tax Type</span>
																			</div>
																			<button id='add-tax-btn' type='button' class='btn btn-info btn-xs btn-raised ripple-effect' style='float: left; z-index: 9999999; margin-left: 12px; margin-top: 25px;'>Add</button>
																			<div class="input-group input-group-sm input-search">
																			  <span class="input-group-addon"><i class='fa fa-search'></i></span>
																			  <input id='s_tax' type="text" class="form-control" placeholder="Search Tax">
																			</div>
																			<table id='tax' class='table table-bordered' style="width: 100%;">
																				<thead>
																					<th></th>
																					<th>Seq</th>
																					<th>Code</th>
																					<th>ATC</th>
																					<th>Name</th>
																					<th>Short Name</th>
																					<th>Rate</th>
																					<th>Base</th>
																					<th></th>
																				</thead>
																			</table>
																		</div>
																		
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>							
											</div>
										</li>				
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="card-body">
	<button id='btn-prev' class='btn btn-default btn-raised ripple-effect btn-xs' title='Previous' style="position: fixed; top: 50%; left: 0; font-size: 22px; display: none; padding-top: 8px; padding-bottom: 8px;">
		<div style="background: url('../assets/img/arrows.png'); background-position: 0 1px; height: 20px; width: 20px;"></div>
	</button>
</div>
<div class="card-body">
	<button id='btn-next' class='btn btn-default ripple-effect btn-raised btn-xs' title='Next' style="position: fixed; top: 50%; right: 0; font-size: 22px; display: none; padding-top: 8px; padding-bottom: 8px;">
		<div style="background: url('../assets/img/arrows.png'); background-position: 0 -21px; height: 20px; width: 20px;"></div>
	</button>
</div>
<div class="card-body">
	<button id='btn-fin' class='btn btn-default btn-raised ripple-effect btn-xs' style="position: fixed; top: 50%; right: 0; background-color: #2196f3; color: #FFF; font-size: 14px; display: none; padding: 6px 5px;">
		<span>FIN</span>
	</button>
</div>

<div id='edit-profile-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Edit Profile</h4>
	</div>
	<div class='modal-body body'>
		<!-- <label class='alert alert-info' style="width: 100%; margin-bottom: 10px; text-align: center; color: red;">Fields with <span style="color: red; font-size: 18px;">' * '</span> are required</label> -->
		<table width='90%'>
			<tr>
				<td style='padding-top: 5px; width: 175px; text-align: right; padding-right: 20px; padding-left: 20px;'><label style="margin-bottom: 0;"><span class='asterisk-required'>*</span> Company or Individual Name</label></td>
				<td style='padding-top: 5px;'><input class='form-control v-required' type='text' title='Please fill out this field' name='company_name'></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 140px; text-align: right; padding-right: 20px; padding-left: 20px;'><label style="margin-bottom: 0;">Trade Name</label></td>
				<td style='padding-top: 5px;'><input class='form-control' type='text' name='trade_name'></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 140px; text-align: right; padding-right: 20px; padding-left: 20px;'><label><span class='asterisk-required'>*</span> Business Address</label></td>
				<td style='padding-top: 5px;'>
					<input class='form-control' title='Please fill out this field' type='text' name='co_ba_number' placeholder="Room / Floor / Building Number / Building Name">
				</td>
			</tr>
			<tr>
				<td></td>
				<td style='padding-top: 5px;'>
					<input class='form-control v-required' title='Please fill out this field' type='text' name='co_ba_street' placeholder="Street">
				</td>
			</tr>
			<tr>
				<td></td>
				<td style='padding-top: 5px;'>
					<input class='form-control' title='Please fill out this field' type='text' name='co_ba_brangay' placeholder="Barangay">
				</td>
			</tr>
			<tr>
				<td></td>
				<td style='padding-top: 5px;'>
					<input class='form-control v-required' title='Please fill out this field' type='text' name='co_ba_city' placeholder="City or Municipality">
				</td>
			</tr>
			<tr>
				<td></td>
				<td style='padding-top: 5px;'>
					<input class='form-control' title='Please fill out this field' type='text' name='co_ba_province' placeholder="Province">
				</td>
			</tr>
			<tr>
				<td></td>
				<td style='padding-top: 5px;'>
					<input class='form-control v-number v-format' f="^[0-9]{4}$" type='text' name='co_ba_zip' title='4 digit zip code' placeholder="ZIP Code">
				</td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 140px; text-align: right; padding-right: 20px; padding-left: 20px;'><label><span class='asterisk-required'>*</span> Tax Type</label></td>
				<td style='padding-top: 5px;'>
					<select id='edit-profile-tax-type' name='tax_type' title='Please fill out this field'>
						<option value='VAT'>VAT</option>
						<option value='Non-VAT'>Non-VAT</option>
					</select>
				</td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 140px; text-align: right; padding-right: 20px; padding-left: 20px;'><label><span class='asterisk-required'>*</span> TIN</label></td>
				<td style='padding-top: 5px;'>
					<input class='form-control v-required v-format v-tin' f='^([0-9]{3}-[0-9]{3}-[0-9]{3}-[0-9]{4})$' title='TIN Format: xxx-xxx-xxx-xxxx' type='text' name='tin'>
				</td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 140px; text-align: right; padding-right: 20px; padding-left: 20px;'><label><span class='asterisk-required'>*</span> Contact Number</label></td>
				<td style='padding-top: 5px;'>
					<input class='form-control v-required v-format' f='^([0-9]{3}\-[0-9]{3}\-[0-9]{4}|[0-9]{11})$' title='Landline (xxx-xxx-xxxx) OR Mobile (09xxxxxxxxx)' type='text' name='contact_number'>
				</td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 140px; text-align: right; padding-right: 20px; padding-left: 20px;'><label><span class='asterisk-required'>*</span> Email</label></td>
				<td style='padding-top: 5px;'>
					<input class='form-control v-required v-format' title='Please fill out this field' f='@{1}' type='text' name='email'>
				</td>
			</tr>
		</table>
	</div>
	<div class='modal-footer' style='padding-top: 5px; padding-bottom: 0px;'>
		<button id='edit-profile-submit' class='btn btn-info btn-xs btn-raised ripple-effect' type='submit' style='float: right;'>OK</button>
	</div>
</div>

<div id='add-user-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Add User</h4>
	</div>
	<div class='modal-body body'>
		<table width='90%'>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label><span class='asterisk-required' style="margin-right: 5px;">*</span>First Name</label></td>
				<td style='padding-top: 5px;'><input class='form-control v-required' title='Please fill out this field' type='text' name='add-fname'></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label><span class='asterisk-required' style="margin-right: 5px;">*</span>Middle Name</label></td>
				<td style='padding-top: 5px;'><input class='form-control v-required' title='Please fill out this field' type='text' name='add-mname'></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label><span class='asterisk-required' style="margin-right: 5px;">*</span>Last Name</label></td>
				<td style='padding-top: 5px;'><input class='form-control v-required' title='Please fill out this field' type='text' name='add-lname'></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label><span class='asterisk-required' style="margin-right: 5px;">*</span>Address</label></td>
				<td style='padding-top: 5px;'><input class='form-control v-required' title='Please fill out this field' type='text' name='add-user-address'></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Mobile No.</label></td>
				<td style='padding-top: 5px;'><input class='form-control v-number v-format' f='^[0-9]{11}$' title='Mobile number format: 09xxxxxxxxx' type='text' name='add-user-cno'></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Email</label></td>
				<td style='padding-top: 5px;'><input class='form-control v-format' f='@{1}' title="Email address requires '@'" type='text' name='add-user-email'></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Branch</label></td>
				<td style='padding-top: 5px;'>
					<select name='add-user-branch' placeholder='Select...'>
					</select>
				</td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label><span class='asterisk-required' style="margin-right: 5px;">*</span>Access Level</label></td>
				<td style="padding-top: 5px;">
					<select class='v-select-required' title="Please fill out this field" name='add-user-access-level'>
						<option value='Super Admin'>Super Admin</option>
						<option value='Admin'>Admin</option>
						<option value='User'>User</option>
					</select>
				</td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label><span class='asterisk-required' style="margin-right: 5px;">*</span>Username</label></td>
				<td style="padding-top: 5px;"><input class='form-control v-required v-format v-unique' u='/setup/setup2/check_username' f="^\S{6,}$" title='Minimum of 6 characters and must be unique' o_title='Minimum of 6 characters and must be unique' type='text' name='add-user-username'></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Password</label></td>
				<td style='padding-top: 5px;'><input class='form-control' type='password' title='Password is equal to the username by default' name='add-user-password' readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label><span class='asterisk-required' style="margin-right: 5px;">*</span>Validity Date</label></td>
				<td style='padding-top: 5px;'><input class='form-control v-required' title="Please fill out this field" type='date' name='add-user-validity-date'></td>
			</tr>
		</table>
	</div>
	<div class='modal-footer' style='padding-top: 5px; padding-bottom: 0px;'>
		<button id='add-user-submit' class='btn btn-info btn-xs btn-raised ripple-effect' type='button' style='float: right;'>OK</button>
	</div>
</div>
<div id='edit-user-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Edit User</h4>
	</div>
	<div class='modal-body body'>
		<table width='90%'>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Sequence</label></td>
				<td style='padding-top: 5px;'><input class='form-control' type='text' name='edit-seq' readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label><span class='asterisk-required' style="margin-right: 5px;">*</span>First Name</label></td>
				<td style='padding-top: 5px;'><input class='form-control v-required' title='Please fill out this field' type='text' name='edit-fname'></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label><span class='asterisk-required' style="margin-right: 5px;">*</span>Middle Name</label></td>
				<td style='padding-top: 5px;'><input class='form-control v-required' title='Please fill out this field' type='text' name='edit-mname'></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label><span class='asterisk-required' style="margin-right: 5px;">*</span>Last Name</label></td>
				<td style='padding-top: 5px;'><input class='form-control v-required' title='Please fill out this field' type='text' name='edit-lname'></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label><span class='asterisk-required' style="margin-right: 5px;">*</span>Address</label></td>
				<td style='padding-top: 5px;'><input class='form-control v-required' title='Please fill out this field' type='text' name='edit-user-address'></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Mobile No.</label></td>
				<td style='padding-top: 5px;'><input class='form-control v-number v-format' f='^[0-9]{11}$' title='Mobile number format: 09xxxxxxxxx' type='text' name='edit-user-cno'></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Email</label></td>
				<td style='padding-top: 5px;'><input class='form-control v-format' f='@{1}' title="Email address requires '@'" type='text' name='edit-user-email'></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label><span class='asterisk-required' style="margin-right: 5px;">*</span>Branch</label></td>
				<td style='padding-top: 5px;'>
					<select class='v-select-required' title="Please fill out this field" name='edit-user-branch' placeholder='Select...'>
					</select>
				</td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label><span class='asterisk-required' style="margin-right: 5px;">*</span>Access Level</label></td>
				<td style="padding-top: 5px;">
					<select class='v-select-required' title='Please fill out this field' name='edit-user-access-level'>
						<option value='Super Admin'>Super Admin</option>
						<option value='Admin'>Admin</option>
						<option value='User'>User</option>
					</select>
				</td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label><span class='asterisk-required' style="margin-right: 5px;">*</span>Username</label></td>
				<td style="padding-top: 5px;"><input class='form-control v-required v-format v-unique' u='/setup/setup2/check_username' f="^\S{6,}$" title='Minimum of 6 characters and must be unique' o_title='Minimum of 6 characters and must be unique' type='text' name='edit-user-username'></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Password</label></td>
				<td style='padding-top: 5px;'><input class='form-control' type='password' title='Password is equal to the username by default' name='edit-user-password' readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label><span class='asterisk-required' style="margin-right: 5px;">*</span>Validity Date</label></td>
				<td style='padding-top: 5px;'><input class='form-control v-required' type='date' name='edit-user-validity-date'></td>
			</tr>
		</table>
	</div>
	<input type="hidden" name="edit-profile-id">
	<input type="hidden" name="edit-user-id">
	<div class='modal-footer' style='padding-top: 5px; padding-bottom: 0px;'>
		<button id='edit-user-submit' class='btn btn-info btn-xs btn-raised ripple-effect' type='button' style='float: right;'>OK</button>
	</div>
</div>

<div id='add-branch-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Add Branch</h4>
	</div>
	<div class='modal-body body'>
		<table width='90%'>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label><span class='asterisk-required'>*</span> Branch Name</label></td>
				<td style='padding-top: 5px;'><input class='form-control v-required' title='Please fill out this field' type='text' name='branch_name'></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 154px; text-align: right; padding-right: 20px; padding-left: 20px;'><label><span class='asterisk-required'>*</span> Business Address</label></td>
				<td style='padding-top: 5px;'>
					<input class='form-control v-required' title='Please fill out this field' type='text' name='br_ba_number' placeholder="Room / Floor / Building Number / Building Name">
				</td>
			</tr>
			<tr>
				<td></td>
				<td style='padding-top: 5px;'>
					<input class='form-control v-required' title='Please fill out this field' type='text' name='br_ba_street' placeholder="Street">
				</td>
			</tr>
			<tr>
				<td></td>
				<td style='padding-top: 5px;'>
					<input class='form-control v-required' title='Please fill out this field' type='text' name='br_ba_barangay' placeholder="Barangay">
				</td>
			</tr>
			<tr>
				<td></td>
				<td style='padding-top: 5px;'>
					<input class='form-control v-required' title='Please fill out this field' type='text' name='br_ba_city' placeholder="City or Municipality">
				</td>
			</tr>
			<tr>
				<td></td>
				<td style='padding-top: 5px;'>
					<input class='form-control v-required' title='Please fill out this field' type='text' name='br_ba_province' placeholder="Province">
				</td>
			</tr>
			<tr>
				<td></td>
				<td style='padding-top: 5px;'>
					<input class='form-control v-number v-format v-required' f="^[0-9]{4}$" type='text' name='br_ba_zip' title='4 digit zip code' placeholder="ZIP Code">
				</td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label><span class='asterisk-required'>*</span> Tax Type</label></td>
				<td style='padding-top: 5px;'>
					<select id='add-branch-tax-type' name='branch_tax_type' title='Please fill out this field'>
						<option value='VAT'>VAT</option>
						<option value='Non-VAT'>Non-VAT</option>
					</select>
				</td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label><span class='asterisk-required'>*</span> TIN</label></td>
				<td style='padding-top: 5px;'><input class='form-control v-required v-format v-tin' f='^([0-9]{3}-[0-9]{3}-[0-9]{3}-[0-9]{4})$' title='TIN Format: xxx-xxx-xxx-xxxx' type='text' name='branch_tin'></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label><span class='asterisk-required'>*</span> Contact Number</label></td>
				<td style='padding-top: 5px;'><input class='form-control v-required v-format' f='^([0-9]{3}\-[0-9]{3}\-[0-9]{4}|[0-9]{11})$' title='Landline (xxx-xxx-xxxx) OR Mobile (09xxxxxxxxx)' type='text' name='branch_cno'></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label><span class='asterisk-required'>*</span> Email</label></td>
				<td style='padding-top: 5px;'><input class='form-control v-required v-format' title='Please fill out this field' f='@{1}' type='text' name='branch_email'></td>
			</tr>
		</table>
	</div>
	<div class='modal-footer' style='padding-top: 5px; padding-bottom: 0px;'>
		<button id='add-branch-submit' class='btn btn-info btn-xs btn-raised ripple-effect' type='button' style='float: right;'>OK</button>
	</div>
</div>
<div id='edit-branch-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Edit Branch</h4>
	</div>
	<div class='modal-body body'>
		<table width='90%'>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label><span class='asterisk-required'>*</span> Branch Name</label></td>
				<td style='padding-top: 5px;'><input class='form-control v-required' title='Please fill out this field' type='text' name='branch_name' required></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 154px; text-align: right; padding-right: 20px; padding-left: 20px;'><label><span class='asterisk-required'>*</span> Business Address</label></td>
				<td style='padding-top: 5px;'>
					<input class='form-control v-required' title='Please fill out this field' type='text' name='br_ba_number' placeholder="Room / Floor / Building Number / Building Name">
				</td>
			</tr>
			<tr>
				<td></td>
				<td style='padding-top: 5px;'>
					<input class='form-control v-required' title='Please fill out this field' type='text' name='br_ba_street' placeholder="Street">
				</td>
			</tr>
			<tr>
				<td></td>
				<td style='padding-top: 5px;'>
					<input class='form-control v-required' title='Please fill out this field' type='text' name='br_ba_barangay' placeholder="Barangay">
				</td>
			</tr>
			<tr>
				<td></td>
				<td style='padding-top: 5px;'>
					<input class='form-control v-required' title='Please fill out this field' type='text' name='br_ba_city' placeholder="City or Municipality">
				</td>
			</tr>
			<tr>
				<td></td>
				<td style='padding-top: 5px;'>
					<input class='form-control v-required' title='Please fill out this field' type='text' name='br_ba_province' placeholder="Province">
				</td>
			</tr>
			<tr>
				<td></td>
				<td style='padding-top: 5px;'>
					<input class='form-control v-number v-format v-required' f="^[0-9]{4}$" type='text' name='br_ba_zip' title='4 digit zip code' placeholder="ZIP Code">
				</td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label><span class='asterisk-required'>*</span> Tax Type</label></td>
				<td style='padding-top: 5px;'>
					<select id='edit-branch-tax-type' name='branch_tax_type' title='Please fill out this field'>
						<option value='VAT'>VAT</option>
						<option value='Non-VAT'>Non-VAT</option>
					</select>
				</td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label><span class='asterisk-required'>*</span> TIN</label></td>
				<td style='padding-top: 5px;'><input class='form-control v-required v-format v-tin' f='^([0-9]{3}-[0-9]{3}-[0-9]{3}-[0-9]{4})$' title='TIN Format: xxx-xxx-xxx-xxxx' type='text' name='branch_tin' required></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label><span class='asterisk-required'>*</span> Contact Number</label></td>
				<td style='padding-top: 5px;'><input class='form-control v-required v-format' f='^([0-9]{3}\-[0-9]{3}\-[0-9]{4}|[0-9]{11})$' title='Landline (xxx-xxx-xxxx) OR Mobile (09xxxxxxxxx)' type='text' name='branch_cno' required></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label><span class='asterisk-required'>*</span> Email</label></td>
				<td style='padding-top: 5px;'><input class='form-control v-required v-format' title='Please fill out this field' f='@{1}' type='text' name='branch_email' required></td>
			</tr>
		</table>
	</div>
	<input type="hidden" name="edit-id">
	<div class='modal-footer' style='padding-top: 5px; padding-bottom: 0px;'>
		<button id='edit-branch-submit' class='btn btn-info btn-xs btn-raised ripple-effect' type='button' style='float: right;'>OK</button>
	</div>
</div>

<div id='add-lvl1-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Add Level 1</h4>
	</div>
	<div class='modal-body body'>
		<table width='90%'>
			<tr>
				<td style='padding-top: 5px; width: 100px; text-align: right; padding-right: 20px;'><label>Name</label></td>
				<td colspan='2' style='padding-top: 5px;'><input class='form-control v-required' title="Please fill out this field" type='text' name='add-lvl-1-name'></td>
			</tr>
		</table>
	</div>
	<div class='modal-footer' style='padding-top: 5px; padding-bottom: 0px;'>
		<button id='add-lvl-1-submit' class='btn btn-info btn-sm btn-raised ripple-effect v-submit' type='button' style='float: right;'>OK</button>
	</div>
</div>
<div id='edit-lvl1-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Edit Level 1</h4>
	</div>
	<div class='modal-body body'>
		<table width='90%'>
			<tr>
				<td style='padding-top: 5px; width: 100px; text-align: right; padding-right: 20px;'><label>Code</label></td>
				<td colspan='2' style='padding-top: 5px;'><input class='form-control v-number v-required' title="Please fill out this field" type='text' name='edit-lvl-1-code' readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 100px; text-align: right; padding-right: 20px;'><label>Name</label></td>
				<td colspan='2' style='padding-top: 5px;'><input class='form-control v-required' title="Please fill out this field" type='text' name='edit-lvl-1-name' required></td>
			</tr>
		</table>
	</div>
	<input type="hidden" name='edit-id'>
	<div class='modal-footer' style='padding-top: 5px; padding-bottom: 0px;'>
		<button id='edit-lvl-1-submit' class='btn btn-info btn-xs btn-raised ripple-effect v-submit' type='button' style='float: right;'>OK</button>
	</div>
</div>

<div id='add-lvl2-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Add Level 2</h4>
	</div>
	<div class='modal-body body'>
		<table width='90%'>
			<tr>
				<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Level 1</label></td>
				<td style='width: 45px; padding-top: 5px;'><input id='add-coa2-lvl1-code' class='form-control' type="text" name="lvl1_code" style="width: 100%; text-align: center; height: 32px;" readonly></td>
				<td style='padding-top: 5px;'>
					<select id='add-coa2-lvl-1' name='add-coa2-lvl-1' required disabled>
						<option value="">Select...</option>
					</select>
				</td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 100px; text-align: right; padding-right: 20px;'><label>Name</label></td>
				<td colspan='2' style="padding-top: 5px;"><input class='form-control v-required' title="Please fill out this field" type='text' name='add-lvl-2-name'></td>
			</tr>
		</table>
	</div>
	<div class='modal-footer' style='padding-top: 5px; padding-bottom: 0px;'>
		<button id='add-lvl-2-submit' class='btn btn-info btn-xs btn-raised ripple-effect v-submit' type='button' style='float: right;'>OK</button>
	</div>
</div>
<div id='edit-lvl2-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Edit Level 2</h4>
	</div>
	<div class='modal-body body'>
		<table width='90%'>
			<tr>
				<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Level 1</label></td>
				<td style='width: 45px; padding-top: 5px;'><input id='edit-coa2-lvl1-code' class='form-control' type="text" name="lvl1_code" style="width: 100%; text-align: center; height: 32px;" readonly></td>
				<td style='padding-top: 5px;'>
					<select id='edit-coa2-lvl-1' name='edit-coa2-lvl-1' required disabled>
						<option value="">Select...</option>
					</select>
				</td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 100px; text-align: right; padding-right: 20px;'><label>Code</label></td>
				<td colspan='2' style="padding-top: 5px;"><input class='form-control v-number v-required' title="Please fill out this field" type='text' name='edit-lvl-2-code' readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 100px; text-align: right; padding-right: 20px;'><label>Name</label></td>
				<td colspan='2' style='padding-top: 5px;'><input class='form-control v-required' title="Please fill out this field" type='text' name='edit-lvl-2-name'></td>
			</tr>
		</table>
	</div>
	<input type="hidden" name="edit-id">
	<div class='modal-footer' style='padding-top: 5px; padding-bottom: 0px;'>
		<button id='edit-lvl-2-submit' class='btn btn-info btn-xs btn-raised ripple-effect v-submit' type='button' style='float: right;'>OK</button>
	</div>
</div>

<div id='add-lvl3-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Add Level 3</h4>
	</div>
	<div class='modal-body body'>
		<table width='90%'>
			<tr>
				<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Level 1</label></td>
				<td style='width: 45px; padding-top: 5px;'><input id='add-coa2-lvl1-code' class='form-control' type="text" name="lvl1_code" style="width: 100%; text-align: center; height: 32px;" readonly></td>
				<td style='padding-top: 5px;'>
					<select id='add-coa2-lvl-1' name='add-coa2-lvl-1' required disabled>
						<option value="">Select...</option>
					</select>
				</td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Level 2</label></td>
				<td class='code-display' style='width: 45px; padding-top: 8px;'><input id='add-coa3-lvl2-code' class='form-control' type="text" name="lvl2_code" style="padding-top: 5px; width: 100%; text-align: center; height: 32px;" readonly></td>
				<td style="padding-top: 5px;">
					<select id='add-coa3-lvl-2' name='add-coa3-lvl-2' required disabled>
						<option value="">Select...</option>
					</select>
				</td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 100px; text-align: right; padding-right: 20px;'><label>Name</label></td>
				<td colspan='2' style="padding-top: 5px;"><input class='form-control v-required' title="Please fill out this field" type='text' name='add-lvl-3-name'></td>
			</tr>
		</table>
	</div>
	<div class='modal-footer' style='padding-top: 5px; padding-bottom: 0px;'>
		<button id='add-lvl-3-submit' class='btn btn-info btn-xs btn-raised ripple-effect v-submit' type='button' style='float: right;'>OK</button>
	</div>
</div>
<div id='edit-lvl3-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Edit Level 3</h4>
	</div>
	<div class='modal-body body'>
		<table width='90%'>
			<tr>
				<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Level 1</label></td>
				<td style='width: 45px; padding-top: 5px;'><input id='edit-coa2-lvl1-code' class='form-control' type="text" name="lvl1_code" style="width: 100%; text-align: center; height: 32px;" readonly></td>
				<td style='padding-top: 5px;'>
					<select id='edit-coa2-lvl-1' name='edit-coa2-lvl-1' required disabled>
						<option value="">Select...</option>
					</select>
				</td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Level 2</label></td>
				<td class='code-display' style='width: 45px; padding-top: 8px;'><input id='edit-coa3-lvl2-code' class='form-control' type="text" name="lvl2_code" style="width: 100%; text-align: center; height: 32px;" readonly></td>
				<td style="padding-top: 5px;">
					<select id='edit-coa3-lvl-2' name='edit-coa3-lvl-2' required disabled>
						<option value="">Select...</option>
					</select>
				</td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 100px; text-align: right; padding-right: 20px;'><label>Code</label></td>
				<td colspan='2' style="padding-top: 5px;"><input class='form-control v-number v-required' title="Please fill out this field" type='text' name='edit-lvl-3-code' readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 100px; text-align: right; padding-right: 20px;'><label>Name</label></td>
				<td colspan='2' style="padding-top: 5px;"><input class='form-control v-required' title="Please fill out this field" type='text' name='edit-lvl-3-name'></td>
			</tr>
		</table>
	</div>
	<input type="hidden" name="edit-id">
	<div class='modal-footer' style='padding-top: 5px; padding-bottom: 0px;'>
		<button id='edit-lvl-3-submit' class='btn btn-info btn-xs btn-raised ripple-effect v-submit' type='button' style='float: right;'>OK</button>
	</div>
</div>

<div id='add-lvl4-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Add Level 4</h4>
	</div>
	<div class='modal-body body'>
		<table width='90%'>
			<tr>
				<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Level 1</label></td>
				<td style='width: 45px; padding-top: 5px;'><input id='add-coa2-lvl1-code' class='form-control' type="text" name="lvl1_code" style="width: 100%; text-align: center; height: 32px;" readonly></td>
				<td style='padding-top: 5px;'>
					<select id='add-coa2-lvl-1' name='add-coa2-lvl-1' required disabled>
						<option value="">Select...</option>
					</select>
				</td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Level 2</label></td>
				<td class='code-display' style='width: 45px; padding-top: 8px;'><input id='add-coa3-lvl2-code' class='form-control' type="text" name="lvl2_code" style="width: 100%; text-align: center; height: 32px;" readonly></td>
				<td style="padding-top: 5px;">
					<select id='add-coa3-lvl-2' name='add-coa3-lvl-2' required disabled>
						<option value="">Select...</option>
					</select>
				</td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Level 3</label></td>
				<td class='code-display' style='width: 45px; padding-top: 8px;'><input id='add-coa4-lvl3-code' class='form-control' type="text" name="lvl3_code" style="width: 100%; text-align: center; height: 32px;" readonly></td>
				<td style="padding-top: 5px;">
					<select id='add-coa4-lvl-3' name='add-coa4-lvl-3' required disabled>
						<option value="">Select...</option>
					</select>
				</td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 100px; text-align: right; padding-right: 20px;'><label>Name</label></td>
				<td colspan='2' style="padding-top: 5px;"><input class='form-control v-required' title="Please fill out this field" type='text' name='add-lvl-4-name'></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 100px; text-align: right; padding-right: 20px;'><label>BIR</label></td>
				<td colspan='2' style="padding-top: 5px;"><input class='form-control' type='text' name='bir'></td>
			</tr>
		</table>
	</div>
	<div class='modal-footer' style='padding-top: 5px; padding-bottom: 0px;'>
		<button id='add-lvl-4-submit' class='btn btn-info btn-xs btn-raised ripple-effect v-submit' type='button' style='float: right;'>OK</button>
	</div>
</div>
<div id='edit-lvl4-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Edit Level 4</h4>
	</div>
	<div class='modal-body body'>
		<table width='90%'>
			<tr>
				<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Level 1</label></td>
				<td style='width: 45px; padding-top: 5px;'><input id='edit-coa2-lvl1-code' class='form-control' type="text" name="lvl1_code" style="width: 100%; text-align: center; height: 32px;" readonly></td>
				<td style='padding-top: 5px;'>
					<select id='edit-coa2-lvl-1' name='edit-coa2-lvl-1' required disabled>
						<option value="">Select...</option>
					</select>
				</td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Level 2</label></td>
				<td class='code-display' style='width: 45px; padding-top: 8px;'><input id='edit-coa3-lvl2-code' class='form-control' type="text" name="lvl2_code" style="width: 100%; text-align: center; height: 32px;" readonly></td>
				<td style="padding-top: 5px;">
					<select id='edit-coa3-lvl-2' name='edit-coa3-lvl-2' required disabled>
						<option value="">Select...</option>
					</select>
				</td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Level 3</label></td>
				<td class='code-display' style='width: 45px; padding-top: 8px;'><input id='edit-coa4-lvl3-code' class='form-control' type="text" name="lvl3_code" style="width: 100%; text-align: center; height: 32px;" readonly></td>
				<td style="padding-top: 5px;">
					<select id='edit-coa4-lvl-3' name='edit-coa4-lvl-3' required disabled>
						<option value="">Select...</option>
					</select>
				</td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 100px; text-align: right; padding-right: 20px;'><label>Code</label></td>
				<td colspan='2' style="padding-top: 5px;"><input class='form-control v-number v-required' title="Please fill out this field" type='text' name='edit-lvl-4-code' readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 100px; text-align: right; padding-right: 20px;'><label>Name</label></td>
				<td colspan='2' style='padding-top: 5px;'><input class='form-control v-required' title="Please fill out this field" type='text' name='edit-lvl-4-name'></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 100px; text-align: right; padding-right: 20px;'><label>BIR</label></td>
				<td colspan='2' style="padding-top: 5px;"><input class='form-control' type='text' name='bir'></td>
			</tr>
		</table>
	</div>
	<input type="hidden" name="edit-id">
	<div class='modal-footer' style='padding-top: 5px; padding-bottom: 0px;'>
		<button id='edit-lvl-4-submit' class='btn btn-info btn-xs btn-raised ripple-effect v-submit' type='button' style='float: right;'>OK</button>
	</div>
</div>

<div id='add-lvl5-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Add Level 5</h4>
	</div>
	<div class='modal-body body'>
		<table width='90%'>
			<tr>
				<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Level 1</label></td>
				<td style='width: 45px; padding-top: 5px;'><input id='add-coa2-lvl1-code' class='form-control' type="text" name="lvl1_code" style="width: 100%; text-align: center; height: 32px;" readonly></td>
				<td style='padding-top: 5px;'>
					<select id='add-coa2-lvl-1' name='add-coa2-lvl-1' required disabled>
						<option value="">Select...</option>
					</select>
				</td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Level 2</label></td>
				<td class='code-display' style='width: 45px; padding-top: 8px;'><input id='add-coa3-lvl2-code' class='form-control' type="text" name="lvl2_code" style="width: 100%; text-align: center; height: 32px;" readonly></td>
				<td style="padding-top: 5px;">
					<select id='add-coa3-lvl-2' name='add-coa3-lvl-2' required disabled>
						<option value="">Select...</option>
					</select>
				</td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Level 3</label></td>
				<td class='code-display' style='width: 45px; padding-top: 8px;'><input id='add-coa4-lvl3-code' class='form-control' type="text" name="lvl3_code" style="width: 100%; text-align: center; height: 32px;" readonly></td>
				<td style="padding-top: 5px;">
					<select id='add-coa4-lvl-3' name='add-coa4-lvl-3' required disabled>
						<option value="">Select...</option>
					</select>
				</td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Level 4</label></td>
				<td class='code-display' style='width: 45px; padding-top: 8px;'><input id='add-coa5-lvl4-code' class='form-control' type="text" name="lvl4_code" style="width: 100%; text-align: center; height: 32px;" readonly></td>
				<td style="padding-top: 5px;">
					<select id='add-coa5-lvl-4' name='add-coa5-lvl-4' required disabled>
						<option value="">Select...</option>
					</select>
				</td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 100px; text-align: right; padding-right: 20px;'><label>Name</label></td>
				<td colspan='2' style="padding-top: 5px;"><input class='form-control v-required' title="Please fill out this field" type='text' name='add-lvl-5-name'></td>
			</tr>
		</table>
	</div>
	<div class='modal-footer' style='padding-top: 5px; padding-bottom: 0px;'>
		<button id='add-lvl-5-submit' class='btn btn-info btn-xs btn-raised ripple-effect v-submit' type='button' style='float: right;'>OK</button>
	</div>
</div>
<div id='edit-lvl5-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Edit Level 5</h4>
	</div>
	<div class='modal-body body'>
		<table width='90%'>
			<tr>
				<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Level 1</label></td>
				<td style='width: 45px; padding-top: 5px;'><input id='edit-coa2-lvl1-code' class='form-control' type="text" name="lvl1_code" style="width: 100%; text-align: center; height: 32px;" readonly></td>
				<td style='padding-top: 5px;'>
					<select id='edit-coa2-lvl-1' name='edit-coa2-lvl-1' required disabled>
						<option value="">Select...</option>
					</select>
				</td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Level 2</label></td>
				<td class='code-display' style='width: 45px; padding-top: 8px;'><input id='edit-coa3-lvl2-code' class='form-control' type="text" name="lvl2_code" style="width: 100%; text-align: center; height: 32px;" readonly></td>
				<td style="padding-top: 5px;">
					<select id='edit-coa3-lvl-2' name='edit-coa3-lvl-2' required disabled>
						<option value="">Select...</option>
					</select>
				</td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Level 3</label></td>
				<td class='code-display' style='width: 45px; padding-top: 8px;'><input id='edit-coa4-lvl3-code' class='form-control' type="text" name="lvl3_code" style="width: 100%; text-align: center; height: 32px;" readonly></td>
				<td style="padding-top: 5px;">
					<select id='edit-coa4-lvl-3' name='edit-coa4-lvl-3' required disabled>
						<option value="">Select...</option>
					</select>
				</td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Level 4</label></td>
				<td class='code-display' style='width: 45px; padding-top: 8px;'><input id='edit-coa5-lvl4-code' class='form-control' type="text" name="lvl4_code" style="width: 100%; text-align: center; height: 32px;" readonly></td>
				<td style="padding-top: 5px;">
					<select id='edit-coa5-lvl-4' name='edit-coa5-lvl-4' required disabled>
						<option value="">Select...</option>
					</select>
				</td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 100px; text-align: right; padding-right: 20px;'><label>Code</label></td>
				<td colspan='2' style="padding-top: 5px;"><input class='form-control v-number v-required' title="Please fill out this field" type='text' name='edit-lvl-5-code' readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 100px; text-align: right; padding-right: 20px;'><label>Name</label></td>
				<td colspan='2' style="padding-top: 5px;"><input class='form-control v-required' title="Please fill out this field" type='text' name='edit-lvl-5-name'></td>
			</tr>
		</table>
	</div>
	<input type="hidden" name="edit-id">
	<div class='modal-footer' style='padding-top: 5px; padding-bottom: 0px;'>
		<button id='edit-lvl-5-submit' class='btn btn-info btn-xs btn-raised ripple-effect v-submit' type='button' style='float: right;'>OK</button>
	</div>
</div>

<div id='add-tax-types-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Add Tax Types</h4>
	</div>
	<div class='modal-body body'>
		<table width='90%'>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
				<td colspan='3' style="padding-top: 5px;"><input class='form-control v-required' title="Please fill out this field" type='text' name='add-name'></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Shortname</label></td>
				<td colspan='3' style='padding-top: 5px;'><input class='form-control v-required' title="Please fill out this field" type='text' name='add-shortname'></td>
			</tr>
		</table>
	</div>
	<div class='modal-footer' style='padding-top: 5px; padding-bottom: 0px;'>
		<button id='add-tax-types-submit' class='btn btn-info btn-xs btn-raised ripple-effect v-submit' type='button' style='float: right;'>Ok</button>
	</div>
</div>
<div id='edit-tax-types-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Edit Tax Types</h4>
	</div>
	<div class='modal-body body'>
		<table width='90%'>
			<tr>
				<td style='width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
				<td colspan='3'><input class='form-control v-required' title="Please fill out this field" type='text' name='edit-code' readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
				<td colspan='3' style="padding-top: 5px;"><input class='form-control v-required' title="Please fill out this field" type='text' name='edit-name'></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Shortname</label></td>
				<td colspan='3' style='padding-top: 5px;'><input class='form-control v-required' title="Please fill out this field" type='text' name='edit-shortname'></td>
			</tr>
		</table>
	</div>
	<input type="hidden" name="edit-tt-id">
	<div class='modal-footer' style='padding-top: 5px; padding-bottom: 0px;'>
		<button id='edit-tax-types-submit' class='btn btn-info btn-xs btn-raised ripple-effect v-submit' type='button' style='float: right;'>Ok</button>
	</div>
</div>

<div id='add-tax-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Add Tax</h4>
	</div>
	<div class='modal-body body'>
		<table width='90%'>
			<tr>
				<td style='width: 150px; text-align: right; padding-right: 20px;'><label>Type</label></td>
				<td colspan='3'>
					<select id='add-select-tax-type' name='add-type' required disabled>
						<option value=''>Select...</option>
					</select>
				</td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
				<td colspan='3' style="padding-top: 5px;"><input class='form-control v-required' title="Please fill out this field" type='text' name='add-name'></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Shortname</label></td>
				<td colspan='3' style='padding-top: 5px;'><input class='form-control' type='text' name='add-shortname'></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Rate</label></td>
				<td colspan='3' style='padding-top: 5px;'><input class='form-control decimal v-decimal v-required' title="Please fill out this field" type='text' name='add-rate'></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Base</label></td>
				<td colspan='3' style='padding-top: 5px;'><input class='form-control decimal v-decimal v-required' title="Please fill out this field" type='text' name='add-base'></td>
			</tr>
		</table>
	</div>
	<div class='modal-footer' style='padding-top: 5px; padding-bottom: 0px;'>
		<button id='add-tax-submit' class='btn btn-info btn-xs btn-raised ripple-effect v-submit' type='button' style='float: right;'>Ok</button>
	</div>
</div>
<div id='edit-tax-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Edit Tax</h4>
	</div>
	<div class='modal-body body'>
		<table width='90%'>
			<tr>
				<td style='width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
				<td colspan='3'><input class='form-control v-number v-required' title="Please fill out this field" type='text' name='edit-code' readonly></td>
			</tr>
			<tr>
				<td style='width: 150px; text-align: right; padding-right: 20px; padding-top: 5px;'><label>Type</label></td>
				<td colspan='3' style='padding-top: 5px;'>
					<select id='edit-select-tax-type' name='edit-type' required disabled>
						<option value=''>Select...</option>
					</select>
				</td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
				<td colspan='3' style="padding-top: 5px;"><input class='form-control v-required' title="Please fill out this field" type='text' name='edit-name'></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Shortname</label></td>
				<td colspan='3' style='padding-top: 5px;'><input class='form-control' type='text' name='edit-shortname'></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Rate</label></td>
				<td colspan='3' style='padding-top: 5px;'><input class='form-control decimal v-decimal v-required' title="Please fill out thid field" type='text' name='edit-rate'></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Base</label></td>
				<td colspan='3' style='padding-top: 5px;'><input class='form-control decimal v-decimal v-required' title="Please fill out this field" type='text' name='edit-base'></td>
			</tr>
		</table>
	</div>
	<input type="hidden" name="edit-t-id">
	<div class='modal-footer' style='padding-top: 5px; padding-bottom: 0px;'>
		<button id='edit-tax-submit' class='btn btn-info btn-xs btn-raised ripple-effect v-submit' type='button' style='float: right;'>Ok</button>
	</div>
</div>

<div id='finish-modal' class="modal" tabindex="-1" role="dialog">
  	<div class="modal-dialog modal-lg" role="document" style="margin-top: 10%;">
    	<div class="modal-content">
      		<div class="modal-body" style="padding-bottom: 0;">
        		<div class='row'>
        			<div class='col-md-4' style='margin: 0; text-align: center;'>
        				<img src="<?php echo base_url(); ?>assets/img/1.png" style='width: 150px; margin-top: 10%'>
        				<p style="font-weight: bold; font-size: 35px; margin: 0;">Docpro</p>
        				<p style="font-size: 18px; margin: 0;">Business Solutions</p>
        			</div>
        			<div class='col-md-8' style="margin: 0; padding-left: 0;">
        				<h3>Setup Completed Successfully!</h3>
        				<p>Proceed to configure settings</p>
        				<hr style="padding: 1px; background-color: #9E9E9E; margin-top: 127px;">
        			</div>
        		</div>
      		</div>
      		<div class="modal-footer" style="border: none; padding-top: 0;">
        		<a href="<?php echo base_url(); ?>company_settings" class="btn btn-default" style="text-transform: none;">Continue</a>
      		</div>
   		</div>
  	</div>
</div>
<div id='b_setup' class="modal" tabindex="-1" role="dialog">
  	<div class="modal-dialog modal-lg" role="document" style="margin-top: 10%;">
  		<form method="post" action='<?php echo base_url(); ?>setup/reset_coa_tax'>
  			<input type="hidden" name="setup_type">
	    	<div class="modal-content">
	      		<div class="modal-body" style="padding-bottom: 0;">
	        		<div class='row'>
	        			<div class='col-md-4' style='margin: 0 0 50px 0; text-align: center;'>
	        				<img src="<?php echo base_url(); ?>assets/img/1.png" style='width: 150px; margin-top: 10%'>
	        				<p style="font-weight: bold; font-size: 35px; margin: 0;">Docpro</p>
	        				<p style="font-size: 18px; margin: 0;">Business Solutions</p>
	        			</div>
	        			<div class='col-md-8' style="margin: 0; padding-left: 0;">
	        				<div id='warning'>
	        					<h3 style='color: red; margin-top: 30px;'>Are you sure you want to continue?</h3>
		        				<h4>Chart of Accounts and Taxes will be set back to their default values</h4>
		        				<h5>Any changes you made in your chart of accounts and taxes will not be saved</h5>
		        				<hr style="padding: 1px; background-color: #9E9E9E; margin-top: 50px; margin-bottom: 0;">
		        				<div style="">
				        			<button id='confirm-back' type='button' class="btn btn-primary btn-raised" style="text-transform: none; float: left; margin-right: 10px;">Yes</button>
				        			<button type='button' data-dismiss='modal' class="btn btn-default btn-raised" style="text-transform: none;">No</button>
				        		</div>
	        				</div>
	        				<div id='w-loading' style="display: none;">
	        					<h1 style="width: 100%; text-align: center; margin-top: 10%; font-weight: bold;">Processing</h1>
	        					<div id="fountainG">
									<div id="fountainG_1" class="fountainG"></div>
									<div id="fountainG_2" class="fountainG"></div>
									<div id="fountainG_3" class="fountainG"></div>
									<div id="fountainG_4" class="fountainG"></div>
									<div id="fountainG_5" class="fountainG"></div>
									<div id="fountainG_6" class="fountainG"></div>
									<div id="fountainG_7" class="fountainG"></div>
									<div id="fountainG_8" class="fountainG"></div>
								</div>
	        				</div>
	        			</div>
	        		</div>
	      		</div>
	      		<!-- <div class="modal-footer" style="border: none; padding-top: 0;">
	        		<a href="<?php echo base_url(); ?>company_settings" class="btn btn-default" style="text-transform: none;">Continue</a>
	      		</div> -->
	   		</div>
	   	</form>
  	</div>
</div>